<?php $title="Sliding Window in Computer networking" ?>
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
						<h1 class="white-text">Sliding Window</h1>
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
							<h2>Sliding Window :</h2>

                            <p>A sliding window is a flow control mechanism used in data communication to manage the transmission of data between a sender and a receiver. It is a buffer of fixed size that allows the sender to transmit a limited number of packets to the receiver before waiting for an acknowledgment (ACK).</p>

                            <p>The sliding window protocol works by maintaining a window of size N at both the sender and the receiver. The sender is allowed to transmit up to N packets without waiting for an ACK from the receiver. The receiver buffers the packets it receives and sends an ACK for each packet in the window as they are received.</p>

                            <p>As the sender transmits new packets, the window slides forward. If the sender does not receive an ACK for a packet within a certain time period (called the timeout period), it retransmits the packet, and the window slides back to the lost packet.</p>

                            <p>The sliding window protocol allows for more efficient use of the communication channel as the sender can transmit multiple packets without waiting for an ACK for each packet, leading to higher throughput. It also allows for better flow control, as the sender can adjust the window size based on the receiver's buffer capacity.</p>

                            <p>There are several types of sliding window protocols, including Go-Back-N ARQ and Selective Repeat ARQ, which use automatic repeat request (ARQ) mechanisms to ensure reliable data transfer. Sliding window protocols are commonly used in modern data communication systems, including the Internet, wireless communication, and satellite communication systems.</p>
                    							
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

									<a href="cn-blog2-6.php" class="pagination-next pull-right">Next</a>
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