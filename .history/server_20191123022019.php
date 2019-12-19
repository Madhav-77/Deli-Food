<?php
include('database.php');
$id = 1;
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $c_password = mysqli_real_escape_string($db, $_POST['c_password']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $pref = mysqli_real_escape_string($db, $_POST['pref']);
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

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
                        
  $user_check_query = "SELECT * FROM user_master WHERE u_name='$username' OR u_email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) { // if user exists
    if ($user['u_name'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['u_email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  //$user_check = "SELECT * FROM user_master WHERE username"
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO user_master (u_name, u_email, password, u_contact, preference, u_city, user_type) 
  			  VALUES('$username', '$email', '$password', '$contact', '$pref', '$city', '$type')";
    mysqli_query($db, $query);
    
    //login right after signing up
    $querys = "SELECT * FROM user_master WHERE u_name='$username'";
    $resultss = mysqli_query($db, $querys);
    $logged_in_users = mysqli_fetch_assoc($resultss);
    
    if($logged_in_users['user_type'] == "Customer"){
      $_SESSION['username'] = $username;
      $id = 1;
      header('location: menu.php');
    }
    else{
      $_SESSION['username'] = $username;
      $_SESSION['id'] = 1;
      header('location: admin.php');
    }
  }
}
//

// LOGIN USER
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM user_master WHERE u_name='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $logged_in_user = mysqli_fetch_assoc($results);
          if($logged_in_user['user_type'] == "Customer"){
            $_SESSION['username'] = $username;
            $id = 1;
            header('location: menu.php');
          }
          else{
            $_SESSION['username'] = $username;
            $_SESSION['id'] = 1;
            header('location: admin.php');
          }
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
  ?>