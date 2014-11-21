<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>


<?php get_sidebar(); ?>
	<div class="main">

		<?php while ( have_posts() ) : the_post(); ?>
		
		<div class="article">
			<a href="<? the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			<? the_excerpt();	?>
			<a href="<? the_permalink(); ?>">Read More</h2></a>
		<hr/>
		</div>

		<?php endwhile; // End the loop. Whew. ?>

	</div><!-- main -->
<!-- end wrapper -->
</div>

<?php get_footer(); ?>