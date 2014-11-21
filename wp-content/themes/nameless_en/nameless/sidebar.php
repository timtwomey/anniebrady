
<div id="logo" onclick="location.href='http://www.anniebrady.com'">Annie Brady Studio</div>

<div class="sidetag">
	<a href="#" class="image" id="connect-rss">rss</a>
	<a href="#" class="image" id="connect-linkedin">linked in</a>
	<a href="#" class="image" id="connect-facebook">facebook</a>
	<a href="#" class="image" id="connect-email">email</a>
</div>

<div class="sidetag">
	<a href="#" class="text" id="view-categories">categories</a>
</div>
<div class="sidebar_box" id="categories-box">

<ul>
<?php wp_list_categories('title_li='); ?>
</ul>
</div>

<div class="sidetag">
	<a href="#" class="text" id="view-archives">archives</a>
</div>
<div class="sidebar_box" id="archives-box">

<ul>
<?php get_archives('monthly', '', 'html', '', '', FALSE); ?>
</ul>
</div>



<div class="sidebar_box">
You May Also Like:

</div>