<?php

class Database
{

    //Des constantes stockant les parametres de la connexion

    const DB_HOST='mysql:host=localhost;dbname=blog;charset=utf8';

    const DB_USER = 'root';

    const DB_PASS = '';

    //Methode de connexion à la base de données

    public function getConnection()
    {

        //Tentative de connexion à la base de données

        try {

            $connection = new PDO(self::DB_HOST, self::DB_USER, self::DB_PASS);

            $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            return 'Connexion ok!!';
        
        }
        //On lève une erreur si la connexion echoue

        catch (Exception $errorConnection) {

            die('Erreur de connexion: '.$errorConnection->getMessage());
            
        }

    }



}





?>