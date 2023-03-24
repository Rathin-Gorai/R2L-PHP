<?php $title="Transport Layer in OSI Model" ?>
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
						<h1 class="white-text">Transport Layer </h1>
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
							<h2>Transport Layer :</h2>

                            <p>The Transport Layer is the fourth layer in the OSI (Open Systems Interconnection) model and the TCP/IP (Transmission Control Protocol/Internet Protocol) protocol suite. Its main function is to provide reliable end-to-end communication between the sender and the receiver. </p>

                            <p><b>The Transport Layer has two main protocols:</b> the Transmission Control Protocol (TCP) and the User Datagram Protocol (UDP).</p>

                            <p>TCP is a connection-oriented protocol that provides reliable, ordered, and error-checked delivery of data between applications. It guarantees that data packets are delivered in the order in which they were sent and provides mechanisms for detecting and recovering from transmission errors. </p>

							<p>UDP, on the other hand, is a connectionless protocol that does not guarantee reliable delivery of data. It is often used for applications that do not require reliable data delivery, such as video streaming or online gaming.</p>

							<p>In addition to its main protocols, the Transport Layer also includes several other important functions, including:</p>

                            <p><b>* Multiplexing:</b>This allows multiple applications to share a single network connection. </p>

							<p><b>* Segmentation: </b>This breaks up large data packets into smaller segments that can be transmitted more efficiently over the network.</p>

							<p><b>* Flow Control: </b>This regulates the flow of data between the sender and the receiver to prevent the receiver from being overwhelmed with data it cannot process. </p>

							<p><b>* Port numbers :</b>The Transport Layer uses port numbers to identify the specific applications that are sending and receiving data. Each application is assigned a unique port number, which allows the Transport Layer to multiplex multiple applications over a single network connection. </p>

							<p><b>* Connection-oriented vs. connectionless : </b>As mentioned earlier, TCP is a connection-oriented protocol while UDP is connectionless. TCP establishes a reliable connection between the sender and receiver before transmitting data, while UDP simply sends data packets without establishing a connection first. This means that TCP is more reliable but slower, while UDP is faster but less reliable. </p>

							<p><b>* Three-way handshake :</b>When establishing a connection using TCP, a three-way handshake is used to ensure that both the sender and receiver are ready to transmit and receive data. The three-way handshake involves three steps: SYN (synchronize), SYN-ACK (synchronize-acknowledge), and ACK (acknowledge).</p>

							<p><b>* Error detection and correction :</b>The Transport Layer uses various techniques to detect and correct errors in transmitted data, such as checksums and acknowledgment packets. If an error is detected, the data can be retransmitted to ensure that it is received correctly. </p>

							<p><b>* Quality of Service (QoS) :</b>The Transport Layer also includes features that allow for prioritization of different types of traffic. For example, VoIP (Voice over IP) traffic may be given a higher priority than other types of traffic to ensure that voice quality is maintained even in congested network conditions.</p>

							<p>Overall, the Transport Layer is a critical component of the OSI model and the TCP/IP protocol suite. Its functions are essential for ensuring reliable and efficient communication between applications over a network.</p>
                            
							
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

									<a href="cn-blog4-2.php" class="pagination-next pull-right">Next</a>
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