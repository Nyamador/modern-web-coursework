<?php
    // $host = 'localhost';
    // $user = 'root';
    // $dbname = 'eventify';
    // $password = '';

    // $dsn = 'mysql:host='.$host.';$dbname='.$dbname;

    // try{
    //     $connection  = new PDO($dsn, $user, $password);
    //     foreach($connection->query('SELECT * from users') as $row) {
    //         print_r($row);
    //     }
    // }catch(PDOException $e){
    //     print "Error!: " . $e->getMessage(). "<br/>";
    //     die();
    // }

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
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_CLASS,
                PDO::ATTR_EMULATE_PREPARES   => FALSE,
            );
            $dsn = 'mysql:host='.self::$host.';$dbname='.self::$dbname;
            self::$pdo = new PDO($dsn, self::$user, self::$password, $opt);
        }        
    }
?>