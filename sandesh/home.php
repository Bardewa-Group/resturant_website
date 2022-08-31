
<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: ' . 'adminLogin.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Dashboard</title>
    <link rel="stylesheet" href="admin.css">
    <script src="https://kit.fontawesome.com/02fb9ec234.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <div class="back"><a href="admin.php"><i class="fa-solid fa-arrow-left"></i></a></div>
        <section class="form">
            <header>Home Section</header>
            <form action="php/process.php" class="form1" enctype="multipart/form-data" method="post" autocomplete="off">
                <div class="error-text">Error Message</div>

                <div class="field input">
                    <label>Heading</label><input type="text" name="heading" placeholder="Enter name of the dish">
                </div>
                <div class="field input">
                    <label>Title</label><input type="text" name="title" placeholder="Enter name of the dish">
                </div>
                <div class="field input">
                    <label>Description</label><input type="text" name="description" placeholder="Enter price of the dish">
                </div>
                <div class="field input">
                    <label>Price</label><input type="text" name="price" placeholder="Enter price of the dish">
                </div>
                <div class="field input">
                    <label>Position</label><input type="number" name="index" placeholder="Enter index of the dish">
                </div>
                <div class="field">
                    <label>Image</label><input type="file" name="photo" placeholder="Enter image of the dish" class="file">
                </div>

                <div class="button">
                    <input type="submit" name="add" value="add" class="add">
                    <input type="submit" name='update' value="update" class="update">
                </div>
            </form>
        </section>
    </div>

    <script src="javaScript/change-home.js"></script>
</body>

</html>