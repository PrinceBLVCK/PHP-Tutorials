<?php

    $conn = mysqli_connect('localhost', 'prince', '1234test', 'mydb');


    if(!$conn) echo "Error description: ". mysqli_connect_error();


    $sql = "SELECT * FROM intro";

    $results = mysqli_query($conn, $sql);

    $data = mysqli_fetch_all($results, MYSQLI_ASSOC);
   

    // var_dump($data);


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

    <table>
        <thead>
            <td>user id</td>
            <td>email address</td>
        </thead>

        <tbody>

            <?php for($i = 0; $i < count($data); $i++){ ?>
                    <tr>
                        <td><?php echo $data[$i]['id']; ?></td>
                        <td><?php echo $data[$i]['email_address']; ?></td>
                    </tr>
            <?php }?>

        </tbody>

    </table>

</body>
</html>