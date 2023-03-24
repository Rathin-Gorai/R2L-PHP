<?php $title="Congestion Control and Quality of Services" ?>
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
						<h1 class="white-text">Congestion Control and Quality of Services</h1>
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
							<h2>Congestion Control  :</h2>

                            <p>Congestion control is a mechanism used by the Transport Layer to prevent network congestion, which can occur when the network becomes overloaded with too much traffic. Congestion can lead to increased packet loss, delays, and reduced network performance. </p>

                            <p>TCP uses a congestion control algorithm to prevent network congestion and ensure fair use of network resources. The TCP congestion control algorithm works by adjusting the sending rate of data based on feedback from the network. If the network is congested, the sender reduces the rate at which it sends data to prevent further congestion. </p>

                            <p>The TCP congestion control algorithm uses a technique called additive increase/multiplicative decrease (AIMD) to adjust the sending rate. When there is no congestion, the sender increases its sending rate linearly, adding a small increment to the sending rate for each successful transmission. When congestion is detected, the sender decreases its sending rate exponentially, reducing the sending rate by a factor of two for each congestion event. </p>

                            <p>TCP also uses a technique called slow start to increase the sending rate gradually when a new connection is established. Slow start begins by sending a small number of packets and gradually increasing the number of packets sent until congestion is detected. This helps to prevent sudden bursts of traffic that could cause congestion.</p>

							<p>Other Transport Layer protocols, such as UDP, do not include congestion control mechanisms, which can make them more vulnerable to network congestion. Therefore, congestion control is an important feature of Transport Layer protocols that helps to maintain network stability and prevent congestion-related issues.</p>

							<h2>Quality of Services :</h2>

							<p>Quality of Service (QoS) is a mechanism used by the network to prioritize certain types of traffic over others, based on their importance or sensitivity to delay, jitter, or packet loss. QoS can help to ensure that critical applications and services receive the necessary network resources and bandwidth, while less critical applications are given lower priority.</p>

							<p>The Transport Layer can use QoS mechanisms to provide different levels of service to different applications, based on their requirements. Some of the QoS mechanisms used by the Transport Layer include:</p>

							<p><b>1. Traffic shaping:</b>Traffic shaping is a technique used to regulate the flow of traffic on the network, by limiting the rate at which packets are sent. This can help to prevent congestion and ensure that critical applications receive the necessary bandwidth.</p>

							<p><b>2. Packet marking:</b>Packet marking is a technique used to mark packets with a specific priority level, based on their importance or sensitivity to delay or packet loss. This allows the network to prioritize traffic based on its importance. </p>

							<p><b>3. Bandwidth allocation: </b> Bandwidth allocation is a technique used to allocate network resources to different applications or users, based on their requirements. This can help to ensure that critical applications receive the necessary bandwidth, while less critical applications are given lower priority. </p>

							<p><b>4. Admission control: </b>Admission control is a technique used to ensure that the network resources are not overloaded by limiting the number of applications or users that are allowed to access the network at a given time.</p>

							<p><b>5. Congestion management: </b> Congestion management is a technique used to manage congestion on the network, by dropping or delaying packets when the network becomes congested. This can help to ensure that critical applications receive the necessary bandwidth, while less critical applications are given lower priority.</p>

							<p>Overall, QoS mechanisms can help to ensure that critical applications and services receive the necessary network resources and bandwidth, while less critical applications are given lower priority. This can improve the overall performance and reliability of the network, and help to ensure that all users receive a satisfactory level of service.</p>
                            							
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

									<a href="cn-blog5-1.php" class="pagination-next pull-right">Next</a>
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