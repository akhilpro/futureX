<?php 
include_once 'connect.php';
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		//$user = $_POST['username'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$cpass = $_POST['confirm'];

		if ($pass != $cpass) {
			header("location:../signup.php?err=Your password is wrong");
		}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("location:../signup.php?emailerr=Your email is invalid ");
		}else{
			$sql = "INSERT INTO user_data (name, email, pass, fblink, mobilenum, college, expertise)
			VALUES ('$name', '$email', '$cpass', 'www', '000', 'xyz', 'abc')";

			if (mysqli_query($conn, $sql)) {
			    ?>
			<script> alert("You become member Successfully. Now Login Please");
					window.open('../login.php', '_self');
			</script>
			    <?php
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
	

	}else{
		header("location:../signup.php");
	}
	
 ?>