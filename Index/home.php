<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../styles/home.css">
<link rel="stylesheet" href="../styles/home1.css">
<link rel="stylesheet" href="../styles/image.css">
</head>
<body>

<div id="navbar">
  <a href="home.php" id="logo">SO-EASY</a>
  <div id="navbar-right">
    <a class="active" href="#home">Home</a>
    <a href="../about/contact.php">Contact</a>
    <a href="../about/about.php">About</a>
    <a href="../user/login.php">Login</a>
  </div>
</div>

<div style="margin-top:0px;padding:15px 15px 250px;font-size:30px">
  <p></p>
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
      <div class="text"><a href="../user/login.php">Click</a></div>
      </div>
    </div>
  </div>



  <div class="column cservice">
    <div class="content" id="icontainer">
    <img src="../image/FurnitureCleaning.jpg" alt="Lights" class="image" style="width:100%">
    <div class="middle">
      <h2>Furniture Cleaning</h2>
      <div class="text"><a href="../user/login.php">Click</a></div>
    </div>
    </div>
  </div>


  <div class="column eservice">
    <div class="content" id="icontainer">
    <img src="../image/Electric Services.jpg" alt="Nature" class="image"  style="width:100%">
    <div class="middle">
      <h2>Electric Services</h2>
      <div class="text"><a href="../user/login.php">Click</a></div>
    </div>
  </div>
  </div>
  



  <div class="column eservice">
    <div class="content" id="icontainer">
      <img src="../image/Plumbing Services.jpg" alt="Plumbing Services" class="image" style="width:100%">
      <div class="middle">
      <h2>Plumbing Services</h2>
      <div class="text"><a href="../user/login.php">Click</a></div>
      </div>
    </div>
  </div>


  <div class="column coservice">
    <div class="content" id="icontainer">
    <img src="../image/Chef.jpg" alt="Chef" class="image" style="width:100%">
    <div class="middle">
      <h2>Chef</h2>
      <div class="text"><a href="../user/login.php">Click</a></div>
      </div>
    </div>
  </div>



  <div class="column coservice">
    <div class="content" id="icontainer">
    <img src="../image/Homechef.jpg" alt="Car" class="image"  style="width:100%">
    <div class="middle">
      <h2>Home Chef</h2>
      <div class="text"><a href="../user/login.php">Click</a></div>
    </div>
  </div>
  </div>

  <div class="column coservice">
    <div class="content" id="icontainer">
      <img src="../image/Partychef.jpg" alt="Car" class="image" style="width:100%">
      <div class="middle">
      <h2>Party chef </h2>
      <div class="text"><a href="../user/login.php">Click</a></div>
      </div>
    </div>
  </div>


  <div class="column sservice">
    <div class="content" id="icontainer">
    <img src="../image/Daraz.png" alt="Car" class="image" style="width:100%">
    <div class="middle">
      <h2>Daraz</h2>
      <div class="text"><a href="../user/login.php">Click</a></div>
      </div>
    </div>
  </div>




  <div class="column  mservice">
  <div class="content" id="icontainer">
    <img src="../image/firstaidkit.png" alt="Car" class="image" style="width:100%">
    <div class="middle">
      <h2>Firstaid</h2>
      <div class="text"><a href="../user/login.php">Click</a></div>
      </div>
    </div>
  </div>

<!-- Portfolio Gallery Grid -->
<!-- END MAIN -->
</div>
<?php include '../Homepage/footer.php';?>
<script src="../scripts/home.js"> </script>
<script src="../scripts/home1.js"> </script>


</body>

</html>
