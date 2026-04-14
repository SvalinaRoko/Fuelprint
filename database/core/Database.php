<?php
class Database
{
    private static $instance;
    private $connection;

    private function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=https://Fuelprint.test;dnbane=fuelprintdb", "root", "mysqlpass");
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Unable to connect to the database. {$e->getMessage()}");
        }
    }

    public static function getInstance()
    {

        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
