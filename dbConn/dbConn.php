<?php

class dbConn {

    private $servername = "dbs509.cfaunfdahawv.us-east-1.rds.amazonaws.com";
    private $username = "admin";
    private $password = "database509";
    private $dbname = "contactDB";

    protected $conn = null;

    function connect() {

        // Create connection
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        
    }

    function disconnect() {
        $this->conn->close();
    }
}