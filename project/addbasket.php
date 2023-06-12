<?php

//include 'view/addbasket.php';
//
//if(!Authorization::checkAccess()){
//    header("Location: index.php?p=home");
//}else{
//    $id = Authentication::uid();
//    $post_id = $row['id'];
//    $price = $row['price'];
//    if( isset( $_POST['submit'] ) ) {
//
//        $dbc = new DB($db_host, $db_user, $db_pass, $db_name);
//        $sql = "SELECT * FROM `like_product` WHERE post_id=? AND user_id=?";
//        $result = $dbc->query($sql, $post_id, $user_id);
//
//        $sql = "INSERT INTO basket_product(user_id=?,post_id=?,price,quantity,date)
//        VALUES(?,?,?,?,CURRENT_DATE())";
//
//        $result = $dbc->query($sql, $id,$post_id,$price, $_POST['quantity']);
//
//        $dbc->close();
//    }
//}


$dbc = new DB($db_host, $db_user, $db_pass, $db_name);

$sql = "SELECT * FROM basket_product ";

$result = $dbc -> query( $sql );
$posts = $dbc -> fetchAll();

 include 'addbasket2.php';
        ?>
