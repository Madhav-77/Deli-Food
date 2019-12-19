<?php
include('database.php');
if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $email=$_POST['email'];
  $pass=$_POST['password_1'];
  $contact=$_POST['contact'];
  $city=$_POST['city'];
  $pref=$_POST['pref'];
  
$sql = "INSERT INTO `user_master`(`user_id`, `u_name`, `u_email`, `password`, `u_contact`, `ftype_id`, `u_city`) VALUES ('$username', '$email', '$pass', $contact, $pref, '$city')";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
} 
// Close connection
mysqli_close($conn);


?>