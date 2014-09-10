<?php get_header(); ?>

<!-- Marketing messaging and featurettes    ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container marketing">
		<!-- Columns of text below the carousel -->
		<div class="row">

			<!-- Main content area -->
			<div class="col-sm-12">
				<!-- THE LOOP to fetch page content -->
				<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<h1 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<?php the_content(); ?>
				<?php endwhile; endif; ?>
				<!-- End loop -->
				
			</div><!-- /.col-lg-12 -->
			
		</div><!-- /.row -->
    </div><!-- End main content area -->

<?php get_footer(); ?>
	
