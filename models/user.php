<?php
    
    require_once __DIR__."/base.php";

    class UserModel extends BaseModel{

        public function __construct($pdoSocket) {
            parent::__construct($pdoSocket, "users");
        }

        public function get($email){
            $sql = "SELECT * FROM {$this->table} WHERE email=?";
            $preparedQuery = $this->connection->prepare($sql);
            $preparedQuery->execute(array($email));
            $preparedQuery->setFetchMode(PDO::FETCH_OBJ);
            $result = $preparedQuery->fetch();
            return $result;
        }

        public function userExists($email){
            $data = $this->get($email);
            if (isset($data->email)) {
                return true;
            }else{
                return false;
            }
        }

        
        public function save($data){
            $sql = "INSERT INTO {$this->table} (email, fullname, password)"." VALUES(?,?,?)";
            $preparedQuery = $this->connection->prepare($sql);
            $preparedQuery->execute(array(
                $data['email'],
                $data['fullname'],
                $data['password'],
            ));
        }

        public function filter($email){}

        public function create($data){
            $this->save($data);
        }
    }
?>