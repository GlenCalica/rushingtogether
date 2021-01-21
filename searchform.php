<?php

/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
?>

<div class="search">
	<form class="search-form" method="get" action="<?php echo home_url(); ?>">
		<input type="text" name="s" placeholder="Search . . .">
		<button type="submit" value="submit" class="btn-search">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-search.svg" alt="Search Icon">
		</button>
	</form>
</div>