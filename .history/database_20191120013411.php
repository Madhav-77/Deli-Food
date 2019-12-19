<?php
$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"Internshala");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}else{
    echo 'Connected';
}
?>