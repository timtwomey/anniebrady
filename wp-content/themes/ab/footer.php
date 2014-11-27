<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

  <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script>
  <script>
    $(document).ready(function(){
      var url = window.location.href,
          i = url.indexOf('tag/'),
          tag;
      if( i > 0 ){
        tag = url.substr(i+4, url.length);
        tag = tag.substr(0, tag.length-1);
        tag = tag.replace(/\-/g, ' ');
        $('.sidebar-categories .list a').each( function(i, e){
          if(tag===$(e).text()){
            $(e).addClass('active');
            toggleSidebarCategories();
          };
        });
      }
      resize();

    });
    $(window).resize(function(){
      resize();
    });
    function resize(){
      if( $(window).width() > 880 ) { 
	if( !$("html").hasClass("lt-ie9") ) {
          $('.sidebar, .side-navigation').height($(window).height());
        }
      }else{
        $('.sidebar, .side-navigation').height('auto');
        //$('.side-navigation .block').css( 'margin-top', 0 );
      }
    }
    function toggleSidebarCategories() {

        $('.sidebar-categories').toggleClass('active');
        $('.tiles, .main').toggleClass('sidebar-active');
        $('.sidebar-categories .list').css('margin-top', ($(window).height()/2) - $('.sidebar-categories .list').height()/2 );
      
    }
    $('.menu-trigger a').click( function (){
      $('ul.links').toggleClass('active');
    });
    $('.sidebar-search').click(function(e, ui){
      $(e.target).toggleClass('active').select();
    });
    $('.sidebar-categories-toggle').click(function(e, ui){
      toggleSidebarCategories();
    });


    var banners = [
      'http://anniebrady.com/wp-content/uploads/pattern-paint-roller-floral-fan_web.jpg.jpeg',
      'http://anniebrady.com/wp-content/uploads/banner.jpg'
    ];
    var bannerCount = 1;
    var $banner = $('.index-tile-content');
    var bannerTimeout;

    function rotateBanner () {
      window.clearTimeout(bannerTimeout);

      if ( bannerCount>=banners.length ) { bannerCount = 0; }

      $banner.fadeOut(500, function () {
        $banner.css('background-image', "url('" + banners[bannerCount] + "')");
        $banner.fadeIn(500, function () {
          $('.index-tile-indicators a').removeClass('active');
          $('.index-tile-indicators li:nth-child(' + (bannerCount+1) + ') a').addClass('active');

          bannerCount++;
          bannerTimeout = setTimeout( rotateBanner, 5000 );
        });
      });
    }

    function selectBanner (e) {
      bannerCount = $(e.target).text();
      rotateBanner();
    }

    if( $banner.length > 0 ) {

      //setup buttons
      var indicators = $('<ul>');
      for (var i=0; i<banners.length; i++) {
        if(i===0) {
          indicators.append('<li><a href="#" class="active">' + i );
        } else {
          indicators.append('<li><a href="#">' + i );
        }
      }
      $('.index-tile-indicators').append(indicators);
      $('.index-tile-indicators a').on('click', selectBanner);

      bannerTimeout = setTimeout( rotateBanner, 5000 );
    } 

  </script>
	<?php 
		//wp_footer(); 
	?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44628130-1', 'anniebrady.com');
  ga('send', 'pageview');

</script>
</body>
</html>