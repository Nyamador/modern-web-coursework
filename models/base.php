<?php
        require_once __DIR__ . "/db/db_config.php";
    
        abstract class BaseModel{

            protected $connection;
            protected $table;
        
            public function __construct($pdoSocket, $table)
            {   
                $this->connection = $pdoSocket;
                $this->table = $table;
            }

            /**
             * Retrieves an object from the database
             * @param id|int Id of the database object
             */            
            abstract public function get($id); 

            abstract public function filter();
        
            abstract public function save($data);

        }

?>