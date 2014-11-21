<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<div>
		<input type="text" value="<?php $q = get_search_query(); if($q){ echo $q; }else{ echo 'search...'; } ?>" name="s" id="s" />
		<input type="submit" id="searchsubmit" value="Search" />
	</div>
</form>