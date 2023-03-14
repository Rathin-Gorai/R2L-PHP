<?php $title="Data  Types with Python " ?>
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
						<h1 class="white-text">Data  Types with Python </h1>
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
							<h2>Data  Types with Python:</h2>

							<h4>Python supports various data types, and some of the commonly used data types are:</h4>

                            <p><b>1. Integer (int): </b>This data type is used to store integer values, such as 2, 5, -8, etc.</p>

                            <p><b>2. Float (float):  </b>This data type is used to store decimal values, such as 2.5, 3.14, -8.9, etc.</p>

                            <p><b>3. String (str): </b>This data type is used to store text, such as "Hello World!", "Python", "12345", etc.</p>

                            <p><b>4. Boolean (bool): </b> This data type is used to store boolean values, which can be either True or False.</p>

                            <p><b>5. List (list): </b>This data type is used to store a collection of values that can be of different data types, enclosed within square brackets and separated by commas. For example, [1, 2, "apple", 3.14, True].</p>

                            <p><b>6. Tuple (tuple): </b>This data type is similar to a list but is immutable, meaning it cannot be modified once created. The values are enclosed within parentheses and separated by commas. For example, (1, 2, "apple", 3.14, True).</p>

                            <p><b>7. Dictionary (dict):  </b>This data type is used to store a collection of key-value pairs, enclosed within curly braces and separated by commas. Each key is separated from its corresponding value by a colon. For example, {"name": "John", "age": 25, "gender": "male"}.</p>

                            <p><b>8. Set (set):  </b>This data type is used to store a collection of unique values, enclosed within curly braces and separated by commas. For example, {1, 2, 3, "apple"}.</p>

                            <p>Python also provides some built-in functions to convert between different data types, such as int(), float(), str(), list(), tuple(), dict(), set(), etc.</p>
							
						</div>
						<!-- /blog post -->
						
								<!-- pagination -->
						<div class="col-md-12">
								<div class="post-pagination">
									<a href="ds_blog4_1.php" class="pagination-back pull-left">Back</a>
									<!-- <ul class="pages">
										<li><a href="ds_blog1_4.php">5</a></li>
										<li class="active">6</li>
										<li><a href="ds_blog1_6.php">7</a></li>
										<li><a href="#">8</a></li>
									</ul> -->
									<a href="ds_blog4_3.php" class="pagination-next pull-right">Next</a>
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