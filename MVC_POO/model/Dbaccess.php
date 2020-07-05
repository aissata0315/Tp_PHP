<?php
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
        return $db;
    }



}