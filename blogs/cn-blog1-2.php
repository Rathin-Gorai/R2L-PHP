<?php $title="Representation of data and its flow in Networks" ?>
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
							<li>Data Science </li>
						</ul>
						<h1 class="white-text">Representation of data and its flow in Networks</h1>
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
							<h2>Representation of data:</h2>

                            <p>Data can be represented in various ways depending on its type and format. Some common ways of representing data are:</p>

                            <p><b>1. Binary: </b> Data is represented in a two-state system using 0 and 1. This is the basis of all digital data representation.</p>

                            <p><b>2. Text: </b> Data is represented in the form of characters, letters, symbols, and numbers.</p>

                            <p><b>3. Numeric: </b> Data is represented in the form of numbers, which can be integers, floating-point numbers, or complex numbers.</p>

                            <p><b>4. Audio: </b> Data is represented as a waveform, which is a continuous signal that represents sound.</p>

                            <p><b>5. Images: </b>  Data is represented as pixels, which are tiny dots of color that form an image.</p>

                            <p><b>6. Video: </b> Data is represented as a series of images played in sequence, which gives the illusion of motion.</p>

                            <p><b>7. Graphs:</b> Data is represented in the form of charts, graphs, and diagrams, which help visualize and interpret data.</p>

                            <p><b>8. Hierarchical:</b> Data is organized in a hierarchical structure, where each item is a child of a parent item. This is commonly used in file systems and organizational structures.</p>

                            <p><b>9. Relational:</b> Data is organized in tables with rows and columns, which can be related to each other based on common attributes. This is commonly used in databases.</p>

                            <p><b>10. Object-oriented:</b> Data is organized in objects that have properties and methods, which can be used to manipulate the data. This is commonly used in programming languages.</p>

                            <h2>its flow in Networks:</h2>

                            <p>In computer networks, data is represented in various ways and flows through different components. Here's a general overview of the representation of data and its flow in networks:</p>

                            <p><b>1. Data Representation:</b>Data is usually represented in binary form (0s and 1s) as it is the fundamental language of computer networks. However, data can also be represented in other forms, such as text, images, audio, and video, depending on the application. </p>

                            <p><b>2. Sender:</b> The sender is the device or software that initiates the data transmission. It converts the data into a digital signal and transmits it to the network.</p>

                            <p><b>3. Transmission Medium:</b>The transmission medium is the physical channel through which data is transmitted, such as a wired or wireless network. It carries the digital signal from the sender to the receiver. </p>

                            <p><b>4. Network Protocol:</b> The network protocol is a set of rules and procedures that govern the communication between devices in a network. It defines how data is transmitted, received, and routed in the network.</p>

                            <p><b>5. Router/Switch:</b>A router or switch is a network device that receives data packets from the sender and forwards them to the appropriate destination. It selects the best path for data transmission based on the network topology and the destination address.</p>

                            <p><b>6. Receiver:</b>The receiver is the device that receives the data packets from the network. It converts the digital signal back into the original data format and sends it to the application. </p>

                            <p><b>7. Application:</b> The application is the software that uses the received data for a specific purpose, such as displaying an image, playing audio or video, or storing the data in a database.</p>

                            <p>In summary, the data flows from the sender to the network, through the transmission medium, and to the receiver. The network protocol, routers, and switches ensure that the data packets reach their destination and are properly interpreted by the application.</p>

                            
							
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

									<a href="cn-blog1-3.php" class="pagination-next pull-right">Next</a>
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