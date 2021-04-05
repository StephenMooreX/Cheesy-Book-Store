<!DOCTYPE html>
<!-- Sign Up Functionality-->
<head>
	<title>Sign Up/ Register</title>
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
        <h1>Log In</h1>
		<form action="validate.php" method="POST"> 
				<div class="form-group">
			        <label>Username</label>
			        <input type="text" name="user" class="form-control" required>
				</div>
				<div class= "form-group">
			        <label>Password</label>
			        <input type="password" name="password" class="form-control" required>
				</div>
	        		<button type="submit" class="signupbtn">Log In</button>
        </form>
	</div>
		<div class= "right-column">
	        <h1>Register </h1>
			<form action="register.php" method="POST"> 
				<div class="form-group">
			        <label>Username</label>
			        <input type="text" name="user" class="form-control" required>
				</div>
				<div class= "form-group">
			        <label>Password</label>
			        <input type="password" name="password" class="form-control" required>
				</div>
		        	<button type="submit" class="signupbtn">Sign Up</button>
	        </form>
		</div>
	</div>
	</div>
</div>   
</body>
</html>