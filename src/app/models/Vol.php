<?php

namespace App\PhpHtml\App\Models;

use App\PhpHtml\Core\Database;
use DateTime;
use Ludal\QueryBuilder\QueryBuilder;
use PDO;

class Vol
{
    private $db;
    private $pdo;
   
    public $id;
    public $numero;
    public $depart;
    public $arrivee;
    public $vol_time;
    public $date_depart;
    public $places;
    public $reservation;
    public $prix;
    public $created_at;
    public $updated_at;

    public function __construct()
    {
        $this->db = include __DIR__.'/../../config/database.php';
        $this->pdo = new PDO(
            "mysql:host=".$this->db['mysql']['host'].";dbname=".$this->db['mysql']['database']."",
            $this->db['mysql']['username'],
            $this->db['mysql']['password'],
        );
    }

    public function findAll(int $start = 5, int $limit = null)
    {
        $builder = new QueryBuilder($this->pdo);
        $results = $builder
            ->select()
            ->from('vols')
            ->orderBy('date_depart', 'desc')
            ->limit($start, $limit)
            // ->offset(1)
            ->fetchAll();
            
        return $results;
    }

    /**
     *  Trouver les vols recherchés
     * @param int $start
     * @param int $limit
     * @param string $depart
     * @param string $arrivee
     * @param string $date_depart 
     * 
     */
    public function findFlys(
        int $start = 10, 
        int $limit = null, 
        string $depart = '',
        string $arrivee = '',
        string $date_depart = ''
    )
    {
        $builder = new QueryBuilder($this->pdo);

        $query = $builder->select()
            ->from('vols')
            ->where('depart = :depart', 'arrivee = :arrivee', 'date_depart >= :date_depart')
            ->orderBy('date_depart', 'asc')
            ->limit($start, $limit)
            ->setParam('depart' , $depart)
            ->setParam('arrivee' , $arrivee)
            ->setParam('date_depart' , $date_depart);
        
        $results = $query->fetchAll();
        return $results;
            
    }

    protected function insert()
    {
        $stmt = $this->db->query("
            INSERT INTO vols (numero, from, to, vol_time, date_depart, places, reservation, prix, created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ");

        $this->created_at = new DateTime();
        $this->updated_at = new DateTime();

        return $stmt->execute([
            $this->numero,
            $this->depart,
            $this->arrivee,
            $this->vol_time,
            $this->date_depart->format('Y-m-d H:i:s'),
            $this->places,
            $this->reservation,
            $this->prix,
            $this->created_at->format('Y-m-d H:i:s'),
            $this->updated_at->format('Y-m-d H:i:s')
        ]);
    }

}