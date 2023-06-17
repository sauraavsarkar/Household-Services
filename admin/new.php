<?php
    if(!empty($_POST)){
        $errors = [];

        $date = empty($_POST["date"]) ? false : (new DateTime($_POST["date"]))->format('Y-m-d');
        if(!$date) $errors["date"] = "*Please set a Date for the service";

        $room = empty($_POST["room_num"]) ? false : $_POST["room_num"];
        if(!$room) $errors["room_num"] = "*Please pick room number";

        $service_charge = empty($_POST["service_charge"]) ? false : trim($_POST["service_charge"]);
        if(!$service_charge) $errors["service_charge"] = "*Please set the Amount";

        $start = $_POST["start"];
        $end = $_POST["end"];

        $service = empty($_POST["service"]) ? false : trim($_POST["service"]);
        if(!$service) $errors["service_charge"] = "*Please set the number of the Service provider";

        $helper = empty($_POST["helper"]) ? false : trim($_POST["helper"]);
        if(!$helper) $errors["helper"] = "*Please set the number of helper";

       

        if(empty($errors)){
            $conn = mysqli_connect("localhost","root","","project"); 
           

           if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
            
 $sql = "INSERT INTO booking (date, room_num, service_charge, start, end,service,helper)VALUES('$date', '$room', '$service_charge', '$start','$end','$service','$helper')";
            
            if(mysqli_query($conn, $sql)){
                echo "<h3>data stored in a database successfully."
                    . " Please browse your localhost php my admin"
                    . " to view the updated data</h3>";
            }
             else{
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($conn);
            }
             
            // Close connection
            mysqli_close($conn);
        }
    } 

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            .error {color: #FF0000;}
     </style>
</head>
<body>
    <div>
<form action="" method="post">
<div class="elem-group inlined">
    <label for="date">Date</label>
    <input type="date" id="date" name="date" required>
    <br><span class="error"><?php echo isset($errors['date']) ? $errors['date'] : '';?></span>
  </div>
  <div class="elem-group" >
    <label for="room">How many rooms?</label>
    <input type="number" id="room" name="room_num" placeholder="Room number" ><br>
    <span class="error"><?php echo isset($errors['room_num']) ? $errors['room_num'] : '';?></span>
  </div>
  <div class="elem-group">
    <label for="service-selection">Service Charge</label>
    <select id="service-selection" name="service_charge">
        <option value="">Choose a Amount  from the List</option>
        <option value="500">500</option>
        <option value="800">8000</option>
        <option value="1200">1200</option>
    </select>
  </div>
  <div class="elem-group inlined">
    <label for="start">Starting Time</label>
    <select id="start" name="start" >
        
                            <option value="09:00:00">09:00</option>
                            <option value="10:00:00">10:00</option>
                            <option value="11:00:00">11:00</option>
                            <option value="12:00:00">12:00</option>
                            <option value="13:00:00">13:00</option>
                            <option value="14:00:00">14:00</option>
                            <option value="15:00:00">15:00</option>
                            <option value="16:00:00">16:00</option>
                            <option value="17:00:00">17:00</option>
    </select>
  </div>
  <div class="elem-group inlined">
    <label for="end">Ending  Time</label>
    <select id="end" name="end" >
        
                            <option value="10:00:00">10:00</option>
                            <option value="11:00:00">11:00</option>
                            <option value="12:00:00">12:00</option>
                            <option value="13:00:00">13:00</option>
                            <option value="14:00:00">14:00</option>
                            <option value="15:00:00">15:00</option>
                            <option value="16:00:00">16:00</option>
                            <option value="17:00:00">17:00</option>
                            <option value="18:00:00">18:00</option>
    </select>
  </div>
 
  <div class="elem-group inlined">
    <label for="service">Number of Service Provider</label>
    <input type="number" id="service" name="service" placeholder="1" min="1">
    <span class="error"><?php echo isset($errors['service']) ? $errors['service'] : '';?></span>
  </div>

  <div class="elem-group inlined">
    <label for="helper">Helper</label>
    <input type="number" id="helper" name="helper" placeholder="2" min="0" >
    <span class="error"><?php echo isset($errors['helper']) ? $errors['helper'] : '';?></span>
  </div>
  
  <input type="reset" id="reset" value="Reset">
<input type="submit" id="submit" value="Submit">
</form>
</div> 
</body>
</html>

