<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/sidenav.css">
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="../styles/bkimage.css">
    <link rel="stylesheet" href="../styles/form.css">
    <title>Admmin login</title>


</head>
<body>
<from>
<h1 style ="text-align:center;" >Admin login page</h1>
<hr>
<br>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../about/about.php">About</a>
  <a href="../employee/emplogin.php">Provider Login</a>
  <a href="../admin/adminlogin.php">Admin Login</a>
  <a href="#">Contact</a>
</div>
<div id="main">
    
<div id="navbar">
<a style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</a>
  <a href="../Index/home.php" id="logo">SO-EASY</a>
  <div id="navbar-right">
    <a href="../Index/home.php">Home</a>
    <a href="#../about/contact.php">Contact</a>
    <a href="../about/about.php">About</a>
    <a class="active" href="../user/login.php">Login</a>
  </div>
  </div>
</div>

<div>
  <form action="adprocess.php" method="post" autocomplete="off" class="container">
    <h1>Admin Login</h1>

    <label for="adname"><b>User name:</b></label>
    <input type="text" placeholder="Enter Username:" name="adname" required>

    <label for="email"><b>Name</b></label>
    <input type="text" placeholder="Name" name="adusername" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="passkey" required>

    <button type="submit" name= "submit" value="SUBMIT" class="btn1">Login</button>
  </form>
</div>

<div class="bg-image img1"></div>
<div class="bg-image img2"></div>
<div class="bg-image img3"></div>
<div class="bg-image img4"></div>
<div class="bg-image img5"></div>
<div class="bg-image img6"></div>
<!--
<form action="adprocess.php" method="post" autocomplete="off">
    <div><p style ="text-align:center;"><b>Name:</b> <input type="text" name="adname" required ></p></div>
    <div><p style ="text-align:center;"><b>User name :</b> <input type="text" name="adusername" required ></p></div>
    <div><p style ="text-align:center;"><b>Password :</b> <input type="password" name="passkey" required></p></div>
    <p style ="text-align:center;"><input type="submit" name= "submit" value="SUBMIT"> <input type="reset" name= "reset" value="RESET"></p>
    <br>
    <a href="home.php"><img src="barrow.png" alt="Login Page" style="width: 40px;px;height:42px;"></a>
-->
<?php include '../Homepage/footer.php';?>
<script src="../scripts/home.js"> </script>
<script src="../scripts/sidenav.js"> </script>


</form>
</body>
</html>
