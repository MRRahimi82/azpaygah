<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <title>NewProduct</title>
</head>
<body>
<div class="contact">
    <form action="product_get.php" method="post">
        <h1>NewProduct</h1>
        <input type="text" name="name" id="name" class="input" placeholder="name">
        <input type="text" name="price" id="price" class="input" placeholder="price">
        <input type="text" name="brand" id="brand" class="input" placeholder="brand">
        <input type="text" name="type" id="type" class="input" placeholder="type">
        <input type="text" name="thermalpower" id="thermalpower" class="input" placeholder="thermalpower">
        <input type="text" name="model" id="model" class="input" placeholder="model">
        <button type="submit" name="btn" class="btn">Add</button>
    </form>
</div>
</body>
</html>