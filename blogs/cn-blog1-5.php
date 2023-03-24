<?php $title="OSI Model in Computer Networks" ?>
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
							<li>Computer Network  </li>
						</ul>
						<h1 class="white-text">OSI Model</h1>
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
							<h2>Data OSI Model :</h2>

							<p>The OSI (Open Systems Interconnection) model is a conceptual framework that was developed by the International Organization for Standardization (ISO) to describe how data is transmitted over a network. The OSI model consists of seven layers, each of which represents a different function or process involved in network communication. The layers are:</p>

							<p><b>1. Physical layer: </b>This layer deals with the physical transmission of data over a network, including the physical components such as cables, connectors, and network interface cards (NICs).</p>

							<p><b>2. Data link layer:</b>This layer is responsible for the reliable transmission of data across a physical link, including error detection and correction. </p>

							<p><b>3. Network layer:</b> This layer is responsible for routing data between different networks, using protocols such as IP (Internet Protocol).</p>

							<p><b>4. Transport layer:</b> This layer provides reliable, end-to-end communication between devices, including flow control, error recovery, and congestion control.</p>

							<p><b>5. Session layer:</b> </p>

							<p><b>6. Presentation layer:</b> This layer is responsible for the representation of data, including data compression and encryption.</p>

							<p><b>7. Application layer: </b> This layer provides services to end-user applications, including protocols such as HTTP (Hypertext Transfer Protocol) for web browsing and SMTP (Simple Mail Transfer Protocol) for email.</p>

							<p>Each layer of the OSI model performs a specific set of functions, and each layer relies on the layers below it for support. The OSI model is often used as a reference model for network design and troubleshooting.</p>
                            
							
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

									<a href="cn-blog1-6.php" class="pagination-next pull-right">Next</a>
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