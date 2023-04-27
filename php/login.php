<?php
include '..\inc\connection.php';


if(isset($_POST['submit'])){


$email = $_POST['email'];
$password = $_POST['password'];


$sql = mysql_query("SELECT * FROM `mihanzuser` WHERE email = '$email'") ;

$result = $conn->query($sql);

if($result){






}




}






?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In | Mihanz Catering</title>
</head>
<body>
    <nav>
  
    </nav>

    <main>
    <form action="" method="POST"></form>

    Email:
    <input type="email" name="email" placeholder="Email Address" required>
    Password:
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Log In</button>


    </main>

    <footer>

    </footer>



    
</body>
</html>







