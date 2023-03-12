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
						<h1 class="white-text"> Normal Distribution or Gaussian Distribution</h1>
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
							<h2>Normal</h2>

							<p>Normal, or more commonly known as the normal distribution or Gaussian distribution, is a continuous probability distribution that is widely used in statistics and data science to model various natural phenomena such as physical measurements, social behaviors, and economic indicators. The normal distribution is characterized by its bell-shaped curve, which is symmetrical around its mean.</p>

							<p><b>The normal distribution is defined by two parameters:</b>  the mean (μ) and the standard deviation (σ). The mean represents the center of the distribution, while the standard deviation represents the spread of the distribution.</p>

                            <h2>The probability density function of the normal distribution is given by:</h2>

							<p>f(x) = (1/σ√2π) * e^(-(x-μ)^2/(2σ^2))</p>
 
							<p>where e is the mathematical constant approximately equal to 2.71828, x is the random variable representing the observations, μ is the mean, σ is the standard deviation, and π is the mathematical constant approximately equal to 3.14159.</p>

                            <h2>The normal distribution has several important properties, including:</h2>
 
							<p><b>1. </b>The total area under the curve is equal to 1.</p>
 
							<p><b>2. </b>The mean, median, and mode are all equal and located at the center of the distribution.</p>

                            <p><b>3. </b>The distribution is symmetric around the mean.</p>

                            <p><b>4. </b>The standard deviation determines the shape and spread of the distribution.</p>

							<h3>Use of Normal distribution</h3>

							<p>The normal distribution is used in a wide range of applications in data science, such as hypothesis testing, confidence interval estimation, and regression analysis. It is also used as a basis for many other statistical distributions and models, such as the t-distribution and the normal linear regression model.</p>
							
						</div>
						<!-- /blog post -->
						
								<!-- pagination -->
						<div class="col-md-12">
								<div class="post-pagination">
									<a href="ds_blog2_10.php" class="pagination-back pull-left">Back</a>
									<!-- <ul class="pages">
										<li><a href="ds_blog1_4.php">5</a></li>
										<li class="active">6</li>
										<li><a href="ds_blog1_6.php">7</a></li>
										<li><a href="#">8</a></li>
									</ul> -->
									<a href="ds_blog3_1.php" class="pagination-next pull-right">Next</a>
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