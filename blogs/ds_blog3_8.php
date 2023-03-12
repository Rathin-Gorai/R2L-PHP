<?php $title="Naive Bayes and Logistic Regression " ?>
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
						<h1 class="white-text">Naive Bayes and Logistic Regression </h1>
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
							<h2>Naive Bayes:</h2>

							<p>Naive Bayes is a probabilistic machine learning algorithm used for classification tasks. It is based on Bayes' theorem, which states that the probability of a hypothesis (e.g., a class label) given the evidence (e.g., the input features) is proportional to the probability of the evidence given the hypothesis and the prior probability of the hypothesis.</p>

							<p>Naive Bayes is called "naive" because it assumes that the input features are conditionally independent given the class label, which means that the presence or absence of a particular feature does not depend on the presence or absence of any other feature. This assumption simplifies the computation of the probabilities and makes the algorithm computationally efficient.</p>

							<h4>The key steps in building a Naive Bayes classifier are:</h4>

							<p><b>1. </b> Calculate the prior probabilities of each class label based on the frequency of the class labels in the training data.</p>
 
							<p><b>2. </b> For each feature and each class label, calculate the conditional probability of the feature given the class label based on the frequency of the feature in the training data for the given class label.</p>
 
							<p><b>3. </b>Given a new input with a set of features, calculate the posterior probability of each class label based on Bayes' theorem and choose the class label with the highest probability.</p>
 
							<p>Naive Bayes is a simple and efficient algorithm that works well on high-dimensional data and can handle missing values. Naive Bayes is commonly used for text classification tasks such as spam detection, sentiment analysis, and topic classification. However, the assumption of conditional independence may not hold true for all datasets, which can lead to suboptimal performance.</p>

							<h2>Logistic Regression:</h2>

							<p>Logistic Regression is a supervised learning algorithm used for binary classification tasks, where the goal is to predict the probability of an input belonging to one of two classes. Logistic Regression is based on the logistic function, which maps any input value to a value between 0 and 1, representing the probability of belonging to the positive class.</p>


							<h4>The key steps in building a Logistic Regression model are:</h4>

							<p><b>1. </b> Calculate the odds ratio of the positive class for each input feature, which is the ratio of the probability of the positive class given the feature to the probability of the negative class given the feature.</p>
 
							<p><b>2. </b> Use a logistic function to convert the odds ratio into a probability score between 0 and 1.</p>
 
							<p><b>3. </b>Train the model by minimizing the logistic loss function, which measures the difference between the predicted probabilities and the true class labels.</p>

							<p><b>4. </b>Given a new input with a set of features, calculate the predicted probability of belonging to the positive class and choose the class label based on a decision threshold.</p>
 
							<p>Logistic Regression is a simple and interpretable algorithm that works well on linearly separable datasets and can handle noisy data. Logistic Regression can also be extended to multi-class classification tasks using techniques such as one-vs-all and softmax regression. However, Logistic Regression may not work well on complex datasets with non-linear decision boundaries, where more complex algorithms such as Support Vector Machines and Neural Networks may be more appropriate.</p>

							
						</div>
						<!-- /blog post -->
						
								<!-- pagination -->
						<div class="col-md-12">
								<div class="post-pagination">
									<a href="ds_blog3_7.php" class="pagination-back pull-left">Back</a>
									<!-- <ul class="pages">
										<li><a href="ds_blog1_4.php">5</a></li>
										<li class="active">6</li>
										<li><a href="ds_blog1_6.php">7</a></li>
										<li><a href="#">8</a></li>
									</ul> -->
									<a href="ds_blog3_9.php" class="pagination-next pull-right">Next</a>
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