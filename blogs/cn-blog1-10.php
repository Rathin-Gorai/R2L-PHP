<?php $title="Switching Techniques in Computer networking" ?>
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
						<h1 class="white-text">Switching Techniques in Computer networking</h1>
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
							<h2>Switching Techniques :</h2>

							<p>In the field of telecommunications and computer networking, switching refers to the process of forwarding data or information from one network node to another. Switching techniques are methods used to transfer data between different network nodes. There are several types of switching techniques used in telecommunications and computer networking:</p>

							<p><b>1. Circuit Switching:</b>In circuit switching, a dedicated communication path is established between two nodes for the duration of the communication. Once the connection is established, the entire bandwidth of the circuit is reserved for the duration of the call, making it less efficient in terms of resource utilization.</p>

							<p><b>2. Packet Switching: </b>Packet switching breaks data into small packets and sends them separately over the network. Each packet contains the source and destination addresses, as well as data. Packets are sent over the network to their destination node, where they are reassembled into the original message. Packet switching is more efficient than circuit switching since it uses network resources more effectively. </p>

							<p><b>3. Message Switching:</b>In message switching, messages are stored in intermediate nodes before being forwarded to their final destination. The entire message is sent to the intermediate node, where it is stored and then forwarded to the next intermediate node or the final destination.</p>

							<p><b>4. Cell Switching:</b> Cell switching is a type of packet switching that uses fixed-length packets called cells. Each cell has a fixed length of 53 bytes, with 48 bytes used for the payload and the remaining 5 bytes used for headers.</p>

							<p><b>5. Virtual Circuit Switching:</b>Virtual circuit switching is a combination of circuit and packet switching. In virtual circuit switching, a connection is established between two nodes, similar to circuit switching. However, instead of reserving the entire bandwidth of the circuit, the bandwidth is dynamically allocated as needed, making it more efficient than circuit switching. </p>

							<p><b>6. Space Division Switching:</b> Space division switching is a technique used in telephone exchanges to connect multiple incoming lines to multiple outgoing lines. The technique uses mechanical or electronic switches to connect the incoming and outgoing lines.</p>

							<p>Each switching technique has its own advantages and disadvantages, and different techniques may be used depending on the requirements of the network.</p>
                            
							
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

									<a href="cn-blog2-1.php" class="pagination-next pull-right">Next</a>
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