<?php
    include_once 'connect.php';
    $id = 'sajan';
    $password = 'bardewa';
    $sql = mysqli_query($conn, "INSERT INTO admin (id, password) VALUES ('{$id}', '{$password}')");
?>
    

