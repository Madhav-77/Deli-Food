<?php
include('database.php');
if (isset($_POST['add'])) {
    // receive all input values from the form
    $i_name = mysqli_real_escape_string($db, $_POST['i_name']);
    $i_price = mysqli_real_escape_string($db, $_POST['i_price']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
   
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($i_name)) { array_push($errors, "Username is required"); }
    if (empty($i_price)) { array_push($errors, "Email is required"); }
    }   
    if (count($errors) == 0) {
        
        $query = "INSERT INTO menu (item_name, item_price, food_type, u_contact, preference, u_city, user_type) 
                  VALUES('$username', '$email', '$password', '$contact', '$pref', '$city', '$type')";
      mysqli_query($db, $query);
    }
?>