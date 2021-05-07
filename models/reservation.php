<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once $_SERVER['DOCUMENT_ROOT']."/eventify/models/base.php";


    class ReservationModel extends BaseModel{

    public function __construct($pdoSocket){
            parent::__construct($pdoSocket, "reservations");
    }
    
    public function get($id){
        $sql = "SELECT * FROM {$this->table} WHERE id=?";
        $preparedQuery = $this->connection->prepare($sql);
        $preparedQuery->execute(array($id));
        $preparedQuery->setFetchMode(PDO::FETCH_OBJ);
        $result = $preparedQuery->fetch();
        return $result;
    }    

    public function save($data){
        $sql = "INSERT INTO {$this->table} (event_id, firstname, lastname, email, user_id)"." VALUES(?,?,?,?,?)";
        $preparedQuery = $this->connection->prepare($sql);
        $preparedQuery->execute(array(
            $data['event_id'],
            $data['firstname'],
            $data['lastname'],
            $data['email'],
            $data['user_id']
        ));
    }    


    public function filter($id){}

    public function create($data){
        $this->save($data);
    }
    
    }

?>