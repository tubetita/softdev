<?php
session_start();

$host='localhost';
$user='root';
$pass='';
$db='tutorfinder';

$connect = mysqli_connect($host,$user,$pass,$db);

$user_name = $_POST['user_name'];
$password = $_POST['password'];



$sql = "SELECT * FROM students WHERE student_username='$user_name' AND student_password='$password'";
 
$result=mysqli_query($connect,$sql);

if($row = mysqli_fetch_assoc($result)){
		
$_SESSION['student_username'] = $row['student_username'];
echo "<a href='/softdev/home/front/index.html' >Redirecting to page......</a>";
}

else{
	
	header('location:/softdev/tutorfinderlogin.html');
	
	
}

?>
