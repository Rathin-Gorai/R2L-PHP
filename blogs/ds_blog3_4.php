<?php $title="Linear regression and Regularization" ?>
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
						<h1 class="white-text">Linear regression and Regularization</h1>
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
							<h2>Linear regression and Regularization</h2>

							<p>Linear regression is a supervised learning algorithm that is commonly used for predicting a continuous output variable based on one or more input variables. In linear regression, the goal is to find a linear relationship between the input variables and the output variable.</p>

							<p>Regularization is a technique used to prevent overfitting in linear regression models. Overfitting occurs when the model is too complex and fits the training data too closely, resulting in poor performance on new, unseen data. Regularization works by adding a penalty term to the linear regression objective function, which discourages the model from learning complex relationships that may not generalize well to new data.</p>

							<p><b>There are two main types of regularization used in linear regression:  </b> L1 regularization (also known as Lasso regression) and L2 regularization (also known as Ridge regression).</p>
 
							<p>L1 regularization adds a penalty term equal to the absolute value of the coefficients to the objective function. This results in sparse solutions, where some coefficients are set to zero, effectively removing some of the input variables from the model.</p>
 
							<p>L2 regularization adds a penalty term equal to the square of the coefficients to the objective function. This results in smaller coefficients, which reduces the impact of individual input variables on the output variable.</p>
 
							<p>The choice of regularization method depends on the specific problem and data at hand. L1 regularization is often used when the input variables are highly correlated, while L2 regularization is often used when the input variables have different scales.</p>

							<p>Overall, regularization is an important technique for preventing overfitting in linear regression models and improving their generalization performance.</p>
							
						</div>
						<!-- /blog post -->
						
								<!-- pagination -->
						<div class="col-md-12">
								<div class="post-pagination">
									<a href="ds_blog3_3.php" class="pagination-back pull-left">Back</a>
									<!-- <ul class="pages">
										<li><a href="ds_blog1_4.php">5</a></li>
										<li class="active">6</li>
										<li><a href="ds_blog1_6.php">7</a></li>
										<li><a href="#">8</a></li>
									</ul> -->
									<a href="ds_blog3_5.php" class="pagination-next pull-right">Next</a>
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