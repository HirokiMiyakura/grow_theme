<?php get_template_part( 'templates/sponcor'); ?>
<footer class="footer" role="contentinfo">
  <div>
    <div class="footer_container">
      <div class="footer_container__item">
        <h5>サービス</h5>
        <ul>
          <li><a href="<?php echo home_url(); ?>/mable"><span>></span> MABLE</a></li>
        </ul>
      </div>
      <div class="footer_container__item">
        <h5>企業情報</h5>
        <ul>
          <li><a href="<?php echo home_url(); ?>/company"><span>></span> 企業情報</a></li>
          <li><a href="<?php echo home_url(); ?>/contact"><span>></span> 弊社へのお問い合わせ</a></li>
          <li><a href="<?php echo home_url(); ?>/contact-mable"><span>></span> MABLEに関するお問い合わせ</a></li>
          <li><a href="<?php echo home_url(); ?>/system"><span>></span> 内部統制システムの構築に関して</a></li>
        </ul>
      </div>
      <div class="footer_container__item">
        <h5>お知らせ</h5>
        <ul>
          <li><a href="<?php echo home_url(); ?>/news"><span>></span> お知らせ一覧</a></li>
        </ul>
      </div>
      <div class="footer_container__item">
        <h5>SNS</h5>
        <ul>
          <li><a target="_blank" href="https://www.instagram.com/marblesports.official/"><span>></span> Instagram</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- copyright -->
  <p class="copyright">
  &copy; GROW INC.
  </p>
  <!-- /copyright -->
</footer>
<style>
#bg_image {
    height: 100vh;
    overflow: hidden;
}
.slick-prev {
    top: 50%;
    left: 2%;
    z-index: 1;
}
.slick-next {
    top: 50%;
    right: 2%;
    z-index: 1;
}
</style>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/text-animation.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
<script type="text/javascript">
$('.your-class').slick({
//   dots: true,
autoplay: true,
infinite: true,
speed: 500,
fade: true,
//   cssEase: 'linear'
});
</script>
<script>
AOS.init();
</script>
<script>
(function($) {
  var $nav   = $('#navArea');
  var $btn   = $('.toggle_btn');
  var $mask  = $('#mask');
  var open   = 'open'; // class
  // menu open close
  $btn.on( 'click', function() {
    if ( ! $nav.hasClass( open ) ) {
      $nav.addClass( open );
    } else {
      $nav.removeClass( open );
    }
  });
  // mask close
  $mask.on('click', function() {
    $nav.removeClass( open );
  });
} )(jQuery);
</script>
<?php wp_footer(); ?>
<!-- analytics -->
<script>
(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
ga('send', 'pageview');
</script>
</body>
</html>
