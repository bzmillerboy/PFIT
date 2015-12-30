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


    <div class="hero patient-contact" style="background-attachment:inherit;">
        <div class="container text-center">
            <h1 class="brand">
                REVOLUTIONIZING PATIENT ACCESS TO HEALTHCARE.
            </h1>
            
        </div>
    </div>

    <section class="section pad-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="flush-top">PERSONAL. COMPASSIONATE. EFFICIENT.</h3>
					<p class="text-muted">Path Forward’s Patient Contact Center leverages the same technologies, management tools and quality assurance analytics as the world’s leading consumer-facing call centers—all while reflecting the individuality of physicians and years of healthcare expertise.</p>
                </div>
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="//www.youtube.com/v/4BGF7dXgElM?color2=FBE9EC&amp;rel=0&amp;hd=1&amp;showsearch=0&amp;showinfo=0&amp;controls=0&amp;version=3&amp;modestbranding=1"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<?php get_template_part( 'includes/facts' ); ?>

    <section class="section pad-section services-offerings offerings section-perfect">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="icon-circle">
                        <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <use class="papersdesk" xlink:href="#papersdesk" x="0" y="0" />
                        </svg>
                    </div>
                    <h2 class="text-center brand">Patient Contact Center Benefits</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <a class="serv-off-title collapsed" href="#collapseOff1" data-toggle="collapse">
                        <h4 class="serv-off-title-text">
                            Seamless extension of care team.
                            <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <use class="serv-off-arrow" xlink:href="#icon-arrow-right" x="0" y="0" />
                            </svg>
                        </h4>
                    </a>
                    <div class="collapse" id="collapseOff1">
                        <p class="serv-off-desc">Whether working with an internal call center to minimize peak call times, or providing complete, turnkey patient access 24/7—agents work directly inside clients’ scheduling & EMR software.</p>
                    </div>

                    <a class="serv-off-title collapsed" href="#collapseOff2" data-toggle="collapse">
                        <h4 class="serv-off-title-text">
                            Centralized knowledge management.
                            <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <use class="serv-off-arrow" xlink:href="#icon-arrow-right" x="0" y="0" />
                            </svg>
                        </h4>
                    </a>
                    <div class="collapse" id="collapseOff2">
                        <p class="serv-off-desc">All physician information, scheduling preferences, location details and insurance plans are stored in a centralized system that’s constantly kept up-to-date—so <em>precisely</em> the right information is available to agents <em>instantly</em>.</p>
                    </div>

                    

                </div>
                <div class="col-sm-12 col-md-4">
                    <a class="serv-off-title collapsed" href="#collapseOff4" data-toggle="collapse">
                        <h4 class="serv-off-title-text">
                            Booking appointments 24/7/365.
                            <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <use class="serv-off-arrow" xlink:href="#icon-arrow-right" x="0" y="0" />
                            </svg>
                        </h4>
                    </a>
                    <div class="collapse" id="collapseOff4">
                        <p class="serv-off-desc">Having the ability to book appointments any time gives practices a competitive edge—and patients peace of mind since they don’t have to wait until traditional “office hours” to make an appointment.</p>
                    </div>

                    <a class="serv-off-title collapsed" href="#collapseOff5" data-toggle="collapse">
                        <h4 class="serv-off-title-text">
                            No more “black holes.”
                            <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <use class="serv-off-arrow" xlink:href="#icon-arrow-right" x="0" y="0" />
                            </svg>
                        </h4>
                    </a>
                    <div class="collapse" id="collapseOff5">
                        <p class="serv-off-desc">Gone are the information “black holes” typical of traditional after-hours answering services. The Patient Contact Center ensures everything is documented directly in the patient record.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a class="serv-off-title collapsed" href="#collapseOff7" data-toggle="collapse">
                        <h4 class="serv-off-title-text">
                            Pay for (only) what you need.
                            <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <use class="serv-off-arrow" xlink:href="#icon-arrow-right" x="0" y="0" />
                            </svg>
                        </h4>
                    </a>
                    <div class="collapse" id="collapseOff7">
                        <p class="serv-off-desc">We offer individualized solutions with no retainer fees. You’re only charged when we start taking calls.</p>
                    </div>
                    <a class="serv-off-title collapsed" href="#collapseOff3" data-toggle="collapse">
                        <h4 class="serv-off-title-text">
                            Proprietary guided workflow technology.
                            <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <use class="serv-off-arrow" xlink:href="#icon-arrow-right" x="0" y="0" />
                            </svg>
                        </h4>
                    </a>
                    <div class="collapse" id="collapseOff3">
                        <p class="serv-off-desc">Our proprietary system analyzes all of your practice specifics and presents the information to the agent interactively, in real time.</p>
                    </div>

                    

                </div>
            </div>
        </div>
    </section>

    		</main><!-- #main -->
    	</div><!-- #primary -->
<?php get_footer(); ?>
