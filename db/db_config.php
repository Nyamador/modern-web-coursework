<?php


    class PDOSocket{
        private static $pdo;
        private static $host = 'localhost';
        private static $user = 'root';
        private static $dbname = 'eventify';
        private static $password = '';

        public static function instance()
        {
            if (PDOSocket::$pdo === null) {
                self::init();
            }
    
            return self::$pdo;
        }    
        

        private static function init()
        {
            $opt = array(
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => FALSE,
            );
            $dsn = 'mysql:host='.self::$host.';dbname='.self::$dbname.";charset=utf8";
            self::$pdo = new PDO($dsn, self::$user, self::$password, $opt);
        }        
    }
?>