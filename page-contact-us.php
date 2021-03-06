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

    <section class="hero contact-us" style="background-attachment:inherit;">
        <div class="container">
            <h1 class="brand">
                Contact Us
            </h1>
        </div>
    </section>

    <section class="section pad-section section-perfect" style="background-color:#F3F6F7;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                	<h3>LET’S TALK.</h3>
                    <p>We’d love to talk with you about how Path Forward can help with your IT initiatives, so you can focus on patient care. Please drop us a line and we’ll get back to you promptly.</p>
                </div>
                <div class="col-sm-6">

                    <h3>513.924.5500</h3>
                    <h3>info@pathforward.us</h3>
                </div>
            </div>
        </div>
    </section>

    <!--section class="section section-perfect">
        <div class="contact-row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-2 col-md-5 contact-bg">
                        <div class="contacts-title pull-right visible-xs visible-md visible-lg">
                            <h3 class="brand">Contacts</h3>
                            <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <use class="Send" xlink:href="#Send" x="0" y="0" />
                            </svg>
                        </div>
                   </div>
                    <div class="col-sm-10 col-md-7">
                        <div class="row contact-title">
                            <div class="col-sm-4">
                                <img class="img-responsive hidden-xs" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/street-view.jpg" alt="Path Forward IT Street View">
                            </div>
                            <div class="col-sm-8 col-sm-offset-0 contact-content-small">
                               <h3>513.924.5500</h3>
                               <h3>info@pathforwardit.com</h3>
                            </div>
                        </div>
                   </div>
               </div>
           </div>
        </div>
    </section-->

    <?php get_template_part( 'includes/maps' ); ?>

    <section class="section pad-section section-perfect">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <?php echo do_shortcode( '[contact-form-7 id="106" title="Contact Us"]' ); ?>
                    </div>
               </div>
           </div>
        </div>
    </section>

    		</main><!-- #main -->
    	</div><!-- #primary -->
<?php get_footer(); ?>
