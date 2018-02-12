<?php
	$name = $_POST['name'];
	$address = $_POST['address'];
	$email = strtolower(trim($_POST['email']));
	$password = md5($_POST['password']);
	
	$cpassword = md5($_POST['cpassword']);
	
	$phone = $_POST['phone'];
	$zipcode=$_POST['zipcode'];

	if (!empty($_GET['redirect'])) {
		$redirect = filter_var($_GET['redirect'], FILTER_SANITIZE_URL);

	}
	else {
		$redirect = 'login.php';
	}

	
	if($password==$cpassword){
		include ('include/db.php');
		$query="select * from users where email='$email'";
		$result=mysqli_query($con,$query);
		$num=mysqli_num_rows($result);
		if($num==0){
			$query="insert into users (name,address,email,password,phone,zipcode)values('$name','$address','$email','$password','$phone','$zipcode')";
			$result=mysqli_query($con,$query);
			if($result){
				header( "refresh:4;url=".$redirect );

				echo "<center>User created succesfully! Redirecting you to <a href='$redirect'>$redirect</a></center></br>";
			}
		} else {
			echo "<center>This email is being used by another user, please <a href='javascript:history.go(-1)'>[Go Back]</a> and give another valid email</center>";
		}
	} else {
		echo '<center>Passwords do not match <a href="javascript:history.go(-1)">[Go Back]</a></center>';
	}
?>