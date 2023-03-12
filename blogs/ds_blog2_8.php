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
						<h1 class="white-text">Correlation and Regression</h1>
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
							<h2>Correlation and Regression</h2>

							<p>Correlation and regression are two statistical techniques that are used to measure the relationship between two variables</p>

							<p><b>Correlation: </b>  Correlation measures the strength and direction of the relationship between two variables. It ranges from -1 to 1, with a value of -1 indicating a perfect negative correlation (i.e., as one variable increases, the other decreases), a value of 1 indicating a perfect positive correlation (i.e., as one variable increases, the other also increases), and a value of 0 indicating no correlation (i.e., there is no relationship between the variables).</p>

							<p><b>Regression:  </b> Regression is a statistical technique that is used to model the relationship between two variables. It is used to predict the value of one variable based on the value of another variable. The variable being predicted is called the dependent variable, while the variable being used to predict it is called the independent variable. The regression model estimates the slope and intercept of the line of best fit between the two variables.</p>
 
							<p>There are different types of regression models, but the most commonly used is linear regression, which assumes a linear relationship between the variables. The linear regression model is expressed as Y = a + bX, where Y is the dependent variable, X is the independent variable, a is the intercept, and b is the slope. The slope represents the change in Y for each unit change in X, while the intercept represents the predicted value of Y when X is equal to zero.</p>
 
							<p>Correlation and regression are both useful techniques for analyzing the relationship between two variables. Correlation is useful when we want to measure the strength and direction of the relationship between two variables, while regression is useful when we want to model the relationship and make predictions based on that model. Both techniques have their own strengths and limitations, and the choice of which one to use depends on the research question and the type of data being analyzed.</p>
							
						</div>
						<!-- /blog post -->
						
								<!-- pagination -->
						<div class="col-md-12">
								<div class="post-pagination">
									<a href="ds_blog2_7.php" class="pagination-back pull-left">Back</a>
									<!-- <ul class="pages">
										<li><a href="ds_blog1_4.php">5</a></li>
										<li class="active">6</li>
										<li><a href="ds_blog1_6.php">7</a></li>
										<li><a href="#">8</a></li>
									</ul> -->
									<a href="ds_blog2_9.php" class="pagination-next pull-right">Next</a>
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