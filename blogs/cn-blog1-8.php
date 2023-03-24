<?php $title="Multiplexing in Computer Network" ?>
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
						<h1 class="white-text">Multiplexing in Computer Network </h1>
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
							<h2>Multiplexing :</h2>

							<p>Multiplexing is the process of combining multiple data streams into a single data stream for transmission over a communication channel or medium. The purpose of multiplexing is to make more efficient use of the available bandwidth or channel capacity, allowing multiple users or devices to share the same channel.</p>

							<h4>There are several types of multiplexing techniques, including:</h4>

							<p><b>1. Time Division Multiplexing (TDM):</b> This technique divides the available time on a communication channel into small, fixed-length time slots. Each time slot is assigned to a different data stream, and the data from each stream is transmitted during its assigned time slot.</p>

							<p><b>2. Frequency Division Multiplexing (FDM):</b>This technique divides the available frequency spectrum of a communication channel into multiple non-overlapping sub-channels. Each sub-channel is assigned to a different data stream, and the data from each stream is transmitted on its assigned sub-channel. </p>

							<p><b>3. Code Division Multiplexing (CDM):</b>This technique uses codes to separate multiple data streams in the same frequency band. Each data stream is assigned a unique code, and the codes are used to encode and decode the data during transmission.</p>

							<p><b>4. Wavelength Division Multiplexing (WDM): </b> This technique is used in optical fiber communication systems and it uses multiple optical wavelengths (colors) to transmit multiple data streams simultaneously over a single fiber.</p>

							<p>Multiplexing is used in various applications, including telecommunication networks, cable television, satellite communication, and computer networking.</p>
                            
							
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

									<a href="cn-blog1-9.php" class="pagination-next pull-right">Next</a>
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