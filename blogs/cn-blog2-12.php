<?php $title="CRC (Cyclic Redundancy Check) in Computer networking" ?>
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
						<h1 class="white-text">CRC (Cyclic Redundancy Check)</h1>
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
							<h2>CRC (Cyclic Redundancy Check) :</h2>

                            <p>CRC (Cyclic Redundancy Check) is an error detection technique that is widely used in digital communication systems. It involves the use of a generator polynomial to generate a checksum that is added to the data being transmitted. At the receiver end, the same polynomial is used to compute the checksum, and if the received checksum does not match the computed checksum, an error is detected. </p>

                            <p>The CRC algorithm works by treating the data as a polynomial and dividing it by the generator polynomial. The remainder of this division is then used as the checksum that is appended to the data being transmitted. At the receiver end, the received data is again treated as a polynomial and divided by the same generator polynomial. If the remainder of this division matches the received checksum, the data is considered to be error-free.</p>

                            <p>One of the advantages of CRC is that it can detect a wide range of errors, including burst errors, which are errors that occur in a continuous sequence of bits. CRC is also relatively simple to implement and can be used for both hardware and software-based systems.</p>

                            <p>The main disadvantage of CRC is that it is not a perfect error detection technique and can sometimes fail to detect errors, particularly if the generator polynomial is poorly chosen or if the number of errors is very large. Additionally, CRC does not provide any error correction capability, meaning that it can only detect errors but cannot correct them.</p>

                            <p>Despite these limitations, CRC is widely used in digital communication systems, including Ethernet, Wi-Fi, Bluetooth, and other wireless communication protocols. The choice of CRC polynomial depends on the specific application and the desired level of error detection capability.</p>
                            		
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

									<a href="cn-blog2-13.php" class="pagination-next pull-right">Next</a>
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