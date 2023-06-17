<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../styles/sidenav.css">
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="../styles/home1.css">
    <link rel="stylesheet" href="../styles/image.css">
    <link rel="stylesheet" href="../styles/profileicon.css">
    <title>Userdashboard</title>
</head>
<body>
<h1 style ="text-align:center;" >Login page</h1>
<hr>
<br>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../about/aboutme.php">About You</a>
  <a href="forgotpass.php">Change password</a>
  <a href="logout.php">Logout</a>
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
    <a class="active" href="userdashboard.php">User Home</a>
  </div>
  </div>
</div>




<div style="margin-top:50px;padding:15px 15px 250px;font-size:30px">
  <p>

  <div class="picontainer">
  <img src="../image/user.jpg" alt="Avatar" class="image">
  <div class="overlay">My Name is 
    <?php 
    echo $_SESSION["username"];?></p>
    </div>
  </div>
  </div>
    
    

<div class="main">



<!-- END MAIN -->
</div>
<?php include '../Homepage/footer.php';?>

<script src="../scripts/home.js"> </script>
<script src="../scripts/home1.js"> </script>
<script src="../scripts/sidenav.js"> </script>




</body>
</html>