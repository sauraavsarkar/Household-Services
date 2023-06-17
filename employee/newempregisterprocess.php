<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['password']) 
    && isset($_POST['nid']) && isset($_POST['service'])  ) {
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $password = $_POST['password'];
        $nid = $_POST['nid'];
        $service = $_POST['service'];
       
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
            $Insert = "INSERT INTO employee(username, email,contact, password,nid,service) values(?, ?, ?, ?,?,?)";

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
                $stmt->bind_param("ssisis",$username, $email,$contact,$password,$nid,$service);
                if ($stmt->execute()) {
                    session_start();
                    $_SESSION["username"]=$_POST["username"];
                    echo "Hi ";
                    echo $_SESSION["username"];
                    echo ", account open sucessfully.";
                    header("refresh:3; url= ../employee/emplogin.php");
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
                header("refresh:3; url= ../employee/empregister.php");
            
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        header("refresh:3; url=../employee/empregister.php");
        die();
    }
}
else {
    echo "Submit button";
}
?>