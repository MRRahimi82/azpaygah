<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="posts list">
    <title>Posts</title>
    <script src="https://kit.fontawesome.com/18c7498de3.js" crossorigin="anonymous"></script>
</head>
<body dir="rtl">
    <div class="box large">
        <h1>سفارشات</h1>
        <form action="" method="post">
            <?php
                if(isset($_SESSION['info'])){
                    echo $_SESSION['info'];
                    unset($_SESSION['info']);
                }
            ?>
            
            <table class="posts_tbl">
                    <thead>
                        <tr>
                        <th><input type="checkbox" name=""></th>
                        <th>شناسه سفارش</th>
                        <th>قیمت</th>

                        <th>تعداد</th>
                            <th>تاریخ</th>
                        <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach($row as $post){ 
                            $sql = "SELECT role,fullname FROM users WHERE id=?";
                            $result = $dbc -> query( $sql ,$post['id']);
                            $creator = $result->fetchArray();
                            include 'view/template/basketTable.php';
                        }?>     
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>عملیات های گروهی</td>
                            <td><i class="fa-solid fa-forward-fast"></i>
                            <i class="fa-solid fa-forward"></i>
                            <i class="fa-solid fa-backward"></i>
                            <i class="fa-solid fa-backward-fast"></i>
                            <td><a class="btn tbl" href="addPost.php">افزودن</a></td>
                            <td><button class="btn tbl" name="del">حذف</button></td>
                        </tr>
                    </tfoot>
      
            </table>
        </form>

    </div>

      
</body>
</html>
