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
							<h2>Data Link Layer :</h2>

							<p> The Data Link Layer is the second layer of the OSI (Open Systems Interconnection) reference model. It is responsible for providing reliable data transfer between adjacent network nodes over a physical layer. The data link layer performs error detection, flow control, and framing of data.</p>

							<h4>Some of the key functions of the data link layer are:</h4>

							<p><b>1. Framing:</b>The data link layer breaks down the data received from the network layer into frames, which include the data itself along with other information such as the source and destination addresses.</p>

							<p><b>2. Error Detection and Correction:</b> The data link layer detects errors in the data during transmission and corrects them if possible. It uses techniques like checksums, parity checks, and cyclic redundancy checks (CRC) to ensure data integrity.</p>

							<p><b>3. Flow Control:</b>The data link layer regulates the flow of data between the sender and receiver. This is important to prevent data loss due to overloading of the receiver's buffer.</p>

							<p><b>4. Access Control:</b> The data link layer controls access to the physical medium, such as a LAN, to avoid collisions between multiple devices trying to transmit data simultaneously. It uses techniques like Carrier Sense Multiple Access with Collision Detection (CSMA/CD) or Carrier Sense Multiple Access with Collision Avoidance (CSMA/CA) to manage access to the medium.</p>

							<p>The most common protocols that operate at the data link layer are Ethernet, Wi-Fi, and Point-to-Point Protocol (PPP).</p>
                            
							
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

									<a href="cn-blog2-2.php" class="pagination-next pull-right">Next</a>
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