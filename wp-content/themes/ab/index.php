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
	<!-- <div class="tiles"> -->
	<ul class="tiles">
		<?php while ( have_posts() ) : the_post(); ?>
		
			<li class="tile">
				<?php
					$attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order'));
					if ( ! is_array($attachments) ) continue;
					$count = count($attachments);
					$first_attachment = array_shift($attachments);
					$this_img = wp_get_attachment_image_src($first_attachment->ID, 'medium'); 
					?>

				<a class="img-link" href="<?php the_permalink(); ?>">
					<img src="<?php echo $this_img[0]; ?>"/>
					<h3><?php the_title(); ?></h3>
				</a>

				<?
				$tags = wp_get_post_tags(get_the_ID()); // store category objects for current post in an array
				$count = 0;
				foreach( $tags as $tag) {
					if($count>0){
						echo '<a class="tag" href="'.get_tag_link($tag->term_id).'">, '.$tag->name.'</a>';
					}else{
				   // if your permalinks are set to use the category's name for the URL, use:
				   echo '<a class="tag" href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>';
				  } 
				  $count++;
				}
				?>

			</li>
		
		<?php endwhile; // End the loop. Whew. ?>
	</ul>
	<!-- </div> -->
<!-- end wrapper -->
</div>

<?php get_footer(); ?>
