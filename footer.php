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
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/gsdk.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/pfit.js"></script>

	<?php wp_footer(); ?>

</body>
</html>
