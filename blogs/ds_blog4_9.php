<?php $title="Data Visualisation Using Matplotlib " ?>
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
						<h1 class="white-text">Data Visualisation Using Matplotlib</h1>
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
							<h2>Data Visualisation :</h2>

							<p>Data visualization is the process of presenting data in a graphical or visual format. It is a key component of data analysis, as it allows you to better understand the data and communicate insights to others.</p>

							<h4>There are many different types of data visualizations, including:</h4>

							<p><b>1. Line charts:</b>  These show the trend of data over time, with the x-axis representing time and the y-axis representing the data value.</p>

							<p><b>2. Scatter plots: </b>These show the relationship between two variables by plotting them on a two-dimensional graph.</p>

							<p><b>3. Bar charts:</b> These compare the values of different categories by using rectangular bars to represent the data.</p>

                            <p><b>4. Pie charts:</b> These show the proportion of different categories as slices of a pie.</p>

                            <p><b>5. Heat maps:</b> These use color to represent the values of a matrix or table.</p>

                            <p><b>6. Box plots:</b> These show the distribution of data by plotting the minimum, first quartile, median, third quartile, and maximum values.</p>

                            <p><b>7. Histograms:</b> These show the distribution of data by grouping it into bins and plotting the number of data points in each bin.</p>

                            <p>There are many tools and libraries available for creating data visualizations, including Matplotlib, Seaborn, Plotly, and Tableau. When creating data visualizations, it's important to choose the right type of chart or graph for the data you're working with, and to make sure the visualization is easy to read and understand.</p>

                            <h2>Data Visualisation Using Matplotlib:</h2>

                            <p>Matplotlib is a popular Python library used for creating visualizations such as line plots, scatter plots, bar charts, and more. It is highly customizable and provides a wide range of features to help you create professional-looking graphs.</p>
                            
                            <p>To get started, you'll need to install Matplotlib using pip or conda. Once installed, you can import it in your Python script or Jupyter notebook using the following line:</p>

                            <p><b>import matplotlib.pyplot as plt</b></p>

                            <p>This imports the <b>'pyplot'</b> module of Matplotlib and gives it the alias <b>'plt'</b>, which is a common convention.</p>

                            <p><b>Here are some examples of how to create different types of visualizations using Matplotlib:</b></p>

                            <h2>Line plot</h2>

                            <p><b>
                            import matplotlib.pyplot as plt <br>
                            import numpy as np <br> <br>
                            
                            x = np.linspace(0, 10, 100) <br>
                            y = np.sin(x) <br> <br>
                            
                            plt.plot(x, y) <br>
                            plt.show() <br> <br>
                            </b></p>

                            <p>This code creates a simple line plot of the <b>'sin'</b> function.</p>

                            <h2>Scatter plot</h2>

                            <p><b>
                            import matplotlib.pyplot as plt <br>
                            import numpy as np <br> <br>
                            
                            x = np.random.rand(100) <br>
                            y = np.random.rand(100) <br>
                            colors = np.random.rand(100) <br>
                            area = np.pi * (15 * np.random.rand(100))**2 <br>                       # random size of points <br> <br>
                            
                            plt.scatter(x, y, s=area, c=colors, alpha=0.5) <br>
                            plt.show() <br> <br>
                            </b></p>

                            <p>This code creates a scatter plot of randomly generated data points with different sizes and colors.</p>

                            <h2>Bar chart</h2>

                            <p><b>
                            import matplotlib.pyplot as plt <br>
                            import numpy as np <br> <br>
                            
                            x = ['A', 'B', 'C', 'D', 'E'] <br>
                            y = np.random.rand(5) <br> <br>
                            
                            plt.bar(x, y) <br>
                            plt.show() <br> <br>
                            </b></p>

                            <p>This code creates a simple bar chart with random heights for the bars.</p>

                            <p>These are just a few examples of the types of visualizations you can create with Matplotlib. There are many more options and customization features available, so be sure to check out the Matplotlib documentation for more information.</p>

						</div>
						<!-- /blog post -->
						
								<!-- pagination -->
						<div class="col-md-12">
								<div class="post-pagination">
									<a href="ds_blog4_8.php" class="pagination-back pull-left">Back</a>
									<!-- <ul class="pages">
										<li><a href="ds_blog1_4.php">5</a></li>
										<li class="active">6</li>
										<li><a href="ds_blog1_6.php">7</a></li>
										<li><a href="#">8</a></li>
									</ul> -->
									<a href="#" class="pagination-next pull-right">Next</a>
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