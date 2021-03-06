<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    require_once $_SERVER['DOCUMENT_ROOT'].'/eventify/db/db_config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/eventify/models/event.php';

    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $eventModel = new EventModel(PDOSocket::instance());
        $eventModel->update(array(
            'name'=>$_POST['name'],
            'date'=>$_POST['date'],
            'time'=>$_POST['time'],
            'location'=>$_POST['location'],
            'description'=>$_POST['description'],
            'organizer_name'=>$_POST['organizer_name'],
            'image_url'=>$_POST['image_url'],
            'created_by'=>$_SESSION['uid']
        ), $_GET['event']);
        $event_id = md5($_POST['name']);
        header("Location: ../event.php?event=$event_id");
    }
?>