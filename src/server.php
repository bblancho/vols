<?php

    /**
     *  Enregister l'autoloader
     */

use App\PhpHtml\Core\Database;

    require __DIR__.'/../vendor/autoload.php';

    /**
     *  Returner les fichiers core
     */
    foreach (glob(__DIR__."/core/*.php") as $filename)
    {
        include $filename;
    }

    $db = include __DIR__.'/../src/config/database.php';
    
    $db_connexion = new Database (
        $db['mysql']['host'],
        $db['mysql']['username'],
        $db['mysql']['password'],
        $db['mysql']['database'],
    );