<?php
session_start();

$host='localhost';
$user='root';
$pass='Tyronne1!';
$db='tutorfinder';

$connect = mysqli_connect($host,$user,$pass,$db);

$user_name = $_POST['user_name'];
$password = $_POST['password'];



$sql = "SELECT * FROM students WHERE student_username='$user_name' AND student_password='$password'";
 
$result=mysqli_query($connect,$sql);

if($row = mysqli_fetch_assoc($result)){
		
header('location:/softdev/admin/backend1.php');}

else{
	
	header('location:/softdev/admin/backend1.php');	
	
}

?>
