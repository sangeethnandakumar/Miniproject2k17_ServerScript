<?php
    //open connection to mysql db
    $connection = mysqli_connect("mysql.hostinger.in","u630623810_nasa","nasa2k17","u630623810_nasa") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select * from products";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }


    //Starting & ending braces
    echo '{';
    echo '"details":';

    echo json_encode($emparray);

    echo '}';


    //close the db connection
    mysqli_close($connection);
?>