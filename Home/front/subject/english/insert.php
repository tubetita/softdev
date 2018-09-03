<?php
session_start();
$host='localhost';
$user='root';
$pass='Tyronne1!';
$db='tutorfinder';

$con = mysqli_connect($host,$user,$pass,$db);

$uname = $_SESSION['student_username'];
$msg = $_REQUEST['msg'];

$sql = "INSERT INTO logse(username,msg) VALUES ('$uname', '$msg')";
 mysqli_query($con,$sql);
 
$result1 = mysqli_query($con,"SELECT * FROM logs Order by id DESC");


while($extract = mysqli_fetch_array($result1)) {
	echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}