<?php

session_start();

if (isset($_SESSION['student_username'])){
	
	session_destroy();
	
}

?>