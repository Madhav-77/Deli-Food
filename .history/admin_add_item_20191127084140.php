<?php
include('database.php');
$errors = array(); 

$i_name="";
$i_price="";
$type="";
$id="";

if (isset($_POST['add'])) {
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $image=basename( $_FILES["image"]["name"],".jpg");

    // receive all input values from the form
    $id = $_POST['u_id'];
    $i_name = $_POST['i_name'];
    $i_price = $_POST['i_price'];
    $type = $_POST['type'];
   
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($i_name)) { array_push($errors, "Item name is required"); }
    if (empty($i_price)) { array_push($errors, "Price is required"); }
    }   
    if (count($errors) == 0) {
        
        $query = "INSERT INTO menu (item_name, user_id, item_price, food_type, img) 
                  VALUES('$i_name', '$id', '$i_price', '$type', '$image')";
      mysqli_query($db, $query);
    }
  