<?php 

use App\PhpHtml\App\Controllers\HomeController;

// récupérer les paramètres d'URL
$url = $_SERVER['REQUEST_URI'];

// Routing basique
if ($url === '/' || substr($url, 0, 2) === '/?' && substr($url, 2) !== '') {
    $controller = new HomeController();
    $controller->index();
} 
// Search route
elseif ($url === '/recherche' || substr($url, 0, 2) === '/recherche?' && substr($url, 2) !== '') {
    $controller = new HomeController();
    $controller->search();
} 
// Réservation route
elseif ($url === '/reservation' || substr($url, 0, 2) === '/reservation?' && substr($url, 2) !== '') {
    $controller = new HomeController();
    $controller->reservation();
} 


else {
    // Gestion de l'erreur 404
    http_response_code(404);
    header('HTTP/1.1 404 Not Found');
    echo '404 Not Found';
    exit;
}

