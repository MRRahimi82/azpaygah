<tr>
    <td>
        <input type="checkbox" name="selects">
    </td>
    <td> <?php echo $post['id']; ?> </td>
    <td> <?php echo $post['brand']; ?> </td>
    <td> <?php echo ($creator['role'] == "admin" ? "ادمین" : "کاربر").' '.$creator['fullname']; ?> </td>
    <td> <?php echo ($post['state'] == "saved" ? "ذخیره شده" : "منتشر شده"); ?> </td> 
    <td>
        <a class="" href="delete.php? id=<?php echo $post['id'] ?>&del=post">
            <i class="fa-solid fa-trash"></i>
        </a> 

        <a class="" href="index.php?p=editPost&id=<?php echo $post['id'] ?>">
            <i class="fa-solid fa-file-pen"></i>
        </a>       
    </td>
</tr>
