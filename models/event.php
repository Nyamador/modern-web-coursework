<?php

    require_once __DIR__."/models/base.php";

    class EventModel extends BaseModel{

        public function __construct($pdoSocket){
                parent::__construct($pdoSocket, "event");
        }

        public function get(){}

        public function filter(){}

        public function save(){}
    }
?>