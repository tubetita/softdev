<?php

$host='localhost';
$user='root';
$pass='';
$db='tutorfinder';

$connect = mysqli_connect($host,$user,$pass,$db);

$user_name = $_POST['user_name'];
$password = $_POST['password'];



$sql = "SELECT * FROM admin WHERE username='$user_name' password='$password'";
 
$result=mysqli_query($connect,$sql);

if($row = mysqli_fetch_assoc($result)){
	
	header('/softdev/admin/backend1.php');
	$_SESSION['id'] =  $row['id'];
}

else{
	
	header('location:/softdev/tutorfinderlogin.html');
	
}

?>
