<head>
<?php
$con=mysqli_connect("localhost","root","","girls") or die("not conneted");
$name=mysql_real_escape_string($_POST["username"]);
$age=mysql_real_escape_string($_POST["userage"]);
$email=mysql_real_escape_string($_POST["email"]);
$password=md5(mysql_real_escape_string($_POST["password"]));

$query="insert into login(name,email,age,password) values('".$name."','".$email."','".$age."','".$password."')";
mysqli_query($con,$query) or die("unable to signup ,please try one more time");
echo "<i><h1 align='center' style='background:#A683BA' color='yellow'>sucessfully  registered  now login".$name."</h1></i>";
include 'login.php';
?>
</head>
