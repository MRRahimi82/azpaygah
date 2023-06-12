<?php
if(!Authentication::check()){
    header("Location: index.php?p=login");
}else {
    $dbc = new DB($db_host, $db_user, $db_pass, $db_name);

    $sql = "SELECT * FROM `product` INNER JOIN category ON product.id=category.post_id where category.type ='package' AND category.brand='butan'";

    $result = $dbc->query($sql);
    $posts = $dbc->fetchAll();


    include 'view/catalog_view.php';

    $dbc->close();
}
?>
