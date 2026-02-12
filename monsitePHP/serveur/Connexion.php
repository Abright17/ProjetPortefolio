<?php

class Connexion
{
    private static ?PDO $instance = null;

    public static function getInstance(): PDO
    {
        if (self::$instance === null) {

            $usager = 'afrique';
            $motdepasse = 'afrique';
            $hote = 'localhost';
            $base = 'afrique';
            $charset = 'utf8';
            $dsn = "mysql:host=$hote;dbname=$base;charset=$charset";

            try {
                self::$instance = new PDO($dsn, $usager, $motdepasse);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {
                die("Erreur SQL : " . $e->getMessage());
            }
        }

        return self::$instance;
    }
}
