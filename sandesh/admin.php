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
</head>

<body>
    <div class="wrapper">
    <div class="wrapper">
        <section class="admin">
            <header>Admin Dashboard <p> You can change items</p></header>
            <div class="list">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="dishes.php">Dishes</a></li>
                    <li><a href="#">Top Dishes</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
        </section>

    </div>
    </div>
<!-- <script src="javaScript/adminHome.js"></script> -->
</body>

</html>