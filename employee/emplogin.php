<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/sidenav.css">
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="../styles/bkimage.css">
    <link rel="stylesheet" href="../styles/social.css">
    <link rel='stylesheet' href='../styles/userlogin.css'>

    <title>login</title>
</head>
<body>
    
<h1 style ="text-align:center;" >Login page</h1>
<hr>
<br>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../about/about.php">About</a>
  <a href="../employee/emplogin.php">Provider Login</a>
  <a href="../admin/adminlogin.php">Admin Login</a>
  <a href="../about/contact.php">Contact</a>
</div>


<div id="main">
    
<div id="navbar">
<a style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</a>
  <a href="../Index/home.php" id="logo">SO-EASY</a>
  <div id="navbar-right">
    <a href="../Index/home.php">Home</a>
    <a href="../about/contact.php">Contact</a>
    <a href="../about/about.php">About</a>
    <a class="active" href="login.php">Login</a>
  </div>
  </div>
</div>

<div class="wrapper">
	<div class="form">
		<div class="title">
    Provider Login
		</div>
		<form method="post" action="emploginprocess.php" onsubmit="return validation();">
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

        <a href="empregister.php" class="btn2">Signup</a>
			</div>
		</form>
	</div>
</div>
<script src="../scripts/userlogin.js"> </script>









<!--
  <form action="loginprocess.php" method="post" autocomplete="off" class="container">

  <form action="/action_page.php">
    <div class="row">
      <h2 style="text-align:center">Login with Social Media or Manually</h2>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
      <a href="https://www.facebook.com/" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>
        <a href="https://www.twitter.com/" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <a href="https://www.google.com/" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      </div>

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

    </div>
  </form>
</div>
</div>
</div>
-->
<!--

    <div class="col">
        <a href="https://www.facebook.com/" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>
        </div>
        <div class="col">
        <a href="https://www.twitter.com/" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        </div>
        <div class="col">
        <a href="https://www.google.com/" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      </div>
-->
 <!--     <div class="col">
    <label for="email"><b>User name:</b></label>
    <input type="text" placeholder="Enter Username:" name="username" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    

    <button type="submit" name= "submit" value="SUBMIT" class="btn1">Login</button>
    
    <a href="register.php" class="btn2">Signup</a>
    </div>
-->
  </form>



<div class="bg-image img1"></div>
<div class="bg-image img2"></div>
<div class="bg-image img3"></div>
<div class="bg-image img4"></div>
<div class="bg-image img5"></div>
<div class="bg-image img6"></div>

<!--<form action="loginprocess.php" method="post" autocomplete="off">
    <div><p style ="text-align:center;"><b>User name:</b> <input type="text" name="username" required ></p></div>
    <div><p style ="text-align:center;"><b>Email :</b> <input type="text" name="email" required ></p></div>
    <div><p style ="text-align:center;"><b>Password :</b> <input type="password" name="password" required></p></div>
    <p style ="text-align:center;"><input type="submit" name= "submit" value="SUBMIT"> <input type="reset" name= "reset" value="RESET"></p>
    <br>
    <a href="../Index/home.php"><img src="barrow.png" alt="Login Page" style="width: 40px;px;height:42px;"></a> 
<p>Service provider <a href="../employee/emplogin.php"> login </a>.</p>
<p>Admin <a href="../admin/adminlogin.php"> login </a>.</p>
<a href="register.php"><img src="reg.png" alt="Register Page" style="width: 100px;px;height:42px;"></a>-->

<?php include '../Homepage/footer.php';?>
<script src="../scripts/sidenav.js"> </script>
<script src="../scripts/home.js"> </script>
<script src="../scripts/userlogin.js"> </script>


</form>
</body>
</html>





































<!--<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/sidenav.css">
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="../styles/bkimage.css">
    <link rel="stylesheet" href="../styles/form.css">
    <title>Employee login</title>
</head>
<body>
<from>
<h1 style ="text-align:center;" >Login page</h1>
<hr>
<br>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../about/about.php">About</a>
  <a href="../employee/emplogin.php">Provider Login</a>
  <a href="../admin/adminlogin.php">Admin Login</a>
  <a href="../about/contact.php">Contact</a>
</div>


<div id="main">
    
<div id="navbar">
<a style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</a>
  <a href="home.php" id="logo">SO-EASY</a>
  <div id="navbar-right">
    <a href="../Index/home.php">Home</a>
    <a href="#contact">Contact</a>
    <a href="../about/about.php">About</a>
    <a class="active" href="../user/login.php">Login</a>
  </div>
  </div>
</div>

<div>
  <form action="emploginprocess.php" method="post" autocomplete="off" class="container">
    <h1>Provider Login</h1>

    <label for="email"><b>User name:</b></label>
    <input type="text" placeholder="Enter Username:" name="empname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="empemail" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="emppassword" required>

    <button type="submit" name= "submit" value="SUBMIT" class="btn1">Login</button>
    
    <a href="empregister.php" class="btn2">Signup</a>
  </form>
</div>



<div class="bg-image img1"></div>
<div class="bg-image img2"></div>
<div class="bg-image img3"></div>
<div class="bg-image img4"></div>
<div class="bg-image img5"></div>
<div class="bg-image img6"></div>


<form action="emploginprocess.php" method="post" autocomplete="off">
    <div><p style ="text-align:center;"><b>User name:</b> <input type="text" name="empname" required ></p></div>
    <div><p style ="text-align:center;"><b>Email :</b> <input type="text" name="empemail" required ></p></div>
    <div><p style ="text-align:center;"><b>Password :</b> <input type="password" name="emppassword" required></p></div>
    <p style ="text-align:center;"><input type="submit" name= "submit" value="SUBMIT"> <input type="reset" name= "reset" value="RESET"></p>
    <br>
    <a href="../Index/home.php"><img src="barrow.png" alt="Login Page" style="width: 40px;px;height:42px;"></a>  
    <p>if you are a new service provider please <a href="empregister.php"> Register </a>.</p>
    <a href="empregister.php"><img src="reg.png" alt="Register Page" style="width: 100px;px;height:42px;"></a>

<#?php include '../Homepage/footer.php';?>
<script src="../scripts/home.js"> </script>
<script src="../scripts/sidenav.js"> </script>


</form>
</body>
</html>

-->