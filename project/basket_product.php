<?php
if(!Authorization::checkAccess()){
    header("Location: index.php?p=home");
}else{
    $id = Authentication::uid();




        $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);

        if(Authorization::checkRole() && !isset($_GET['myPosts'])){
            $sql = "SELECT * FROM `basket_product`";
            $result = $dbc->query($sql);
        }else{
            $sql = "SELECT * FROM `basket_product` WHERE creator=?";
            $result = $dbc->query($sql,Authentication::uid());
        }

        $row = $result->fetchAll();
        include 'view/basket_view.php';
        $dbc -> close();




}?>
