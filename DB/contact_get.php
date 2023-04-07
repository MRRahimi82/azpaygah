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
<form action="contact.php" method="post">
<div class="box_txt">
 OK&#128526&#128525&#128520</div>
<button class="btn">back</button>
</form>
</div>
<?php
$name = $_POST["name"];
$email = $_POST["email"];
$massage = $_POST["msg"];

$mysql = mysqli_connect("localhost","root","","db");
$sql = "INSERT INTO contact(name,email,message) VALUES('$name','$email','$massage')";
$result = mysqli_query(@$mysql, $sql);
mysqli_close($mysql);

?>
</body>
</html>