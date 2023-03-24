<?php $title="Block coding in Computer networking" ?>
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
						<h1 class="white-text">Block coding</h1>
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
							<h2>Block coding :</h2>

                            <p>Block coding is a technique used in digital communication to add redundancy to data by dividing it into fixed-size blocks and encoding each block with a code that includes additional redundant bits. The additional bits, known as parity bits, allow the receiver to detect and correct errors that may have occurred during transmission. </p>

                            <p>Block coding is used to improve the reliability of data transmission over noisy channels, where errors can occur due to interference, attenuation, and other factors. The most common type of block code used in digital communication is the binary code, where each block of data is divided into a fixed number of bits (e.g., 8 bits) and each bit is assigned a value of 0 or 1.</p>

                            <h4>The most common block codes used in digital communication are:</h4>

                            <p><b>1. Linear Block Codes:</b> Linear block codes are a type of block code where each code word is a linear combination of the message bits and the parity bits. The parity bits are generated using a linear transformation of the message bits, which ensures that the code words are unique and can be easily decoded at the receiver.</p>

                            <p><b>2. Convolutional Codes:</b>Convolutional codes are a type of block code where the output code depends not only on the current input bit but also on a certain number of previous input bits. Convolutional codes are used in applications where high-speed transmission is required, such as satellite communications and mobile networks.</p>

                            <p><b>3. Reed-Solomon Codes:</b>Reed-Solomon codes are a type of block code that is commonly used in applications such as CDs, DVDs, and digital TV broadcasts. Reed-Solomon codes are capable of correcting errors in blocks of data that are much larger than the size of the code word, making them ideal for applications where large amounts of data need to be transmitted over noisy channels.</p>

                            <p>Block coding is an effective technique for improving the reliability of digital communication over noisy channels. However, it does add overhead to the data transmission process, as additional bits need to be transmitted along with the message bits. The choice of block code used depends on the specific application and the requirements for reliability, speed, and efficiency.</p>
                            
							
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

									<a href="cn-blog2-12.php" class="pagination-next pull-right">Next</a>
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