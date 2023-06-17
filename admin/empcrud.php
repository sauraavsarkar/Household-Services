<!DOCTYPE html>
<html lang="en">
<head>

    <title> Employee records</title>
</head>
<body>
    
<a href="empcreate.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Employee</a><br>
<?php
                    $link = mysqli_connect('localhost', 'root','','project');
 
// Check connection
                    if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                    }

                    // Attempt select query execution
                    $sql = "SELECT * FROM empregister";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table border="1" cellspacing="2" cellpadding="2">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>id</th>";
                                        echo "<th>empname</th>";
                                        echo "<th>nid</th>";
                                        echo "<th>empemail</th>";
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['empname'] . "</td>";
                                        echo "<td>" . $row['NID'] . "</td>";
                                        echo "<td>" . $row['empemail'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="empview.php?id='. $row['id'] .'class="view_btn">VIEW </a>';
                                           // echo '<a href="empupdate.php?id='. $row['id'] .'class="up_btn"> UPDATE </a>';
                                            echo '<a href="empdelete.php?id='. $row['id'] .'class="del_btn"> DELETE </a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "No records were found";
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
</body>
</html>