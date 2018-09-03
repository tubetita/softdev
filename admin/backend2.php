
<?php
$con= mysqli_connect("localhost","root","Tyronne1!","tutorfinder");
$sql = "Select * from tutor";

$records=mysqli_query($con,$sql);


?>
<html>
<head>
 <link rel = "stylesheet" href="#">
</head>
<title>tutors</title>
<body>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>NAME</th>
<th>USERNAME</th>
<th>SUBJECT</th>

</tr>
<?php
while ($tutor=mysqli_fetch_assoc($records)){

echo "<tr>";

echo "<td>".$tutor['tutor_fname']." ".$tutor['tutor_lname']." ".$tutor['tutor_middleinitial']."."."</td>";

echo "<td>".$tutor['tutor_username']."</td>";
echo "<td>".$tutor['tutor_subject']."</td>";

echo "</tr>";
}


?>

</tr>
</table>
</body>
</html>