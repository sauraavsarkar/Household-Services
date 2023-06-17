<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
</head>
<body>
    <from>
<h1 style ="text-align:center;" >Login page</h1>
<hr>

<form action="loginprocess.php" method="post" autocomplete="off">
    <div><p style ="text-align:center;"><b>User name:</b> <input type="text" name="username" required ></p></div>
    <div><p style ="text-align:center;"><b>Email :</b> <input type="text" name="email" required ></p></div>
    <div><p style ="text-align:center;"><b>Password :</b> <input type="password" name="password" required></p></div>
    <p style ="text-align:center;"><input type="submit" name= "submit" value="SUBMIT"> <input type="reset" name= "reset" value="RESET"></p>
    <br>
    <a href="home.php"><img src="barrow.png" alt="Login Page" style="width: 40px;px;height:42px;"></a> 
<p>Service provider <a href="emplogin.php"> login </a>.</p>
<p>Admin <a href="adminlogin.php"> login </a>.</p>
<a href="register.php"><img src="reg.png" alt="Register Page" style="width: 100px;px;height:42px;"></a>

</form>
</body>
</html>

