<?php 
	session_start();
	

	
	
	$email = $_POST['Email'];
	$password = $_POST['Password'];
	$usertypeAdmin = "Admin"; 
	$usertypeManager = "Manager";
	$usertypeTeacher = "Teacher";
	
	
	if($email == "eduwebsiteAdmin@gmail.com" && $password == "edu42344"){
		$_SESSION['status'] = true;
		$_SESSION['user'] = $username;
		setcookie('status', 'true', time()+3600, '/');
		header('location: ../view/Admin.php');
	}
	$AdminStatus = adminLogin($email, $password, $usertypeAdmin);
	$ManagerStatus = managerLogin($email, $password, $usertypeManager);
	$TeacherStatus = teacherLogin($email, $password, $usertypeTeacher);
	if($AdminStatus)
	{
		$_SESSION['status'] = true;
		$data = adminUpdateProfile($email, $password);
		$_SESSION['email'] = $email;
		$_SESSION['user'] = $data['username'];
		$_SESSION['pic'] = $data['pic'];
		setcookie('status', 'true', time()+3600, '/');
		header('location: ../view/Admin.php');
	}
	if($ManagerStatus)
	{
		$_SESSION['status'] = true;
		$data = managerUpdateProfile($email, $password);
		$_SESSION['email'] = $email;
		$_SESSION['user'] = $data['username'];
		$_SESSION['pic'] = $data['pic'];
		setcookie('status', 'true', time()+3600, '/');
		header('location: ../view/Manager.php');
	}
	if($TeacherStatus)
	{
		$_SESSION['status'] = true;
		$data = teacherUpdateProfile($email, $password);
		$_SESSION['email'] = $email;
		$_SESSION['user'] = $data['username'];
		$_SESSION['pic'] = $data['pic'];
		setcookie('status', 'true', time()+3600, '/');
		header('location: ../view/Teacher.php');
	}
	else
	{
		echo "Incorrect Password";
	}
?>