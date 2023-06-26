<?php 

namespace Services;
use PDO;

class Connection {

    private function database_connection()
    {
        try
        {
            $connection = new PDO(SERVER['driver'].':host='.SERVER['host'].';
                                  dbname='.SERVER['db'],SERVER['username'],
                                  SERVER['password'],
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ));
            return $connection;
        } 
        catch(\PDOException $e)
        {
                error($e->getMessage());
        }
    }

    public function connect()
    {
        return $this->database_connection();
    }

}