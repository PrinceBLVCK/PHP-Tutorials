<?php

    $conn = mysqli_connect('localhost', 'prince', '1234test', 'mydb');

    if(!$conn) echo mysqli_connect_error(); 

    if($conn) echo 'connection sucessful'; 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Connecting to sql Database</h1>

    <p>In this series am using phpMyAdmin DMS</p>
    <p>
        Create a user account that you will use in your system to connect to database
        <h3>Steps to creating a user account</h3>
        <ol>
            <li>Goto User account tab </li>
            <li>Click "Add user account" under New group</li>
            <li>Fill in username, hostname and password</li>
            <li>You set host name as "localhost"</li>
        </ol>
    </p>
    
</body>
</html>