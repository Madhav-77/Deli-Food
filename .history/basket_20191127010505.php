<?php
include('database.php');
    $user_id=$_POST['user_id'];
	$order=$_POST['orders'];
    $total=$_POST['total'];
    
    $sql = "INSERT into orders (`user_id`, `orders`, `total`) VALUES ('$user_id', '$order', '$total')";
    if (mysqli_query($db, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($db);
?>