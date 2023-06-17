<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "project");
if (count($_POST) > 0) {

    $sql = "SELECT * FROM register WHERE username= ?";
    $statement = $conn->prepare($sql);
    $statement->bind_param('s', $_SESSION["username"]);
    $statement->execute();
    $result = $statement->get_result();
    $row = $result->fetch_assoc();

    if (! empty($row)) {
        if($_POST['newpass'] == $_POST['confnewpass']) {
            $sql = "UPDATE register set password=? WHERE username=?";
            $statement = $conn->prepare($sql);
            $statement->bind_param('ss', $_POST['newpass'], $_SESSION["username"]);
            $statement->execute();
            header("location: ../Index/home.php");
            echo "Password Changed";
        } else
            echo "Current Password is not correct";
            
            
    }
}
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Change Password</title>
    </head>
    <body>
        <from>
    <h1 style ="text-align:center;" >Change Password</h1>
    <hr>
    <form action="" method="post" autocomplete="off">
        <div><p style ="text-align:center;"><b>New Password:</b> <input type="password" name="newpass" required ></p></div>
        <div><p style ="text-align:center;"><b> Confirm Password :</b> <input type="password" name="confnewpass" required></p></div>
        <p style ="text-align:center;"><input type="submit" name= "submit" value="SUBMIT"> <input type="reset" name= "reset" value="RESET"></p>
    </form>
    </body>
</html>



    
    