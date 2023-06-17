<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../styles/userlogin.css'>
    <title>Document</title>
</head>
<body>

<div class="wrapper">
	<div class="form">
		<div class="title">
			Login To Coding Market
		</div>
		<form method="post" action="loginprocess.php" onsubmit="return validation();">
			<div class="input_wrap">
				<label for="input_text">Username</label>
				<div class="input_field">
					<input type="text" class="input" id="input_text" name="username">
				</div>
			</div>
			<div class="input_wrap">
				<label for="input_password">Password</label>
				<div class="input_field">
					<input type="password" class="input" id="input_password" name="password">
				</div>
			</div>
			<div class="input_wrap">
				<span class="error_msg">Incorrect username or password. Please try again</span>
				<input type="submit" id="login_btn" class="btn disabled" name= "submit" value="SUBMIT" disabled="true">
			</div>
		</form>
	</div>
</div>
<script src="../scripts/userlogin.js"> </script>
    
</body>
</html>