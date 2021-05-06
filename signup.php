<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.min.css">
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/login.css">
    <link href="//fonts.googleapis.com/css?family=Lora:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap&amp;subset=cyrillic" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Sora:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap&amp;subset=latin" rel="stylesheet" type="text/css">    
    <title>Eventify | Home</title>
</head>
<body>
    <main class="w-8/12 m-auto">
        <h1 class="signup-heading">Sign Up</h1>
        <div class="mb-10 text-center">
                    <h1 class="font-bold text-5xl">Sign Up</h1>
                    <p class="text-xl text-gray-600 text-center">Book your seat for upcoming events.</p>
        </div>

                <div class="m-auto w-6/12">
                        <form method="POST" action="./auth/signup.php">
                            <div class="flex flex-col mb-6">
                                <label class="mb-2">Email</label>
                                <input name="email" class="outline-none bg-gray-100 p-2 rounded-md focus:ring-2 focus:ring-gray-200" type="email" placeholder="Email">
                            </div>

                            <div class="flex flex-col mb-6">
                                <label class="mb-2">Fullname</label>
                                <input name="fullname" class="outline-none bg-gray-100 p-2 rounded-md focus:ring-2 focus:ring-gray-200" type="fullname" placeholder="Mathew Smith">
                            </div>                            

                            <div class="flex flex-col mb-6">
                                <label class="mb-2">Password</label>
                                <input name="password" class="outline-none bg-gray-100 p-2 rounded-md focus:ring-2 focus:ring-gray-200" type="password" placeholder="Password">
                            </div>

                            <button type="submit" name="create-account" class="p-4 bg-black text-white rounded-md w-1/2 mb-4">
                                Sign Up
                            </button>                        
                        </form>

                        <div class="flex flex-col">
                                <a href="/" class="text-gray-400 hover:text-gray-500 mb-2">
                                    Forgot password?
                                </a>
                                <a href="/" class="text-gray-400 hover:text-gray-500 mb-2">
                                    Don't have an account?
                                </a>                                
                        </div>
                </div>
        </main>
</body>
</html>