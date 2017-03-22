<?php
    //open connection to mysql db
    $connection = mysqli_connect("mysql.hostinger.in","u630623810_nasa","nasa2k17","u630623810_nasa") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select phone from shops where id=".$_GET['id'];
    $result = $connection->query($sql);
    
    while ($row = $result->fetch_assoc()) 
    {
    echo $row['phone'];
    }


    //close the db connection
    mysqli_close($connection);
?>	