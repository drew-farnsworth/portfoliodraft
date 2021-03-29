<?php

include("include/config.php");


$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];;
$message = $_POST['message'];

$sql = "SELECT * FROM contact WHERE email = '$email'";

$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);

if($row['email']==$email){
    ?>
        <script>
            alert('User Already Exists');
            window.location = 'contact.php';
        </script>
    <?php
}
else{
    $data = "INSERT INTO contact(name,phone,email,message)VALUES('$name','$email','$phone','$message')";

    if(mysqli_query($con,$data)){
        echo "<script> alert('New User Successfully Added'); </script>";
        echo "<script> window.location = 'index.php';</script>";
    }
    else{
        echo "<script> alert('New User Not Added'); </script>";
        echo "<script> window.location = 'contact.php';</script>";
    }
}


?>