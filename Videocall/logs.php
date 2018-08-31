<?php

$host='localhost';
$user='root';
$pass='';
$db='chatbox';


$con = mysqli_connect($host,$user,$pass,$db);


$result1 = mysqli_query($con,"SELECT * FROM logs Order by id DESC");

while($extract = mysqli_fetch_array($result1)) {
	echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}