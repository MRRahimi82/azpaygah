
<?php
$dbc = new mysqli("localhost","root","","tamrin");
if($dbc->connect_error){
    die($dbc->connect_error);
}
$name = $_POST["name"];
$price = $_POST["price"];
$brand = $_POST["brand"];
$type = $_POST["type"];
$thermalpower = $_POST["thermalpower"];
$model=$_POST["model"];
$sql = "INSERT INTO product(name_product,price,brand,type,thermalpower,model) VALUES('$name','$price','$brand','$type','$thermalpower','$model')";
if ($dbc-> query($sql) === TRUE)
{
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <title>Contact</title>
</head>
<body>
<div class="contact">
    <form action="product.php" method="post">
        <div class="box_txt">
OK&#128526&#128525&#128520</div>
        <button class="btn">back</button>
    </form>
</div>
<?php
}
else{
    echo "reeor". $sql."<br>".$dbc->error;
}
$dbc->close();
?>
</body>
</html>