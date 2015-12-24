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

    <section class="hero managed-it" style="background-position:400 0 0 0">
        <div class="container">
            <h1 class="brand">
                NOBODY’S ACCOMPLISHED ANYTHING GREAT WEARING MITTENS.
            </h1>
        </div>
    </section>

    <section class="section pad-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h3>GET A VENDOR THAT FITS LIKE A GLOVE. </h3>
                    <p class="text-muted">We only serve physician practices, and we realize there’s no such thing as a one-size-fits-all solution. So when it comes to your specific IT needs, we’ve got the dexterity to craft customized solutions that truly fit. </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-perfect">
        <div class="container">
            <div class="row">
				<div class="col-sm-8 col-sm-offset-2 text-center">
					<h3 class="brand">SOLUTIONS TAILORED JUST FOR YOU.</h3>
					<p>We provide a range of engagement levels that can fill in the gaps for clients with sophisticated IT teams, or provide full day-to-day support and management for offices that need more help.</p>
                    <br>
                </div>
                <div class="col-sm-4 text-center">
                    <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <use class="Circuitboard" xlink:href="#Circuitboard" x="0" y="0" />
                    </svg>
                    <h4>Complete IT Service</h4>
                    <p class="text-muted sm">For many of our clients we serve as their complete IT team, from CIO to boots on the ground. These clients effectively “outsource” all their IT needs to our team, and we manage the rest. </p>
                </div>
                <div class="col-sm-4 text-center">
                    <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <use class="Businessman" xlink:href="#Businessman" x="0" y="0" />
                    </svg>
                    <h4>Partnership</h4>
                    <p class="text-muted sm">Already have boots on the ground? We love to work with existing internal IT departments to help where we are needed, whether that be with 24/7 desk support, IT consulting, or application performance management. </p>
                </div>
                <div class="col-sm-4 text-center">
                    <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <use class="Phonesignal" xlink:href="#Phonesignal" x="0" y="0" />
                    </svg>
                    <h4>Project-Specific Support</h4>
                    <p class="text-muted sm">Many healthcare organizations have great internal IT teams or existing vendor partnerships and tap us for extra capacity or our amazing healthcare expertise and experience on a project basis. </p>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( 'includes/sell' ); ?>

    <section class="section pad-section services-offerings offerings section-perfect">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="icon-circle">
                        <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <use class="Browsertool" xlink:href="#Browsertool" x="0" y="0" />
                        </svg>
                    </div>
                    <h2 class="text-center brand">Managed IT Offerings</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <a class="serv-off-title collapsed" href="#collapseOff1" data-toggle="collapse">
                        <h5 class="serv-off-title-text">
                            24/7 Service Desk
                            <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <use class="serv-off-arrow" xlink:href="#icon-arrow-right" x="0" y="0" />
                            </svg>
                        </h5>
                    </a>
                    <div class="collapse" id="collapseOff1">
                        <p class="serv-off-desc">Path Forward’s US-based IT support engineers are always available —day or night—every day of the year. And while the vast majority of Service Desk support can be accomplished remotely, we’re also able to dispatch friendly, capable, hands-on local support engineers who are our own employees (not contractors) as necessary.</p>
                    </div>

                    <a class="serv-off-title collapsed" href="#collapseOff2" data-toggle="collapse">
                        <h5 class="serv-off-title-text">
                            Emergency Planning
                            <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <use class="serv-off-arrow" xlink:href="#icon-arrow-right" x="0" y="0" />
                            </svg>
                        </h5>
                    </a>
                    <div class="collapse" id="collapseOff2">
                        <p class="serv-off-desc">If you aren’t familiar with the terms RTO and RPO, you should just go ahead and call us now. Disaster Recovery and Business Continuity planning don’t have to cost a fortune, and the reality is that many physician practices are not equipped to handle extended-downtime situations. Our team can create practical solutions to help you care for patients in the event of an emergency.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a class="serv-off-title collapsed" href="#collapseOff4" data-toggle="collapse">
                        <h5 class="serv-off-title-text">
                            Wireless Performance
                            <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <use class="serv-off-arrow" xlink:href="#icon-arrow-right" x="0" y="0" />
                            </svg>
                        </h5>
                    </a>
                    <div class="collapse" id="collapseOff4">
                        <p class="serv-off-desc">In healthcare, wireless performance is critical to keeping your physicians running on time. Our team of experts will evaluate and configure your environment to keep doctors and patients connected and on time.</p>
                    </div>

                    <a class="serv-off-title collapsed" href="#collapseOff5" data-toggle="collapse">
                        <h5 class="serv-off-title-text">
                            Cloud Computing
                            <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <use class="serv-off-arrow" xlink:href="#icon-arrow-right" x="0" y="0" />
                            </svg>
                        </h5>
                    </a>
                    <div class="collapse" id="collapseOff5">
                        <p class="serv-off-desc">While there’s no question that cloud computing technologies represent an undeniably positive trend in Information Technology, making partially informed decisions too soon (or too late) can be just as bad as doing nothing. Talk to us about building a plan to move your organization to the Cloud at a pace—and in a sequence—that makes sense for your business.</p>
                    </div>


                </div>

                <div class="col-sm-12 col-md-4">
                    <a class="serv-off-title collapsed" href="#collapseOff3" data-toggle="collapse">
                        <h5 class="serv-off-title-text">
                            Hardware Matchmaking
                            <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <use class="serv-off-arrow" xlink:href="#icon-arrow-right" x="0" y="0" />
                            </svg>
                        </h5>
                    </a>
                    <div class="collapse" id="collapseOff3">
                        <p class="serv-off-desc">Knowing what to purchase for your practice and when doesn't have to be like solving a puzzle. We provide unbiased recommendations based on our exclusive focus serving clients just like you. This ensures you have a clear plan on what technology investments need to be made to keep pace with your practice’s needs, and when.</p>
                    </div>
                    <a class="serv-off-title collapsed" href="#collapseOff6" data-toggle="collapse">
                        <h5 class="serv-off-title-text">
                            Telephony
                            <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <use class="serv-off-arrow" xlink:href="#icon-arrow-right" x="0" y="0" />
                            </svg>
                        </h5>
                    </a>
                    <div class="collapse" id="collapseOff6">
                        <p class="serv-off-desc">Communicating with patients efficiently is paramount. We can help our customers select and implement any telephone system and provide ongoing support and management as an embedded part of our IT services. </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    		</main><!-- #main -->
    	</div><!-- #primary -->
<?php get_footer(); ?>
