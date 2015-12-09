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

    <section class="hero services">
        <div class="container">
            <h1 class="brand">
                Technology, the great equalizer
            </h1>
            <p>Technology is the tool we use to level the playing field for independent practices.</p>
        </div>
    </section>

    <div class="section pad-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="brand">Services</h2>
                    <br>
                    <br>
                    <div class="col-ser">
                        <a href="/advisory">
                            <img class="ser-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/chart.svg" />
                            <h3 class="ser-title">Advisory</h3>
                            <p class="ser-desc">Expertise and Guidance for the toughest healthcare challenges</p>
                            <p class="ser-link">Learn More</p>
                        </a>
                    </div>
                    <div class="col-ser">
                        <a href="/clinical-documentation">
                            <img class="ser-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/network.svg" />
                            <h3 class="ser-title">Clinical Documentation</h3>
                            <p class="ser-desc">Traditional dictation meets discrete data</p>
                            <p class="ser-link">Learn More</p>
                        </a>
                    </div>
                    <div class="col-ser">
                        <a href="/managed-it">
                            <img class="ser-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Browsertool.svg" />
                            <h3 class="ser-title">Managed IT</h3>
                            <p class="ser-desc">Complete IT solutions for modern healthcare</p>
                            <p class="ser-link">Learn More</p>
                        </a>
                    </div>
                    <div class="col-ser">
                        <a href="/patient-contact-center">
                            <img class="ser-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/headset.svg" />
                            <h3 class="ser-title">Patient Contact Center</h3>
                            <p class="ser-desc">Revolutionizing how patients talk to their physicians</p>
                            <p class="ser-link">Learn More</p>
                        </a>
                    </div>
                    <div class="col-ser">
                        <a href="/compliance-and-security">
                            <img class="ser-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/billpaid.svg" />
                            <h3 class="ser-title">Compliance & Security</h3>
                            <p class="ser-desc">Keeping what's yours safe, secure and affordable </p>
                            <p class="ser-link">Learn More</p>
                        </a>
                    </div>
               </div>
           </div>
        </div>
    </div>


    <div class="section pad-section our-process">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/pfit-icon.svg" style="
                      width: 50px;
                      margin-bottom: -10px;
                    ">
                    <h2 class="text-center brand">Our process? Depends.</h2>
                    <p>We don’t believe in one size fits all service, turnkey solutions. We start by clearly identifying the problems you need solving, and then we’ll work together to create solutions that are the best fit for your specific needs.</p>
                    <a href="contact-us" class="btn btn-round btn-default push-top">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    		</main><!-- #main -->
    	</div><!-- #primary -->
<?php get_footer(); ?>
