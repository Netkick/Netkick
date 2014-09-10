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
			<h1><span>Meet Our Team</span></h1>
			<div class="row col-lg-12">
				<p><b>Nicolas Cella</b></p>
				<img class="main-content-profile" src="<?php echo site_url('images/profile_nicolas.jpg'); ?>" alt="Nicolas Cella" style="float:right">
				<p>Nicolas is passionate about design. Design is his way to unleash his need to create and communicate.  He thinks of himself as a mad owl : the eyes always wide open to capture even the smallest details, to take in the nuances and embrace design in its endless forms!</p>
				<p>Nicolas has been working as creative and designer for 12 years. He’s been successful in various communication and marketing companies, which has allowed him to deliver his vivid ideas to all kind of business. He specialises in branding, web and print design, and would be delighted to share some of his success stories with you.</p>
				<p>Nicolas lives in Raynes Park. He has always been passionate about helping charities or people with social projects to communicate and reach their goals. He is the proud father of two boys, and a passionate squash player who is always ready for new challenges.</p>
			</div>

			<div class="row col-lg-12">
				<p><b>Robert Eriksson</b></p>
				<img class="main-content-profile" src="<?php echo site_url('images/profile_robert.jpg'); ?>" alt="Robert Eriksson" style="float:right">
				<p>Robert Eriksson is an IT professional with over 20 years experience working with a wide range of organisations from small social media start-ups to large blue chip companies. As a proficient IT strategist Robert helps organisations, small and large, to maximise the value they get from technology and the Internet.</p>
				<p>Starting as an Internet pioneer in the mid 90's Robert has led the design and delivery of numerous websites and Internet solutions. So not only is he able to advise businesses on how they can benefit from technology, but he is also able to manage the end-to-end project delivery at Netkick.</p>
				<p>Robert lives in Wandsworth with his wife and three children. Outside work and apart from being a devoted father Robert is a keen runner and Martial Arts practitioner. He also enjoys to engage in the local community and to take part in charity events where running the London Marathon in support of IT 4 Children in Hospital (IT4CH) is just one of many examples.</p>
			</div>
			
			<div class="row col-lg-12">
				<p><b>Laetitia Eriksson</b></p>
				<img class="main-content-profile" src="<?php echo site_url('images/profile_laetitia.jpg'); ?>" alt="Laetitia Cailleteau" style="float:right">
				<p>Laetitia is a management consultant with 15 years experience. She has been providing a wide range of solutions to very diverse clients across many industries in Europe. At Netkick, her key focus is to ensure our services stay relevant to our community.</p>
				<p>Laetitia lives in Wandsworth. She is also a mum of three, passionate about the community and making the world a better place. She is actively engaged with 2 charities. She is a mentor at "The Cherie Blair Foundation for Women" which is pioneering new ways of supporting women entrepreneurs in developing countries and "Uprising" a charity that aims to power and create opportunities for a diverse range of talented young people in the UK</p>
			</div>
		</div>
	</div>


<?php get_footer(); ?>
	
