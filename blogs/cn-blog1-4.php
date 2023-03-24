<?php $title="Protocols and Standards" ?>
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
						<h1 class="white-text">Protocols and Standards</h1>
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
							<h2>Protocols :</h2>

                            <p>Protocols are sets of rules and standards that govern the communication between devices in a computer network. They define how data is transmitted, received, and processed between devices, and ensure that data is transmitted reliably and efficiently.</p>

                            <h4>There are many different protocols used in computer networks, including:</h4>

                            <p><b>1. Transmission Control Protocol/Internet Protocol (TCP/IP):</b>  This is the most widely used protocol in the Internet and is used to establish communication between devices.</p>

                            <p><b>2. User Datagram Protocol (UDP):</b>This is a faster and simpler protocol than TCP/IP and is often used for applications that require fast and efficient data transfer, such as video streaming.</p>

                            <p><b>3. Hypertext Transfer Protocol (HTTP):</b> This is a protocol used for transferring data over the World Wide Web. It is used by web browsers to request and receive web pages from web servers.</p>

                            <p><b>4. File Transfer Protocol (FTP):</b> This is a protocol used for transferring files between devices on a network.</p>

                            <p><b>5. Simple Mail Transfer Protocol (SMTP): </b> This is a protocol used for sending email messages between devices on a network.</p>

                            <p><b>6. Domain Name System (DNS): </b>his is a protocol used to translate domain names into IP addresses, which allows devices to locate and communicate with other devices on a network. </p>

                            <p><b>7. Wireless Application Protocol (WAP):</b> This is a protocol used for accessing the Internet on mobile devices.</p>

                            <p>Protocols are critical to the functioning of computer networks, as they ensure that devices can communicate effectively and efficiently with each other.</p>

                            <h2>Standards: </h2>

                            <p>Standards are established guidelines that define technical specifications, protocols, and procedures to ensure compatibility, interoperability, and quality in products and services. Standards are developed by international organizations, such as the International Organization for Standardization (ISO) and the Institute of Electrical and Electronics Engineers (IEEE), as well as national organizations and industry groups.</p>

                            <h4>In the field of computer networks, there are many different standards that govern the design, implementation, and operation of networks. Some examples include:</h4>

                            <p><b>1. Ethernet: </b> This is a standard for local area networks (LANs) that specifies the physical and data link layers of the network. Ethernet is the most widely used LAN technology today.</p>

                            <p><b>2. Wi-Fi:</b>This is a set of standards for wireless LANs (WLANs) that define how devices can communicate with each other over radio waves. </p>

                            <p><b>3. TCP/IP:</b> This is a set of protocols that define how data is transmitted over the Internet and other networks.</p>

                            <p><b>4. USB:</b> This is a standard for connecting peripherals, such as printers and storage devices, to computers using a USB port.</p>

                            <p><b>5. HDMI:</b>This is a standard for transmitting high-definition audio and video signals between devices, such as TVs and computers. </p>

                            <p>Standards play a critical role in ensuring that devices and services from different vendors can work together seamlessly, and that networks are reliable, secure, and efficient. Without standards, it would be difficult for different devices and services to communicate and work together, and it would be difficult to ensure the quality and safety of products and services.</p>
                            
							
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

									<a href="cn-blog1-5.php" class="pagination-next pull-right">Next</a>
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