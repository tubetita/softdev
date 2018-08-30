

	$connect = mysqli_connect('127.0.0.1','root','','validation');

	$EMAIL=$_POST['email'];
	$PASSWORD=$_POST['password'];

	$query= "SELECT * from register where username='$USER' and password='$PASSWORD'";

	$result=mysqli_query($connect, $query);

	if(mysqli_num_rows($result)==1){
		session_start();
		$_SESSION['emima']='true';
		header('location:../home/home.php');
	}else{
		echo "Wrong username or password";
	}

