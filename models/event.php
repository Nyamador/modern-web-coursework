<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);    
    require_once $_SERVER['DOCUMENT_ROOT']."/eventify/models/base.php";
    // require_once $_SERVER['DOCUMENT_ROOT']."/eventify/utils/UUID.php";

    class EventModel extends BaseModel{

        public function __construct($pdoSocket){
                parent::__construct($pdoSocket, "events");
        }

        public function get($id){
            $sql = "SELECT * FROM {$this->table} WHERE public_id=?";
            $preparedQuery = $this->connection->prepare($sql);
            $preparedQuery->execute(array($id));
            $preparedQuery->setFetchMode(PDO::FETCH_OBJ);
            $result = $preparedQuery->fetch();
            return $result;
        }

        public function save($data){
            $sql = "INSERT INTO {$this->table} (public_id, name, date, time, location, description, image_url, created_by)"." VALUES(?,?,?,?,?,?,?,?)";
            $preparedQuery = $this->connection->prepare($sql);
            $preparedQuery->execute(array(
                $data['public_id'],
                $data['name'],
                $data['date'],
                $data['time'],
                $data['location'],
                $data['description'],
                $data['image_url'],
                $data['created_by']
            ));
        }

        public function filter($id){}

        public function create($data){
            $this->save($data);
        }
    }
?>