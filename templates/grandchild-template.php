<?php
/**
 * Sample Page Template
 *
 * This file is an example of how to add custom page templates.
 *
 * @package Grandchild_Theme
 */

// Default header.
get_header();

// Default loop.
if ( have_posts() ) :

	while ( have_posts() ) :

		the_post();

		the_title();

		the_content();

	endwhile;

endif;

// Default footer.
get_footer();
