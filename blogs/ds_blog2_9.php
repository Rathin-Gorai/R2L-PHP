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
						<h1 class="white-text">Theoretical Distributions - Binomial</h1>
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
							<h2>Theoretical Distributions - Binomial</h2>
							<p>The binomial distribution is a probability distribution that is used to model the probability of a certain number of successes in a fixed number of independent trials, where each trial has only two possible outcomes (e.g., success or failure).</p>

							<p><b>The binomial distribution has two parameters:</b>  n and p. The parameter n represents the number of trials, while the parameter p represents the probability of success on each trial. The probability mass function (PMF) of the binomial distribution is given by:</p>

                            <p>P(X = k) = (n choose k) * p^k * (1 - p)^(n - k)</p>

							<p>where X is the number of successes, k is the number of successes we want to observe, (n choose k) is the binomial coefficient, which is the number of ways to choose k successes from n trials, and (1 - p)^(n - k) is the probability of observing n - k failures.</p>

                            <h4>The mean and variance of the binomial distribution are given by:</h4>

                            <p>μ = np σ^2 = np(1 – p)</p>

                            <h2>Use of Binomial Distributions</h2>
 
							<p>The binomial distribution is a theoretical distribution that is used in many areas of research, such as in genetics, psychology, and quality control. It is also used as a basis for other distributions, such as the Poisson distribution and the normal distribution. The binomial distribution is particularly useful for modeling the probability of rare events, where the number of successes is small relative to the number of trials.</p>
							
						</div>
						<!-- /blog post -->
						
								<!-- pagination -->
						<div class="col-md-12">
								<div class="post-pagination">
									<a href="ds_blog2_8.php" class="pagination-back pull-left">Back</a>
									<!-- <ul class="pages">
										<li><a href="ds_blog1_4.php">5</a></li>
										<li class="active">6</li>
										<li><a href="ds_blog1_6.php">7</a></li>
										<li><a href="#">8</a></li>
									</ul> -->
									<a href="ds_blog2_10.php" class="pagination-next pull-right">Next</a>
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