
<?php include "../controllers/Central.php";
include "../controllers/Message.php";

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

	<style>
		.message_Frame {
			border: 1px solid;
    padding: 10px;
    margin: 2px;
	height: 400px;
    overflow: scroll;
		}

		.sentMessage {
			border: 1px solid #a5a5de;
    border-bottom-left-radius: 9px;
    border-bottom-right-radius: 9px;
    border-top-right-radius: 9px;
    padding: 5px;
    background-color: #a5a5de;
    color: #fff;
    width: fit-content;
    margin: 5px;
		}

		.recieveMessage {
			border: 1px solid #eadb9a;
    border-bottom-left-radius: 9px;
    border-bottom-right-radius: 9px;
    border-top-right-radius: 9px;
    padding: 5px;
    background-color: #eadb9a;
    color: #fff;
    width: fit-content;
    margin: 5px;
		}



	</style>
	</head>
	<body>
		
	<!-- <div class="fh5co-loader"></div> -->
	
	<div id="page">
		<?php include "./nav/navbar.php";?>
	<nav class="fh5co-nav" role="navigation">
		<div class="container-fluid">
			
			<div class="row">
				<div class="col-xs-12 text-center menu-2">
					<div id="fh5co-logo">
						<h1>
							<a href="index.html">
							<?php  $currentuser = $starter === 0 ?  $staff_Online_fullName:$client_online_fullname;
								echo $currentuser;
							?><span>.</span>
							<small><?php 
							$role = $starter === 0 ? $staff_role : '';
							echo $role; ?></small>
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
					<h2><span>Chat Now</span></h2>
				</div>
			</div>
			<div class="row">
			
				<div class="col-md-9 col-padded-right">
						<div  class="row message_Frame">
						
						</div>
					<form method="post" enctype="multipart/form-data">
					
					<div class="form-group row">
							<div class="col-md-9 field">
								<select name="typeof" id="search" class="form-control" >
								<option value="">Select section to broadcast</option>
									<option value="1">Client</option>
									<option value="2">Staffs</option>
								</select>
							</div>
						
						</div>
						<div class="form-group row">
							<div class="col-md-9 field">
								<input type="text" name="search" id="search" class="form-control" placeholder="Type something...">
							</div>
							<div class="col-md-3 field">
							<button type="submit" id="submit" name="saveDetails" class="btn btn-primary" >send a Broadcast </button>
							</div>
						</div>
						
						
					
						<div class="form-group row">
							<div class="col-md-12 field">
								
							</div>
						</div>
						<?php 
						
						$sqlQuery =  "select * from member" ;
						$listOfClients = $member->getAllMemberBySql($sqlQuery);


						$sqlQuery_ = $starter === 0 ? "select * from staff_tbl where id != '".$staff_id."' and status = '0'" : "select * from staff_tbl and status = '0'" ;
						$listOfStaffs = $staff->getAllStaffBySql($sqlQuery_);
						
							if(isset($_POST["saveDetails"])){

								 $search = $_POST["search"];
								 $typeof_ = $_POST["typeof"];
								


								if($typeof_ === "1"){
										
									for($in_it =  0; $in_it < count($listOfClients); $in_it ++ ){
										$type = "text";
										$key = "1234567opiuyt";
										$stat = $starter === 0? '1' : '2';
										insertMessage($message,$key, $staff_id,$listOfClients[$in_it]["id"],$search,$type,$stat);
									}
								 echo "Done!";
								 }
							
								if($typeof_ === "2"){
										echo 878;
									for($in_it =  0; $in_it < count($listOfStaffs); $in_it ++ ){
										echo $in_it;
										$type = "text";
										$key = "1234567opiuyt";
										$stat = $starter === 0? '1' : '2';
										insertMessage($message,$key, $staff_id,$listOfStaffs[$in_it]["id"],$search,$type,$stat);
									}
									echo "Done!";
								}
								 
								}
						?>
					</form>
				</div>

				<aside id="sidebar">
					<div class="col-md-3">
						<div class="side animate-box">
								<div class="col-md-12 col-md-offset-0 text-center fh5co-heading fh5co-heading-sidebar">
									<h2><span> Staff Online</span></h2>
								</div>
								<?php
										
									

										foreach($listOfStaffs  as $individualStaffs => $value){

										?>
								<div class="blog-entry">
									<a href="index.php?reciever=<?php echo $listOfStaffs[$individualStaffs]["id"]?>&key=&action_type=&function_type&staff_id">
										<img style="width:5em;" src="<?php echo "../loadedImage/".$listOfStaffs[$individualStaffs]["image"]?>" class="img-responsive" alt="">
										<div class="desc">
											<span class="date"></span>
											<h3><?php echo $listOfStaffs[$individualStaffs]["fullname"]?></h3>
										</div>
									</a>
								</div>
								<?php }?>
								
						</div>

						<?php
						
						if($starter === 0){
						?>
						<div class="side animate-box">
								<div class="col-md-12 col-md-offset-0 text-center fh5co-heading fh5co-heading-sidebar">
									<h2><span> Client Online</span></h2>
								</div>
								<?php
										
										

										foreach($listOfClients  as $individualStaffs => $value){

										?>
								<div class="blog-entry">
									<a href="index.php?reciever=<?php echo $listOfClients[$individualStaffs]["id"]?>&key=&action_type=&function_type&staff_id">
										<img style="width:5em;" src="<?php echo "../loadedImage/Black Peppercorns Cracked.jpg"?>" class="img-responsive" alt="">
										<div class="desc">
											<span class="date"></span>
											<h3><?php echo $listOfClients[$individualStaffs]["firstname"]." ". $listOfClients[$individualStaffs]["lastname"]?></h3>
										</div>
									</a>
								</div>
								<?php }?>
								
						</div>
										<?php } ?>

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

