<?php 
$name=$_POST['name1'];
$email=$_POST['name2'];
$mobile=$_POST['name3'];
$message=$_POST['name4'];
$conn=mysqli_connect("localhost", "root" ,"", "database_form" ) or die ("connection failed");
$sql="INSERT INTO database_table(user_name, user_email, user_mobile, user_messages) VALUES ('{$name}', '{$email}', '{$mobile}','($message}')";
$result=mysqli_query($conn, $sql) or die("Query Failed!"); 
header("location:http://localhost/phase2/contact-us.html");
mysqli_close($conn); 
?>