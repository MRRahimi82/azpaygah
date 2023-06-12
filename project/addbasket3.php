<?php




    $id = Authentication::uid();
      $post_id = $row['id'];
    $price = $row['price'];
        if( isset( $_POST['submit'] ) ) {


            $sql = "INSERT INTO basket_product(user_id,post_id,price,quantity,date)
        VALUES(?,?,?,?,CURRENT_DATE())";

            $result = $dbc->query($sql, $id, $post_id, $price, $_POST['quantity']);
            $result -> fetchAll();
            $dbc->close();
        }
        ?>
