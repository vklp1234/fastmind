<?php
include("../db/dbcon.php");
if(isset($_POST['submit']))
{
	$mail= $_POST['email'];
	$pass=$_POST['password'];
	$query = "SELECT * FROM `sign_in` WHERE `email`='$mail' and `password` ='$pass'";
	$run = mysqli_query($con,$query);
	$row = mysqli_num_rows($run);
	if($row <1)
	{
		?>
		<script type="text/javascript">
			alert("Username And Password Are Not Match");
			window.open('../login.php','_self');	
		</script>


		<?php

	}else{
		$data = mysqli_fetch_assoc($run);
		$id = $data['email'];
		echo "id=".$id;
		session_start();
		$_SESSION['uid']=$id;
		header('location:../home.php');
	}



}



?>