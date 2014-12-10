 <div class="row">
  <div class="sidebar"></div>
  <div class="side-navigation">
    <div class="block">
      <a href="/collections"><div class="logo">Annie Brady</div></a>
      <ul class="links">
        <li><a href="/collections">Collections</a></li>
        <li><a href="/portfolio">Portfolio</a></li>
        <li><a href="/about">About Me</a></li>
        <li><a href="/contact">Connect</a></li>
        <li class="menu-trigger"><a href="#">Menu</a></li>
      </ul>
      <div class="hide-for-small">
        <h4 class="sidebar-categories-toggle">Categories</h4>

        <form action="/">
          <input name="s" type="text" class="sidebar-search" value="Search"/>
        </form>

        <ul class="connect">
          <li><a href="<?php bloginfo('rss2_url'); ?>" class="icon-rss">RSS</a></li>
          <li><a href="https://twitter.com/_anniebrady" class="icon-twitter">Twitter</a></li>
          <!-- <li><a href="#" class="icon-facebook">Facebook</a></li> -->
          <li><a href="mailto:hello@anniebrady.com" class="icon-email">Email</a></li>
        </ul>
      </div>
    </div>
    <div class="sidebar-categories hide-for-small">
      <div class="list">
        <?php wp_tag_cloud('smallest=10&largest=10&number=10&orderby=count'); ?>
      </div>
    </div>
  </div>