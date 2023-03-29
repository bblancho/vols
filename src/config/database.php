<?php

   /*
|-------------------------------------------------------------------
| DATABASE CONSTANTS
|-------------------------------------------------------------------
| Ce fichier contient les détails de connectivité de la base de données
| 
|-------------------------------------------------------------------
| VARIABLES
|-------------------------------------------------------------------
|
|	['DB_HOST'] hostname de la base de donnée server.
|	['DB_USER'] username pour ce connecter au serveur
|	['DB_PASS'] password pour ce connecter au serveur
|	['DB_NAME'] database nom de la base de donnée pour selectionner du server
|
*/
// VARIABLES

    // define('DB_HOST', "127.0.0.1");
    // define('DB_USER', "root");
    // define('DB_PASS', "");
    // define('DB_NAME', "php_html");
    return [
        'mysql' => [
            
            'host'=> "127.0.0.1",
            'username'=> "root",
            'password'=> "",
            'database'=> "php_html"
        ]
    ]


?>