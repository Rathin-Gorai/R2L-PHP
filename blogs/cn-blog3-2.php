<?php $title="Internetworking Devices" ?>
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
						<h1 class="white-text">Internetworking Devices</h1>
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
							<h2>Internetworking Devices :</h2>

                            <p>Internetworking devices are hardware devices used to connect different networks and facilitate communication between them. These devices are responsible for forwarding data packets between networks and ensuring that the packets reach their intended destinations. Some common internetworking devices are: </p>

                            <p><b>1. Router: </b>A router is a network device that connects two or more networks and forwards data packets between them. It uses logical addressing (such as IP addresses) to determine the optimal path for forwarding the packets.</p>

                            <p><b>2. Switch:</b>A switch is a network device that connects devices within a local network (LAN) and forwards data packets between them. It uses MAC addresses to determine the destination of the packets and can filter and forward packets based on the destination address.</p>

                            <p><b>3. Hub:</b>A hub is a simple device that connects devices within a local network and forwards data packets between them. It broadcasts all incoming packets to all devices connected to it, which can lead to network congestion and performance issues.</p>

							<p><b>4. Bridge:</b>A bridge is a network device that connects two or more LANs and forwards data packets between them. It uses MAC addresses to determine the optimal path for forwarding the packets.</p>

							<p><b>5. Gateway:</b>A gateway is a device that connects two different networks that use different protocols or technologies. It can translate between different protocols and perform protocol conversion to facilitate communication between the networks.</p>

							<p>These internetworking devices play a crucial role in enabling communication between devices and networks, and are essential for the functioning of the Internet and other large-scale networks.</p>
                            
							
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

									<a href="cn-blog3-3.php" class="pagination-next pull-right">Next</a>
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