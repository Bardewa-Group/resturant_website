<?php
    session_start();
    include_once 'connect.php';

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $password= mysqli_real_escape_string($conn, $_POST['password']);
    
    $sql = mysqli_query($conn, "SELECT * FROM admin WHERE id = '{$id}' and password = '{$password}'");
    if(mysqli_num_rows($sql)>0){
        echo 'success';
        $data = mysqli_fetch_assoc($sql);
        $_SESSION['id'] = $data['unique_id'];
    }else{
        echo 'id or password is wrong';
    }
?>