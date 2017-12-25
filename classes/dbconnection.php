<?php
/**
 * Created by PhpStorm.
 * User: subta
 * Date: 12/24/2017
 * Time: 09:50 PM
 */
require_once 'config.php';
class dbconnection{

   public static $conn;

    public function  __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        try {
            self::$conn = new PDO("mysql:host=" . LocalHost.";dbname=".DBNAME ,Root, Password);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            echo "Connection failed: ";
        }
    }


}

$db = new dbconnection();
?>