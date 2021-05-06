<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    
    require_once $_SERVER['DOCUMENT_ROOT'].'/eventify/models/user.php';
    require_once $_SERVER['DOCUMENT_ROOT'] .'/eventify/db/db_config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $userModel = new UserModel(PDOSocket::instance());
        $userModel->save(array( 'email' => $_POST['email'],'fullname' => $_POST['fullname'], 'password' => $_POST['password']));
        header("Location: ../login.php");
    }
?>