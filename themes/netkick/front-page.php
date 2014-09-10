<?php get_header(); ?>

<?php get_template_part('inc-logo-bar'); ?>
<?php get_template_part('inc-nav-bar'); ?>
<?php
	if (!old_ie()) :
		get_template_part('inc-carousel-home');
	else : ?>
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
<?php endif ?>

<!-- Marketing messaging and featurettes    ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. Compensate 48px for logo bar -->
	<div class="container" style="padding-top: 8px">
		<div class="row main-content">
			<div class="col-md-7 col-lg-8">
				<h1><span>About Netkick</span></h1>
				<p>We are passionate about small local businesses! They provide great specialised services and know-how at our door steps. Unfortunately they often struggle. People can't easily find them, or simply don't understand what they do.</p>
				<p>We want to help increase their chances of success. We can do this by improving their Internet presence allowing them to reach more potential customers, leaving them to focus more on what they do best, serving their customers!</p>

				<h2><span>What We Do</span></h2>
				<p>We help South West London self employed and small businesses to:</p>
				<ul>
					<li>Modernise their Internet presence at an <b>affordable price</b></i>
					<li>Increase their visibility on the Internet</li>
					<li>Enable mobile users</li>
					<li>Improve their digital image and communication</li>
					<li>Have a local team always available to support</li>
				</ul>
				<p>You will get:</p>
				<ul>
					<li>A ready to use website that we build together with you</li>
					<li>A flexible solution where you can make updates independently or rely on our team</li>
					<li>A local and experienced team always there to provide support</li>
				</ul>
						
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
								<p>Netkick– has a fantastic view of colour, shapes, artwork  & creative images. They have designed  a  new branding for the Club which has lighten up the place. They brings it to life! They are creative , talented people and great to work with.</p>
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
	
