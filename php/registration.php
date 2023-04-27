<?php 
include "..\inc\connection.php";
    $user = 0;
    $success = 0;
    $invalid = 0;

	if (isset($_POST['submit'])) {
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
        
        $sql = "SELECT   `email` FROM `mihanzuser` WHERE email='$email';";
    
		
        $result = $conn->query($sql);
        
        if($result){
            $num=mysqli_num_rows($result);
            if($num>0){
                $user=1;
            }else{
            if($password === $cpassword ){

                $sql = "INSERT INTO `mihanzuser`( `name`, `email`, `pass`) VALUES ('$name','$email','$password');";
                $result = $conn->query($sql);

           if ($result){
                $success=1;

                   header("location:login.php");
            }else{
                $invalid=1;
                
             // die(mysqli_error($conn));
            }   
            }
        }   
    }
		//$conn->close();

	}
	?>
	<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mihanz Catering</title>
</head>



<body>
<?php
if ($invalid){
    echo "<script>javascript:alert('error');</script>";
}
?>
<?php
if($user){
    echo "<script>javascript:alert('User already exist');</script>";
}
?>
<?php
if ($success){
    echo 'Success';
}
?>

    <nav>
    </nav>


    <main>
        <div>
           <form action="" method="post">
      <br>
      Name: <br>
       <input type="text" name="fname" placeholder="First Name" required>  
       <input type="text" name="lname" placeholder="Last Name" required>
        <br>
        <br>
        <br>
        Address: <br>
        <input type="text" name="region" placeholder="Region" required>
        <input type="text" name="province" placeholder="Province" required><br>
        <input type="text" name="mcity" placeholder="Municipality/City" required>
        <input type="text" name="barangay" placeholder="Barangay" required><br>
        <input type="text" name="street" placeholder="Street" required>
        <input type="text" name="housenumber" placeholder="Bldg/House Number" required>
       
        
        <br>
        <br>

        Contact: <br>
        <input type="tel" name="mnum" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" placeholder="Mobile Number">

       <br>
       Email: <br>
        <input type="email" name="email" placeholder="Email Address" required><br><br>

       <br>
        <input type="password" name="password" placeholder="Password" required>

        
        <input type="password" name="cpassword" placeholder="Confirm Password" required><br><br>    

        <input type="submit" name="submit" value="submit" placeholder="Create"  >



           </form>





        </div>




    </main>

    <footer>



        
    </footer>
</body>
</html>