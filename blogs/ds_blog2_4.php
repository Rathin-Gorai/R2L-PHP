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
						<h1 class="white-text">Population and Sample</h1>
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
							<h2>Population and Sample</h2>
							<p>In statistics, population and sample are two important concepts that are used to describe a group of individuals or objects under consideration.</p>

							<p><b>Population: </b> A population is a complete set of individuals or objects that possess a common characteristic or set of characteristics that are of interest to the researcher. It is the entire group that the researcher is interested in studying, and it can be finite or infinite in size. For example, the population of all high school students in a particular country, the population of all cars in a particular city, or the population of all employees in a particular company.</p>

							<p><b>Sample:</b>A sample is a subset of the population that is selected for study. It is a smaller group of individuals or objects that are chosen from the larger population to represent it. Samples are usually chosen because it is not feasible or practical to study the entire population. The sample should be representative of the population and should be chosen using appropriate sampling techniques to minimize bias. For example, a sample of 100 high school students from a particular country, a sample of 50 cars from a particular city, or a sample of 200 employees from a particular company.</p>

                            <h2>Difference Between Population and Sample</h2>
 
							<p>The main difference between population and sample is that the population includes all individuals or objects that meet a certain criteria, while the sample is a smaller group of individuals or objects chosen from the population for study. In statistical analysis, it is important to select a sample that is representative of the population to ensure that the results can be generalized to the larger population.</p>
 
							<p>It is also important to note that the characteristics of the population can be described using population parameters, while the characteristics of the sample can be described using sample statistics. For example, the mean age of all high school students in a particular country is a population parameter, while the mean age of a sample of 100 high school students from that country is a sample statistic.</p>
							
						</div>
						<!-- /blog post -->
						
								<!-- pagination -->
						<div class="col-md-12">
								<div class="post-pagination">
									<a href="ds_blog2_3.php" class="pagination-back pull-left">Back</a>
									<!-- <ul class="pages">
										<li><a href="ds_blog1_4.php">5</a></li>
										<li class="active">6</li>
										<li><a href="ds_blog1_6.php">7</a></li>
										<li><a href="#">8</a></li>
									</ul> -->
									<a href="ds_blog2_5.php" class="pagination-next pull-right">Next</a>
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