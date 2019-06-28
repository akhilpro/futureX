<?php 
		if (isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['pass'];

			
		}else{
			header("location:../login.php");
		}

 ?>