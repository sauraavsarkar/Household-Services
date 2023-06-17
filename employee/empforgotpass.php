
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "project");
if (count($_POST) > 0) {

    $sql = "SELECT * FROM empregister WHERE empname= ?";
    $statement = $conn->prepare($sql);
    $statement->bind_param('s', $_SESSION["empname"]);
    $statement->execute();
    $result = $statement->get_result();
    $row = $result->fetch_assoc();

    if (! empty($row)) {
        if($_POST['empnewpass']== $_POST['empconfnewpass']) {
            $sql = "UPDATE empregister set emppassword=? WHERE empname=?";
            $statement = $conn->prepare($sql);
            $statement->bind_param('ss', $_POST['empnewpass'], $_SESSION["empname"]);
            $statement->execute();
            echo "Password Changed";
            header("Refresh: 3 ; url = logout.php");
        } else
            echo "Current Password is not correct";
            header("Refresh: 3 ; url = empdashboard.php");
            
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot password</title>
</head>
<body>
<from>
    <h1 style ="text-align:center;" >Change Password</h1>
    <hr>
    <form action="" method="post" autocomplete="off">
        <div><p style ="text-align:center;"><b>New Password:</b> <input type="password" name="empnewpass" required ></p></div>
        <div><p style ="text-align:center;"><b> Confirm Password :</b> <input type="password" name="empconfnewpass" required></p></div>
        <p style ="text-align:center;"><input type="submit" name= "submit" value="SUBMIT"> <input type="reset" name= "reset" value="RESET"></p>
    </form>
    
</body>
</html>
