<?php include('header.php'); ?>
<section class="blogs-main-section">
	<div class="blogs-side-bar">
		<div class="blogs-main-wrapper">
			<div class="blogs-head">BLOGS</div>
			<div class="news-dropdown-wrapper">
				<ul>
					<div class="news-dropdown-list-wrapper">
						<li>
							<a href="#" id="year">2020</a>
							<span>
								<img src=<?php echo base_url('assets/images/dropdown_arrow.svg'); ?> alt="dparrow" class="dparrow">
							</span>
						</li>
						<div class="news-dropdown-children" id="dropdownchildren">
							<ul>
								<li><a href="#">Jan - Feb - Mar</a></li>
								<li><a href="#">Apr - May - Jun</a></li>
								<li><a href="#">Jul - Aug - Sept</a></li>
								<li><a href="#">Oct - Nov - Dec</a></li>
							</ul>
						</div>
					</div>
					<div class="news-dropdown-list-wrapper">
						<li>
							<a href="#" id="year">2019</a>
							<span>
								<img src=<?php echo base_url('assets/images/dropdown_arrow.svg'); ?> alt="dparrow" class="dparrow">
							</span>
						</li>
						<div class="news-dropdown-children" id="dropdownchildren">
							<ul>
								<li><a href="#">Jan - Feb - Mar</a></li>
								<li><a href="#">Apr - May - Jun</a></li>
								<li><a href="#">Jul - Aug - Sept</a></li>
								<li><a href="#">Oct - Nov - Dec</a></li>
							</ul>
						</div>
					</div>
					<div class="news-dropdown-list-wrapper">
						<li>
							<a href="#" id="year">2018</a>
							<span>
								<img src=<?php echo base_url('assets/images/dropdown_arrow.svg'); ?> alt="dparrow" class="dparrow">
							</span>
						</li>
						<div class="news-dropdown-children" id="dropdownchildren">
							<ul>
								<li><a href="#">Jan - Feb - Mar</a></li>
								<li><a href="#">Apr - May - Jun</a></li>
								<li><a href="#">Jul - Aug - Sept</a></li>
								<li><a href="#">Oct - Nov - Dec</a></li>
							</ul>
						</div>
					</div>
					<div class="news-dropdown-list-wrapper">
						<li>
							<a href="#" id="year">2017</a>
							<span>
								<img src=<?php echo base_url('assets/images/dropdown_arrow.svg'); ?> alt="dparrow" class="dparrow">
							</span>
						</li>
						<div class="news-dropdown-children" id="dropdownchildren">
							<ul>
								<li><a href="#">Jan - Feb - Mar</a></li>
								<li><a href="#">Apr - May - Jun</a></li>
								<li><a href="#">Jul - Aug - Sept</a></li>
								<li><a href="#">Oct - Nov - Dec</a></li>
							</ul>
						</div>
					</div>
				</ul>
			</div>
		</div>
	</div>
	<div class="blogs-main">
		<div class="container-fluid">
			<div class="row">
				<!-- LATEST BLOG POST -->
				<div class="col-md-12 blog_latest_div" id="latesblog">
					<div>
						<img src=<?php echo base_url('assets/images/blog_1.jpg') ?> alt="blog" class="blog_latest">
						<div class="blog_latest_content">
							<h3>LOREM IPSUM</h3>
							<h5>Lorem Ipsum has been the industry's standard dummy</h5>
						</div>
						<div class="blog_latest_date">July 20, 2020</div>
					</div>
				</div>
				<!-- RELATED BLOG POST 1-->
				<div class="col-md-6 left-related-blog md-20">
					<div class="related-post-img-div">
						<img src=<?php echo base_url('assets/images/blog_2.jpg'); ?> alt="blog_2" class="related-blog-img">
						<div class="related-blog-date">May 20, 2020</div>
					</div>
					<div class="related-post-content-div">
						<div class="related-post-content-head">
							<h3>LOREM IPSUM IS SIMPLY DUMMY TEXT</h3>
						</div>
						<div class="related-post-content-des">
							<h4>
								Lorem Ipsum has been the industpassages, and more recently with
								desktop publishing software like Aldus PageMaker including
								versions of Lorem Ipsum.
							</h4>
						</div>
					</div>
				</div>
				<div class="col-md-6 right-related-blog md-20">
					<div class="related-post-img-div">
						<img src=<?php echo base_url('assets/images/blog_3.jpg'); ?> alt="blog_3" class="related-blog-img">
						<div class="related-blog-date">May 20, 2020</div>
					</div>
					<div class="related-post-content-div">
						<div class="related-post-content-head">
							<h3>IPSUM IS TEXT OF THE PRINTING AND TYPESETTING</h3>
						</div>
						<div class="related-post-content-des">
							<h4>
								Lorem Ipsum has been the industpassages, and more recently with
								desktop publishing software like Aldus PageMaker
							</h4>
						</div>
					</div>
				</div>
				<!-- RELATED BLOG POST 2 -->
				<div class="col-md-6 left-related-blog md-20">
					<div class="related-post-img-div">
						<img src=<?php echo base_url('assets/images/vision.jpg'); ?> alt="blog_2" class="related-blog-img">
						<div class="related-blog-date">May 20, 2020</div>
					</div>
					<div class="related-post-content-div">
						<div class="related-post-content-head">
							<h3>LOREM IPSUM IS SIMPLY DUMMY TEXT</h3>
						</div>
						<div class="related-post-content-des">
							<h4>
								Lorem Ipsum has been the industpassages, and more recently with
								desktop publishing software like Aldus PageMaker including
								versions of Lorem Ipsum.
							</h4>
						</div>
					</div>
				</div>
				<div class="col-md-6 right-related-blog md-20">
					<div class="related-post-img-div">
						<img src=<?php echo base_url('assets/images/mission.jpg'); ?> alt="blog_3" class="related-blog-img">
						<div class="related-blog-date">May 20, 2020</div>
					</div>
					<div class="related-post-content-div">
						<div class="related-post-content-head">
							<h3>IPSUM IS TEXT OF THE PRINTING AND TYPESETTING</h3>
						</div>
						<div class="related-post-content-des">
							<h4>
								Lorem Ipsum has been the industpassages, and more recently with
								desktop publishing software like Aldus PageMaker
							</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('footer.php'); ?>