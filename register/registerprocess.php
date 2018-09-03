<?php
session_start();

$host='localhost';
$user='root';
$pass='Tyronne1!';
$db='tutorfinder';

$connect = mysqli_connect($host,$user,$pass,$db);

if($connect)
	echo 'connected to database';

$user_name = $_POST['user_name'];
$first_name = $_POST['first_name'];
$middle_initial = $_POST['middle_initial'];
$last_name = $_POST['last_name'];
$contact_number = $_POST['contact_number'];
$email_address = $_POST['email_address'];
$password = $_POST['password'];



$sql = "INSERT INTO students (student_lname,student_fname,student_middleinitial,student_contactnumber,
student_password,student_username,student_emailaddress)
 VALUES ('$last_name','$first_name','$middle_initial','$contact_number','$password','$user_name','$email_address')";
 
$result=mysqli_query($connect,$sql);

header('Location:/softdev/tutorfinderlogin.html');

?>

