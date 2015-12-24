<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pfit
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<div class="wrapper">

    <section class="hero services" style="background-attachment:inherit;">
        <div class="container">
            <h1 class="brand">
                Technology, the great equalizer.
            </h1>
        </div>
    </section>

	<?php get_template_part( 'includes/services' ); ?>

    <section class="section pad-section our-process section-arrows">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/pfit-icon.svg" style="
                      width: 50px;
                      margin-bottom: -10px;
                    ">
                    <h2 class="text-center brand">Our process? Depends.</h2>
                    <p>We don’t believe in one-size-fits-all solutions. We begin by clearly identifying the problems you need to solve, then work together to create solutions that fit your specific needs.</p>
                    <a href="/contact-us" class="btn btn-round btn-default push-top">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    		</main><!-- #main -->
    	</div><!-- #primary -->
<?php get_footer(); ?>
