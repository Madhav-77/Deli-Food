<?php
include('database.php');
if (isset($_POST['add'])) {
    // receive all input values from the form
    $i_name = mysqli_real_escape_string($db, $_POST['username']);
    $i_price = mysqli_real_escape_string($db, $_POST['email']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
   
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }
    if (empty($contact)) { array_push($errors, "Contact is required"); }
    if (empty($city)) { array_push($errors, "City is required"); }
    if ($password != $c_password) {
      array_push($errors, "The two passwords do not match");
    }
?>