<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title>New Admin Registration | Admin</title>
	<link rel="stylesheet" href="../styles/StyleSheet2.css">
</head>
	<div class="contain">
		<form method="post" action="../controller/AdminRegCheck.php" enctype="multipart/form-data" onsubmit = "return CheckPass()">
				<legend>ADMIN REGISTRATION</legend>
				<h3>Enter your data</h3>
				<h4></h4>
				<table>
					<tr>
						<td><input type="text" id = "username" name="username" placeholder="Enter Your Username" value="" required></td>
					</tr>
					<tr>						
						<td><input type="email" id = "email" name="email" placeholder="Enter Your Email" value="" required></td>
					</tr>
					<tr>					
						<td><input type="password" id = "password" placeholder="Enter Your Password" name="Password" value="" required></td>
					</tr>
					<tr>						
						<td><input type="password" id = "cpassword" name="Confirm_Password" placeholder="Confirm Your Password" value="" required></td>
					</tr>
					<tr>						
						<td><input type="text" id = "address" name="address" placeholder="Enter Your Address" value="" required></td>
						<tr></tr>
					</tr>
					</tr>
						<td><p>Division</p></td>
						<tr></tr>
						<td>
							<select name="division" id = "division" required>
							    <option value="">select option</option>
								<option value="Dhaka">Dhaka</option>
								<option value="Chittagong">Chittagong</option>
								<option value="Sylhet">Sylhet</option>
								<option value="Rangpur">Rangpur</option>
								<option value="Khulna">Khulna</option>
								<option value="Barishal">Barishal</option>
								<option value="Rajshahi">Rajshahi</option>
								<option value="Mymensingh">Mymensingh</option>
							</select>
						</td>
						<tr></tr>
					</tr>
					<tr>						
						<td><input type="number" id = "postcode" name="postalcode" placeholder="Enter Your Postal Code" value="" required></td>
					</tr>
					<tr>						
						<td><input type="tel" id = "contnum" name="contnum" placeholder="Enter Your Number" value="" required></td>
					</tr>
					<tr>
						<td><p>Gender</p></td>
						<tr></tr>
						<td>
							<input type="radio" id = "gender" name="gender" value= "Male" required> Male
							<input type="radio" id = "gender" name="gender" value= "Female" required> Female
							<input type="radio" id = "gender" name="gender" value= "Other" required> Other
						</td>
					</tr>
					<tr>
						<td><p>Date Of Birth</p></td>
						<tr></tr>
						<td><input type="date" id = "dob" name="dob" value="" required></td>
					</tr>
					<tr>
						<td><p>Blood Group</p></td>
						<tr></tr>
						<td>
							<select name="BloodGroup" id = "bg" required>
							    <option value="">select option</option>
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+">B+</option>
								<option value="B-">B-</option>
								<option value="AB+">AB+</option>
								<option value="AB-">AB-</option>
								<option value="O+">O+</option>
								<option value="O-">O-</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><p>Drop Your CV Here</p></td>
						<tr></tr>
						<td><input type="file" id = "cv" name="cv" value="" ></td>
					</tr>
					<tr>
						<td><p>Upload Your Picture</p></td>
						<tr></tr>
						<td><input type="file" id = "pic" name="picture" value="" ></td>
					</tr>
					<tr>
						<td>
							<br> </br>
							<button class="btn" type="submit" name="submit" value="Submit" onclick="CheckReg()">Sign up</button>
							<a href="Admin.php"> Back </a>
						</td>
					</tr>
				</table>
	
		</form>
	</div>
	<script>
		function CheckReg(){
            let username = document.getElementById('username').value;
            let email = document.getElementById('email').value;
			let password = document.getElementById('password').value;
			let cpassword = document.getElementById('cpassword').value;
			let address = document.getElementById('address').value;
			let division = document.getElementById('division').value;
			let postcode = document.getElementById('postcode').value;
			let contnum = document.getElementById('contnum').value;
			let gender = document.getElementById('gender').value;
			let dob = document.getElementById('dob').value;
			let bg = document.getElementById('bg').value;
			let cv = document.getElementById('cv').value;
			let pic = document.getElementById('pic').value;
            
			if(username == "" || email == "" || password == "" || cpassword == "" || address == "" || division == "" || postcode == "" || contnum == "" || gender == "" || dob == "" || bg == "" || cv == "" || pic == "")
			{
				document.getElementsByTagName('h3')[0].innerHTML = "All data must be filled up";
			}
			if(cv == "")
			{
				document.getElementsById('cv').innerHTML = "CV must be submitted";
			}
        }
		function CheckPass()
		{
			let password = document.getElementById('password').value;
			let cpassword = document.getElementById('cpassword').value;
			
			if(password != cpassword)
			{
				document.getElementsByTagName('h4')[0].innerHTML = "Password didn't matched";
				return false;
			}
		}
		</script>
</body>
</html>
<?php
	}
	else {
		header('location: ../view/LogIn.html');
	}
?>