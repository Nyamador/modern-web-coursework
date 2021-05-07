
<header class="header pb-10">
        <nav class="navbar-container flex flex-row p-4 transition-all duration-1000 items-center">
                <div class="transition-all duration-1000">
                    <a href="./index.php">
                        <img src="./assets/logo_dim.svg" id="logo"/>
                    </a>
                </div>
                
                <div class="ml-auto transition-all duration-1000">
                    <ul class="flex flex-row">
                        <?php
                            if(isset($_SESSION['logged_in'])){
                                if($_SESSION['logged_in'] != true){
                                    echo '<li class="mr-2"><a href="./login.php" class="hover:text-gray-700">Login</a></li>';
                                    echo '<li class="mr-2"><a href="./signup.php" class="hover:text-gray-700">Signup</a></li>';
                                }else{
                                    echo '<li class="mr-6 hover:text-white"><a href="./create.php" class="hover:text-gray-700">Create Event</a></li>';
                                    echo '<li class="mr-6 hover:text-white"><a href="./dashboard.php" class="hover:text-gray-700">Dashboard</a></li>';
                                    echo '<li class="mr-6 hover:text-white"><a href="./auth/logout.php" class="hover:text-gray-700">Logout</a></li>';
                                }
                            }
                        ?>           
                    </ul>
                </div>

        </nav>

    </header>