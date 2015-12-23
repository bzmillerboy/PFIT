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
				<span class="x-out-container">Jobs<img class="x-out x-short" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/x.png" /></span>
                Careers
            </h1>
            
        </div>
    </section>
    
    <section class="section pad-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h3>WE’RE BETTER TOGETHER.</h3>
					<p class="text-muted">Path Forward is a team of individuals striving for something better. We believe that the strength, experiences and values of every one of our team members set us apart from other IT vendors. As we expand, so does our need for exceptionally talented employees.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section pad-section" style="background-color:#F3F6F7;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="brand">WE BELIEVE:</h>
                </div>
                <div class="col-sm-12">
                    <div class="slider">
                        <div class="mask text-muted">
                            <div class="slide firstanimation">
                                <p>Wisdom comes from acknowledging mistakes quickly and never giving up.</p>
                            </div>
                            <div class="slide secondanimation">
                                <p>That people and relationships are the beginning of anything good and sustainable.</p>
                            </div>
                            <div class="slide thirdanimation">
                                <p>That our leaders should be servants.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section pad-section section-arrows">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/pfit-icon.svg" style="
                      width: 50px;
                      margin-bottom: -10px;
                    " />
                    <h2 class="text-center brand">Want something better?</h2>
                    <p>If you believe what we believe we hope you will consider joining our team.</p>
                    <a href="https://workforcenow.adp.com/jobs/apply/posting.html?client=pathfwd&ccId=19000101_000001&type=JS&lang=en_US" target="_blank" class="btn btn-fill btn-brand-orange editable">View Opportunities</a>
                </div>
            </div>
        </div>
    </div>

    		</main><!-- #main -->
    	</div><!-- #primary -->
<?php get_footer(); ?>
