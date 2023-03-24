<?php $title="LAN technologies  (Ethernet)" ?>
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
							<li>Computer Network  </li>
						</ul>
						<h1 class="white-text">LAN technologies  (Ethernet)</h1>
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
							<h2>What is LAN:</h2>

							<p>LAN (Local Area Network) is a computer network that is designed to connect devices within a limited geographical area, such as an office building, a school campus, or a home. LANs typically use Ethernet, Wi-Fi, or other high-speed technologies for data transmission between devices, and they are often connected to the Internet via a router or a gateway device.</p>

							<p>LANs can be used for various purposes, such as sharing files, printers, and other resources between devices, accessing online services, and communicating with other devices on the network. LANs can be set up in various configurations, including:</p>

							<p><b>1. Peer-to-peer network: </b>In this configuration, all devices on the network are connected to each other, and they share resources and data directly with each other. This configuration is suitable for small networks with fewer than 10 devices. </p>

							<p><b>2. Client-server network:</b> In this configuration, one or more devices act as servers, and they provide services and resources to other devices, which act as clients. The server devices can be dedicated servers or personal computers acting as servers, and they provide services such as file sharing, print sharing, or application hosting.</p>

							<p><b>3. Hybrid network:</b> This configuration combines the peer-to-peer and client-server models, and it is suitable for networks with a mix of devices and services. Some devices act as servers, providing services to other devices, while other devices act as clients, accessing the services provided by the servers.</p>

							<p><b>LANs can be implemented using various topologies, including:</b> </p>

							<p><b>1. Bus topology:</b>  In this topology, all devices are connected to a single cable or a bus, and data is transmitted between devices by broadcasting it over the bus.</p>

							<p><b>2. Star topology:</b> In this topology, all devices are connected to a central hub or a switch, and data is transmitted between devices through the hub or switch.</p>

							<p><b>3. Ring topology:</b> In this topology, all devices are connected in a closed loop, and data is transmitted between devices by passing it from one device to the next in the loop.</p>

							<p>Each LAN technology and topology has its advantages and disadvantages, and the choice of LAN configuration depends on the specific requirements and constraints of the network.</p>

							<h2> What is Ethernet:</h2>

							<p>Ethernet is a popular LAN (Local Area Network) technology used for connecting computers, servers, printers, and other network devices within a limited geographical area. Ethernet uses a packet-switched architecture and is based on the IEEE 802.3 standard. Ethernet networks can operate over a variety of physical media, including copper wires, fiber optic cables, and wireless transmissions.</p>

							<p>Ethernet uses CSMA/CD (Carrier Sense Multiple Access with Collision Detection) protocol to manage the communication between multiple devices on the network. The CSMA/CD protocol helps to avoid data collisions when multiple devices try to transmit data simultaneously. The Ethernet frames consist of a header, payload, and trailer, and the maximum frame size is 1500 bytes.</p>

							<h4>The Ethernet standard defines several physical layer specifications, including:</h4>

							<p><b>1. Ethernet over twisted pair cables:</b>This is the most common Ethernet physical layer specification, and it uses twisted pair cables with RJ-45 connectors. The most popular Ethernet standard for this specification is 100BASE-TX, which supports a data rate of 100 Mbps. </p>

							<p><b>2. Ethernet over fiber optic cables: </b>This specification uses fiber optic cables for high-speed data transmission over long distances. The most popular Ethernet standard for this specification is 1000BASE-SX, which supports a data rate of 1 Gbps over multimode fiber optic cables. </p>

							<p><b>3. Ethernet over wireless:</b>This specification uses radio waves for wireless data transmission over the network. The most popular Ethernet standard for this specification is 802.11 Wi-Fi, which supports data rates of up to several Gbps, depending on the Wi-Fi standard and the network configuration.</p>

							<p>Ethernet is widely used in LANs because of its simplicity, reliability, and scalability. Ethernet networks can be easily expanded by adding more devices or switches to the network, and Ethernet is also compatible with a wide range of network protocols, making it suitable for various applications.</p>
                            
							
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

									<a href="cn-blog1-8.php" class="pagination-next pull-right">Next</a>
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