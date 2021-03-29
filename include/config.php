<?php

$con = mysqli_connect('localhost', 'root','');
mysqli_select_db($con,'webproject');

if(!$con){
    die("Data Connection Failed".mysqli_error($con));
}

?>