<?php

$host='localhost';
$user='root';
$pass='';
$db='chatbox';

$con = mysqli_connect($host,$user,$pass,$db);

$uname = $_REQUEST['uname'];
$msg = $_REQUEST['msg'];

$sql = "INSERT INTO logs(username,msg) VALUES ('$uname', '$msg')";
 mysqli_query($con,$sql);
 
$result1 = mysqli_query($con,"SELECT * FROM logs Order by id DESC");


while($extract = mysqli_fetch_array($result1)) {
	echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}