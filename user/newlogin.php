<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../styles/newlogin.css'>
    <title>Document</title>
</head>
<body>
<div class="container">
	<div class="header">
		<h2>Create Account</h2>
	</div>
	<form onsubmit = "return checkInputs()" id="form" action="loginprocess.php" name="login" method="post" class="form" >
		<div class="form-control">
			<label for="username">Username</label>
			<input type="text" placeholder="Username" id="username" name="username" />
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="email">Email</label>
			<input type="email" placeholder="sau@xyz.com" id="email" name="email" />
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="password">Password</label>
			<input type="password" placeholder="Password" id="password" name="password"/>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="password2">Password check</label>
			<input type="password" placeholder="Re-enter Password" id="password2"/>
			<small>Error message</small>
		</div>
		<button type="submit" name= "submit" value="SUBMIT" >Submit</button>
		<script src="../scripts/newlogin.js"> </script>
		
	</form>

</body>
</html>