<?php
    //open connection to mysql db
    $connection = mysqli_connect("mysql.hostinger.in","u630623810_nasa","nasa2k17","u630623810_nasa") or die("Error " . mysqli_error($connection));

    $product=$_GET['product'];
    $company=$_GET['company'];
    $limit=$_GET['limit'];


    $sql = "select shops.id,shops.shopname,shops.shoptype,shops.lattitude,shops.longitude,shops.rating,shops.debitcard,shops.paytm,shops.imageurl,products.id from shops,products where id IN(select shopid from products where product='$product' and company='$company' order by price) limit $limit";

    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo '{';
    echo '"details":';
    echo json_encode($emparray);
    echo '}';




    //close the db connection
    mysqli_close($connection);
?>