	<script>
		function validateForm()
		{
			var x=document.forms["contact-form"]["email"].value;
			var atpos=x.indexOf("@");
			var dotpos=x.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
			{
				  alert("Not a valid e-mail address");
				  return false;
			}
		
			var y=document.forms["contact-form"]["fname"].value;
			if (y==null || y=="")
			{
				  alert("Name must be filled out");
				  return false;
			}

			var z=document.forms["contact-form"]["message"].value;
			if (z==null || z=="")
			{
				  alert("Message must be filled out");
				  return false;
			}

		}

	</script>

	<!-- FOOTER -->
	<footer>
		<div class="footer" style="background-image:url('<?php echo site_url('images/footer.png'); ?>');">
			<?php if (!old_ie()) : ?>
				<div class="container" style="padding-top:10px; padding-bottom:10px">
					<div class="row">
						<h2>Contact Us</h2>
						<div class="col-sm-3 hidden-xs contact" style="text-align: center">
							<a href="mailto:info@netkick.co.uk"><span class="footer-email"</span></a>
							<p style="text-align: center"><a href="mailto:info@netkick.co.uk">info@netkick.co.uk</a></p>
						</div>
						<div class="col-sm-6">
						<form name="contact-form" action="<?php echo site_url('email/'); ?>" onsubmit="return validateForm()" method="post" id="commentform" class="contact-form">
							<div class="row">
								<input id="fname" type="text" placeholder="Name" name="fname" class="contact-input"/>
							</div>
							<div class="row">
								<input id="email" type="text" placeholder="Email" name="email" class="contact-input"/>
							</div>
							<div class="row">
								<textarea id="message" type="text" placeholder="Message" name="message" class="contact-input"></textarea>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<br><button type="submit" class="btn btn-footer">Submit</button>
								</div>
							</div>
							<input type="hidden" name="redirect_to" value='#' id="redirect_to" />
						</form>
						</div>
						<div class="col-sm-3 hidden-xs contact" style="text-align: center">
							<a href="tel:+44 7870 185 641"><span class="footer-phone"</span></a>
							<p style="text-align: center"><a href="tel:+44 7870 185 641">+44 (0)7870 185 641</a></p>
						</div>
				
						<div class="visible-xs">
							<div class="col-xs-6 contact" style="text-align: center">
							<a href="mailto:info@netkick.co.uk"><span class="footer-email"</span></a>
							</div>
							<div class="col-xs-6 contact" style="text-align: center">
							<a href="tel:+44 7870 185 641"><span class="footer-phone"</span></a>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="visible-md visible-lg" id="map-canvas"></div>

			<?php else : ?>
				<div class="container" style="padding-top:10px; padding-bottom:10px">
					<div class="row">
						<h3>Contact Us</h3>
						<div style="text-align: center">
							<p style="text-align: center"><a href="mailto:info@netkick.co.uk">info@netkick.co.uk</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="tel:+44 7870 185 641">+44 (0)7870 185 641</a></p>
							<h4>&copy; Netkick 2014. All rights reserved.</h4>
						</div>
					</div>
				</div>
			<?php endif ?>
			
			<?php if (!old_ie()) : ?>
				<div class="container" style="padding-top:10px; padding-bottom:10px">
					<div>
						<h3>Follow us on:</h3>
					</div>
						<div class="social" style="text-align:center">
							<a href="https://www.facebook.com/pages/netkick/639864966050893/" class="facebook">
								<span class="ico1"></span>
							</a>
							<a href="https://www.linkedin.com/company/5142350" class="linkedin">
								<span class="ico3"></span>
							</a>
							<a href="https://twitter.com/netkickUK" class="twitter">
								<span class="ico2"></span>
							</a>
							<a href="https://plus.google.com/101567425105599753296" class="googleplus">
								<span class="ico4"></span>
							</a>
						</div>
					<div>
						<h4>&copy; Netkick 2014. All rights reserved.</h4>
					</div>
				</div>
			<?php endif ?>
		</div>
    </footer>
	  
	<?php wp_footer(); ?>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo site_url('js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo site_url('js/placeholder.js'); ?>"></script>
	<script src="<?php echo site_url('js/custom.js'); ?>"></script>

  </body>
</html>
