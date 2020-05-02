<?php
if(!defined('__CONFIG__')) {
exit('You do not have a config file');
}
?>

<?php

class DB
{
    protected static $con;

    private function __construct()
    {
        try {
            self::$con = new PDO('mysql:charset=utf8mb4;host=localhost;dbname=php_login', 'root', '');
            self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$con->setAttribute(PDO::ATTR_PERSISTENT, false);
        } catch (PDOException $e) {
            echo "No connection can be established with the database";
            exit();
        }
    }

    public static function getConnection()
    {
        if (!self::$con) {
            new DB();
        }
        return self::$con;
    }
}

?>