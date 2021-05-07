<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once $_SERVER['DOCUMENT_ROOT'].'/eventify/db/db_config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/eventify/models/reservation.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/eventify/models/user.php';
    
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $userModel = new UserModel(PDOSocket::instance());
        $userData = $userModel->get($_SESSION['email']);
        $reservationModel = new ReservationModel(PDOSocket::instance());
        $reservationModel->save(array(
            'event_id'=>$_GET['event'],
            'firstname'=>$_POST['firstname'],
            'lastname'=>$_POST['lastname'],
            'email'=>$_POST['email'],
            'user_id'=> $userData->id
        ));
        header("Location: ../event.php?event=$event_id");        
    }
        
?>