<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once './includes/head.php' ?>
    <title>Document</title>
</head>
<body>
        <?php require_once './includes/navbar.php' ?>

        <main class="mt-20 w-9/12 m-auto">
            <?php 
                require_once $_SERVER['DOCUMENT_ROOT'].'/eventify/db/db_config.php';
                require_once $_SERVER['DOCUMENT_ROOT'].'/eventify/models/event.php';

                $eventModel = new EventModel(PDOSocket::instance());
                if(isset($_GET['event'])){
                    $eventData = $eventModel->get($_GET['event']);
                    if ($eventData == false){
                        header("Location: ./index.php");
                    }

                    echo "<div class=\"m-auto flex flex-col\"><img style=\"height:50px;margin-bottom:20px;\" src=\"./assets/checkmark.svg\"/><h1 class=\"m-auto font-bold text-center\">Hooray.You have successfully registered for $eventData->name</h1></div>";
                }else{
                    header("Location: ./index.php");
                }                
            ?>
        </main>
</body>
</html>