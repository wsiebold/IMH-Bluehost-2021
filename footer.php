<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
		<footer id="footer" class="source-org vcard copyright" role="contentinfo">
      <section class="footer-container-grid">
      <div class="footer-container-1">
        <img src="https://influencemusichall.org/wp-content/uploads/2021/05/influence-logo.png" alt="IMH Logo" />
        <p>(503) 701-6859</p>
        <p>TeamIMHaudio@gmail.com</p>
      </div>
      <div class="footer-container-2">
			<p style="font-size: 1em; color: #fff; text-align: center;">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></p>
      <?php if(is_user_logged_in()) { ?>
      <p style="font-size: 1em; color: #666; text-align: center;"><a style="color: #666;" href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a></p>
      <?php } else { ?>
      <p style="font-size: 1em; color: #666; text-align: center;"><a style="color: #666;" href="<?php echo wp_login_url(); ?>">Login</a></p>
      <?php } ?>
      </div>
      </section>
		</footer>

	</div>

	<?php wp_footer(); ?>


<!-- jQuery is called via the WordPress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
         Replace UA-XXXXXX-XX with your site's ID and domainname.com with your domain, then uncomment to enable.

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-XXXXXX-XX', 'domainname.com');
  ga('send', 'pageview');

</script>
-->

</body>

</html>
