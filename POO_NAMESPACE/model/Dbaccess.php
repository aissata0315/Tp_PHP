<?php
namespace model;
use PDO;
class Dbaccess
{
    function getConnexion()
    {
        $host = 'localhost';
        $user = 'aissata';
        $password = 'aissata';
        $dbname = 'BanquePopulaire';

        $dsn = "mysql:host=$host;dbname=$dbname";
        try {
            $db = new PDO($dsn,$user,$password);
        }
        catch(PDOException $ex){
            die('Error :'.$ex->getMessage());
        }
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }



}