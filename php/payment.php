<!DOCTYPE html>
<!-- Sign Up Functionality-->
<head>
	<title>Payment Information</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="../css/MStyles.css">
		<link href="https://fonts.googleapis.com/css?family=Cinzel|Lato&display=swap" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Shrikhand&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src= "../js/final.js"></script>
		
		</head>
<body>
<div class="w3-theme-14">
   <div class="container">
   <div class="login-box">
   <div class="left-column">
        <h1>Enter Payment Information Below</h1>
		<form action="paymentsave.php" method="POST"> 
				<div class="form-group">
			        <label>Name on Card</label>
			        <input type="text" name="name" class="form-control" required>
				</div>
				<div class= "form-group">
			        <label>Email (Linked to User)</label>
			        <input type="text" name="email" class="form-control" required>
				</div>
				<div class= "form-group">
			        <label>Address</label>
			        <input type="text" name="address" class="form-control" required>
				</div>
				<div class= "form-group">
			        <label>City</label>
			        <input type="text" name="city" class="form-control" required>
				</div>
				<div class= "form-group">
			        <label>Card Number</label>
			        <input type="text" name="ccnum" class="form-control" required>
				</div>
				<div class= "form-group">
			        <label>Zip Code</label>
			        <input type="text" name="zip" class="form-control" required>
				</div>
				<div class= "form-group">
			        <label>Expiration Year</label>
			        <input type="text" name="year" class="form-control" required>
				</div>
				<div class= "form-group">
			        <label>Expiration Month</label>
			        <input type="text" name="month" class="form-control" required>
				</div>
				<div class= "form-group">
			        <label>CCV</label>
			        <input type="password" name="ccv" class="form-control" required>
				</div>
	        		<button type="submit" class="signupbtn" onclick="purchaseSaved()">Save</button>
        </form>
	</div>
	</div>
	</div> 
</div>   
</body>
</html>

