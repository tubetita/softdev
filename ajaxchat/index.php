<?php
session_start();
$_SESSION['students'] = (isset($_GET['students']) === true) ? (int)$_GET['students'] : 0;

require 'core/classes/core.php';
require 'core/classes/chat.php';
$chat = new Chat();
echo '<pre>', print_r($chat->fetchMessages(), true), '</pre';


?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="chat">
	<div class="messages"> </div>
	<textarea class="entry" placeholder="Type here and hit Enter. Use Shift + Return for a new line"></textarea>
	</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"</script>
<script src="js/chat.js"></script>
</body>
</html>
