<?php

if(isset($_POST["submit"])){

    if($_POST["Name"]=="admin" && $_POST["userName"]=="Naznin" && $_POST["passkey"]=="1234"){

        session_start();

        $_SESSION["Name"]=$_POST["Name"];
        $_SESSION["userName"]=$_POST["userName"];

        
        header ("Refresh:0.2 ; URL = admin.php");


    }

    elseif($_POST["Name"]=="User" && $_POST["userName"]=="Saurav" && $_POST["passkey"]=="1234"){

        session_start();

        $_SESSION["Name"]=$_POST["Name"];
        $_SESSION["userName"]=$_POST["userName"];

        
        header ("Refresh:0.2 ; URL = userdashboard.php");


    }

    else{


        header("location: ../../Index/home.php");

   }
   

}
?>


