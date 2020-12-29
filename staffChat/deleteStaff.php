
<?php include "../controllers/Central.php";
include "../controllers/Staff.php";

?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>WecanChat</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<?php include "./nav/navbar.php";?>
	<nav class="fh5co-nav" role="navigation">
		<div class="container-fluid">
			
			<div class="row">
				<div class="col-xs-12 text-center menu-2">
					<div id="fh5co-logo">
						<h1>
							<a href="index.html">
							<?php  echo $staff_Online_fullName;?><span>.</span>
							<small><?php echo $staff_role; ?></small>
							</a>
						</h1>
					</div>
				</div>
			</div>
		</div>
	</nav>


	<div id="fh5co-contact" class="fh5co-no-pd-top">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-12 col-md-offset-0 text-center fh5co-heading">
					<h2><span>Add new Staff</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9 col-padded-right">
					<form method="post" enctype="multipart/form-data">
						<div class="form-group row">
							<div class="col-md-6 field">
								<label for="firstname">Select Staff to delete </label>
								<select  name="staffdelete" id="staffdelete" class="form-control">
								<?php
									
									$sqlQuery = "select * from staff_tbl where id != '".$staff_id."' and status = '0'";
									$listOfStaffs = $staff->getAllStaffBySql($sqlQuery);

									foreach($listOfStaffs  as $individualStaffs => $value){

									?>
										<option value="<?php echo $listOfStaffs[$individualStaffs]["id"]?>"><?php echo $listOfStaffs[$individualStaffs]["fullname"]?></option>
									<?php }?>

								</select>
							</div>
							<div class="col-md-6 field">
							<div class="col-md-12 field">
								<button type="submit" id="submit" name="saveDetails" class="btn btn-primary" >Save Staff Details</button>
							</div>
							</div>
						</div>
					
					
						<div class="form-group row">
						
						</div>
						<?php 
						
							if(isset($_POST["saveDetails"])){

								$staffdelete = $_POST["staffdelete"];
								
								$key = "1234567opiuyt";
								deleteStaff ($staff,$key,$staffdelete);
							}
						?>
					</form>
				</div>
				
				<aside id="sidebar">
					<div class="col-md-3">
						
						
					</div>
					
				</aside>

			</div>
		</div>
	</div>


	</div>


	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

