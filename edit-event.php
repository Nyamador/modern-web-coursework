<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once "./models/event.php";
    $eventModel = new EventModel(PDOSocket::instance());
    if(isset($_GET['event'])){
        $eventData = $eventModel->get($_GET['event']);
        if ($eventData == false && !isset($_SESSION['uid'])){
            header("Location: ./index.php");
        }
        session_start();
    }else{
        header("Location: ./index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.min.css">
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/create.css">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    <link href="//fonts.googleapis.com/css?family=Lora:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap&amp;subset=cyrillic" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Sora:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap&amp;subset=latin" rel="stylesheet" type="text/css">    
    <title>Create Event</title>
</head>
<body>

        <nav class="bg-white navbar-container flex flex-row p-4 transition-all duration-1000 items-center mb-20">
                <div class="transition-all duration-1000">
                    <a href="./index.php">
                        <img src="./assets/logo_dark.svg" id="logo"/>
                    </a>
                </div>



                <div class="ml-auto transition-all duration-1000">
                    <ul class="flex flex-row">
                        <li class="mr-2">
                            <a href="./login.php" class="hover:text-gray-700">Login</a>
                        </li>

                        <li class="mr-2">
                            <a href="./signup.php" class="hover:text-gray-700">Signup</a>
                        </li>                        
                    </ul>
                </div>

        </nav>     
        
        <main clas="">
                <div class="p-6 rounded-md container m-auto bg-white shadow-sm w-7/12">
                        <h1 class="font-bold text-3xl">Edit Your Event</h1>
                        <p class="text-sm text-gray-500">Let's cover some basic information about your first event on Eventify..</p>

                        <div>
                            <form class="mt-10" method="post" action="./views/create-event.php">
                                <div class="flex flex-col mb-6">
                                    <label class="mb-2 font-bold typo-heading">Name of your Event</label>
                                    <input name="name"  required value="<?php echo $eventData->name; ?>" class="outline-none bg-gray-100 p-2 rounded-md focus:ring-2 focus:ring-gray-200" type="text" placeholder="Name">
                                </div>

                                <div class="flex flex-col mb-6">
                                    <label class="mb-2 font-bold typo-heading">Date</label>
                                    <input name="date"  required value="<?php echo $eventData->date; ?>" class="outline-none bg-gray-100 p-2 rounded-md focus:ring-2 focus:ring-gray-200" type="date" placeholder="Date">
                                </div>   
                                
                                <div class="flex flex-col mb-6">
                                    <label class="mb-2 font-bold typo-heading">Time</label>
                                    <input name="time"  required value="<?php echo $eventData->time; ?>" class="outline-none bg-gray-100 p-2 rounded-md focus:ring-2 focus:ring-gray-200" type="time" placeholder="Time">
                                </div>     
                                
                                <div class="flex flex-col mb-6">
                                    <label class="mb-2 font-bold typo-heading">Location</label>
                                    <input name="location" required  value="<?php echo $eventData->location; ?>" class="outline-none bg-gray-100 p-2 rounded-md focus:ring-2 focus:ring-gray-200" type="text" placeholder="Location">
                                </div>   

                                <div class="flex flex-col mb-6">
                                    <label class="mb-2 font-bold typo-heading">Image url</label>
                                    <input name="image_url" required  value="<?php echo $eventData->image_url; ?>" class="outline-none bg-gray-100 p-2 rounded-md focus:ring-2 focus:ring-gray-200" type="url" placeholder="Image url">
                                </div>                                   
                                
                                <div class="flex flex-col mb-6">
                                    <label class="mb-2 font-bold typo-heading">Description</label>
                                    <textarea name="description"  required class="outline-none bg-gray-100 p-2 rounded-md focus:ring-2 focus:ring-gray-200" type="text" placeholder="Description"><?php echo $eventData->description; ?></textarea>
                                </div>   
                                
                                
                                <div class="flex flex-col mb-6">
                                <label class="mb-2 font-bold typo-heading">Organizer Name</label>
                                    <input name="organizer_name" required  value="<?php echo $eventData->organizer_name; ?>" class="outline-none bg-gray-100 p-2 rounded-md focus:ring-2 focus:ring-gray-200" type="text" placeholder="Name of Organizer">
                                </div>   

                                <button id="event-update" type="submit" name="create-account" class="p-4 bg-black text-white rounded-md w-full mb-4">
                                    Update Event
                                </button>    

                            </form>
                        </div>
                </div>
        </main>
    
</body>
</html>