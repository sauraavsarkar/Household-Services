<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){

    $link = mysqli_connect('localhost', 'root','','project');
 
// Check connection
    if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    
    // Prepare a select statement
    $sql = "SELECT * FROM empregister WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $name = $row["empname"];
                $salary = $row["gender"];
                $salary = $row["NID"];
                $salary = $row["empemail"];
                $salary = $row["services"];

            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("Refresh:4 ; url=error.php");
                exit();
            }
        }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee records</title>

</head>
<body>
                    <h1 > Employee records</h1>
                    <div class="form-group">
                        <label>Name</label>
                        <p><b><?php echo $row["empname"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <p><b><?php echo $row["gender"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>NID</label>
                        <p><b><?php echo $row["NID"]; ?></b></p>
                    </div>
                    </div>
                    <div class="form-group">
                        <label>Empemail</label>
                        <p><b><?php echo $row["empemail"]; ?></b></p>
                    </div>
                    </div>
                    <div class="form-group">
                        <label>services</label>
                        <p><b><?php echo $row["services"]; ?></b></p>
                    </div>

                    <p><a href="empcrud.php" class="btn btn-primary">Back</a></p>
                </div>
 
</body>
</html>