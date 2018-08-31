<?php
session_start();
?>


<head>
</head>


<body>
<a href="logout.php">Logout</a>
<?php 
	if (isset($_SESSION['student_username'])){
	echo "<a href='test/Science/index.php'>Science</a>";
	}
?>

<a href="test/math/index.php">Math</a>



</body>
</html>