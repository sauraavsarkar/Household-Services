<?php

if(isset($_POST["submit"])){

    if($_POST["adname"]=="admin" && $_POST["adusername"]=="Naznin" && $_POST["passkey"]=="1234"){

        session_start();

        $_SESSION["adname"]=$_POST["adname"];
        $_SESSION["adusername"]=$_POST["adusername"];

        
        header ("Refresh:0.1 ; URL = admindashboard.php");


    }

    elseif($_POST["adname"]=="User" && $_POST["adusername"]=="Saurav" && $_POST["passkey"]=="1234"){

        session_start();

        $_SESSION["Name"]=$_POST["Name"];
        $_SESSION["adusername"]=$_POST["adusername"];

        
        header ("Refresh:0.1 ; URL = admindashboard.php");


    }

    else{


        echo "Not matched try again !!!!";
        header ("Refresh: 0.1; URL = adminlogin.php");

   }

}


