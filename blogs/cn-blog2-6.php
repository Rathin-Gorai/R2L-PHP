<?php $title="Data Link Layer in Computer networking" ?>
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
						<h1 class="white-text">Multiple Access Protocols -Pure ALOHA</h1>
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
							<h2>Multiple Access Protocols :</h2>

                            <p>Multiple Access Protocols are used to allow multiple devices to share a common communication channel efficiently. There are several different types of multiple access protocols, including: </p>

                            <p><b>1. Pure ALOHA: </b>In this protocol, devices can transmit data at any time without checking if the channel is idle, which may cause collisions if two or more devices transmit simultaneously.</p>

                            <p><b>2.Slotted ALOHA:</b> In this protocol, the channel is divided into discrete time slots, and devices are allowed to transmit data only at the beginning of a time slot, reducing the probability of collision.</p>

                            <p><b>3. Carrier Sense Multiple Access (CSMA):</b> In this protocol, devices listen to the channel to check if it is idle before transmitting. If the channel is busy, devices wait for a random time before attempting to retransmit.</p>

                            <p><b>4. Carrier Sense Multiple Access with Collision Detection (CSMA/CD):</b> This protocol is similar to CSMA, but devices also listen for collisions on the channel, and if a collision is detected, they back off for a random time interval before retransmitting.</p>

                            <p><b>5. Time Division Multiple Access (TDMA):</b> In this protocol, the channel is divided into time slots, and each device is assigned a specific time slot during which it can transmit its data.</p>

                            <p><b>6. Frequency Division Multiple Access (FDMA): </b> In this protocol, the available bandwidth is divided into multiple non-overlapping frequency bands, and each device is assigned a unique frequency band to transmit its signals.</p>

                            <p><b>7. Code Division Multiple Access (CDMA):</b> In this protocol, each device is assigned a unique code sequence, and all devices transmit their signals simultaneously on the same frequency band. The receiver uses the code sequence to separate the signals of different devices.</p>

                            <p><b>8. Orthogonal Frequency Division Multiple Access (OFDMA):</b>OFDMA is a variant of FDMA, where the available bandwidth is divided into multiple sub-carriers, and each user is assigned a set of sub-carriers to transmit its signals.</p>

                            <p>The choice of multiple access protocol depends on the specific requirements of the communication system, including the number of devices, available bandwidth, and the required quality of service. Multiple Access Protocols are widely used in modern communication systems, including wireless communication, satellite communication, and computer networks.</p>

                            <h2>Pure ALOHA :</h2>

                            <p>Pure ALOHA is a multiple access protocol used in computer networks for sharing a single communication channel among multiple users. It was developed at the University of Hawaii in the early 1970s for use in satellite communication systems.</p>

                            <p>In the Pure ALOHA protocol, a user can transmit data at any time, without waiting for the channel to be idle. If two or more users transmit their data simultaneously, a collision occurs, and the data from both users is lost. After a random time interval, each user retransmits the data until it is successfully transmitted without collision.</p>

                            <p>Pure ALOHA is a simple protocol that does not require any synchronization or coordination between the users. It is easy to implement and is suitable for systems with a low number of users and a low data transmission rate. However, it has low channel utilization efficiency and high packet collision rate, especially when the number of users and the data transmission rate increase.</p>

                            <p>The Pure ALOHA protocol was later improved by the development of the Slotted ALOHA protocol, which divides the channel into time slots and requires users to transmit their data only at the beginning of a time slot. This reduces the probability of collision and increases the channel utilization efficiency. Slotted ALOHA is widely used in modern communication systems, including wireless communication, satellite communication, and computer networks.</p>
                            
							
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

									<a href="cn-blog2-7.php" class="pagination-next pull-right">Next</a>
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