<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/contact.css" type="text/css" rel="stylesheet">
    <title>کاربران</title>

</head>
<body>
<h1>محصولات</h1>
<table class = "datatable">
    <thead>
    <tr>
        <th>نام محصول</th>
        <th>قیمت </th>
        <th>برند</th>
        <th>نوع</th>
        <th>توان  </th>
        <th> مدل  </th>
        <th> وضعیت </th>
    </tr>
    </thead>
    <tbody>
    <?php
    if( count( $t_products ) == 0 ){
        echo '<p>محصولی یافت نشد</p>';
    }
    else{
        foreach( $t_products as $t_product ){
            ?>

            <tr>
             <td><?php echo $t_product['name_product']; ?></td>
              <td><?php echo $t_product['price']; ?></td>
               <td><?php echo $t_product['brand']; ?></td>
                <td><?php echo $t_product['type']; ?></td>
                <td><?php echo $t_product['thermalpower']; ?></td>
                <td><?php echo $t_product['model']; ?></td>
                <td><?php echo $t_product['status']; ?></td>
                </tr>
    <?php
        }
    }
    ?>
    </tbody>
</table>
</body>
</html>
