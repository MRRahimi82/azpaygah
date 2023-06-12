<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="article form">
    <title>Add Article</title>
    <script src="https://kit.fontawesome.com/18c7498de3.js" crossorigin="anonymous"></script>
    <script>
        tinymce.init({
            selector: '#editor'
        });
    </script>
</head>
<body dir="rtl">
<div class="box medium">
    <h1 class="">افزودن سفارش جدید</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <?php
        if(isset($_SESSION['info'])){
            echo $_SESSION['info'];
            unset($_SESSION['info']);
        }
        ?>





        <label for="quantity"> تعداد  </label>
        <input type="number" required name="quantity" placeholder="1" style="width:20%;">





        <button class="btn" type="submit" name="submit">
            <i class="fa-solid fa-feather-pointed"></i>
            افزودن
        </button>

    </form>

</div>


</body>
</html>
<?php
