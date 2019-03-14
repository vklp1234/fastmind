<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:home');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>SIGN IN</title>
	
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
				<!-- form start here-->
				<form action="process/signin.php" method="post">
					<div class="container-fluid">
					<div class="row">
						
							<div  class="col-lg-12 col-md-12 col-xs-12">
								<h4 style="color: white; text-align: center; padding: 5px;">SIGN IN</h4>
								 <div >
								 <div class="row">
								 	<div class="col-lg-4"></div>
								      <div class="form-group col-lg-4">						        
								       <input align="center" type="email" class="form-control" id="email" name="email"  autofocus="autofocus" placeholder="Email Id">
								      </div>
		    				     </div>
		    				     <div class="row">
		    				     	<div class="col-lg-4"></div>
								      <div class="form-group col-lg-4">						        
								       <input type="password" class="form-control" id="pass" name="password" placeholder="Password">
								       <p  class="lkl">IF YOU NOT AN USER ? <a  style="color: white;" href="index.php">REGISTER</a></p>
								      </div>
		    				     </div> 
		    				
		    				     
		    				  <div class="row">
		    				  	<div class="form-group " align="center">						        
								       <input type="submit" name="submit" class="btn  waves-effect waves-light" value="LOGIN"> 
								       
		    				     </div>
		    				 </div>
    				   
    			</div>
    		</div>
</div>
				</form>
				<!--Form ended here-->
			</div>
		</div>
	</div>

</body>
<!-- Body Ended here-->
</html>