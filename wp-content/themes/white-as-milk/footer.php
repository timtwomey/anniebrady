
<div class="clear"></div>
<div id="footer">
<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
	<p>
		<?php bloginfo('name'); ?> is powered by <a href="http://wordpress.org/">WordPress</a> 
		<?php echo get_num_queries(); ?> questions. <?php timer_stop(1); ?> answers. 
	</p>
</div>
</div>
		<?php wp_footer(); ?>
<!-- end wrap -->
</div>
</body>
</html>
