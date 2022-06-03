<?php
/*
 * Template Name: Stuck Header (white)
**/

include( get_template_directory() . '/header_stuck.php');

?>

	<div id="primary" class="content-area col-md-12">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php

					if ( comments_open() || '0' != get_comments_number() ) :

						comments_template();

					endif;
				?>

			<?php endwhile; // end of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
  include( get_template_directory() . '/footer_stuck.php');
?>

