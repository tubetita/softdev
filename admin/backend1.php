
<?php
$con= mysqli_connect("localhost","root","Tyronne1!","tutorfinder");
$sql = "Select * from students";

$records=mysqli_query($con,$sql);


?>
<html>
<head>
 <link rel = "stylesheet" href="#">
</head>
<title>Students</title>
<body>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>NAME</th>
<th>USERNAME</th>
<th>CONTACT NUMBER</th>
<th>Email Address</th>
<th>Password</th>
</tr>
<?php
while ($student=mysqli_fetch_assoc($records)){

echo "<tr>";

echo "<td>".$student['student_fname']." ".$student['student_lname']." ".$student['student_middleinitial']."."."</td>";

echo "<td>".$student['student_username']."</td>";
echo "<td>".$student['student_contactnumber']."</td>";
echo "<td>".$student['student_emailaddress']."</td>";
echo "<td>".$student['student_password']."</td>";
echo "</tr>";
}


?>

</tr>
</table>
</body>
</html>