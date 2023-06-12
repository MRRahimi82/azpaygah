<tr>
    <td>
        <input type="checkbox" name="selects">
    </td>
    <td> <?php echo $post['id']; ?> </td>
    <td> <?php echo $post['price']; ?> </td><td> <?php echo $post['quantity']; ?> </td>
    <td> <?php echo $post['date']; ?> </td>
    <td>
        <a class="" href="delete.php? id=<?php echo $post['id'] ?>&del=post">
            <i class="fa-solid fa-trash"></i>
        </a> 

        <a class="" href="index.php?p=editPost&id=<?php echo $post['id'] ?>">
            <i class="fa-solid fa-file-pen"></i>
        </a>       
    </td>
</tr>
