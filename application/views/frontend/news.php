<?php include('header.php');?>
<section class="news-section">
	<div class="container-fluid cus-container-fluid-news">
		<div class="row">
			<div class="col-md-3">
				<div class="news-head-wrapper">
					<div class="news-head">NEWS</div>
					<div class="news-dropdown-wrapper">
						<ul>
							<div class="news-dropdown-list-wrapper" data-index="0">
								<li>
									<a href="#" id="year">2020</a>
									<span>
										<img src=<?php echo base_url('assets/images/dropdown_arrow.svg');?>
										alt="dparrow" class="dparrow">
									</span>
								</li>
								<div class="news-dropdown-children" id="dropdownchildren" data-index="0">
									<ul>
										<li><a href="#">Jan - Feb - Mar</a></li>
										<li><a href="#">Apr - May - Jun</a></li>
										<li><a href="#">Jul - Aug - Sept</a></li>
										<li><a href="#">Oct - Nov - Dec</a></li>
									</ul>
								</div>
							</div>
							<div class="news-dropdown-list-wrapper"  data-index="1">
								<li>
									<a href="#" id="year">2019</a>
									<span>
										<img src=<?php echo base_url('assets/images/dropdown_arrow.svg');?>
										alt="dparrow" class="dparrow">
									</span>
								</li>
								<div class="news-dropdown-children" id="dropdownchildren" data-index="1">
									<ul>
										<li><a href="#">Jan - Feb - Mar</a></li>
										<li><a href="#">Apr - May - Jun</a></li>
										<li><a href="#">Jul - Aug - Sept</a></li>
										<li><a href="#">Oct - Nov - Dec</a></li>
									</ul>
								</div>
							</div>
							<div class="news-dropdown-list-wrapper" data-index="2">
								<li >
									<a href="#" id="year">2018</a>
									<span>
										<img src=<?php echo base_url('assets/images/dropdown_arrow.svg');?>
										alt="dparrow" class="dparrow">
									</span>
								</li>
								<div class="news-dropdown-children" id="dropdownchildren" data-index="2">
									<ul>
										<li><a href="#">Jan - Feb - Mar</a></li>
										<li><a href="#">Apr - May - Jun</a></li>
										<li><a href="#">Jul - Aug - Sept</a></li>
										<li><a href="#">Oct - Nov - Dec</a></li>
									</ul>
								</div>
							</div>
							<div class="news-dropdown-list-wrapper" data-index="3">
								<li >
									<a href="#" id="year">2017</a>
									<span>
										<img src=<?php echo base_url('assets/images/dropdown_arrow.svg');?>
										alt="dparrow" class="dparrow">
									</span>
								</li>
								<div class="news-dropdown-children" id="dropdownchildren" data-index="3">
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
			<div class="col-md-9">
				<!-- Latest News -->
				<div class="latest-news-div" id="latestNews">
					<div class="latest-left-content">
						<img src=<?php echo base_url('assets/images/resume.jpg');?>
						alt="latest" class="latest-img">
					</div>
					<div class="latest-right-content">
						<div class="latest-news-content-div">
							<div class="top-story">TOP STORIES</div>
							<div class="head-line">
								LOREM IPSUM IS SIMPLY DUMMY TEXT OF THE PRINTING AND TYPESETTING
							</div>
							<div class="latest-para">
								Lorem Ipsum has been the industry's standard dummy text ever
								since the 1500s, when an unknown printer took a galley of type
								and scrambled it to make a type specimen book. It has survived
								not only five centuries
							</div>
							<div class="latest-date">June 10, 2020</div>
						</div>
					</div>
				</div>
				<!-- Related News -->
				<div class="row cus-row">
					<div class="col-md-6 left-related-div padding-right">
						<div class="related-div-img">
							<img src=<?php echo base_url('assets/images/related_news.jpg');?>
							alt="related" class="related-img">
						</div>
						<div class="press-release-div">
							<div class="press-release-top">PRESS RELEASE</div>
							<div class="press-release-head">
								LOREM IPSUM IS SIMPLY DUMMY TEXT OF THE PRINTING AND TYPESETTING
							</div>
							<div class="press-release-date">May 20, 2020</div>
						</div>
					</div>
					<div class="col-md-6 right-related-div padding-left">
						<div class="related-div-img">
							<img src=<?php echo base_url('assets/images/vision.jpg');?>
							alt="related" class="related-img">
						</div>
						<div class="press-release-div">
							<div class="press-release-top">PRESS RELEASE</div>
							<div class="press-release-head">
								IPSUM IS TEXT OF THE PRINTING AND TYPESETTING
							</div>
							<div class="press-release-date">Aug 12, 2020</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('footer.php');?>
