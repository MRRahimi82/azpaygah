<?php

if( !(Authorization::checkAccess() && isset($_GET['id'])) ){
    header("Location: index.php");  
}else{
    $id = $_GET['id'] ?? 0;
    $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
    $sql = "SELECT * FROM `product` WHERE id=?";
    $result = $dbc->query( $sql, $id);
    $row = $result->fetchArray();


    if( isset( $_POST['submit'] ) ){

        if(!(isset($_FILES['cover']['name']) && !empty($_FILES['cover']['name']))){           
            $img_name = $row['cover'];
        }else{
            $img_loc = $_FILES['cover']['tmp_name']; 
            $img_name = $_FILES['cover']['name'];

            $FileHandle = fopen("cover/".$row['cover'], 'w') or die("can't open file");
            fclose($FileHandle);
            unlink("cover/".$row['cover']);
        }

    
        $sql = "UPDATE `product` SET type=?, brand=?,model=?, tavanhararati=?,price = ?, 
        cover=?,state=? WHERE id=?";
    
        $result = $dbc->query( $sql,$_POST['type'], $_POST['brand'],
            $_POST['model'], $_POST['tavanhararati'], $_POST['price'], $img_name,
        $_POST['state'], $id);
    
        $dbc -> close();
        
    
        move_uploaded_file($img_loc,"cover/{$img_name}");
    
    
        if($result){
            $_SESSION['info'] = "<div style='color: darkgreen;'><p>با موفقیت ویرایش شد!</p></div>";
            header("Location: index.php?p=editPost&id={$id}");
        }else{
            $_SESSION['info'] = "<div style='color: red;'><p>خطایی پیش آمد!</p></div>";
            header("Location: index.php?p=editPost&id={$id}");
        }
    
    }else{
        include 'view/editPost_view.php';
    }
    
    $dbc -> close();
}



?>
