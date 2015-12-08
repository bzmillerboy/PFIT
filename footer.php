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

	<?php wp_footer(); ?>

	<!--  jQuery and Bootstrap core files    -->
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/bootstrap3/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Plugins -->
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/gsdk-checkbox.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/gsdk-morphing.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/gsdk-radio.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/gsdk-bootstrapswitch.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/bootstrap-select.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/bootstrap-datepicker.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/chartist.min.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/jquery.tagsinput.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

	<!--  Get Shit Done Kit PRO Core javascript -->
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/get-shit-done.js"></script>

	<!--  PFIT Core javascript 	 -->
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/pfit.js"></script>

</body>
</html>
