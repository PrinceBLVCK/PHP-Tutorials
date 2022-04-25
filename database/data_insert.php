<?php

    // connect to database
    $conn = mysqli_connect('localhost', 'prince', '1234test', 'mydb');

    // ensure successful connection
    if(!$conn) echo mysqli_connect_error(); 

    if(isset($_POST['submit'])) reg();
    
    
    // echo $_token;

    
    //var_dump($result);

    function reg(){
        
        // generates a random token and store it in hexadecimal
        $_token = bin2hex(random_bytes(16));


        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if(empty($email)) return;
        
        if(empty($pass)) return;
        

        $sql = "INSERT INTO intro VALUES ('$_token', '$email', '$pass')";

        $result = mysqli_query($GLOBALS['conn'], $sql);

        if($result) echo "$email registered successfuly.";
        
        if(!$result) echo "Error: ". mysqli_error($GLOBALS['conn']);

    }

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

    <form method="POST">
        <h1>Register Email Address</h1>
        <div>
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" required>
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>

</body>
</html>