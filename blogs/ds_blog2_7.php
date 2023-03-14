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
						<h1 class="white-text">Explain Skewness and Kurtosis</h1>
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
							<h2>Skewness and Kurtosis</h2>

							<p>Skewness and kurtosis are two measures of the shape of a probability distribution. Skewness measures the degree of asymmetry of the distribution, while kurtosis measures the degree of peakedness or flatness of the distribution.</p>

							<p><b>Skewness: </b> Skewness is a measure of the degree of asymmetry of a distribution. A positive skewness indicates that the tail of the distribution is longer on the right side, while a negative skewness indicates that the tail is longer on the left side. A perfectly symmetrical distribution has a skewness of zero.</p>

							<p><b>Kurtosis:  </b> Kurtosis is a measure of the degree of peakedness or flatness of a distribution. A high kurtosis indicates that the distribution is more peaked, while a low kurtosis indicates that the distribution is more flat. A perfectly normal distribution has a kurtosis of 3, which is known as mesokurtic. Distributions with a kurtosis greater than 3 are called leptokurtic, while distributions with a kurtosis less than 3 are called platykurtic.</p>

                            <h2>Important of Skewness and Kurtosis for  Measures in Statistical Analysis</h2>
 
							<p>Skewness and kurtosis are important measures in statistical analysis because they can provide insights into the shape and characteristics of a distribution. For example, in finance, skewness is commonly used to measure the degree of asymmetry in the distribution of returns, while kurtosis is used to measure the degree of risk in the distribution of returns. In addition, these measures can be used to compare the shape of different distributions and make inferences about the underlying population.</p>
 
							
							
						</div>
						<!-- /blog post -->
						
								<!-- pagination -->
						<div class="col-md-12">
								<div class="post-pagination">
									<a href="ds_blog2_6.php" class="pagination-back pull-left">Back</a>
									<!-- <ul class="pages">
										<li><a href="ds_blog1_4.php">5</a></li>
										<li class="active">6</li>
										<li><a href="ds_blog1_6.php">7</a></li>
										<li><a href="#">8</a></li>
									</ul> -->
									<a href="ds_blog2_8.php" class="pagination-next pull-right">Next</a>
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