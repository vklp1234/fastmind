<?php

session_start();
if(isset($_SESSION['uid']))
{
	$temp = $_SESSION['uid'];
}else{
	
	header('location:login.php');
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
	<!-- Bootstrap Files-->
	<link rel="stylesheet"  href="bootstrap/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
	<!-- Style files-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--<script type="text/javascript" src="js/script.js"></script>-->
</head>
<!-- Body Start here-->
<body style="background-color: black;">
	<div>
		<div  class="header">
			<!-- header section-->
		</div>
		<div  class="mainbody">
				<div>
				<!-- php code started here-->
				<?php
				include('db/dbcon.php');
				$qry = "SELECT * FROM `register` WHERE `email`='$temp'";
				$run = mysqli_query($con,$qry);

				if($fetch = mysqli_fetch_assoc($run))
				{
					?>
				
				
					<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3"></div>
							<div class="col-lg-6 col-md-12 col-xs-12">
								<h4 style="color: white;text-align: center; padding: 5px;">HELLO</h4>
							<table class="table"  style="border-bottom: none;">

							    <tbody>
							    	<tr>
							    		<th style="color: white;">NAME : </th>
							    		<td><?php echo $fetch['name'];?></td>
							    		<td rowspan="4"> <img src="dbimage/<?php echo $fetch['image'];?>" class="img-circle"  alt="Profile Pic" height="150" width="150"  >	</td>
							    	</tr>
							    	<tr>
							    		<th style="color: white;">EMAIL ID : </th>
							    		<td><?php echo $fetch['email'];?></td>
							    	</tr>
							    	<tr>
							    		<th style="color: white;">COLLEGE : </th>
							    		<td> <?php echo $fetch['college'];?></td>
							    	</tr>
							    	<tr>
							    		<th style="color: white;">MESSAGE : </th>
							    		<td> <?php echo $fetch['message'];?></td>
							    	</tr>
							    	<tr>
							    		<th style="color: white;">VIEW FILE : </th>
							    		<td colspan="1"> <a style="margin-left: 0px !important;" href="dbfiles/<?php echo $fetch['msfile'];?>"  class="btn  btn-default"> VIEW FILE</a></td>
							    		<td ><a href="logout.php" style="margin-left: 0px !important;" class="btn btn-default"> LOGOUT</a></td>
							    	</tr>
							    	
							    		
							    	
							    </tbody>
							</table>
					    				   
    						</div>
    				</div>
					</div>
				<?php
				}

				?>

				</div>
		</div>
	</div>

</body>
<!-- Body Ended here-->
</html>