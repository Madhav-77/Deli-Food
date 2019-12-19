<?php
include('database.php');
$id = $_POST['id'];

$sql = mysqli_query($db, "DELETE FROM menu WHERE item_id = '$id'");
?>