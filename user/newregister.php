<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/sidenav.css">
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="../styles/bkimage.css">
    <link rel='stylesheet' href='../styles/newregister.css'>

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
    <h1>Registration form</h1>

    <!--form container-->
    <div class="form-container">
    <form action="" method="post">
        <!--flexbox and it's items-->
        <div class="flex">
            <div class="flex-item">
            <!--full name field-->
                <div class="field-container">
                    <label for="full-name">Full Name: <span class="required">*</span></label>
                    <input type="text" name="full-name"   pattern="^([a-zA-Z]{2,} ?)+$" id="full-name" placeholder="Your full name" required="required" />
                    <span class="error-messg"></span>              
                </div>
            
             <!--email field-->
                <div class="field-container">
                    <label for="email">Email: <span class="required">*</span></label>
                    <input type="email" name="email" id="email" placeholder="Your email" required="required" />
                    <span class="error-messg"></span>
                </div>

             <!--confirm email field-->
                <div class="field-container">
                    <label for="confirm-email">Confirm email: <span class="required">*</span></label>
                    <input type="email" name="confirm-email" id="confirm-email" placeholder="Re-enter email" required="required" />
                    <span class="error-messg"></span>
                </div>
                
            </div>
            <div class="flex-item">
                <!--contact no field-->
                <div class="field-container">
                    <label for="contact-no">Contact no.: <span class="required">*</span></label>
                    <input type="tel" name="contact-no" pattern=[0-9]{10} id="contact-no" placeholder="Mobile number" required="required" />
                    <span class="error-messg"></span>
                </div>

                <!--password field-->
                <div class="field-container">
                    <label for="passkey">Password: <span class="required">*</span></label>
                    <div class="passkey-box">
                    <input type="password" name="passkey" id="passkey" class="passkey" placeholder="Password" required="required" />
                    <span class="passkey-icon" data-display-passkey="off"><i class="fas fa-eye"></i>  </span>
                    </div>
                    <span class="error-messg"></span>
                </div>

                <!--confirm password field-->
                <div class="field-container">
                    <label for="confirm-passkey">Confirm password: <span class="required">*</span></label>
                    <div class="passkey-box">
                    <input type="password" name="confirm-passkey" class="passkey" id="confirm-passkey" placeholder="Re-enter password" required="required" />
                    <span class="passkey-icon" data-display-passkey="off"><i class="fas fa-eye"></i></span>
                    </div>
                    <span class="error-messg"></span>
                </div>
                
            </div>
        </div>
        <!--Submit button-->
        <div class="center"><input type="submit" value="Register"></div>
        <script src="../scripts/newregister.js"> </script>
    </form>
    </div>

</div>
</div>
</div>


<div class="bg-image img1"></div>
<div class="bg-image img2"></div>
<div class="bg-image img3"></div>
<div class="bg-image img4"></div>
<div class="bg-image img5"></div>
<div class="bg-image img6"></div>



<?php include '../Homepage/footer.php';?>
<script src="../scripts/sidenav.js"> </script>
<script src="../scripts/home.js"> </script>


</form>
</body>
</html>

