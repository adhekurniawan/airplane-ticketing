
<?php require_once 'action/connect.php'; ?>

<?php require_once 'page/header.php' ?>


<div id="fh5co-wrapper">
	<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php"></i>E-ticketing</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="booking.php">Booking</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->
		
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(assets/images/bg.jpg);">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<div class="tabulation animate-box">

									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active">
											<a href="#booking" aria-controls="flights" role="tab" data-toggle="tab">Cari Destinasimu</a>
										</li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">

										<div role="tabpanel" class="tab-pane active" id="check">
											<div class="row">
												<div class="col-xxs-12 col-xs-12 mt">
													<div class="input-field">
														<label for="from">Dari:</label>
														<input type="text" class="form-control" id="dari" placeholder="dari"/>
													</div>
												</div>
												<div class="col-xxs-12 col-xs-12 mt">
													<div class="input-field">
														<label for="from">Ke:</label>
														<input type="text" class="form-control" id="tujuan" placeholder="ke"/>
													</div>
												</div>
												<div class="col-xxs-12 col-xs-12 mt alternate">
													<div class="input-field">
														<label for="date-start">Berangkat:</label>
														<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
													</div>
												</div>
												<div class="col-xs-12">
													<input type="submit" class="btn btn-primary btn-block" value="Search">
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									<h2>Exclusive Limited Time Offer</h2>
									<h3>Fly to Karimun Jawa via Jeruklegi, Cilacap</h3>
									<span class="price">IDR 190.000</span>
									<!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		
		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Hot Tours</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="assets/images/destinasi/1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Pulau Raja Ampat</h3>
								<span>3 nights + Flight 5*Hotel</span>
								<span class="price">$1,000</span>
								<a class="btn btn-primary btn-outline" href="booking.php">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="assets/images/destinasi/1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Philippines</h3>
								<span>4 nights + Flight 5*Hotel</span>
								<span class="price">$1,000</span>
								<a class="btn btn-primary btn-outline" href="booking.php">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="assets/images/destinasi/1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Hongkong</h3>
								<span>2 nights + Flight 4*Hotel</span>
								<span class="price">$1,000</span>
								<a class="btn btn-primary btn-outline" href="booking.php">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="assets/images/destinasi/1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Hongkong</h3>
								<span>2 nights + Flight 4*Hotel</span>
								<span class="price">$1,000</span>
								<a class="btn btn-primary btn-outline" href="booking.php">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="assets/images/destinasi/1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Hongkong</h3>
								<span>2 nights + Flight 4*Hotel</span>
								<span class="price">$1,000</span>
								<a class="btn btn-primary btn-outline" href="booking.php">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="assets/images/destinasi/1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Hongkong</h3>
								<span>2 nights + Flight 4*Hotel</span>
								<span class="price">$1,000</span>
								<a class="btn btn-primary btn-outline" href="booking.php">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-features">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-hotairballoon"></i>
							</span>
							<div class="feature-copy">
								<h3>Family Travel</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>cf
							</div>
						</div>

					</div>

					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-search"></i>
							</span>
							<div class="feature-copy">
								<h3>Travel Plans</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>cf
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-wallet"></i>
							</span>
							<div class="feature-copy">
								<h3>Honeymoon</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>cf
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-wine"></i>
							</span>
							<div class="feature-copy">
								<h3>Business Travel</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>cf
							</div>
						</div>

					</div>

					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-genius"></i>
							</span>
							<div class="feature-copy">
								<h3>Solo Travel</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>cf
							</div>
						</div>

					</div>
					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-chat"></i>
							</span>
							<div class="feature-copy">
								<h3>Explorer</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>cf
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- fh5co-blog-section -->
		<div id="fh5co-testimonial" style="background-image:url(assets/images/img_bg_1.jpg);">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Happy Clients</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="box-testimony animate-box">
							<blockquote>
								<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							</blockquote>
							<p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<div class="box-testimony animate-box">
							<blockquote>
								<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
							</blockquote>
							<p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
						</div>
						
						
					</div>
					<div class="col-md-4">
						<div class="box-testimony animate-box">
							<blockquote>
								<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							</blockquote>
							<p class="author">John Doe, Founder <a href="#">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
						</div>
						
					</div>
				</div>
			</div>
		</div>



<?php require_once 'page/footer.php' ?>