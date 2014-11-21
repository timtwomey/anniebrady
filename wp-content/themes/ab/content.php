<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<div class="content">
	<?php if ( is_single() ) : ?>
	<h3 class="entry-title"><?php the_title(); ?></h3>
	<?php else : ?>
	<h3 class="entry-title">
		<a href="<?php the_permalink(); ?>" title="<? the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
	</h3>
  <span class="date"><?php the_date('l F j, Y'); ?></span>
	<?php endif; // is_single() ?>



	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>

	<div class="entry-content">

    <div class="panel">
      <table>
        <tr>
          <td class="image">
            <img class="left" src="wp-content/themes/ab/img/placeholder.png"/>
          </td>
          <td class="links">
            <a href="#">Tag name</a><br/>
            <a href="#">Tag name</a><br/>
            <a href="#">Tag name</a><br/>
            <a href="#">Tag name</a><br/>
            <a href="#">Tag name</a><br/>
            <a href="#">Tag name</a>
          </td>
          <td class="trim"></td>
        </tr>
      </table>
    </div>

	</div><!-- .entry-content -->

	<?php endif; ?>
</div>
