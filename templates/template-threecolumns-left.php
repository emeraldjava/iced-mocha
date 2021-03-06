<?php /*
 * Template Name: Three Columns, Sidebars on the Left
 *
 * @package Iced Mocha
 * @subpackage iced_mocha
 * @since iced_mocha 0.5
 */
get_header(); ?>

		<section id="container" class="three-columns-left">
	
			<div id="content" role="main">
				<?php espresso_theme_before_content_hook(); ?>

				<?php get_template_part( 'content/content', 'page'); ?>
				<?php espresso_theme_after_content_hook(); ?>
			</div><!-- #content -->
			<?php get_sidebar('left'); get_sidebar('right'); ?>
		</section><!-- #container -->


<?php get_footer(); ?>
