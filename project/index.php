<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <link rel="stylesheet" href="styles/style.css">
    <meta charset="UTF-8">
    <meta name="description" content="Articles posts">
    <title>Damakar</title>
</head>



<body dir="rtl" class="grid grid-layout-index">

    <?php

        ob_start();

        include 'config.php';
        include 'lib/db.php';
        include 'security.php';

        
        include "view/template/header.php";

        include "view/template/nav.php";


        if(isset($_GET['p'])){
            $page = $_GET['p'];
            
            include "{$page}.php";
           
        }else{
            include "catalog.php";
        }   

        include "view/template/footer.php";
?>
   
</body>
</html>
