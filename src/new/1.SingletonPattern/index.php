<?php
class Database
{
    private static $instance = null;

    private function __construct()
    {
        echo "New DB Connection Created\n";
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            echo "Creating a new instance of Database\n";
            self::$instance = new Database();
        }
        return self::$instance;
    }
}

$db1 = Database::getInstance();
$db2 = Database::getInstance();

var_dump($db1 === $db2);
