<?php

/**
 * The searchform.php template.
 *
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