<?php 


session_start();


$conn = mysqli_connect('localhost','root','');

mysqli_select_db($conn, 'bookstore');

$name = $_POST['name'];
$email = $_POST['email'];
$add = $_POST['address'];
$city = $_POST['city'];
$ccn = $_POST['ccnum'];
$zip = $_POST['zip'];
$year = $_POST['year'];
$month = $_POST['month'];
$ccv = $_POST['ccv'];


$s = " select * from payment where email = '$email'";
 
$result = mysqli_query($conn, $s);  

$num = mysqli_num_rows($result); 

if($num == 1){
	echo "Email already has payment information";
}else{
	$reg= " insert into payment(name, email, address, city, ccnum, zip, year, month, cvv) values ('$name', '$email', '$add', '$city', '$ccn', '$zip', '$year', '$month', '$ccv')";
	mysqli_query($conn, $reg);
	header('location:../html/transaction.html');
}

?> 

