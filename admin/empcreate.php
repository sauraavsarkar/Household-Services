<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Register</title>
</head>
<body>

		
    <h1>Employee Register page</h1>  
    <form action="empadminreg.php" method="POST" autocomplete="off">
  <table>
   <tr>
    <td>Name :</td>
    <td><input type="text" name="empname" required></td>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="password" name="emppassword" required></td>
   </tr>
   <td>Confirm password :</td>
    <td><input type="password" name="empcpassword" required></td>
   </tr>
   <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="gender" value="m" required>Male
     <input type="radio" name="gender" value="f" required>Female
    </td>
   </tr>
   <td>National ID: :</td>
    <td><input type="text" name="nid" required></td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><br><input type="email" name="empemail" required></td>
   </tr> 
   <tr>
    <td>Phone no :</td>
    <td><br>
     <select name="empphoneCode" required>
      <option selected hidden value="">Select Code</option>
      <option value="013">013</option>
      <option value="014">014</option>
      <option value="015">015</option>
      <option value="016">016</option>
      <option value="017">017</option>
      <option value="018">018</option>
     </select>
     <input type="phone" name="empphone" required>
    </td>
   </tr>
   <td>Services :</td>
   
    <td><br>
    <input type="checkbox" id="service1" name="service[]" value="Cleaning">
    <label for="service1"> Cleaning</label><br>
    <input type="checkbox" id="service2" name="service[]" value="Plumbing">
    <label for="service2"> Plumbing</label><br>
    <input type="checkbox" id="service3" name="service[]" value="Cooking">
    <label for="service3"> Cooking</label><br>
    <input type="checkbox" id="service4" name="service[]" value="Electrician">
    <label for="service4"> Electrician</label><br> 
    <input type="checkbox" id="service5" name="service[]" value="Medicine">
    <label for="service5"> Medicine</label><br>  
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Register" name="submit"></td>
   </tr>
  </table>
 </form>
<a href="admindashboard.php"><img src="barrow.png" alt="Login Page" style="width: 40px;px;height:42px;"></a>  
</body>
</html>