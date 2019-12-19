<?php
$url='localhost';
$username='root';
$password='';
$db=mysqli_connect($url,$username,$password,"internshala");
if(!$db){
 die('Could not Connect My Sql:' .mysql_error());
}
?>