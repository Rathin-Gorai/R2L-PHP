<?php $title="Data Link Layer in Computer networking" ?>
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
						<h1 class="white-text">Data Link Layer in Computer networking</h1>
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
							<h2>CSMA/CA (Carrier Sense Multiple Access with Collision Avoidance) :</h2>

                            <p> The CSMA/CA (Carrier Sense Multiple Access with Collision Avoidance) protocol is a multiple access protocol used in wireless networks to allow multiple devices to share a single communication channel efficiently. It is an improvement over the CSMA/CD protocol, which is used in wired networks.</p>

                            <p>In the CSMA/CA protocol, each device listens to the channel to check if it is idle before transmitting data. If the channel is busy, the device waits for a random time before attempting to retransmit. However, in wireless networks, the hidden node problem can occur, where two devices are out of range of each other, but each can communicate with a third device, resulting in a collision. To avoid this problem, the CSMA/CA protocol uses a different approach.</p>

                            <p>In CSMA/CA, each device sends a short Request to Send (RTS) message to the intended recipient, requesting permission to transmit. The recipient responds with a Clear to Send (CTS) message, indicating that it is ready to receive the data. Other devices that receive the RTS message but are not the intended recipient defer their transmission until the CTS message is received or the transmission time-out period expires. This ensures that the intended recipient has exclusive access to the channel during the transmission, avoiding collisions.</p>

                            <p>CSMA/CA also includes a feature known as a backoff algorithm, which increases the waiting time after each unsuccessful transmission attempt, similar to CSMA/CD. This helps to reduce the likelihood of collisions caused by hidden nodes.</p>

                            <p>CSMA/CA is used in various wireless communication systems, including Wi-Fi (Wireless Fidelity), Bluetooth, and Zigbee. It is suitable for low to medium data rate systems with a moderate number of users and is widely used in home and office wireless networks.</p>
                            
							
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

									<a href="cn-blog2-10.php" class="pagination-next pull-right">Next</a>
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