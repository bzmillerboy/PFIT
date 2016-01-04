<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pfit
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="wrapper">

			    <section class="hero homepage" style="background-attachment:inherit; background-image:<?php bloginfo( 'template_directory' ); ?>/assets/images/homepage-hero-bg.jpg;">
			        <div class="container">
			            <h1 class="brand">We USE technology to remove barriers<br class="visible-lg"> between physicians and patients.</h1>
			            <br />
                        <a class="btn btn-fill btn-brand-orange cc-active" href="/services">Learn More</a>
			        </div>
			    </section>

					<section class="section pad-section">
			        <div class="container">
			            <div class="row">
			                <div class="col-md-6">
			                    <h3>PATIENTS NEED THEIR DOCTORS MORE THAN EVER.</h3>
									<p class="text-muted">From healthcare reform to new compensation models, the only constant in healthcare is change. That’s why physician practices around the country rely on Path Forward for technology-driven solutions that free them to focus on patient care.</p>
			                </div>
			                <div class="col-md-6">
			                    <div class="embed-responsive embed-responsive-16by9">
														<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/lrH1fM2bROU?color2=FBE9EC&amp;rel=0&amp;hd=1&amp;showsearch=0&amp;showinfo=0&amp;controls=0&amp;version=3&amp;modestbranding=1" frameborder="0" allowfullscreen></iframe>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </section>

			    <section class="hero unity">
			        <div class="container">
			            <div class="row">
			                <div class="col-sm-6">
			                    <h2 class="brand">BE STRONGER, TOGETHER.</h2>
			                    <p>We’ve worked alongside thousands of providers around the country, and have learned that when it comes to today’s healthcare challenges, physician practices are more alike than they are different. That’s why we share innovation, best practices and lessons-learned for solutions that are just better.</p>
			                </div>
			            </div>
			        </div>
			    </section>

			    <section class="section pad-section section-perfect">
			        <div class="id-row">
			            <div class="container-fluid">
			                <div class="row">
			                    <div class="col-md-6 col-md-offset-4 col-sm-8 col-sm-offset-2 id-content">
			                        <div class="row id-title">
			                            <div class="col-xs-6 col-xs-offset-3 col-sm-12 col-sm-offset-0 id-content-small">
			                               <h2><span class="brand">WE GET IT.</span></h2>
			                            </div>
			                        </div>
			                       <p class="id-text">Physician practices face unprecedented challenges, from regulatory and security pressures to simply getting home at a reasonable hour without their EHR slowing them down. We understand that technology has to work harder than ever to “do more with less.” Path Forward provides value-added services that help doctors do what they do best: serve their patients.</p>
			                   </div>
			               </div>
			           </div>
			        </div>
			    </section>

					<?php get_template_part( 'includes/services' ); ?>

			    <section class="section pad-section section-arrows">
			        <div class="container-fluid">
			            <div class="row">
			                <div class="col-sm-8 col-sm-offset-2 text-center">
			                    <img class="center icon icon-transparent" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/pfit-icon.svg" >
			                    <h2 class="text-center brand">Want to learn more?</h2>
			                    <p class="text-left">Please explore our site, and know that we’re always happy to schedule a brief call or travel to you to explain more about what we do. We’d love to get to know you and talk about how we’ve empowered other practices who might have been in a similar situation.</p>
			                    <p class="text-left">Oh, and by the way, we don't employ salespeople (not that we have a problem with sales). We’ve always grown by referral, so you can rest assured we won't harass you after our first introduction.</p>
			                    <br />
                                <a href="/services" class="btn btn-fill btn-brand-orange editable">Services Overview</a>
			                </div>
			            </div>
			        </div>
			    </section>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
