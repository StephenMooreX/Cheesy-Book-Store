<?php 


session_start();

$conn = mysqli_connect('localhost','root','');

mysqli_select_db($conn, 'bookstore');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from users where email = '$name' && password= '$pass'";
 
$result = mysqli_query($conn, $s);  

$num = mysqli_num_rows($result); 

if($num == 1){
	header('location:../html/logon2.html');
	
}else{
	header('location:login.php');
	echo"incorrect credentials";
	
}

?> 