<?php $title="RARP and DHCP" ?>
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
						<h1 class="white-text">RARP and DHCP</h1>
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
							<h2>RARP :</h2>

                            <p>RARP stands for "Reverse Address Resolution Protocol". It is a protocol used in computer networking to translate a hardware address (such as a MAC address) to an IP address. </p>

                            <p>In a typical network, devices use the Address Resolution Protocol (ARP) to map IP addresses to hardware addresses. RARP is used in cases where a device needs to obtain its IP address but does not know it yet. In such cases, the device sends a broadcast RARP request to all devices on the network, asking for its IP address. The RARP server then responds with the IP address associated with the requesting device's hardware address.</p>

                            <p>RARP has been largely replaced by other protocols such as BOOTP (Bootstrap Protocol) and DHCP (Dynamic Host Configuration Protocol), which provide more functionality and flexibility.</p>

							<h4>Here are some additional details about RARP:</h4>

                            <p><b>1. </b>RARP was originally developed for use in diskless workstations, which needed to obtain their IP addresses at boot time but did not have any permanent storage to store configuration information.</p>

							<p><b>2. </b>RARP operates at the data link layer (Layer 2) of the OSI model, specifically in the same layer as ARP. </p>

							<p><b>3. </b>RARP requests are sent using broadcast frames, which are frames that are addressed to all devices on the network. This allows the requesting device to receive a response from any RARP server that is listening on the network. </p>

							<p><b>4. </b>RARP has some limitations, such as the fact that it only works for devices that are directly connected to the same network segment. If a device needs to obtain its IP address from a remote network, it would need to use a different protocol such as DHCP.</p>

							<p><b>5. </b>RARP has largely been replaced by other protocols, but it is still sometimes used in legacy systems or in specialized environments where it is necessary to map hardware addresses to IP addresses.</p>

							<h2>DHCP :</h2>

							<p>DHCP stands for "Dynamic Host Configuration Protocol". It is a network protocol used to automatically assign IP addresses and other network configuration parameters to devices on a network.</p>

							<p>In a typical network, devices need to be manually configured with IP addresses and other network settings. DHCP automates this process by allowing devices to obtain IP addresses and other configuration information automatically from a DHCP server.</p>

							<p>When a device connects to a network, it sends a DHCP request to the DHCP server. The DHCP server responds with an available IP address and other configuration parameters such as subnet mask, default gateway, and DNS server addresses. The device then configures itself with the assigned IP address and other settings and can start communicating on the network.</p>

							<p>DHCP operates at the Application Layer (Layer 7) of the OSI model, and it uses a client-server model. The DHCP server assigns IP addresses from a pool of available addresses and manages the lease time of each IP address. The client sends a request for an IP address, and the server responds with an available IP address, which is leased to the client for a specified period of time. When the lease time expires, the client must renew the lease or request a new IP address.</p>

							<p>DHCP has several benefits, including simplified network management, reduced configuration errors, and improved network scalability. DHCP also supports different options and settings, such as reserving specific IP addresses for particular devices, providing different configuration parameters for different types of devices, and assigning IPv6 addresses.</p>

							<h4>Here are some additional details about DHCP:</h4>

							<p><b>1. </b> DHCP can assign IP addresses in different ways, including dynamic, static, and reserved. Dynamic IP addressing is the most common method and involves assigning IP addresses from a pool of available addresses. Static IP addressing involves manually assigning a fixed IP address to a device, while reserved IP addressing involves assigning specific IP addresses to particular devices based on their MAC address.</p>

							<p><b>2. </b> DHCP allows for centralized network management, as administrators can configure DHCP servers to assign IP addresses and other network settings to devices on the network. This can simplify network management tasks, such as configuring new devices or changing network settings.</p>

							<p><b>3. </b>DHCP can also support multiple subnets or VLANs, allowing devices to obtain IP addresses and other configuration parameters on different network segments. </p>

							<p><b>4. </b>DHCP messages are sent over UDP, and DHCP uses different types of messages, including Discover, Offer, Request, Acknowledgment, and NAK (Negative Acknowledgment). These messages are used to establish communication between the DHCP client and server and to negotiate the IP address assignment and other configuration parameters.</p>

							<p><b>5. </b>DHCPv6 is the version of DHCP used for IPv6 networks. It provides similar functionality to DHCP for IPv4, including automatic IP address assignment and configuration of network parameters. DHCPv6 uses different messages and options than DHCP for IPv4.</p>

							<p><b>6. </b>DHCP servers can be vulnerable to attacks, such as DHCP spoofing and rogue DHCP servers. DHCP spoofing involves sending fake DHCP messages to the client to provide false configuration information, while rogue DHCP servers are unauthorized DHCP servers that can cause network disruptions. To prevent these types of attacks, DHCP servers can use techniques like DHCP snooping, DHCP server authentication, and DHCP message validation.</p>

							<p><b>Overall</b>, DHCP is a critical protocol for managing IP addresses and other network configuration parameters in modern computer networks. It is widely used in enterprise networks, small business networks, and home networks.</p>
                            
							
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

									<a href="cn-blog3-9.php" class="pagination-next pull-right">Next</a>
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