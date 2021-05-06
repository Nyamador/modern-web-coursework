<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        $host = 'localhost';
        $user = 'root';
        $dbname = 'eventify';
        $password = '';
    
        $dsn = 'mysql:host='.$host.';dbname='.$dbname;
    
        try{
            $pdo  = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            // $statement = $pdo->query('SELECT * FROM users');
            // while($row = $statement->fetch()){
            //     echo '<p>Email: '.$row->email.'</p>'.'<br/>';
            //     echo '<p>password '.$row->password.'</p>'.'<br/>';
            // }
            // foreach($connection->query('SELECT * from users;') as $row) {
            //     print_r($row);
            // }

            // PREPARED STATEMENTS
            $email = 'desmond@gmail.com';
            $sql = 'SELECT * FROM users WHERE email = ?';
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$email]);
            $posts = $stmt->fetchAll();
            var_dump($posts);
        }catch(PODException $e){
            print "Error!: " . $e->getMessage(). "<br/>";
            die();
        }
    ?>
</body>
</html>