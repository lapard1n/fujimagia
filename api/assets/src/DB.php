<?php


namespace assets\src;

use PDO;

class DB
{
    protected $dbHandler;

    public function connect()
    {
        try {
            $connectionHandler =  new PDO(
                'mysql:host='. DATABASE_HOST
                .';dbname='. DATABASE_NAME
                , DATABASE_USER
                , DATABASE_PASSWORD
            );
            $connectionHandler->setAttribute(
                PDO::ATTR_ERRMODE
                , PDO::ERRMODE_EXCEPTION
            );

            return $connectionHandler;
        }catch (\Exception $e){
            return "Database Error: " . $e->getMessage();
        }
    }

    public function loginQuery($stmtHandler, $email, $password)
    {

    }
}