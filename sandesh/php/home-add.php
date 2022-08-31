<?php

    // use function PHPSTORM_META\type;

    include_once 'connect.php';
    if($_POST['title']){
        $title = mysqli_real_escape_string($conn, $_POST['title']);
    }
    if($_POST['heading']){
        $heading = mysqli_real_escape_string($conn, $_POST['heading']);
    }
    if($_POST['description']){
        $description = mysqli_real_escape_string($conn, $_POST['description']);
    }



    if(!empty($title) || !empty($description) || !empty($heading)){
        
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
                $sql = mysqli_query($conn, "INSERT INTO home (heading, title, description, image) VALUES ('{$heading}', '{$title}', '{$description}', '{$new_name}')");
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