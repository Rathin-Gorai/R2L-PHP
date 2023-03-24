<?php $title="Selective Repeat ARQ in Computer networking" ?>
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
						<h1 class="white-text">Selective Repeat ARQ</h1>
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
							<h2>Selective Repeat ARQ :</h2>

                            <p>Selective Repeat Automatic Repeat Request (ARQ) is an error control protocol used in data communication to ensure the reliable transfer of data between two devices. It is a sliding window protocol that is an extension of the Go-Back-N ARQ protocol, and it provides better efficiency and throughput. </p>

                            <p>In the Selective Repeat ARQ protocol, the sender sends a sequence of packets to the receiver, and the receiver sends an acknowledgment (ACK) for each packet that is received without errors. The receiver also buffers the packets that are received with errors.</p>

                            <p>If the sender does not receive an ACK for a packet within a certain time period (called the timeout period), it retransmits only the lost packet, not the entire sequence of packets as in the Go-Back-N ARQ protocol. The receiver discards any duplicate packets that it may receive and uses the buffered packets to fill in the gaps in the sequence of packets.</p>

                            <p>The Selective Repeat ARQ protocol allows the sender to transmit multiple packets without waiting for an ACK for each packet, leading to better efficiency and higher throughput compared to both the Stop-and-Wait protocol and the Go-Back-N ARQ protocol. It also allows for more flexibility in the size of the window, as the receiver can selectively acknowledge packets within a larger window size.</p>

                            <p>The Selective Repeat ARQ protocol is commonly used in applications that require high data rates and where data transmission delays are not critical, such as wireless communication systems, satellite communication systems, and the Internet.</p>
                            
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

									<a href="cn-blog2-5.php" class="pagination-next pull-right">Next</a>
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