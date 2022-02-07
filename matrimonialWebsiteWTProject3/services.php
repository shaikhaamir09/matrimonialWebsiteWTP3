<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Vivah
 | Services
</title>  <link rel="icon" href="images/vivahLogo.png" sizes="16x16">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
<?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Services</li>
     </ul>
   </div>
   <div class="services">
   	<div class="page_header">
   	 <h1>Services</h1>
   	 <h3>There are many services provided by Vivah</h3>
   	 <p>From 18th November, 2022, Vivah.comhas implemented Aadhaar authentication of profiles through UIDAI in real-time and hence all the new Users/Members are required to furnish their Aadhaar details.</p>
    </div>
    <div class="services_top">
    	<div class="col-sm-4 item_content">
    		<i class="fa fa-heart-o icon_4"> </i>
    		<h4>paid members</h4>
    		<p>Please contact Vivah customer support for any further questions.</p>
    	</div>
    	<div class="col-sm-4 item_content">
    		<i class="fa fa-lemon-o icon_4"> </i>
    		<h4>Information Collected by us</h4>
    		<p>Please contact Vivah customer support for any further questions.</p>
    	</div>
    	<div class="col-sm-4 item_content">
    		<i class="fa fa-thumbs-o-up icon_4"> </i>
    		<h4>registered members </h4>
    		<p>Please contact Vivah customer support for any further questions.</p>
    	</div>
    	<div class="clearfix"> </div>
    </div>	
    <div class="services_top1">
    	<div class="col-sm-4 item_content">
    		<i class="fa fa-smile-o icon_4"> </i>
    		<h4>share your information</h4>
    		<p>Please contact Vivah customer support for any further questions	.</p>
    	</div>
    	<div class="col-sm-4 item_content">
    		<i class="fa fa-wheelchair icon_4"> </i>
    		<h4>protect your information</h4>
    		<p>Please contact Vivah customer support for any further questions.</p>
    	</div>
    	<div class="col-sm-4 item_content">
    		<i class="fa fa-spinner icon_4"> </i>
    		<h4>Payment & Refund Policy</h4>
    		<p>Please contact Vivah customer support for any further questions.</p>
    	</div>
    	<div class="clearfix"> </div>
    </div>	
   </div>
  </div>
</div>

<div class="about_bottom">
	<div class="container">
		<h3>Team</h3>
	   <div class="col-md-3 about_grid1">
		  <ul class="posts-grid our-team">
			<li class="list-item-1">
				<figure class="thumbnail_1 thumbnail">
					<a href="#"><img src="images/a8.jpg"  class="img-responsive" alt=""/></a>
					<div class="post_networks">
						<ul>
							<li class="network_0"><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
						</ul>
					</div>
			    </figure>
			    <div class="desc">
			    	<h4><a href="#">Rinki</a></h4>
			    	<p></p>
			    </div>
			 </li>
	       </ul>
	   </div>
	   <div class="col-md-3 about_grid1">
		  <ul class="posts-grid our-team">
			<li class="list-item-1">
				<figure class="thumbnail_1 thumbnail">
					<a href="#"><img src="images/a7.jpg"  class="img-responsive" alt=""/></a>
					<div class="post_networks">
						<ul>
							<li class="network_0"><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
						</ul>
					</div>
			    </figure>
			    <div class="desc">
			    	<h4><a href="#">Kashish </a></h4>
			    	<p></p>
			    </div>
			 </li>
	       </ul>
	   </div>
	   <div class="col-md-3 about_grid1">
		  <ul class="posts-grid our-team">
			<li class="list-item-1">
				<figure class="thumbnail_1 thumbnail">
					<a href="#"><img src="images/a6.jpg"  class="img-responsive" alt=""/></a>
					<div class="post_networks">
						<ul>
							<li class="network_0"><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
						</ul>
					</div>
			    </figure>
			    <div class="desc">
			    	<h4><a href="#">Aamir</a></h4>
			    	<p></p>
			    </div>
			 </li>
	       </ul>
	   </div>
	
	   <div class="clearfix"> </div>
	</div>
</div>


<?php include_once("footer.php");?>

</body>
</html>	
