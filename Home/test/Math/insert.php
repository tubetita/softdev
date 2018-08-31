<?php
session_start();
$host='localhost';
$user='root';
$pass='';
$db='tutorfinder';

$con = mysqli_connect($host,$user,$pass,$db);

$uname = $_SESSION['student_username'];
$msg = $_REQUEST['msg'];

$sql = "INSERT INTO logsm(username,msg) VALUES ('$uname', '$msg')";
 mysqli_query($con,$sql);
 
$result1 = mysqli_query($con,"SELECT * FROM logsm Order by id DESC");


while($extract = mysqli_fetch_array($result1)) {
	echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}