	<div id="sidebar">
		<div id="logo" onClick="location.href='http://www.anniebrady.com/'">Annie Brady</div>
		<div class="sidebar-content">
		
			<h4 class="h4-about" onClick="location.href='http://www.anniebrady.com/about-me/'">About Me</h4>
			<ul>
				<li><a href="http://www.anniebrady.com/about-me/">hello</a> / <a href="http://www.anniebrady.com/about-me/">cv</a> / <a href="http://www.anniebrady.com/about-me/">contact</a></li>
			</ul>
			<div class="break"></div>
			<h4 class="h4-design">Design</h4>
			<ul>
				<li><a href="http://www.anniebrady.com/commercial/">commercial</a></li>
				<li><a href="http://www.anniebrady.com/personal/">personal</a></li>
			</ul>
			<div class="break"></div>
			<h4 class="h4-blog">Blog</h4>
			<ul>
				<li><a href="http://www.anniebrady.com/blog/">Latest</a></li>
			</ul>
			<div class="break"></div>
		
		</div>
		<div class="nav-tab" id="view-tag-cloud">
			<div class="link"><a href="#">categories</a></div>
		</div>
		<div class="sidebar-content" id="tag-cloud">
			<div class="sidebar-box">
				<?php wp_tag_cloud( ); ?>
			</div>
		</div>
		<div class="gap"></div>
		<div class="nav-tab" id="view-archives">
			<div class="link"><a href="#">archives</a></div>
		</div>
		<div class="sidebar-content" id="archives">
			<div class="sidebar-box">
				<?php wp_get_archives( ); ?>
			</div>
		</div>
		<div class="gap"></div>
		<div class="sidebar-content">
			<?php get_search_form( true ); ?>
		</div>
		<div class="sidebar-content">
	
			<div class="break"></div>
			<p>You may also like:</p>
		
		</div>
		
		
	</div>

