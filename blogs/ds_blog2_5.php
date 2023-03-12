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
						<h1 class="white-text">Measure of Central Tendency and Dispersion</h1>
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
							<h2>Measure of Central Tendency and Dispersion</h2>
				
							<p><b>Measures of central tendency:</b>  Measures of central tendency refer to the values that are used to describe the center or typical value of a dataset. There are three commonly used measures of central tendency:</p>

							<p><b>1. Mean: </b> The mean is the average value of a dataset and is calculated by adding up all the values in the dataset and dividing by the total number of values.</p>
 
							<p><b>2. Median:</b>The median is the middle value of a dataset when the values are arranged in order. If the dataset has an even number of values, the median is the average of the two middle values.</p>
 
							<p><b>3. Mode: </b> The mode is the most frequent value in a dataset. A dataset can have one mode (unimodal), two modes (bimodal), or more than two modes (multimodal).</p>
 
							<p><b>Measures of dispersion: </b> Measures of dispersion refer to the values that are used to describe the spread or variability of a dataset. There are three commonly used measures of dispersion:</p>

							<p><b>1. Range: </b> The range is the difference between the maximum and minimum values in a dataset.</p>
 
							<p><b>2. Variance:</b>The variance is a measure of how much the values in a dataset vary from the mean. It is calculated by taking the average of the squared differences between each value and the mean.</p>
 
							<p><b>3. Standard deviation:  </b> The standard deviation is the square root of the variance and is used to describe the spread of the data around the mean.</p>

                            <h2>Summary</h2>

                            <p>In summary, measures of central tendency and dispersion are important descriptive statistics that are used to summarize the characteristics of a dataset. Measures of central tendency, such as the mean, median, and mode, describe the typical or central value of the data, while measures of dispersion, such as range, variance, and standard deviation, describe how spread out the data is. Together, these measures provide a comprehensive summary of a dataset and can be used to make comparisons between different datasets.</p>
 
							
						</div>
						<!-- /blog post -->
						
								<!-- pagination -->
						<div class="col-md-12">
								<div class="post-pagination">
									<a href="ds_blog2_4.php" class="pagination-back pull-left">Back</a>
									<!-- <ul class="pages">
										<li><a href="ds_blog1_4.php">5</a></li>
										<li class="active">6</li>
										<li><a href="ds_blog1_6.php">7</a></li>
										<li><a href="#">8</a></li>
									</ul> -->
									<a href="ds_blog2_6.php" class="pagination-next pull-right">Next</a>
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