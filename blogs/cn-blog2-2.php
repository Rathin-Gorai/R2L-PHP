<?php $title="Flow Control and Error control protocols -Stop and Wait in Computer networking" ?>
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
						<h1 class="white-text">Flow Control and Error control protocols -Stop and Wait</h1>
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
							<h2>Flow Control  :</h2>

                            <p> Flow control is the process of managing the rate of data transmission between a sender and a receiver. It is a mechanism that regulates the flow of data between two devices to prevent data loss due to overloading of the receiver's buffer. Flow control is particularly important when the transmission rate of the sender is higher than the receiving rate of the receiver.</p>

                            <h4>There are two types of flow control mechanisms:</h4>

                            <p><b>1. Stop-and-Wait:</b>In stop-and-wait flow control, the sender sends a packet and waits for an acknowledgement from the receiver before sending the next packet. This mechanism ensures that the receiver has received and processed the packet before the sender sends the next one. However, this method can be inefficient if the transmission delay is high.</p>

                            <p><b>2. Sliding Window: </b> Sliding window flow control allows the sender to transmit multiple packets without waiting for an acknowledgement after each packet. The receiver sends a window size indicating how many packets it can receive and process. The sender then sends packets up to the window size and waits for an acknowledgement from the receiver. If the acknowledgement is received, the sender increases the window size and sends more packets. If the acknowledgement is not received, the sender resends the packets that were not acknowledged.</p>

                            <p>Flow control is typically implemented at the data link layer, where it can manage the transmission of data over a LAN or WAN. It helps prevent packet loss due to buffer overflow, which can result in degraded network performance or data corruption. The implementation of flow control mechanisms in network protocols such as TCP ensures reliable and efficient data transfer over networks. </p>

                            <h2> Error control protocols :</h2>

                            <p>Error control protocols are used to ensure reliable transmission of data across a communication channel that may be prone to errors. These errors can occur due to various reasons such as noise, interference, distortion, or data corruption during transmission. Error control protocols are used to detect and correct these errors to ensure data integrity and reliability.</p>

                            <h4>There are two types of error control protocols:</h4>

                            <p><b>1. Error Detection: </b> Error detection protocols are used to identify whether errors have occurred during data transmission or not. These protocols are designed to detect errors but do not correct them. The most common techniques for error detection are checksums, cyclic redundancy checks (CRC), and parity checks. These techniques add some extra bits to the data to create a checksum or CRC, which is sent along with the data. The receiver calculates the checksum or CRC and compares it with the received value to determine if any errors have occurred during transmission.</p>

                            <p><b>2. Error Correction:</b>Error correction protocols are used to detect and correct errors during data transmission. These protocols use techniques such as Automatic Repeat Request (ARQ) and Forward Error Correction (FEC). ARQ protocols retransmit data that is lost or corrupted during transmission. There are three types of ARQ protocols: Stop and Wait ARQ, Go-Back-N ARQ, and Selective Repeat ARQ. FEC protocols add redundant information to the transmitted data, which allows the receiver to correct errors without requesting retransmission of the data. </p>

                            <p>ARQ protocols are commonly used in the data link layer of the OSI model, while FEC protocols are used in the physical layer. Some common examples of error control protocols include CRC in Ethernet, Stop-and-Wait ARQ in Point-to-Point Protocol (PPP), and Reed-Solomon FEC in digital television and satellite communications.</p>

                            <h2>Error control protocols -Stop and Wait:</h2>

                            <p>Stop-and-Wait is an error control protocol that is used in data communication to ensure the reliable transfer of data between two devices. It is a simple and straightforward protocol that operates by sending a single data packet at a time and waiting for an acknowledgment (ACK) from the receiver before sending the next packet.</p>

                            <h4>The Stop-and-Wait protocol works as follows:</h4>

                            <p><b>1. </b> The sender sends a packet to the receiver.</p>

                            <p><b>2. </b> The sender waits for an acknowledgment (ACK) from the receiver before sending the next packet.</p>

                            <p><b>3. </b>If the sender does not receive an ACK after a certain time period (called the timeout period), it retransmits the packet.</p>

                            <p><b>4. </b> The receiver receives the packet and sends an ACK back to the sender.</p>

                            <p><b>5. </b>If the receiver detects an error in the packet, it discards the packet and does not send an ACK. </p>

                            <p><b>6. </b>The sender receives no ACK and retransmits the packet after a timeout period. </p>

                            <p>The Stop-and-Wait protocol is reliable but not very efficient, especially when the communication channel has a high delay or a low bandwidth. This is because the sender has to wait for an ACK before sending the next packet, which leads to low utilization of the communication channel.</p>

                            <p>The Stop-and-Wait protocol is commonly used in applications that require low data rates and where data transmission delays are not critical, such as dial-up modems and satellite communication systems.</p>
                            
							
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

									<a href="cn-blog2-3.php" class="pagination-next pull-right">Next</a>
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