	<!-- NAVBAR ================================================== -->
    <div class="navbar-wrapper">
        <div class="navbar navbar-default navbar-fixed-top">
          <div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
            <div class="navbar-collapse collapse" style="padding-left: 15px">
              <ul class="nav navbar-nav">
				<!-- What We Do ====================================== -->
                <li <?php if (get_field('highlighted-menu') == "Home") echo "class=active"; ?>><a href="<?php echo site_url('/home/'); ?>">Home</a></li>
				<!-- Why Us ========================================== -->
                <li <?php if (get_field('highlighted-menu') == "Why Us") echo "class=active"; ?>><a href="<?php echo site_url('/why-us/'); ?>">Why Us</a></li>
				<!-- Meet Our Team =================================== -->
                <li <?php if (get_field('highlighted-menu') == "Meet Our Team") echo "class=active"; ?>><a href="<?php echo site_url('/meet-our-team/'); ?>">Meet Our Team</a></li>
				<!-- How It Works ==================================== -->
                <li <?php if (get_field('highlighted-menu') == "How It Works") echo "class=active"; ?>><a href="<?php echo site_url('/how-it-works/'); ?>">How It Works</a></li>
				<!-- Prices ========================================== -->
                <li <?php if (get_field('highlighted-menu') == "Prices") echo "class=active"; ?>><a href="<?php echo site_url('/prices/'); ?>">Prices</a></li>
				<!-- Portfolio ======================================= -->
                <li <?php if (get_field('highlighted-menu') == "Portfolio") echo "class=active"; ?>><a href="<?php echo site_url('/portfolio/'); ?>">Portfolio</a></li>
              </ul>
  			  </div>
           </div>
        </div>
    </div>
	<!-- NAVBAR Ends ============================================= -->
