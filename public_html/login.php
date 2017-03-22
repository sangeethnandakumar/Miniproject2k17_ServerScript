<?php
//COLLECT DATAS
$username=$_GET["username"];
$password=$_GET["password"];
//CONNECT TO DB
$connection = mysqli_connect("mysql.hostinger.in","u630623810_nasa","nasa2k17","u630623810_nasa"); //or die("Error " . mysqli_error($connection));
//DEFINE QUERY
$sql = "SELECT id FROM customers WHERE username='".$username."' AND password='".$password."'";
//EXECUTE QUERY
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
//RETRIVE ID
if ($row = $result->fetch_row()) {
  echo($row[0]);
}
?>