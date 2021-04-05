<?php 


session_start();


$conn = mysqli_connect('localhost','root','');

mysqli_select_db($conn, 'bookstore');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from users where email = '$name'";
 
$result = mysqli_query($conn, $s);  

$num = mysqli_num_rows($result); 

if($num == 1){
	echo "User already exists";
}else{
	$reg= " insert into users(email, password) values ('$name' , '$pass')";
	mysqli_query($conn, $reg);
	header('location:../html/logon.html');
	
}

?> 