<?php
include('database.php');
$errors = array(); 

$i_name="";
$i_price="";
$type="";
$id="";
$file="";
if (isset($_POST['add'])) {
    // receive all input values from the form
    
    $file = addslashes(file_get_contents($_FILES['image']['tmp_name']));
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
            VALUES('$i_name', '$id', '$i_price', '$type', '$file')";
  mysqli_query($db, $query);
}
