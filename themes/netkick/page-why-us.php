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
				<h1><span>Why Us</span></h1>
				<p>There is an increasing number of tools for you to make your own website. They can be relatively easy for you to follow and convenient if you have time to learn how they work but you may just feel a bit lonely in the process… </p>
				<p>If you want to focus on running your business or simply not keen to learn how this works, you can leave us the hard work to set up your digital presence and do the testing for you.</p>
				<p>We can also help and host your site, as well as propose a maintenance arrangement for you.</p>
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
	
