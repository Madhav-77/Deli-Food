<?php
include('database.php');
$errors = array(); 

$i_name="";
$i_price="";
$type="";
$id="";

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if (isset($_POST['add'])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
} else {
    echo "File is not an image.";
    $uploadOk = 0;
}
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
} 
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
} 
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
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
       
    if (count($errors) == 0) {
        
        $query = "INSERT INTO menu (item_name, user_id, item_price, food_type, img) 
                  VALUES('$i_name', '$id', '$i_price', '$type', '$image')";
      mysqli_query($db, $query);
    }
  }
  