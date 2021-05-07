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
            $userData = $userModel->get($_POST["email"]);
            if(password_verify($_POST['password'], $userData->password)){
                session_start();
                $_SESSION['email'] = $userData->email;
                $_SESSION['uid'] = $userData->id;
                $_SESSION['logged_in'] = true;
                header("Location: ../index.php");
            }
                header("Location: ../login.php?error=true&detail=Incorrect password&email={$_POST['email']}");
        }else{
            // ask user to login again
            session_destroy();
            header("Location: ../login.php?error=true&detail=User Does Not Exist");
        };
    }

?>