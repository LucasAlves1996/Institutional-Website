<?php

namespace App;

class Connection
{
    public function getDb()
    {
        try
        {
            $conn = new \PDO(
                "mysql:host=localhost;dbname=souzaesouza;charset=utf8",
                "root",
                ""
            );

            return $conn;
        }
        catch(\PDOException $e)
        {
            
        }
    }
}

?>