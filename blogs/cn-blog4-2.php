<?php $title="Process to Process Delivery in Transport Layer" ?>
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
						<h1 class="white-text">Process to Process Delivery</h1>
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
							<h2>Process to Process Delivery :</h2>

                            <p>Process to Process Delivery (P2P) is the delivery of data from one process (a program running on a computer) to another process on a different computer, over a network. The Transport Layer of the OSI model provides the P2P delivery service, which is accomplished using the following steps: </p>

                            <p><b>1. Application layer data is sent to the Transport Layer: </b>When an application wants to send data to another application, it sends the data to the Transport Layer. The Transport Layer receives the data and prepares it for transmission over the network. </p>

                            <p><b>2. Segmentation and Multiplexing: </b>The Transport Layer segments the data into smaller packets that can be transmitted over the network more efficiently. It also adds a header to each packet that includes the source and destination port numbers, which are used to identify the sending and receiving processes.</p>

                            <p><b>3. Transport Layer Protocol selection: </b>The Transport Layer protocol to be used for transmission (TCP or UDP) is selected based on the application's requirements. If the application requires reliable delivery of data, TCP is used. If the application can tolerate some data loss, UDP is used. </p>

							<p><b>4. IP address resolution:</b>The Transport Layer resolves the IP addresses of the sending and receiving computers using Domain Name System (DNS) or other mechanisms.</p>

							<p><b>4. Network layer transmission: </b>The Network Layer receives the packets from the Transport Layer and adds its own header, including the source and destination IP addresses. The packets are then sent over the network to the receiving computer. </p>

							<p><b>6. Packet reassembly:</b> When the packets arrive at the destination computer, the Transport Layer receives them and reassembles them into the original data stream.</p>

							<p><b>7. Delivery to the application layer: </b>The reassembled data is delivered to the receiving application.</p>

							<p>Overall, the P2P delivery process involves the segmentation, transmission, and reassembly of data packets across the network, with each packet containing source and destination port numbers that allow the Transport Layer to identify the sending and receiving processes. This process enables reliable and efficient communication between applications running on different computers.</p>
                            
							
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

									<a href="cn-blog4-3.php" class="pagination-next pull-right">Next</a>
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