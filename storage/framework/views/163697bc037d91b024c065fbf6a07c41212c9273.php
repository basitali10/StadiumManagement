<!DOCTYPE html>
<html>
<head>
<title>CONDITION FC</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script>src="js/toTopButton.js"</script>
<script>src="js/smoothScrolling.js"</script>
<script>src="js/slider.js"</script>
<script src="js/responsiveslides.min.js"></script>
<!-- Custom Theme files -->
<link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->

<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


 <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider2").responsiveSlides({
        auto: true,
        pager: true,
        speed: 300,
        namespace: "callbacks",
      });
    });
  </script>
  
</head>
<body> 
<!--header-->
	<div class="header" id="head">
		<div class="header-top">
			<div class="container">
			<p class="header-para"></p>
			<ul class="sign">
			<?php if(Auth::guest()): ?>
				
					<li ><a href="login" >Log In</a></li>
					<li><a href="#" ><span > </span></a></li>
					<li ><a href="register" >Sign Up</a></li>
			<?php else: ?>	
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
					<?php echo e(Auth::user()->name); ?> <span class="caret"></span>
				</a>

				<ul class="dropdown-menu" role="menu">
					<li><a href="/dashboard">Dashboard</a></li>
					<li>
						<a href="<?php echo e(route('logout')); ?>"
							onclick="event.preventDefault();
									  document.getElementById('logout-form').submit();">
							Logout
						</a>

						<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
							<?php echo e(csrf_field()); ?>

						</form>
					</li>
				</ul>
			</li>	
			<?php endif; ?>		
				</ul>
			</div>
			<div class="clearfix"> </div>
	</div>
                

	<div class="header-bottom-top">
		<div class="container">
			<div class="search">	
				<input type="text" value="Search website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
				<input type="submit"  value="">	
			</div>
			<div class="clearfix"> </div>
			<div class="header-bottom">			
				<div class="logo">
					<a href="home"><img src="images/log.png" alt=" " /></a>
				</div>
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
						<li class="active" ><a href="home" class="scroll">Home</a></li>
						<li><a href="about.html" class="scroll"> About</a></li>
						<li><a href="teams.html" class="scroll">Team</a></li>
						
						<li><a href="services.html" class="scroll">Services</a></li>
						<li><a href="sports.html" class="scroll">Sports </a></li>
						<li><a href="contact" class="scroll">Contact</a></li>
					</ul>
					<!--script-->
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		</div>
	</div>
		 
		
		<!--content-->
			<?php echo $__env->yieldContent('content'); ?>
	<!--footer-->
	
			
			<a href="#head" class="back-to-top" style="display: inline; " >
 
				<i class="fa fa-arrow-circle-up"></i>
				 
				</a>	
		</body>
		</html>
