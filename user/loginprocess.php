<?php

if (session_status()>=0){

    if(isset($_SESSION["username"])){

        header("Refresh:1 ; url=home.php");

        //echo $_SESSION["userName"];

    }

}


if(isset($_POST["submit"])){
$uName=$_POST["username"];
$passkey=$_POST["password"];




$conn = mysqli_connect('localhost','root','','project') ;

$sql=" SELECT  username,password,email FROM  user WHERE username='$uName' and  password='$passkey'";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

$count=mysqli_num_rows($result);

if($count == 1){

    session_start();

    $_SESSION["username"]=$uName;


     echo "You are now redirected";
     header("Refresh:0 ; url=userdashboard.php");

     exit();
    }
else {
    echo "User not found";
    header("Refresh:1; url=login.php");
}

}                          

    if(!isset($_POST["submit"])){
    echo "Please fill the User Name and Password";
    header("Refresh:1 ; url=login.php");


}

?>