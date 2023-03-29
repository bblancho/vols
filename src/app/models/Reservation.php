<?php

namespace App\PhpHtml\App\Models;

use Ludal\QueryBuilder\QueryBuilder;
use PDO;

class Reservation
{
    private $db;
    private $pdo;
    private $builder;
   
    public int $id;
    public int $vol_id;
    public int $numero;
    public string $nom;
    public string $prenom;
    public string $email;
    public string $phone;
    public string $created_at;
    public string $updated_at;

    public function __construct()
    {
        $this->db = include __DIR__.'/../../config/database.php';
        $this->pdo = new PDO(
            "mysql:host=".$this->db['mysql']['host'].";dbname=".$this->db['mysql']['database']."",
            $this->db['mysql']['username'],
            $this->db['mysql']['password'],
        );
        $this->builder = new QueryBuilder($this->pdo);
    }

    /**
     *  Créer une nouvelle réservation
     * @param array $resercation
     *  
     */
    public function create(array $reservation)
    {
        
        
        
        $insert = $this->builder
        ->insertInto('reservations')
        ->values([
            'vol_id' => $reservation['vol_id'],
            'numero' => $reservation['numero'],
            'nom' => $reservation['nom'],
            'prenom' => $reservation['prenom'],
            'email' => $reservation['email'],
            'phone' => $reservation['phone'],
            'nombre_passager' => $reservation['nombre_passager'],
            'created_at' => $reservation['created_at'],
            'updated_at' => $reservation['updated_at'],
        ])
        ->getStatement(); 

        $insert->execute();

        return $insert;
        
    }

    /**
     *  Get user reservation
     *  @param string $email
     */
    public function getUserReservation(string $email)
    {
        $query = "SELECT *
                FROM reservations 
                JOIN vols ON reservations.vol_id = vols.id  
                WHERE email = :email
                ORDER BY reservations.created_at ASC
                LIMIT 2";

        $reservation = $this->pdo->prepare($query);
        if (!$reservation) {
            die("Error in preparing SQL query: " . $this->pdo->errorInfo()[2]);
        }

        $reservation->execute([':email' => $email]);
        if (!$reservation) {
            die("Error in executing SQL query: " . $this->pdo->errorInfo()[2]);
        }

        $results = $reservation->fetchAll(PDO::FETCH_ASSOC);
        if (!$results) {
            die("No results found for email: " . $email);
        }

        return $results;
    }
}