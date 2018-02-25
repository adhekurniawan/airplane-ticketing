
<div class="footer">
	<div class="copyright">
		<p>© 2011-2018 Travel.com. All Rights Reserved</p>
	</div>
		<div class="container">
			<div class="row row-bottom-padded-md">
				<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
					<h3>About Travel</h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
					<h3>Top Flights Routes</h3>
					<ul>
						<li><a href="#">Manila flights</a></li>
						<li><a href="#">Dubai flights</a></li>
						<li><a href="#">Bangkok flights</a></li>
						<li><a href="#">Tokyo Flight</a></li>
						<li><a href="#">New York Flights</a></li>
					</ul>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
					<h3>Top Hotels</h3>
					<ul>
						<li><a href="#">Boracay Hotel</a></li>
						<li><a href="#">Dubai Hotel</a></li>
						<li><a href="#">Singapore Hotel</a></li>
						<li><a href="#">Manila Hotel</a></li>
					</ul>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
					<h3>Interest</h3>
					<ul>
						<li><a href="#">Beaches</a></li>
						<li><a href="#">Family Travel</a></li>
						<li><a href="#">Budget Travel</a></li>
						<li><a href="#">Food &amp; Drink</a></li>
						<li><a href="#">Honeymoon and Romance</a></li>
					</ul>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
					<h3>Best Places</h3>
					<ul>
						<li><a href="#">Boracay Beach</a></li>
						<li><a href="#">Dubai</a></li>
						<li><a href="#">Singapore</a></li>
						<li><a href="#">Hongkong</a></li>
					</ul>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
					<h3>Affordable</h3>
					<ul>
						<li><a href="#">Food &amp; Drink</a></li>
						<li><a href="#">Fare Flights</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<p class="fh5co-social-icons">
						<a href="#"><i class="icon-twitter2"></i></a>
						<a href="#"><i class="icon-facebook2"></i></a>
						<a href="#"><i class="icon-instagram"></i></a>
						<a href="#"><i class="icon-dribbble2"></i></a>
						<a href="#"><i class="icon-youtube"></i></a>
					</p>
					<p>Copyright 2016 Free Html5 <a href="#">Module</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
				</div>
			</div>
		</div>
	</div>
</div>


</div>
<!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->

<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="assets/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/sticky.js"></script>

<!-- Stellar -->
<script src="assets/js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="assets/js/hoverIntent.js"></script>
<script src="assets/js/superfish.js"></script>
<!-- Magnific Popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/magnific-popup-options.js"></script>
<!-- Date Picker -->
<script src="assets/js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="assets/js/classie.js"></script>
<script src="assets/js/selectFx.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>


<script>
	var width = 100;
	var animation_speed = 700;
	var time_val = 3000;
	var current_slide = 1;

	var $slider = $('#slider');
	var $slide_container = $('.slides');
	var $slides = $('.slide');

	var interval;

	$slides.each(function(index){
		$(this).css('left',(index*100)+'%');
	});

	function startSlider() {
		interval = setInterval(function() {
			$slide_container.animate({'left': '-='+(width+'%')}, animation_speed, function() {
				if (++current_slide === $slides.length) {
					current_slide = 1;
					$slide_container.css('left', 0);
				}
			});
		}, time_val);
	}

	startSlider();
</script>
</body>
</html>

