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

			    <section class="hero homepage">
			        <div class="container">
			            <h1 class="brand">We USE technology to remove barriers<br class="visible-lg"> between physicians and patients.</h1>
			            <p>Path forward empowers independent physician practices with technology-driven solutions that free them to focus on patient care.</p>
			            <a class="btn btn-fill btn-brand-orange cc-active" href="/services">Learn More</a>
			        </div>
			    </section>

					<section class="section pad-section">
			        <div class="container">
			            <div class="row">
			                <div class="col-md-6">
			                    <h3>BECAUSE PATIENTS NEED THEIR DOCTORS MORE THAN EVER.</h3>
													<p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
			                </div>
			                <div class="col-md-6">
			                    <div class="embed-responsive embed-responsive-16by9">
			                        <iframe class="embed-responsive-item" src="//www.youtube.com/v/gJot_8dm3fY?color2=FBE9EC&amp;rel=0&amp;hd=1&amp;showsearch=0&amp;showinfo=0&amp;controls=0&amp;version=3&amp;modestbranding=1"></iframe>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </section>

			    <section class="hero unity">
			        <div class="container">
			            <div class="row">
			                <div class="col-sm-6">
			                    <h2 class="brand">BE STRONGER, TOGETHER</h2>
			                    <p>We’ve worked alongside thousands of providers around the country, and have learned a thing or two along the way. When it comes to today’s healthcare challenges, independent physicians practices are more alike than they are different. We believe in sharing innovation, best practices and lessons-learned for solutions that are just better.</p>
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
			                               <h2><span class="italic">Put simply,</span> <span class="brand">WE GET IT</span></h2>
			                            </div>
			                        </div>
			                       <p class="id-text">Independent physician offices face unprecedented challenges, from regulatory and security pressures, to greater competition from mammoth hospital systems, to just getting home at a reasonable time with EHR frustrations slowing you down. We get that technology has to work harder than ever so that you can “do more with less”. Path Forward provides value-added services that helps doctors do what they do best: serve their patients.</p>
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
			                    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/pfit-icon.svg" style="
			                      width: 50px;
			                      margin-bottom: -10px;
			                    " />
			                    <h2 class="text-center brand">Want to learn more?</h2>
			                    <p class="text-left">Our services are unique and complex - please explore our site. The BEST way to understand what we do is to let us explain it to you. Don’t worry, we are friendly - we love to travel and visit new friends, or we are happy to setup a phone call or web meeting to explain more about what we do.</p>
			                    <p class="text-left">Oh and by the way, we don't employ any sales people (not that we have a problem with sales) we grow by referral so we won't harass you after our first introduction.</p>
			                    <a href="" class="btn btn-fill btn-brand-orange editable">Services Overview</a>
			                </div>
			            </div>
			        </div>
			    </section>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
