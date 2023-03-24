<?php $title=" IP Addressing and Subnetting" ?>
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
						<h1 class="white-text"> IP Addressing and Subnetting</h1>
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
							<h2> IP Addressing :</h2>

                            <p>IP addressing is the process of assigning a unique numerical identifier to each device connected to a network that uses the Internet Protocol (IP). IP addressing is a key component of the Internet, and it is used to route data packets between devices on different networks. </p>

							<p>The two most commonly used versions of IP addressing are IPv4 and IPv6. IPv4 uses 32-bit addresses, while IPv6 uses 128-bit addresses. The IPv4 address is divided into four octets, each representing 8 bits, separated by dots. For example, 192.168.0.1 is a typical IPv4 address.</p>

							<p>An IP address is divided into two parts, the network address and the host address. The network address identifies the network to which the device is connected, while the host address identifies the device within the network. The network address is determined by the subnet mask, which is a set of bits that specifies the network part of the address.</p>

							<p>IP addressing is important because it allows devices on different networks to communicate with each other. When a device wants to send data to another device on a different network, it needs to know the IP address of the destination device, which is used to route the data through the network.</p>

							<p>IP addressing also plays a critical role in network security, as it is used to identify the source and destination of network traffic. Network administrators can use IP addressing to control access to network resources, monitor network traffic, and implement security policies.</p>

							<h4>In addition to what was previously mentioned, IP addressing has several other important aspects:</h4>

                            <p><b>1. Dynamic vs. Static IP addresses:</b> IP addresses can be assigned dynamically or statically. In dynamic addressing, the IP address is assigned to a device for a limited time period by a DHCP (Dynamic Host Configuration Protocol) server. In static addressing, the IP address is manually assigned to a device and remains fixed.</p>

                            <p><b>2. Public vs. Private IP addresses:</b>Public IP addresses are used to identify devices on the public internet, while private IP addresses are used within private networks (such as LANs) to identify devices. Private IP addresses are not accessible from the public internet.</p>

                            <p><b>3. NAT (Network Address Translation):</b>NAT is a technique used to map public IP addresses to private IP addresses. It allows multiple devices within a private network to share a single public IP address.</p>

							<p><b>4. Subnetting:</b>Subnetting is a technique used to divide a large network into smaller subnetworks. It allows for more efficient use of IP addresses and can improve network performance and security.</p>

							<p><b>5. IP addressing schemes:</b>There are several IP addressing schemes that are commonly used, including classful addressing, classless addressing, and Variable Length Subnet Mask (VLSM) addressing. These schemes differ in how they allocate IP addresses and how they handle network addressing and subnetting. </p>

							<h2>Subnetting :</h2>

							<p>Subnetting is the process of dividing a large network into smaller subnetworks or subnets. Subnetting allows for more efficient use of IP addresses and can improve network performance and security. Subnetting is based on the concept of dividing a network into smaller segments or subnets, each with its own unique network address and subnet mask.</p>

							<p>The subnet mask is a set of bits that defines the network portion and the host portion of an IP address. The network portion is used to identify the network, while the host portion is used to identify individual devices within the network. By modifying the subnet mask, network administrators can create smaller subnets that can be used to organize and manage network traffic more effectively.</p>

							<h4>Subnetting provides several benefits:</h4>

							<p><b>1. Efficient use of IP addresses:</b> Subnetting allows for more efficient use of IP addresses by dividing a large network into smaller subnets. This can help reduce the number of IP addresses required and conserve address space.</p>

							<p><b>2. Improved network performance:</b>Smaller subnets can reduce network traffic and improve network performance by limiting the number of devices that need to communicate with each other.</p>

							<p><b>3. Enhanced network security:</b>Subnetting can improve network security by isolating devices within a subnet and restricting access to network resources. </p>

							<p>The process of subnetting involves dividing the network into smaller subnets and assigning unique network addresses and subnet masks to each subnet. This requires careful planning and management to ensure that each subnet has sufficient IP addresses and that network traffic is properly routed.</p>

							<h4>Subnetting can be done using various techniques, including:</h4>

							<p><b>1. Variable Length Subnet Mask (VLSM): </b> VLSM allows for more efficient use of IP addresses by using different subnet masks for different subnets.</p>

							<p><b>2. Classless Inter-Domain Routing (CIDR):</b> CIDR allows for more flexible allocation of IP addresses by allowing for the use of variable-length subnet masks.</p>

							<p>Subnetting is a key concept in network architecture and is essential for managing large-scale networks. Network administrators need to understand subnetting and how it can be used to optimize network performance and security.</p>
                            
							
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

									<a href="cn-blog3-4.php" class="pagination-next pull-right">Next</a>
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