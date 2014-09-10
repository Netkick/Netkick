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
			<div class="col-lg-12">
				<h1><span>Page not found</span></h1>
				<p>It looks like nothing was found at this location.</p>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>
	
