<head>
<?php
$con=mysqli_connect("localhost","root","","girls") or die("not conneted");
$name=mysql_real_escape_string($_POST["username"]);
$password=md5(mysql_real_escape_string($_POST["password"]));
if(strlen($name)<'' || $password)
$query='select name,password from login where name="'.$name.'" and password="'.$password.'"';
$result= mysqli_query($con,$query) or die("unable to sign in ,please try one more time");
$row=mysqli_fetch_assoc($result);

if($row['name']==$name&&$row['password']==$password)
{
echo "<i><h1 align='center' style='background:#A683BA' color='yellow'>welcome    ".$row['name']."</h1></i>";
session_start();
$_SESSION['name']=$row['name'];
header('Location:backup.php');
}
else{
echo "<h1 align='center'>no record found <br> sign up please</h1>";
include 'login.php';}
?>
</head>
