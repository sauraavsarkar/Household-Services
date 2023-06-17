<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="../styles/about.css">
    <title>My test page</title>

  </head>
  <body>
  <div id="navbar">
  <a href="../Index/home.php" id="logo">SO-EASY</a>
  <div id="navbar-right">
    <a href="../Index/home.php">Home</a>
    <a href="../about/contact.php">Contact</a>
    <a class="active"href="about.php">About</a>
    <a href="../user/login.php">Login</a>
  </div>
</div>


<div style="margin-top:300px;font-size:30px">
<p> </p>
</div>


<div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="../image/naznin.jpg" alt="naznin" style="width:100%">
      <div class="abcontainer">
        <h2>Naznin</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>naznin@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../image/arpita.png" alt="Mike" style="width:100%">
      <div class="abcontainer">
        <h2>Arpita</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>arpita@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="../image/DSC_0695.JPG" alt="John" style="width:100%">
      <div class="abcontainer">
        <h2>Saurav</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>saurav@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
    <script src="../scripts/home.js"> </script>
    <?php include '../Homepage/footer.php';?>
  </body>
</html>