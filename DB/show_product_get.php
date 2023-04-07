<?php

include ('DB.php');

    $dbc = new DB( "localhost","root","","tamrin");
    $sql = "SELECT * FROM product
        ORDER BY code_product DESC ";
    $result = $dbc -> query( $sql );
    $t_products = $dbc -> fetchAll();
    $dbc -> close();

    include 'show_product.php';

?>