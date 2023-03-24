<?php $title="Carrier Sense Multiple Access with Collision Detection (CSMA/CD) in Computer networking" ?>
<?php include 'Navbar.php'; ?>
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/blog-post-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="../index.php">Home</a></li>
							<li><a href="../blog.php">Courses</a></li>
							<li>Computer Network </li>
						</ul>
						<h1 class="white-text">DatCarrier Sense Multiple Access with Collision Detection (CSMA/CD)</h1>
						<ul class="blog-post-meta">
							<!-- <li class="blog-meta-author">By : <a href="#">Lalmohan Pal</a></li>
							<li>08 march, 2023</li>
							<li class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i> 35</a></li> -->
						</ul>
					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Blog -->
		<div id="blog" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- main blog -->
					<div id="main" class="col-md-9">

						<!-- blog post -->
						<div class="blog-post">
							<h2>Carrier Sense Multiple Access with Collision Detection (CSMA/CD) :</h2>

                            <p> Carrier Sense Multiple Access with Collision Detection (CSMA/CD) is a multiple access protocol used in Ethernet computer networks to allow multiple devices to share a single communication channel efficiently. It is an improvement over the CSMA protocol, which does not have collision detection capabilities.</p>

                            <p>In the CSMA/CD protocol, each device listens to the channel to check if it is idle before transmitting data. If the channel is busy, the device waits for a random time before attempting to retransmit. If two or more devices transmit their data simultaneously, a collision occurs, and the transmissions are lost. When a collision is detected, all devices stop transmitting immediately and wait for a random time interval before attempting to retransmit again. The waiting time is randomly selected to minimize the likelihood of another collision. </p>

                            <p>The CSMA/CD protocol also includes a feature known as exponential backoff, which increases the waiting time after each unsuccessful transmission attempt. This ensures that devices with high traffic load will eventually reduce their transmission rate and avoid persistent collisions. </p>

                            <p>The CSMA/CD protocol has a high channel utilization efficiency and is suitable for high data rate systems with a moderate number of users. It is widely used in Ethernet computer networks and has been the dominant protocol for wired LANs (Local Area Networks) for several decades. However, with the increasing popularity of wireless networks, CSMA/CA (Carrier Sense Multiple Access with Collision Avoidance) protocol is used in wireless networks instead of CSMA/CD, as collision detection is not reliable in wireless networks due to the hidden node problem.</p>
                            
							
						</div>
						<!-- /blog post -->
						
								<!-- pagination -->
						<div class="col-md-12">
								<div class="post-pagination">
									<a onclick="history.back()" class="pagination-back pull-left">Back</a>
									<!-- <ul class="pages">
										<li><a href="blog-post.php">1</a></li>
										<li class="active">2</li>
										<li><a href="ds_blog1_2.php">3</a></li>
										<li><a href="#">4</a></li>

									<</ul> -->
										<!-- <li><a href="ds_blog1_3.php">4</a></li>
									</ul>  -->

										<!-- <li><a href="ds_blog1_3.php">4</a></li>
									</ul> --> 

									<a href="cn-blog2-9.php" class="pagination-next pull-right">Next</a>
								</div>
							</div>
							<!-- pagination -->

						<!-- blog share -->
						<div class="blog-share">
							<h4>Share This Post:</h4>
							<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
						</div>
						<!-- /blog share -->

		<?php include 'Comments.php'; ?>
		<?php include 'BlogOthers.php'; ?>
		<?php include 'Footer.php'; ?>