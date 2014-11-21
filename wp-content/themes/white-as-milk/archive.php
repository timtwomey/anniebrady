<?php get_header(); ?>
<?php get_sidebar(); ?>

	<div id="content" class="narrowcolumn">

		<?php if (have_posts()) : ?>
<!--
 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h1><?php single_cat_title(); ?></h1>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h1>Archive for <?php the_time('F, Y'); ?></h1>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h1>Archive for <?php the_time('Y'); ?></h1>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h1>Author Archive</h1>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1>Blog Archives</h1>
 	  <?php } ?>-->


	

		<?php while (have_posts()) : the_post(); ?>
		<div class="post">
				<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<small>By <?php the_author(); echo " on "; the_time('l, F jS, Y') ?></small>

				<div class="entry">
					<?php the_content() ?>
				</div>

        <p class="postmetadata">Posted in <?php the_category(', ') ?> | <?php the_tags('Tags: ', ', ', '&nbsp;| '); ?> <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>

			</div>

		<?php endwhile; ?>

		
			<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
		

	<?php else : ?>

		<h1 class="center">Not Found</h1>
		<p>Maybe you'd like to have a search for some other goodies:</p>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>


<?php get_footer(); ?>
