<?php $__env->startSection('content'); ?>
	

		<!--banner-->
		
		
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
		
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			  <div class="item active">
				<img src="images/ban.jpg" alt="Los Angeles" >
			  </div>
		
			  <div class="item">
				<img src="images/bb.jpg" alt="Chicago" >
			  </div>
			
			  <div class="item">
				<img src="images/ba2.png" alt="New york" >
			  </div>
			</div>
		
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right"></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div>
		<!--content-->
			<div class="content">
				<div class="content-app">
					<div class="container">
						<h3>New from Football</h3>
						<div class="content-from">
							<div class="col-md-4 from-grid ">
								<img class="img-responsive left-pic" src="images/pic.jpg" alt=" " />
								<p>2015 fastpitch cf 7 lineup released</p>								
							</div>
							<div class="col-md-4 from-grid ">
								<img class="img-responsive left-pic" src="images/pic1.jpg" alt=" " />
								<p>2015 fastpitch cf 7 lineup released</p>								
							</div>
							<div class="col-md-4 from-grid ">
								<img class="img-responsive left-pic" src="images/pic.jpg" alt=" " />
								<p>2015 fastpitch cf 7 lineup released</p>								
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<!---->
		<div class="content-app-up">
			<div class="container">
			<span class="line"> </span>
			<h3>Trending from Social Media</h3>
			<div class="regard">
				<div class="regard-in">					
					<p><a href="#"> about a day ago we replied to </a></p>
					<p>@danielcook1996  Hi Daniel, we are sorry that we can't get something out to you sooner. If you have any questions regarding...</p>	
					<a href="#"><span> </span></a>
				</div>
				<div class="regard-in">
				<a href="#"><span class="camera"> </span></a>
					<p><a href="#"> about a day ago we replied to </a></p>
					<img class="img-responsive ago" src="images/pe.jpg" alt="">
					<p class="col-d">@Football22  Chris Larsen with the #CL22. #SlowpitchSunday @FootballSP  #beast</p>	
				<div class="clearfix"> </div>
				
				</div>
				<div class="regard-in">
					<p><a href="#"> about a day ago we replied to </a></p>
					<p>@danielcook1996  Hi Daniel, we are sorry that we can't get something out to you sooner. If you have any questions regarding...</p>	
					<a href="#"><span class="face"> </span></a>
				</div>
				
				
			</div>
			</div>		
		</div>
		<!---->		
	</div>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>