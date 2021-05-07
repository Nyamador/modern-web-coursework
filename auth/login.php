<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    require_once $_SERVER['DOCUMENT_ROOT'].'/eventify/models/user.php';
    require_once $_SERVER['DOCUMENT_ROOT'] .'/eventify/db/db_config.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $userModel = new UserModel(PDOSocket::instance());
        if($userModel->userExists($_POST["email"])){
            // start a session and append users details to session
            echo "exists!";
            $userData = $userModel->get($_POST["email"]);
            session_start();
            $_SESSION['email'] = $userData->email;
            $_SESSION['uid'] = $userData->id;
            $_SESSION['logged_in'] = true;
            header("Location: ../index.php");
        }else{
            // ask user to login again
            session_destroy();
            header("Location: ./login.php");
        };
    }

?>