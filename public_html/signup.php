<?php
//COLLECT DETAILS
$id=mt_rand(10000000, 99999999);
$fname=$_GET["fname"];
$lname=$_GET["lname"];
$username=$_GET["username"];
$password=$_GET["password"];
$device=$_GET["device"];
//CONNECT TO DB
$connection = mysqli_connect("mysql.hostinger.in","u630623810_nasa","nasa2k17","u630623810_nasa"); //or die("Error " . mysqli_error($connection));
//DEFINE QUERY
$sql = "INSERT INTO customers VALUES($id,'$fname','$lname','$username','$password','$device')";
//EXECUTE QUERY
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
//RETRIVE ID
echo $id;
?>