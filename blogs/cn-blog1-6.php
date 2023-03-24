<?php $title="Physical Layer" ?>
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
							<li>Data Science </li>
						</ul>
						<h1 class="white-text">Physical Layer</h1>
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
							<h2>Physical Layer:</h2>

							<p>The Physical layer is the lowest layer in the OSI (Open Systems Interconnection) model, responsible for the physical transmission of data over a network. This layer deals with the physical components and the physical characteristics of the network, including cables, connectors, network interface cards (NICs), and other hardware devices. <b> The Physical layer is responsible for the following functions:</b></p>

							<p><b>1. Transmission of data:</b>The Physical layer is responsible for transmitting raw bits over the network media, such as copper wires, fiber optics, or wireless signals.</p>

							<p><b>2. Data encoding:</b> This layer converts the digital data into a format that can be transmitted over the physical medium. Different encoding techniques, such as Manchester encoding, NRZ (Non-Return-to-Zero) encoding, or 8B/10B encoding, are used for this purpose.</p>

							<p><b>3. Signal modulation:</b>This layer converts the digital signal into analog signals, which can be transmitted over the physical medium. Different modulation techniques, such as Amplitude Modulation (AM), Frequency Modulation (FM), or Phase Modulation (PM), are used for this purpose.</p>

							<p><b>4. Transmission media:</b>The Physical layer defines the characteristics of the transmission medium, including its bandwidth, noise level, attenuation, and distortion. The Physical layer is responsible for selecting the appropriate medium for the network.</p>

							<p><b>5. Connector and pinout specifications: </b>The Physical layer defines the type of connectors and pinouts used for the network components. For example, Ethernet cables use RJ-45 connectors, while serial cables use DB-9 or DB-25 connectors.</p>

							<p>The Physical layer does not perform any error correction or flow control functions, as it assumes that the data transmission over the physical medium is error-free. The higher layers, such as the Data Link layer and the Transport layer, are responsible for error detection and correction, as well as flow control.</p>
                            
							
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

									<a href="cn-blog1-7.php" class="pagination-next pull-right">Next</a>
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