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

        public function getForUser($user_id){
            $sql = "SELECT * FROM {$this->table} WHERE created_by=?";
            $preparedQuery = $this->connection->prepare($sql);
            $preparedQuery->execute(array($user_id));
            $preparedQuery->setFetchMode(PDO::FETCH_OBJ);
            $result = $preparedQuery->fetchAll();
            return $result;
        }

        public function save($data){
            $sql = "INSERT INTO {$this->table} (public_id, name, date, time, location, description, organizer_name, image_url, created_by)"." VALUES(?,?,?,?,?,?,?,?,?)";
            $preparedQuery = $this->connection->prepare($sql);
            $preparedQuery->execute(array(
                $data['public_id'],
                $data['name'],
                $data['date'],
                $data['time'],
                $data['location'],
                $data['description'],
                $data['organizer_name'],
                $data['image_url'],
                $data['created_by']
            ));
        }

        public function update($data, $public_id){
            $sql = "UPDATE {$this->table} SET name=?, date=?, time=? , location=?, description=?, organizer_name=?, image_url=?, created_by=? WHERE public_id =?";
            $preparedQuery = $this->connection->prepare($sql);
            $preparedQuery->execute(array(
                $data['name'],
                $data['date'],
                $data['time'],
                $data['location'],
                $data['description'],
                $data['organizer_name'],
                $data['image_url'],
                $data['created_by'],           
                $public_id,
            ));
        }

        // public function getDashboardList()
        public function getAllWithRowLimit($rows){
            $sql = "SELECT * FROM {$this->table} LIMIT ?";
            $preparedQuery = $this->connection->prepare($sql);
            $preparedQuery->execute(array($rows));
            $preparedQuery->setFetchMode(PDO::FETCH_ASSOC);
            $result = $preparedQuery->fetchAll();
            return $result;                
        }

        public function filter($id){

        }

        public function create($data){
            $this->save($data);
        }
    }
?>