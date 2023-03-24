<?php $title="What is Network Layer" ?>
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
						<h1 class="white-text">network Layer</h1>
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
							<h2>What is Network Layer :</h2>

                            <p>The network layer is a layer of the OSI (Open Systems Interconnection) model and the TCP/IP (Transmission Control Protocol/Internet Protocol) model, which provides the functional and procedural means of transferring variable-length data sequences from a source host to a destination host, via one or more networks, while maintaining the quality of service and error control functions. </p>

							<p>The network layer is responsible for logical addressing, routing, and forwarding of packets between different networks. It encapsulates packets from the transport layer and adds a network header that includes the source and destination IP addresses.</p>

							<h4>The main functions of the network layer include:</h4>

                            <p><b>1. Addressing:</b> It provides a unique logical address to each device on the network, which helps in identifying the source and destination of the packets. </p>

                            <p><b>2. Routing:</b> It determines the optimal path that the packets should follow through the network to reach their destination.</p>

                            <p><b>3. Fragmentation and reassembly</b>If the packets are too large to be transmitted over the network, the network layer can break them into smaller units (fragments) and reassemble them at the destination. </p>

							<p><b>4. Quality of Service (QoS):</b>It ensures that the packets are delivered with the required level of service quality, which includes bandwidth, delay, and packet loss.</p>

							<p><b>5. Error Control:</b>It provides error detection and correction mechanisms to ensure that the data sent over the network is free from errors.</p>

							<p>The network layer is critical in the functioning of the Internet as it provides the necessary addressing and routing functions required for data transmission over the network.</p>
                            
							
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

									<a href="cn-blog3-2.php" class="pagination-next pull-right">Next</a>
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