<?php $title="Error Detection and Error Correction - Fundamentals in Computer Network" ?>
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
						<h1 class="white-text">Error Detection and Error Correction - Fundamentals</h1>
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
							<h2>Error Detection and Error Correction - Fundamentals :</h2>

                            <p> Error detection and error correction are important aspects of computer networking, where data needs to be transmitted and received accurately and reliably. These techniques help to identify and correct errors that may occur during data transmission and storage.</p>

                            <h2>Error Detection: </h2>

                            <h4>There are different techniques for error detection in computer networking, including:</h4>

                            <p><b>1. Parity Check:</b>This technique involves adding an extra bit (the parity bit) to the data to be transmitted. The parity bit is set so that the number of 1s in the data plus the parity bit is always even or odd. The receiver checks whether the number of 1s in the received data plus the parity bit is even or odd. If it is not, an error is detected. </p>

                            <p><b>2. Checksum:</b> This technique involves calculating a checksum for the data to be transmitted. The checksum is then added to the data as a separate field. When the data is received, the receiver recalculates the checksum and compares it to the transmitted checksum. If the two checksums do not match, an error is detected. </p>

                            <p><b>3. Cyclic Redundancy Check (CRC):</b> This technique uses a polynomial division algorithm to generate a checksum for the data to be transmitted. The checksum is added to the data as a separate field. When the data is received, the receiver performs the same polynomial division algorithm and compares the calculated checksum to the transmitted checksum. If the two checksums do not match, an error is detected.</p>

                            <h2>Error Correction:</h2>

                            <p>Error correction is more complex than error detection and involves identifying and correcting errors that may occur during data transmission and storage. Some techniques for error correction in computer networking include:</p>

                            <p><b>1. Forward Error Correction (FEC): </b>This technique involves adding extra bits (known as redundancy bits) to the data to be transmitted. The redundancy bits are calculated based on the data using an error-correcting code. When the data is received, the receiver uses the same error-correcting code to check for errors and correct them if possible. </p>

                            <p><b>2. Automatic Repeat reQuest (ARQ): </b> In this technique, the receiver sends an acknowledgement (ACK) message to the sender after receiving each data packet. If the sender does not receive an ACK message within a specified time, it assumes that the packet was lost or corrupted and retransmits the packet. This process continues until the receiver sends an ACK message for each packet received.</p>

                            <p><b>3. Hamming Code: </b> This technique can be used for both error detection and error correction. Hamming code adds extra parity bits to the data to be transmitted, which can be used to identify and correct single-bit errors in the data.</p>

                            <p>In computer networking, error correction is particularly important in applications such as file transfers, email, and streaming video, where errors can cause data loss, corruption, and distortion.</p>
                            
							
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

									<a href="cn-blog2-11.php" class="pagination-next pull-right">Next</a>
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