<?php

class Database {
    private $connection;
    private static $instance; //the instance class
    private $host = 'localhost';
    private $user = 'root';
    private $pass = 'engineer';
    private $database = 'ebirthsystem';

    /**
     * @return Database
     */
    public static function getInstance() {
        if(!self::$instance) { //if no instance is created
            self::$instance = new self(); /// create here
        }
        return self::$instance;
    }

    /**
     * Database Constructor
     */
    public function __construct()
    {
        $this->connection = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        if(!$this->connection) {
            die("Database Connection Error: " .mysqli_connect_error());
        }
        else return true;
    }

    /**
     * Connecting to the database
    */
    public function getConnection() {
        return $this->connection;
    }
}

$conn = new Database();
var_dump($conn->getConnection());

