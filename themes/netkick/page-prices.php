<?php get_header(); ?>

<?php get_template_part('inc-logo-bar'); ?>
<?php get_template_part('inc-nav-bar'); ?>

<!-- Banner top -->
<img class="orientation-img" style="padding-top:28px" src="<?php echo site_url('images/highstreet/bg_Hammersmith_Bridge.jpg'); ?>" />
<script>
// Listen for orientation changes
window.addEventListener("orientationchange", function() {
	if(window.innerHeight > window.innerWidth){
		$('.orientation-img').attr('src', $('.orientation-img').attr('src').replace('images/highstreet/bg_Hammersmith_Bridge.jpg', 'images/highstreet/bg_Hammersmith_Bridge_1000x600.jpg'));
	}
	else{
		$('.orientation-img').attr('src', $('.orientation-img').attr('src').replace('images/highstreet/bg_Hammersmith_Bridge_1000x600.jpg', 'images/highstreet/bg_Hammersmith_Bridge.jpg'));
	}
}, false);

if(window.innerHeight > window.innerWidth){
	$('.orientation-img').attr('src', $('.orientation-img').attr('src').replace('images/highstreet/bg_Hammersmith_Bridge.jpg', 'images/highstreet/bg_Hammersmith_Bridge_1000x600.jpg'));
}
else{
	$('.orientation-img').attr('src', $('.orientation-img').attr('src').replace('images/highstreet/bg_Hammersmith_Bridge_1000x600.jpg', 'images/highstreet/bg_Hammersmith_Bridge'));
}
</script>


<!-- Marketing messaging and featurettes    ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. Compensate 48px for logo bar -->
	<div class="container" style="padding-top: 0px">
		<div class="row main-content">
			<div class="col-md-7 col-lg-8">
				<h1><span>Services</span></h1>
				<ul>
					<li id="prices">Mobile Internet site design and hosting</li>
					<li id="prices">Hosting & Maintenance support</li>
					<li id="prices">Search optimisation (advice and basics set up)</li>
					<li id="prices">Marketing and corporate Identity</li>
					<li id="prices">E-commerce</li>
				</ul>
				<h2><span>Prices</span></h2>
				<p>Website creation and hosting:</p>
				<ul>
					<li id="prices">Small(1 to 5 pages) : £150 + £5/month</li>
					<li id="prices">Medium (up to 10 pages): £250 +10£/month</li>
					<li id="prices">Large (up to 25 pages): £400 +15£/month</li>
					<li id="prices">SEO advice : £50; basics set up:£150</li>
					<li id="prices">E commerce shop : from £250 + £12.50/months</li>
				</ul>
				<p id="prices"><b><i>Maintenance pricing on demand from £5/month</i></b></p>
			</div>
			<div class="col-md-5 col-lg-4">
				<div class="rotating-testimonials testimonials"> 
					<!--"rotating-testimonials" is a required class-->
					<h5 class="short_headline"><span>Testimonials</span></h5>
					<div class="panels">
						<div id="t1">
							<blockquote>
								<p>If you require a painless process to creating a responsive website that you are proud of and that attracts more customers, I would highly recommend Netkick for their expertise, listening skills, project management, patience, affordability and professionalism.</p>
								<footer>Jenny Garrett, Executive Coach & Author</footer>
							</blockquote>
						</div>
						<!--close #t1 -->
						<div id="t2">
							<blockquote>
								<p>Since the new website was created business is really busy due to people looking on the website and finding out about the clubs. In the past I've relied mainly on paper flyers for promotion, but the new website gives me a great new marketing channel.</p>
								<footer>Sensei Dave Clarke</footer>
							</blockquote>
						</div>
						<!--close #t2 -->
						<div id="t3">
							<blockquote>
								<p>Netkick has a fantastic view of colour, shapes, artwork  & creative images. They have designed  a  new branding for the Club which has lighten up the place. They brings it to life! They are creative , talented people and great to work with.</p>
								<footer>Claire Baker, New Malden Tennis Squash & Badminton Club</footer>
							</blockquote>
						</div>
						<!--close #t3 -->
					</div>
					<!--close panels-->
					<ul class="tabs">
						<li class="tab"><a href="#t1">Jenny Garrett</a></li>
						<li class="tab"><a href="#t2">Sensei Dave Clarke</a></li>
						<li class="tab"><a href="#t3">Claire Baker</a></li>
					</ul>
				</div>
				<!--close rotating-testimonials--> 

			</div>
		</div>
	</div>


<?php get_footer(); ?>
	
