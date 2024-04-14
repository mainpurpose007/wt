<?php
$chances=0;

session_start();

if(!isset($_SESSION['ip'])){
    $_SESSION['ip'] = 1;
}


$username = $_POST['username'];
$password = $_POST['password'];

$setUsername = "r";
$setPassword = "1";

if($username == $setUsername && $password == $setPassword){
    echo "Congrats You are loged in </br>";
}
else{
    $counts = $_SESSION['ip']++;
    echo "Opps incorrect password and username try again </br>";
}

if($counts < 3){
    echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <form action="slip2.php" method="post">
        
                Enter Username here* <input type="text" name="username" required />
                
                Enter password here* <input type="password" name="password" required />
        
                <button type="submit">Go</button>
        
            </form>
        </body>
        </html>
    ';
}else{
    session_destroy();
    echo "Your attempts was complete ";
}
