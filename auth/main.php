
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    if(isset($_POST['create-account'])){
        $email = $_POST['email'];
        $password = $_POST['pass'];
        echo filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    // if(isset($_POST['login-submit'])){
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];
    //     // empty(trim($email)) || empty(trim($password))

    //     if(){
    //         header("Location: ../login.php?error=emptyFields&email=$email");
    //         exit();
    //     }else if(!){

    //     }
    // }

?>
