<?php
    session_start();
    require_once "./models/event.php";
    require_once "./models/reservation.php";
    $eventModel = new EventModel(PDOSocket::instance());
    $userId =  $_SESSION['uid'];
    $bookedEvents = $eventModel->getForUser($userId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    require_once './includes/head.php' 
    ?>
    <title>Your Dashboard</title>
</head>
<body>
        <?php require_once './includes/navbar.php' ?>

        <main class="mt-20 w-9/12 m-auto">

            <div class="mb-20">
                <h1 class="text-3xl mb-10">Booked Events</h1>
                <section class="bg-gray-100 p-4 rounded-md flex flex-row">
                    <p class="typo-heading">Name</p>

                    <p class="ml-auto typo-heading">Date</p>

                </section>

                <section class="p-4 boder-b">
                    <?php
                        foreach($bookedEvents as $bookedEvent){
                            echo "<div class='flex flex-row'><a class='p-2 hover:underline hover:text-gray-400' href='./event.php?event={$bookedEvent->public_id}'>{$bookedEvent->name}</a><p class='ml-auto'>{$bookedEvent->date}</p></div>";
                        }
                    ?>
                </section>
            </div>
            <h1 class="text-3xl mb-10">Manage Your Events</h1>

            <div>
                <section class="bg-gray-100 p-4 rounded-md flex flex-row">
                    <p class="typo-heading">Event</p>

                    <p class="ml-auto typo-heading">Reservations</p>
                </section>
                <section class="flex flex-row p-4 boder-b">
                    <a href="/" class="hover:text-gray-500">
                            An Ecent with latif abubakar
                    </a>

                    <p class="ml-auto">200</p>
                </section>
            </div>
        </main>
</body>
</html>