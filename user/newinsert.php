<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['password']) ) {
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $password = $_POST['password'];
       
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "project";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM user WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO user(username, email,contact, password) values(?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssis",$username, $email,$contact,$password);
                if ($stmt->execute()) {
                    session_start();
                    $_SESSION["username"]=$_POST["username"];
                    echo "Hi ";
                    echo $_SESSION["username"];
                    echo ", account open sucessfully.";
                    header("refresh:3; url= ../user/login.php");
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
                header("refresh:3; url= register.php");
            
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        header("refresh:3; url=register.php");
        die();
    }
}
else {
    echo "Submit button";
}
?>