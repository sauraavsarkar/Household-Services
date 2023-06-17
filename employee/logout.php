<?php



if (session_start()>=0){


    session_unset();

    session_destroy();

    echo "Redirecting....";

}

header("location: ../Index/home.php");




?>