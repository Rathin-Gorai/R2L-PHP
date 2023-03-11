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
						<h1 class="white-text">Exploratory Data Analytics</h1>
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
							<h2>Exploratory Data Analytics</h2>
							<p>Exploratory data analysis (EDA) is a process of analyzing and summarizing data sets to gain insights and identify patterns and trends. The goal of EDA is to understand the underlying structure and characteristics of the data, and to use this understanding to guide further analysis and modeling.</p>
                             
                            <h4>The key steps in EDA typically include:</h4>

							<p><b>1. Data cleaning and preprocessing: </b> This involves identifying and handling missing values, dealing with outliers, and transforming the data into a format suitable for analysis.</p>

							<p><b>2. Summary statistics and visualization:</b> This involves generating summary statistics such as mean, median, standard deviation, and range, and visualizing the data through histograms, box plots, scatter plots, and other graphical methods.</p>
 
							<p><b>3. Identifying patterns and relationships: </b> This involves exploring the data to identify patterns and relationships between variables. This may involve calculating correlations between variables or using clustering techniques to group similar data points.</p>
 
							<p><b>4. Hypothesis testing:</b> This involves testing hypotheses about the data to determine if certain relationships or patterns are statistically significant.</p>
 
							<p><b>5. Model building and refinement:</b> This involves building models based on the insights gained from EDA and refining these models through iterative testing and validation.</p>

							<h3>Some common tools and techniques used in EDA include:</h3>

                            <p><b>1.</b>Python libraries such as NumPy, Pandas, and Matplotlib.</p>

                            <p><b>2.</b>Data visualization tools such as Tableau, QlikView, and Power BI.</p>

                            <p><b>3.</b>Statistical analysis tools such as R, SAS, and SPSS.</p>

                            <h3>Conclusion</h3>

							<p>In conclusion, exploratory data analysis is a critical step in the data analytics process, as it allows analysts to gain insights and understanding of the underlying structure and characteristics of the data. By using tools and techniques such as summary statistics, visualization, pattern identification, hypothesis testing, and model building, analysts can make informed decisions and develop effective models for predicting future outcomes.</p>
							
						</div>
						<!-- /blog post -->
						
								<!-- pagination -->
						<div class="col-md-12">
								<div class="post-pagination">
									<a href="ds_blog1_3.php" class="pagination-back pull-left">Back</a>
									<!-- <ul class="pages">
										<li><a href="ds_blog1_3.php">4</a></li>
										<li class="active">5</li>
										<li><a href="ds_blog1_5.php">6</a></li>
										<li><a href="ds_blog1_6.php">7</a></li>
									</ul> -->
									<a href="ds_blog1_5.php" class="pagination-next pull-right">Next</a>
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