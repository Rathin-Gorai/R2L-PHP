<?php $title="Classification:SVM,KNN and Decision Tree" ?>
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
						<h1 class="white-text">Classification:SVM,KNN and Decision Tree</h1>
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
							<h2>Classification of SVM:</h2>

							<p>Support Vector Machines (SVM) is a type of supervised learning algorithm used for classification and regression analysis. SVM can be used for both linear and nonlinear classification tasks.</p>

							<h4>SVM can be classified into two categories based on the type of decision boundary they create:</h4>

							<p><b>1. Linear SVM: </b> This is used for linearly separable data. It tries to find the best hyperplane that separates the data into different classes. The hyperplane that maximizes the margin between the classes is chosen as the decision boundary.</p>

							<p><b>2. Nonlinear SVM: </b> This is used for non-linearly separable data. It transforms the data into a higher-dimensional space using a nonlinear function, such as a polynomial or a radial basis function (RBF), and then applies the linear SVM algorithm to the transformed data. This allows for more complex decision boundaries that can separate the data into different classes.</p>

                            <h2>SVM can also be classified based on the type of learning:</h2>
 
							<p><b>1. C-SVM: </b> In C-SVM, the goal is to minimize the classification error subject to a user-defined regularization parameter, C, which controls the trade-off between maximizing the margin and minimizing the classification error.</p>
 
							<p><b>2. Nu-SVM:  </b>In Nu-SVM, the goal is to minimize the classification error subject to a user-defined parameter, nu, which controls the number of support vectors and the width of the margin.</p>
 
							<p>Overall, SVM is a powerful algorithm that can be used for a wide range of classification tasks, including image classification, text classification, and bioinformatics. The choice of SVM variant depends on the nature of the data and the specific problem at hand.</p>

							<!-- Classification of KNN -->

							<h2>Classification of KNN:</h2>

							<p>K-Nearest Neighbors (KNN) is a type of non-parametric and lazy learning algorithm used for classification and regression analysis. KNN is based on the principle of similarity, where it classifies a data point based on the similarity between the data point and its K nearest neighbors.</p>

							<h4>KNN can be classified based on the following factors:</h4>

							<p><b>1. Distance Metric: </b> KNN uses a distance metric to measure the similarity between two data points. The most commonly used distance metrics are Euclidean distance, Manhattan distance, and Minkowski distance.</p>

							<p><b>2. Value of K: </b> KNN considers the K nearest neighbors to make a classification decision. The value of K is typically chosen based on the size of the dataset and the complexity of the problem. A small value of K can lead to overfitting, whereas a large value of K can lead to underfitting.</p>

							<p><b>3. Weighted or Uniform Voting:</b>KNN uses a voting mechanism to determine the class label of a data point. The class label of the data point is determined based on the majority class label of its K nearest neighbors. In weighted voting, the contribution of each neighbor is weighted based on its distance to the data point. In uniform voting, all neighbors are given equal weight.</p>

							<p>KNN is a simple and effective algorithm that can be used for a wide range of classification problems, including image classification, text classification, and recommendation systems. However, KNN has some limitations, such as its sensitivity to the choice of distance metric and the curse of dimensionality, where its performance decreases as the number of dimensions increases.</p>

							<!-- Classification of Decision Tree -->

							<h2>Classification of Decision Tree :</h2>

							<p>Decision Trees are a type of supervised learning algorithm used for classification and regression analysis. Decision Trees create a tree-like model of decisions and their possible consequences, and use it to make predictions about the target variable based on the input features.</p>

							<h4>Decision Trees can be classified based on the following factors:</h4>

							<p><b>1. Splitting Criteria: </b> Decision Trees use a splitting criteria to divide the data into smaller subsets at each node of the tree. The most commonly used splitting criteria are Gini Index, Information Gain, and Chi-Square.</p>

							<p><b>2. Depth of the Tree:  </b> The depth of the tree refers to the maximum number of nodes from the root node to the leaf node. A deeper tree can capture more complex relationships between the input features and the target variable, but it can also lead to overfitting.</p>

							<p><b>3. Pruning:</b>Pruning is a technique used to prevent overfitting in Decision Trees. It involves removing branches that do not improve the performance of the tree on a validation set.</p>

							<p>Decision Trees are versatile algorithms that can be used for a wide range of classification problems, including image classification, text classification, and recommendation systems. Decision Trees are easy to interpret and visualize, which makes them a popular choice in many applications. However, Decision Trees can be sensitive to small variations in the data, and can lead to overfitting if not properly pruned.</p>

							
							
						</div>
						<!-- /blog post -->
						
								<!-- pagination -->
						<div class="col-md-12">
								<div class="post-pagination">
									<a href="ds_blog3_5.php" class="pagination-back pull-left">Back</a>
									<!-- <ul class="pages">
										<li><a href="ds_blog1_4.php">5</a></li>
										<li class="active">6</li>
										<li><a href="ds_blog1_6.php">7</a></li>
										<li><a href="#">8</a></li>
									</ul> -->
									<a href="ds_blog3_7.php" class="pagination-next pull-right">Next</a>
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