<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>


<form method="get" class="searchform" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" class="field" name="s" id="s" placeholder="">
	
		<input id="search-icon" type="image" name="post_type" value="<?php the_search_query(); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/inc/icons/search-icon.svg" />

	
</form>