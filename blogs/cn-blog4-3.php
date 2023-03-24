<?php $title="UDP and TCP in Transport Layer protocols" ?>
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
						<h1 class="white-text">UDP and TCP</h1>
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
							<h2>UDP and TCP :</h2>

                            <p>UDP (User Datagram Protocol) and TCP (Transmission Control Protocol) are two common Transport Layer protocols used in computer networking. They are both used to transfer data between applications, but they have different characteristics and are used in different situations. </p>

							<h2>UDP: </h2>

							<p>UDP is a connectionless protocol, which means that it does not establish a dedicated end-to-end connection before transmitting data. Instead, it simply sends packets to the destination address without verifying if they have been received or not. UDP is faster and more efficient than TCP, but it does not guarantee delivery, so it is often used in applications where speed is more important than reliability, such as online gaming, live streaming, or other real-time applications.</p>

                            <p><b>1. Low latency: </b>Since UDP does not establish a connection before transmitting data, it has lower latency (delay) than TCP, making it a good choice for real-time applications like video and audio streaming. </p>

                            <p><b>2. Simple protocol:</b>UDP has a simpler protocol than TCP, with fewer control messages and no flow control or congestion control mechanisms. This makes it easier to implement and more lightweight than TCP.</p>

                            <p><b>3. Broadcast and multicast support: </b> UDP supports broadcasting and multicasting of data, which allows a single sender to transmit data to multiple recipients simultaneously.</p>

							<p><b>4. No overhead for connection establishment and teardown:</b>UDP does not require the overhead of connection establishment and teardown, making it faster for applications that do not require a connection-oriented protocol. </p>

							<p>However, the lack of reliability in UDP can also be a disadvantage, as it does not provide any error checking or retransmission of lost or corrupted packets. This means that UDP is not suitable for applications where data integrity is critical or where packet loss is unacceptable.</p>

							<h2>TCP :</h2>

							<p>TCP is a connection-oriented protocol, which means that it establishes a dedicated end-to-end connection before transmitting data. This ensures that data is delivered reliably, and any missing packets are retransmitted until they are received correctly. TCP is slower than UDP due to the overhead of connection establishment and error checking, but it is more reliable, making it the preferred protocol for applications where data integrity is critical, such as web browsing, file transfer, or email.</p>

							<p><b>TCP has several features that make it a reliable and robust protocol for transmitting data:</b></p>

							<p><b>1. Connection-oriented:</b> TCP establishes a dedicated end-to-end connection between the sender and the receiver before transmitting data. This ensures that data is delivered reliably and in order, with any missing packets retransmitted until they are received correctly.</p>

							<p><b>2. Flow control:</b>TCP includes flow control mechanisms to ensure that data is transmitted at a rate that the receiver can handle. This prevents the receiver from being overwhelmed with data and reduces the risk of dropped packets. </p>

							<p><b>3. Congestion control:</b>TCP also includes congestion control mechanisms to prevent network congestion and ensure fair use of network resources. This helps to maintain network stability and prevent the network from becoming congested.</p>

							<p><b>4. Error checking: </b>TCP includes checksums to detect any errors or corruption in the transmitted data. If an error is detected, TCP will request retransmission of the corrupted data. </p>

							<p><b>5. Retransmission:</b>TCP retransmits any packets that are lost or corrupted during transmission. This ensures that all data is received by the receiver in the correct order and with no missing packets. </p>

							<p>However, the connection-oriented nature of TCP and the overhead of establishing and tearing down connections can make it slower and less efficient than UDP. Additionally, TCP may not be suitable for applications where speed is more important than reliability. Overall, the choice of protocol depends on the specific requirements of the application.</p>
                            
							
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

									<a href="cn-blog4-4.php" class="pagination-next pull-right">Next</a>
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