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
						<h1 class="white-text">What is Statistical Analysis</h1>
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
							<h2>Introduction to statistics</h2>
							<p>Statistics is a branch of mathematics that deals with the collection, analysis, interpretation, and presentation of data. It involves methods for summarizing and describing data, testing hypotheses, and making inferences and predictions based on data.</p>

							<p>Statistics can be divided into two main branches: descriptive statistics and inferential statistics. Descriptive statistics involves the methods used to summarize and describe data, such as calculating measures of central tendency (mean, median, mode) and measures of variability (range, variance, standard deviation). Inferential statistics involves using sample data to make inferences or predictions about a larger population. This involves hypothesis testing and estimating population parameters from sample statistics.</p>

							<p>Statistics is used in many fields, including business, finance, healthcare, social sciences, and engineering. In business and finance, statistics is used to analyze market trends, make investment decisions, and assess risk. In healthcare, statistics is used to study disease patterns, evaluate treatment outcomes, and conduct clinical trials. In social sciences, statistics is used to study human behavior, attitudes, and preferences.</p>
 
							<p>Some common statistical methods include regression analysis, analysis of variance (ANOVA), chi-square tests, and t-tests. These methods are used to test hypotheses, determine the significance of relationships between variables, and compare groups.</p>

							<h3>Conclusion</h3>

							<p>In conclusion, statistics is an important field that is used to analyze and interpret data in many different fields. By using statistical methods to summarize, analyze, and draw inferences from data, analysts can make informed decisions and predictions based on evidence.</p>
							
						</div>
						<!-- /blog post -->
						
								<!-- pagination -->
						<div class="col-md-12">
								<div class="post-pagination">
									<a href="ds_blog1_6.php" class="pagination-back pull-left">Back</a>
									<!-- <ul class="pages">
										<li><a href="ds_blog1_4.php">5</a></li>
										<li class="active">6</li>
										<li><a href="ds_blog1_6.php">7</a></li>
										<li><a href="#">8</a></li>
									</ul> -->
									<a href="ds_blog2_2.php" class="pagination-next pull-right">Next</a>
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