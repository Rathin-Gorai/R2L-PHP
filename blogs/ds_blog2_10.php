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
						<h1 class="white-text">Poisson Distribution</h1>
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
							<h2>Poisson</h2>
							<p>Poisson refers to the Poisson distribution, which is a probability distribution that describes the probability of a certain number of events occurring within a fixed interval of time or space, assuming that the events occur independently and at a constant rate. The Poisson distribution is named after the French mathematician Siméon Denis Poisson, who first introduced the concept in the early 19th century.</p>

							<p>The Poisson distribution is often used to model rare events, such as the number of defects in a production line, the number of accidents in a day, or the number of phone calls received by a customer service representative in an hour. The distribution is characterized by a single parameter, usually denoted as λ, which represents the average number of events that occur within the given interval.</p>

                            <h2>The probability mass function of the Poisson distribution is given by:</h2>

							<p>P(X = k) = (e^(-λ) * λ^k) / k!</p>
 
							<p>where X is the random variable representing the number of events, e is the mathematical constant approximately equal to 2.71828, and k! denotes the factorial of k.</p>
 
							<p>The Poisson distribution has several important properties, including the fact that the mean and variance of the distribution are equal to λ. It is also closely related to other statistical distributions, such as the binomial distribution and the exponential distribution. The Poisson distribution has many practical applications in fields such as physics, engineering, finance, and epidemiology.</p>
							
						</div>
						<!-- /blog post -->
						
								<!-- pagination -->
						<div class="col-md-12">
								<div class="post-pagination">
									<a href="ds_blog2_9.php" class="pagination-back pull-left">Back</a>
									<!-- <ul class="pages">
										<li><a href="ds_blog1_4.php">5</a></li>
										<li class="active">6</li>
										<li><a href="ds_blog1_6.php">7</a></li>
										<li><a href="#">8</a></li>
									</ul> -->
									<a href="ds_blog2_11.php" class="pagination-next pull-right">Next</a>
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