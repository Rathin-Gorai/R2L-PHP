<?php $title="Types of Machine Learning" ?>
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
						<h1 class="white-text">Types of Machine Learning</h1>
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
							<h2>Types of Learning</h2>

							<h4>There are three main types of machine learning: supervised learning, unsupervised learning, and reinforcement learning.</h4>

							<p><b>1. Supervised Learning: </b> In supervised learning, the algorithm is trained on labeled data, which means that the inputs and outputs are provided to the algorithm during the training process. The goal of supervised learning is to learn a function that can map input variables to output variables. The algorithm is trained on a set of labeled data, which consists of input variables and their corresponding output variables. The algorithm then learns to predict the output variables for new input variables that it has not seen before.</p>

							<p>Examples of supervised learning include image classification, speech recognition, and predicting housing prices.</p>

							<p><b>2. Unsupervised Learning:</b> In unsupervised learning, the algorithm is trained on unlabeled data, and it is up to the algorithm to identify patterns and relationships in the data. The goal of unsupervised learning is to discover hidden patterns or groupings in the data.</p>

							<p>Examples of unsupervised learning include clustering, anomaly detection, and dimensionality reduction.</p>
 
							<p><b>3. Reinforcement Learning:</b> In reinforcement learning, the algorithm is trained through trial-and-error interactions with an environment. The goal of reinforcement learning is to learn a policy that maximizes a reward signal received from the environment</p>

							<p>Examples of reinforcement learning include game playing, robotics, and autonomous driving</p>
 
							<p> Overall, the choice of learning type depends on the problem at hand and the availability of labeled or unlabeled data.</p>
 
						</div>
						<!-- /blog post -->
						
								<!-- pagination -->
						<div class="col-md-12">
								<div class="post-pagination">
									<a href="ds_blog3_1.php" class="pagination-back pull-left">Back</a>
									<!-- <ul class="pages">
										<li><a href="ds_blog1_4.php">5</a></li>
										<li class="active">6</li>
										<li><a href="ds_blog1_6.php">7</a></li>
										<li><a href="#">8</a></li>
									</ul> -->
									<a href="ds_blog3_3.php" class="pagination-next pull-right">Next</a>
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