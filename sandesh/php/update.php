<?php
    include_once 'connect.php';

    $index = '';
    if(!empty($_POST['index'])){
         $index = $_POST['index'];
    }else{
        echo 'please specify index parmeter';
    }
     
    // if(!empty($_POST['fullname'])){
    //     $name = mysqli_real_escape_string($conn, $_POST['fullname']);
    //     $sql = mysqli_query($conn, "UPDATE dishes SET name = '{$name}' WHERE sn = '{$index}'");
    //     // echo 'Updated';

    // }
    
    if(!empty($_POST['title'])){
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $sql = mysqli_query($conn, "UPDATE dishes SET title = '{$title}' WHERE sn = '{$index}'");

    }

    if(!empty($_POST['price'])){
        $price_str = mysqli_real_escape_string($conn, $_POST['price']);
        $price = (int) $price_str;
        $sql = mysqli_query($conn, "UPDATE dishes SET price = '{$price}' WHERE sn = '{$index}'");
    }


    if($_FILES['photo']['name'] != ""){
        if($_FILES['photo']['name'] != ''){
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
                    $sql = mysqli_query($conn, "UPDATE dishes SET image = '{$new_name}' WHERE sn = '{$index}'");
                    if($sql){ 
                        echo 'Updated';
                    }
                }else{
                    echo 'Upload failed';
                }

            }else{
                echo 'Please select the file type of jpeg, jpg, png or gif';
            }
                 
        }else {
        echo 'Please select a photo';
        }
    }
    
?>