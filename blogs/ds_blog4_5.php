<?php $title="Mathematical Functions of Numpy" ?>
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
						<h1 class="white-text">Mathematical Functions of Numpy</h1>
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
							<h2>Mathematical Functions of Numpy:</h2>

                            <h4>NumPy provides a wide range of mathematical functions that operate on arrays or individual elements of an array. Here are some of the most commonly used mathematical functions in NumPy:</h4>

							<p><b>1. Trigonometric Functions:</b> NumPy provides functions for computing trigonometric ratios, such as sine, cosine, tangent, arcsine, arccosine, and arctangent. These functions take an angle in radians as input and return the corresponding trigonometric ratio.</p>

							<p><b>2. Exponential and Logarithmic Functions: </b>NumPy provides functions for computing exponential and logarithmic functions, such as exponentiation, logarithm (natural and base-10), square root, and more.</p>

                            <p><b>3. Linear Algebra Functions: </b> NumPy provides a wide range of linear algebra functions, such as matrix multiplication, matrix inversion, determinants, eigenvectors, and more.  </p>

                            <p><b>4. Statistical Functions: </b>NumPy provides functions for computing statistical measures such as mean, median, variance, standard deviation, minimum, maximum, and more.</p>

                            <p><b>5. Sorting and Searching Functions:</b> NumPy provides functions for sorting arrays, searching for elements in arrays, and performing other array manipulation operations. </p>

                            <p><b>6. Random Number Generation:</b>NumPy provides functions for generating random numbers from various distributions, such as normal, uniform, and Poisson distributions.  </p>

                            <p>To use these mathematical functions in NumPy, you need to import the NumPy module in your Python script and call the relevant function with the appropriate input parameters. For example, to compute the sine of an array of angles, you can use the <b>'numpy.sin()'</b> function as follows:</p>

                            <h2>Code:</h2>

                            <p><b>import numpy as np <br>
                             
                             angles = np.array([0, np.pi/2, np.pi]) <br>
                             sines = np.sin(angles) <br>
                             print(sines)</b>
                            </p>

                            <h2>This will output:</h2>

                            <p><b>array([0.        , 1.        , 0.        ])</b></p>

                            <p>which shows the sine of 0, pi/2, and pi radians respectively.</p>
							
						</div>
						<!-- /blog post -->
						
								<!-- pagination -->
						<div class="col-md-12">
								<div class="post-pagination">
									<a href="ds_blog4_4.php" class="pagination-back pull-left">Back</a>
									<!-- <ul class="pages">
										<li><a href="ds_blog1_4.php">5</a></li>
										<li class="active">6</li>
										<li><a href="ds_blog1_6.php">7</a></li>
										<li><a href="#">8</a></li>
									</ul> -->
									<a href="ds_blog4_6.php" class="pagination-next pull-right">Next</a>
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