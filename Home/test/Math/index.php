<?php

session_start();

?>

<html>
<head>
<link rel="stylesheet" href="css/main.css">
<title>Chat Box</title>

<script
  src="http://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script>

function submitChat() {
	if(form1.msg.value == '') {
		alert("Enter your message!!!");
		return;
	}
	var msg = form1.msg.value;
	var xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
		}
	}
	
	xmlhttp.open('GET','insert.php?msg='+msg,true);
	xmlhttp.send();

}

$(document).ready(function(e){
	$.ajaxSetup({
		cache: false
	});
	setInterval( function(){ $('#chatlogs').load('logs.php'); }, 2000 );
});

</script>


</head>
<body>

<div class="booth"><b>Linda X. Blaire</b>

<video id="video" width="400" height="300" autoplay></video>
<script src="video.js"></script>


</div>
<script src="video.js"></script>
<form name="form1">
Your Chatname: <b><?php echo $_SESSION['student_username']; ?></b> <br />
Your Message: <br />
<textarea name="msg"></textarea><br />
<a href="#" onclick="submitChat()">Send</a><br /><br />

<a href="logout.php">Logout</a><br /><br />

</form>
<div id="chatlogs">
LOADING CHATLOG...
</div>

</body>