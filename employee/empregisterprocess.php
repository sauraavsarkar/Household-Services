<?php
if (isset($_POST['submit'])) {

    if (isset($_POST['empname']) && isset($_POST['emppassword']) && $_POST['emppassword'] == $_POST['empcpassword']&&
        isset($_POST['gender']) && isset($_POST['nid']) && isset($_POST['empemail']) &&
        isset($_POST['empphoneCode']) && isset($_POST['empphone']) && isset($_POST['service']) ) {
        
        $empname = $_POST['empname'];
        $emppassword = $_POST['emppassword'];
        $gender = $_POST['gender'];
        $nid = $_POST['nid'];
        $empemail = $_POST['empemail'];
        $empphoneCode = $_POST['empphoneCode'];
        $empphone = $_POST['empphone'];
        $service = implode(',',$_POST['service']);
        

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "project";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT empemail FROM empregister WHERE empemail = ? LIMIT 1";
            $Insert = "INSERT INTO empregister(empname, emppassword, gender, NID ,empemail, empphoneCode, empphone, services ) values(?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $empemail);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssisiis",$empname, $emppassword, $gender, $nid , $empemail, $empphoneCode, $empphone , $service);
                if ($stmt->execute()) {
                    session_start();
                    $_SESSION["empname"]=$_POST["empname"];
                    echo "Hi ";
                    echo $_SESSION["empname"];
                    echo ", account open sucessfully.";
                    header("refresh:3; url= emplogin.php");
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
                header("refresh:3; url= emplogin.php");
            
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        header("refresh:3; url=empregister.php");
        die();
    }
}
else {
    echo "Submit button";
}
?>