<?php declare(strict_types=1);

namespace App\PhpHtml\App\Controllers;

use App\PhpHtml\App\Models\Reservation;
use App\PhpHtml\App\Models\Vol;

class HomeController 
{
    /**
     *  Index page
     */
    public function index()
    {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 10;
        $depart = isset($_GET['depart']) ? (string)$_GET['depart'] : '';
        $arrivee = isset($_GET['arrivee']) ? (string)$_GET['arrivee'] : '';
        $date_depart = isset($_GET['date_depart']) ? (string)$_GET['date_depart'] : '';
        $date_retour = isset($_GET['date_retour']) ? (string)$_GET['date_retour'] : '';
        $passager = isset($_GET['passager']) ? (string)$_GET['passager'] : '';

        // Set number of results per page
        $start = ($page - 1) * $limit;
        // ... Logique d'action ...
        $vol = new Vol();
        $vols = $vol->findFlys($start, $limit, $depart, $arrivee, $date_depart);
        $vols_retour = $vol->findFlys($start, $limit, $arrivee, $depart, $date_retour);

        $count = count($vols);

        $nombre_pages = ceil($count/$limit);
        // $paginator = new Paginator($vols);

        // Inclusion du fichier de vue
        require_once __DIR__ . '/../../views/home.php';
    }

    /**
     *  Post recherches
     * 
     */
    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $page = 1;
            $start = 10;
            $arrivee = $_POST['arrivee'];
            $depart = $_POST['depart'];
            $date_depart = $_POST['date_depart'];
            $date_retour = $_POST['date_retour'];
            $passager = $_POST['passager'];
        }

        echo json_encode(
            [
                'page' => $page,
                'limit' => $start,
                'arrivee' => $arrivee,
                'depart' => $depart,
                'date_depart' => $date_depart ,
                'date_retour' => $date_retour,
                'passager' => $passager
            ], JSON_UNESCAPED_UNICODE );

        // header('Location: /');
        // exit();
    }

    /**
     *  Returner la réservation
     */
    public function getReservation(string $email)
    {
        $reservations = new Reservation;
        $results = $reservations->getUserReservation('embarek.messai@gmail.com');

        require_once __DIR__ . '/../../views/reservation.php';
    }

    /**
     *  Créer une réservation
     * 
     */
    public function reservation()
    {
         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $depart_id = $_POST['depart_id'];
            $retour_id = $_POST['retour_id'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $nombre_passager = $_POST['nombre_passager'];
        }
        
        $reservation_depart = new Reservation;
        $reservation_depart->create([
            'vol_id' => $depart_id,
            'numero' => mt_rand(10000, 99999),
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'phone' => $phone,
            'nombre_passager' => $nombre_passager,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        $reservation_retour = new Reservation;
        $reservation_retour->create([
            'vol_id' => $retour_id,
            'numero' => mt_rand(10000, 99999),
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'phone' => $phone,
            'nombre_passager' => $nombre_passager,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        return $this->getReservation($email);
    }
}