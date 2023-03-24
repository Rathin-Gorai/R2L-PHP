<?php $title="Address Mapping
in Computer networking" ?>
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
						<h1 class="white-text">Address Mapping</h1>
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
							<h2>Address Mapping :</h2>

                            <p> Address mapping is the process of translating one network address to another network address, typically between different types of addresses or different address families. In networking, the most common type of address mapping involves mapping IP addresses to Media Access Control (MAC) addresses, which are unique identifiers assigned to network interface controllers (NICs) at the hardware level.</p>

							<h4>There are two primary types of address mapping:</h4>

                            <p><b>1. ARP (Address Resolution Protocol):</b> ARP is used to map IP addresses to MAC addresses in a local network. When a device wants to communicate with another device on the same network, it sends an ARP request to discover the MAC address of the target device. Once the MAC address is known, the device can send packets directly to the target device using its MAC address.</p>

                            <p><b>2. DNS (Domain Name System):</b>DNS is used to map domain names to IP addresses. When a user enters a domain name into a web browser, the browser sends a DNS request to a DNS server to translate the domain name into an IP address. Once the IP address is known, the browser can establish a connection to the web server and retrieve the requested webpage.</p>

                            <p>Address mapping is an important part of network communication, as it allows devices to communicate with each other regardless of the underlying network topology or addressing scheme. However, it can also be a potential point of attack for malicious actors, as it is possible to spoof or manipulate address mapping to redirect traffic or intercept communication. As a result, network administrators must implement security measures to prevent unauthorized address mapping and ensure the integrity of network communication.</p>

							<p>Another example of address mapping is Network Address Translation (NAT), which is used to map private IP addresses to public IP addresses in order to allow devices on a private network to communicate with devices on the internet. NAT is commonly used in home and small office networks where multiple devices share a single public IP address provided by the Internet Service Provider (ISP).</p>

							<p>When a device on a private network sends a packet to a device on the internet, the NAT device replaces the private IP address in the packet header with its own public IP address, and stores the original source address in a translation table. When the response packet is received, the NAT device checks the translation table and replaces the public IP address with the original private IP address, and forwards the packet to the correct device on the private network.</p>

							<p>Address mapping can also be used in virtualization, where multiple virtual machines may share a single physical NIC. In this case, virtual network adapters are created for each virtual machine, and the physical NIC performs address mapping to ensure that packets are sent to the correct virtual machine based on its assigned IP address.</p>

							<p>Overall, address mapping is a critical component of modern networking, as it enables communication between devices with different addressing schemes and topologies. However, it also poses security risks if not implemented properly, and network administrators must be vigilant to ensure the integrity and security of address mapping in their networks</p>
                            
							
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

									<a href="cn-blog3-7.php" class="pagination-next pull-right">Next</a>
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