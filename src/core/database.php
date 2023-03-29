<?php

namespace App\PhpHtml\Core;

use mysqli;

class Database 
{
    
    /**
     *  Définir les variables
     */
    protected string $host;
    protected string $username;
    protected string $password;
    protected string $database;

    private $conn;

    // constructor
    public function __construct(string $host, string $username, string $password, string $database) {

        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        
        $this->conn = new mysqli( $this->host, $this->username, $this->password, $this->$database );
        if ( mysqli_connect_error() ) {
            printf("La connexion a échoué: %s", mysqli_connect_error());
            exit();
        }
        return true;
    }

    /**
     *  Query database
     */
    public function query($q){

        $query 	= $this->conn->query($q);

        if(is_bool($query)) return true;

        while($row = $query->fetch_array(MYSQLI_BOTH)) {
            $return[]= (object) $row;
        }
        return $return;
    }

    /**
     *  Se connceter
     */
    public function getConnection() {
        return $this->conn;
    }
    
    /**
     *  Fermer la connexion
     */
    public function closeConnection() {
        $this->conn->close();
    }

}
