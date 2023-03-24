<?php $title=" Slotted ALOHA in Computer networking" ?>
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
							<li>Computer Network </li>
						</ul>
						<h1 class="white-text"> Slotted ALOHA</h1>
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
							<h2> Slotted ALOHA :</h2>

                            <p> Slotted ALOHA is a multiple access protocol used in computer networks to allow multiple users to share a single communication channel efficiently. It is an improvement over the Pure ALOHA protocol, which suffers from low channel utilization efficiency and high packet collision rate.</p>

                            <p>In the Slotted ALOHA protocol, the channel is divided into discrete time slots, and users are allowed to transmit their data only at the beginning of a time slot. This ensures that all transmissions are synchronized, and the probability of collision is reduced. If two or more users transmit their data simultaneously, a collision still occurs, and both transmissions are lost. After a random time interval, each user retransmits the data until it is successfully transmitted without collision.</p>

                            <p>The Slotted ALOHA protocol is simple and easy to implement, as it does not require any coordination or synchronization among the users. However, it has a lower channel utilization efficiency than other protocols, such as CSMA and TDMA, because there are unused time slots between successful transmissions. The channel utilization efficiency of Slotted ALOHA is approximately 37%, meaning that only 37% of the available channel bandwidth is used for successful data transmission.</p>

                            <p>Slotted ALOHA is used in various communication systems, including wireless communication, satellite communication, and computer networks. It is suitable for low data rate systems with a low number of users, where the simplicity of the protocol outweighs the lower channel utilization efficiency. </p>
                            
							
						</div>
						<!-- /blog post -->
						
								<!-- pagination -->
						<div class="col-md-12">
								<div class="post-pagination">
									<a onclick="history.back()" class="pagination-back pull-left">Back</a>
									<!-- <ul class="pages">
										<li><a href="blog-post.php">1</a></li>
										<li class="active">2</li>
										<li><a href="ds_blog1_2.php">3</a></li>
										<li><a href="#">4</a></li>

									<</ul> -->
										<!-- <li><a href="ds_blog1_3.php">4</a></li>
									</ul>  -->

										<!-- <li><a href="ds_blog1_3.php">4</a></li>
									</ul> --> 

									<a href="cn-blog2-8.php" class="pagination-next pull-right">Next</a>
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