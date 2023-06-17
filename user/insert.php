<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['password']) && $_POST['password'] == $_POST['cpassword']&&
        isset($_POST['gender']) && isset($_POST['email']) &&
        isset($_POST['phoneCode']) && isset($_POST['phone']) ) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phoneCode = $_POST['phoneCode'];
        $phone = $_POST['phone'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "project";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM register WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO register(username, password, gender, email, phoneCode, phone) values(?, ?, ?, ?, ?, ?)";

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
                $stmt->bind_param("ssssii",$username, $password, $gender, $email, $phoneCode, $phone);
                if ($stmt->execute()) {
                    session_start();
                    $_SESSION["username"]=$_POST["username"];
                    echo "<h1 class='mycss'>Hi $username</h1> ";
                    echo "<h2> , Account Open Sucessfully.</h2>";
                    echo "<link rel='stylesheet' href='../styles/waving.css'>";
                    echo "<span class=\"emoji wave\" role=\"img\" aria-label=\"hand wave\"></span>";
                    header("refresh:5; url= login.php");
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
    header("refresh:3; url=register.php");
    die();
}
?>
