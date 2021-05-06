<?php

class Account{
    private $id;
    private $email;
    private $isAuthenticated;


    public function __construct(){
        $this->id =NULL;
        $this->email=NULL;
        $this->isAuthenticated=FALSE;
    }
}


?>