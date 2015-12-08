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

			<div class="wrapper homepage">

			    <section class="hero we">
			        <div class="container">
			            <h1 class="brand">We USE technology to remove barriers<br class="visible-lg"> between physicians and patients.</h1>
			            <p>Path forward empowers independent physician practices with technology-driven solutions that free them to focus on patient care.</p>
			            <a class="btn btn-fill btn-brand-orange cc-active" href="">Learn More</a>
									<p>test</p>
			        </div>
			    </section>

			    <section class="section pad-section">
			            <div class="container">
			                <div class="row">
			                    <div class="col-sm-12 text-center">
			                        <h3>BECAUSE PATIENTS NEED THEIR DOCTORS MORE THAN EVER.</h3>
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

			    <section class="section pad-section">
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

			    <section class="section">
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
			                        <a href="/application-services">
			                            <img class="ser-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/browser.svg" />
			                            <h3 class="ser-title">Application Services</h3>
			                            <p class="ser-desc">You own your EMR, don't let it own you</p>
			                            <p class="ser-link">Learn More</p>
			                        </a>
			                    </div>
			                    <div class="col-ser">
			                        <a href="/managed-it">
			                            <img class="ser-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/desk.svg" />
			                            <h3 class="ser-title">Managed IT</h3>
			                            <p class="ser-desc">Complete IT solutions for modern healthcare</p>
			                            <p class="ser-link">Learn More</p>
			                        </a>
			                    </div>
			                    <div class="col-ser">
			                        <a href="/patient-contact-center">
			                            <img class="ser-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/bed.svg" />
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
			    </section>

			    <section class="section pad-section">
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
			                    <a href="" class="btn btn-fill btn-brand-orange editable">View Services</a>
			                </div>
			            </div>
			        </div>
			    </section>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
