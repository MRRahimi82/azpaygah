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
        <h1 class="">افزودن محصول جدید</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <?php
                if(isset($_SESSION['info'])){
                    echo $_SESSION['info'];
                    unset($_SESSION['info']);
                }
            ?>
            <label for="type"> نوع محصول </label>
            <input type="text" required name="type">

            <label for="brand"> برند </label>
            <input type="text" required name="brand">


            <label for="model"> مدل </label>
            <input type="text" required name="model" >

            <br>

            <label for="tavanhararati"> توان حرارتی </label>
            <input type="number" required name="tavanhararati" placeholder="22و24و26و..." style="width:20%;">
            
            <br>
            <label for="price"> قیمت </label>
            <input type="text" required name="price">
            <br>

            <label class="radio_lbl" for="state"> ذخیره </label>
            <input type="radio" name="state" value="saved" checked>
            <label class="radio_lbl" for="state"> انتشار </label>
            <input type="radio" name="state" value="published"><br>

            <label for="cover"> کاور پست: </label>
            <input type="file" required name="cover">

            <button class="btn" type="submit" name="submit">
                <i class="fa-solid fa-feather-pointed"></i>   
                افزودن مقاله
            </button> 
              
        </form>

    </div>

      
</body>
</html>
