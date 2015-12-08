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

    <section class="hero careers">
        <div class="container">
            <h1 class="brand">
                Careers <s>Jobs</s>
            </h1>
            <p>Path Forward is a team of individuals striving for something better. We believe that the strength, experiences and values of every one of our team members set us apart from other IT vendors. As we expand, so does our need for exceptionally talented employees.</p>
        </div>
    </section>

    <section class="section pad-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>WE BELIEVE</h3>
                </div>
                <div class="col-sm-12">
                    <div class="slider">
                        <div class="mask">
                            <div class="slide firstanimation">
                                <p>Wisdom comes from acknowledging mistakes quickly and never giving up.</p>
                            </div>
                            <div class="slide secondanimation">
                                <p>That people and relationships are the beginning of anything good and sustainable.</p>
                            </div>
                            <div class="slide thirdanimation">
                                <p>That our Leaders should be Servants.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section pad-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/pfit-icon.svg" style="
                      width: 50px;
                      margin-bottom: -10px;
                    " />
                    <h2 class="text-center brand">Want something better?</h2>
                    <p>If you believe what we believe we hope you will consider joining our team.</p>
                    <a href="#" class="btn btn-fill btn-brand-orange editable">View Opportunities</a>
                </div>
            </div>
        </div>
    </div>

    		</main><!-- #main -->
    	</div><!-- #primary -->
<?php get_footer(); ?>
