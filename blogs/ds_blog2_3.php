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
						<h1 class="white-text">Major Categories of Statistics</h1>
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
							<h2>Major Categories of Statistics</h2>
							<p>Statistics can be broadly categorized into two major categories: descriptive statistics and inferential statistics.</p>

							<p><b>1. Descriptive Statistics: </b> Descriptive statistics involves the methods used to summarize and describe data. It provides a summary of data in terms of central tendency (mean, median, mode), variability (range, variance, standard deviation), and shape (skewness, kurtosis). Descriptive statistics is useful in providing an overview of the data and identifying patterns and trends.</p>

							<p><b>2. Inferential Statistics: </b> Inferential statistics involves using sample data to make inferences or predictions about a larger population. It involves hypothesis testing, which is a process of using sample data to test a hypothesis about a population parameter. The main goal of inferential statistics is to generalize the findings from a sample to a larger population.</p>

                            <h2>Inferential statistics can be further divided into the following categories:</h2>
 
							<p><b>1. Estimation:</b> Estimation involves using sample data to estimate the value of a population parameter. It involves calculating a confidence interval, which is a range of values that is likely to contain the true value of the population parameter with a certain level of confidence.</p>
 
							<p><b>2.Hypothesis testing:  </b>Hypothesis testing involves testing a hypothesis about a population parameter using sample data. It involves setting up null and alternative hypotheses and using statistical tests to determine if there is enough evidence to reject the null hypothesis in favor of the alternative hypothesis.</p>
 
							<p><b>3.Regression analysis: </b> Regression analysis is a method used to model the relationship between a dependent variable and one or more independent variables. It is used to make predictions and to understand the relationship between variables.</p>

							<h3>Conclusion</h3>

							<p>In conclusion, statistics can be broadly categorized into descriptive statistics and inferential statistics. Descriptive statistics is used to summarize and describe data, while inferential statistics is used to make inferences and predictions about a larger population based on sample data. Inferential statistics can be further divided into estimation, hypothesis testing, and regression analysis.</p>
							
						</div>
						<!-- /blog post -->
						
								<!-- pagination -->
						<div class="col-md-12">
								<div class="post-pagination">
									<a href="ds_blog2_2.php" class="pagination-back pull-left">Back</a>
									<!-- <ul class="pages">
										<li><a href="ds_blog1_4.php">5</a></li>
										<li class="active">6</li>
										<li><a href="ds_blog1_6.php">7</a></li>
										<li><a href="#">8</a></li>
									</ul> -->
									<a href="ds_blog2_4.php" class="pagination-next pull-right">Next</a>
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