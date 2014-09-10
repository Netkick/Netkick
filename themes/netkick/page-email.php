<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'mailgun-php-1.7/vendor/autoload.php';
use Mailgun\Mailgun;
?>

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
				<h1><span>Message Sent</span></h1>
				<p>Thanks for contacting Netkick. We will soon get in touch with regards to your enquiry.</p>
			</div>
		</div>
	</div>
	
	<?php
		# Instantiate the client.
		$mgClient = new Mailgun('key-4rkprviug65-dacvutxuvzn-gpv7sxq9');
		$domain = "netkick.co.uk";

		$fname = $_POST["fname"];
		$email = $_POST["email"];
		$message = $_POST["message"];

		# Make the call to the client.
		$result = $mgClient->sendMessage("$domain",
			array('from'    => $fname.' <'.$email.'>',
				'to'      => 'Robert <robert1974@gmail.com>',
				'subject' => 'Netkick message from '.$fname,
				'text'    => $message));
	?>

<?php get_footer(); ?>
	
