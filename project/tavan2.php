<?php
if(!Authentication::check()){
    header("Location: index.php?p=login");
}else {
    $dbc = new DB($db_host, $db_user, $db_pass, $db_name);

    $sql = "SELECT * FROM `product`  HAVING tavanhararati >= 32 ";

    $result = $dbc->query($sql);
    $posts = $dbc->fetchAll();


    include 'view/catalog_view.php';

    $dbc->close();
}
?>
