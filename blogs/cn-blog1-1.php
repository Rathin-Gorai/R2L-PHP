<?php $title="Data communication Components" ?>
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
						<h1 class="white-text">Data communication Components</h1>
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
							<h2>Data communication Components:</h2>

                            <p>Data communication components are the hardware and software that enable devices to communicate and exchange data with each other. Some common components of data communication systems include:</p>

                            <p><b>1. Sender/Transmitter:</b> This is the device that initiates the transmission of data.</p>

                            <p><b>2. Receiver:</b>This is the device that receives the transmitted data. </p>

                            <p><b>3. Transmission medium:</b>This is the physical channel through which data is transmitted, such as a wire, cable, fiber optic cable, or wireless channel. </p>

                            <p><b>4. Protocol:</b> This is a set of rules that governs how data is transmitted and received between devices.</p>

                            <p><b>5. Modem:</b> This is a device that converts digital signals to analog signals for transmission over telephone lines.</p>

                            <p><b>6. Network Interface Card (NIC):</b>This is a hardware component that connects a computer or other device to a network. </p>

                            <p><b>7. Switch:</b> This is a device that connects multiple devices on a network and routes data between them.</p>

                            <p><b>8. Router:</b> This is a device that connects multiple networks and routes data between them.</p>

                            <p><b>9. Firewall:</b> This is a software or hardware component that protects a network from unauthorized access.</p>

                            <p><b>10. Gateway:</b> This is a device that connects two networks that use different protocols.</p>

							
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

									<a href="cn-blog1-2.php" class="pagination-next pull-right">Next</a>
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