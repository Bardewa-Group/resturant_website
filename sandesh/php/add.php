<?php

    // use function PHPSTORM_META\type;

    include_once 'connect.php';
    // if($_POST['fullname']){
    //     $name = mysqli_real_escape_string($conn, $_POST['fullname']);
    // }
    if($_POST['title']){
        $title = mysqli_real_escape_string($conn, $_POST['title']);
    }
    if($_POST['price']){
        $price_str = mysqli_real_escape_string($conn, $_POST['price']);
        $price = (int) $price_str;
    }


    if(!empty($title) || !empty($price) || !empty($photo)){
        
        $photo = $_FILES['photo']['name'];
        $type = $_FILES['photo']['type'];
        $tmp_name = $_FILES['photo']['tmp_name'];
    
        // retrieve the extension of the photo
        $img_explode = explode('.', $photo);
        $ext = end($img_explode);
            
        // these are valid extensions
        $img_type = ['jpg', 'png', 'gif', 'jpeg'];
    
        if(in_array($ext, $img_type) == true){
            $time = time();
            $new_name = $time.$photo;
    
            // moving file to particular location
            if( move_uploaded_file($tmp_name, "dishes/".$new_name)){
                // $sql = mysqli_query($conn, "INSERT INTO dishes (name, image, title, price) VALUES ('{$name}' '{$new_name}' '{$title}' '{$price}')");
                $sql = mysqli_query($conn, "INSERT INTO dishes (image, title, price) VALUES ('{$new_name}', '{$title}', '{$price}')");
                if($sql){ 
                    echo 'Updated';
                }
            }else{
                echo 'Upload failed';
            }
        }else{
            echo 'Please select the file type of jpeg, jpg, png or gif';
        }
        
    }else{
        echo 'Every fileds are require !';
    }

?>