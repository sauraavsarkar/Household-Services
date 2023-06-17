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
  <img src="../image/emp.jpg" alt="Avatar" class="image">
  <div class="overlay">My Name is 
    <?php 
    echo $_SESSION["username"];?></p>
    </div>
  </div>
  </div>
    
    

<div class="main">

<h1>SO-EASY</h1>
<hr>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> All services</button>
  <button class="btn" onclick="filterSelection('cservice')"> Cleaning Service</button>
  <button class="btn" onclick="filterSelection('eservice')"> Electric And Plumbing</button>
  <button class="btn" onclick="filterSelection('coservice')"> Cooking Services</button>
  <button class="btn" onclick="filterSelection('sservice')"> Our Shop</button>
  <button class="btn" onclick="filterSelection('mservice')"> Medicine and First-Kit</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column cservice">
  <div class="content" id="icontainer">
      <img src="../image/homecleaning.jpg" alt="Mountains" class="image" style="width:100%">
      <div class="middle">
      <h2>Home Cleaning</h2>
      <div class="text"><a href="../services/homecleaning.php">Click</a></div>
      </div>
    </div>
  </div>



  <div class="column cservice">
    <div class="content" id="icontainer">
    <img src="../image/FurnitureCleaning.jpg" alt="Lights" class="image" style="width:100%">
    <div class="middle">
      <h2>Furniture Cleaning</h2>
      <div class="text"><a href="register.php">Click</a></div>
    </div>
    </div>
  </div>


  <div class="column eservice">
    <div class="content" id="icontainer">
    <img src="../image/Electric Services.jpg" alt="Nature" class="image"  style="width:100%">
    <div class="middle">
      <h2>Electric Services</h2>
      <div class="text"><a href="register.php">Click</a></div>
    </div>
  </div>
  </div>
  



  <div class="column eservice">
    <div class="content" id="icontainer">
      <img src="../image/Plumbing Services.jpg" alt="Plumbing Services" class="image" style="width:100%">
      <div class="middle">
      <h2>Plumbing Services</h2>
      <div class="text"><a href="register.php">Click</a></div>
      </div>
    </div>
  </div>


  <div class="column coservice">
    <div class="content" id="icontainer">
    <img src="../image/Chef.jpg" alt="Chef" class="image" style="width:100%">
    <div class="middle">
      <h2>Chef</h2>
      <div class="text"><a href="register.php">Click</a></div>
      </div>
    </div>
  </div>



  <div class="column coservice">
    <div class="content" id="icontainer">
    <img src="../image/Homechef.jpg" alt="Car" class="image"  style="width:100%">
    <div class="middle">
      <h2>Home Chef</h2>
      <div class="text"><a href="register.php">Click</a></div>
    </div>
  </div>
  </div>

  <div class="column coservice">
    <div class="content" id="icontainer">
      <img src="../image/Partychef.jpg" alt="Car" class="image" style="width:100%">
      <div class="middle">
      <h2>Party chef </h2>
      <div class="text"><a href="register.php">Click</a></div>
      </div>
    </div>
  </div>


  <div class="column sservice">
    <div class="content" id="icontainer">
    <img src="../image/Daraz.png" alt="Car" class="image" style="width:100%">
    <div class="middle">
      <h2>Daraz</h2>
      <div class="text"><a href="register.php">Click</a></div>
      </div>
    </div>
  </div>




  <div class="column  mservice">
  <div class="content" id="icontainer">
    <img src="../image/firstaidkit.png" alt="Car" class="image" style="width:100%">
    <div class="middle">
      <h2>Firstaid</h2>
      <div class="text"><a href="register.php">Click</a></div>
      </div>
    </div>
  </div>


<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>
<?php include '../Homepage/footer.php';?>

<script src="../scripts/home.js"> </script>
<script src="../scripts/home1.js"> </script>
<script src="../scripts/sidenav.js"> </script>




</body>
</html>