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
						<h1 class="white-text">Moments  in Statistics</h1>
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
							<h2>Moments</h2>
							<p>In statistics, moments are mathematical quantities that are used to describe the shape and characteristics of a probability distribution. There are several different types of moments, but the most commonly used moments are the first four moments: mean, variance, skewness, and kurtosis.</p>

							<p><b>1.Mean:</b> The first moment of a distribution is the mean or expected value of the distribution. It is calculated by taking the sum of all the values in the distribution and dividing by the total number of values.</p>

							<p><b>2. Variance: </b> The second moment of a distribution is the variance. It measures the degree of spread or dispersion of the distribution around the mean. It is calculated by taking the sum of the squared differences between each value in the distribution and the mean, and then dividing by the total number of values.</p>
 
							<p><b>3. Skewness: </b> The third moment of a distribution is the skewness. It measures the degree of asymmetry of the distribution. A positive skewness indicates that the tail of the distribution is longer on the right side, while a negative skewness indicates that the tail is longer on the left side.</p>
 
							<p><b>4. Kurtosis: </b>The fourth moment of a distribution is the kurtosis. It measures the degree of peakedness or flatness of the distribution. A high kurtosis indicates that the distribution is more peaked, while a low kurtosis indicates that the distribution is more flat.</p>

                            <h2>Important of Moments in Statistical Analysis</h2>


 
							<p>Moments are important in statistical analysis because they provide information about the shape and characteristics of a distribution. By calculating the moments of a distribution, we can compare it to other distributions and make inferences about the underlying population. For example, the mean and variance are commonly used to describe the central tendency and variability of a dataset, while the skewness and kurtosis can provide insights into the shape of the distribution and any deviations from normality.</p>
							
						</div>
						<!-- /blog post -->
						
								<!-- pagination -->
						<div class="col-md-12">
								<div class="post-pagination">
									<a href="ds_blog2_5.php" class="pagination-back pull-left">Back</a>
									<!-- <ul class="pages">
										<li><a href="ds_blog1_4.php">5</a></li>
										<li class="active">6</li>
										<li><a href="ds_blog1_6.php">7</a></li>
										<li><a href="#">8</a></li>
									</ul> -->
									<a href="ds_blog2_7.php" class="pagination-next pull-right">Next</a>
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