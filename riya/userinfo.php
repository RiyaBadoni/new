<?php
session_start();
header("Location:index.php");

$con = mysqli_connect("localhost","root","","mydatabase");
if($con){
	echo "";
}else
{
	echo "no connection";
}

mysqli_select_db($con, 'signin');

$name = $_POST['user'];
$email = $_POST['email'];
$contect = $_POST['contect'];
$comment = $_POST['comment'];

$sql="insert into userinfo(username,email,Contect,Comment) 
value('$name','$email','$contect','$comment')";


$result=$con -> query($sql);











?>