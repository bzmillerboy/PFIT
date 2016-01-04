<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pfit
 */

?>

		</div><!-- #content -->

		<?php get_template_part( 'includes/footer' ); ?>

	</div><!-- #page -->

	<!--  javascript    -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/gsdk.js" type="text/javascript"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/pfit.js" type="text/javascript"></script>
	<script>
		new WOW().init();
	</script>
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37487101-1', 'auto');
  ga('send', 'pageview');

</script>

	<?php wp_footer(); ?>

</body>
</html>
