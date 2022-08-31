<?php
session_start();
if (isset($_SESSION['id'])) {
    header('Location: ' . 'admin.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-LOGIN</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Admin-LOGIN</header>

            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="field input">
                    <label>ID</label>
                    <input type="text" name="id" placeholder="Enter admin id" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter admin password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="LOGIN">
                </div>
            </form>
            
        </section>
    </div>

    <script src="javaScript/admin.js"></script>
</body>

</html>