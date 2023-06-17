<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../styles/contact.css">
<link rel="stylesheet" href="../styles/home.css">
</head>
<body>

<div id="navbar">
  <a href="../Index/home.php" id="logo">SO-EASY</a>
  <div id="navbar-right">
    <a href="../Index/home.php">Home</a>
    <a class="active" href="contact.php">Contact</a>
    <a href="about.php">About</a>
    <a href="../user/login.php">Login</a>
  </div>
</div>


<div style="margin-top:300px;font-size:30px">
<p> </p>
</div>

<div class="Concontainer">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
    <a href="https://goo.gl/maps/cW8YeJSPstpBsfce7"><img src="../image/map.jpg" alt="HTML tutorial" style="width:100%"></a>
    </div>
    <div class="column">
      <form action="../Index/home.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Bangladesh</option>
          <option value="canada">India</option>
          <option value="usa">Pakistan</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit" >
      </form>
    </div>
  </div>
</div>
<script src="../scripts/home.js"> </script>
    <?php include '../Homepage/footer.php';?>

</body>
</html>