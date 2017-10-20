<?php
/**
 * The template for displaying the sites front page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wholegrain_Australia
 */

get_header(); ?>

<h1>Front Page ?????</h1>
<div class="row column">
	<?php
	

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile;
			// End of the loop.
			?>

	</div>

<?php

get_footer();
