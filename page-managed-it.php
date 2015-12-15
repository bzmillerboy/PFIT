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

    <section class="hero managed-it">
        <div class="container">
            <h1 class="brand">
                NO ONE EVER ACCOMPLISHED ANYTHING GREAT WITH MITTENS ON.
            </h1>
            <p>There are a lot of qualified IT vendors out there, and we’re proud to be among them. So how do you pick one that’s best for your practice?</p>
        </div>
    </section>

    <section class="section pad-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h3>GET A VENDOR THAT FITS LIKE A GLOVE. </h3>
                    <p class="text-muted"> We only serve independent physician practices, and we realize there’s no such thing as a one size fits all solution. So when it comes to your specific IT needs, we’ve got the dexterity to craft customized solutions that <em>truly fit</em>. </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section pad-section sell">
        <div class="sell-cont">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 class="brand">SO, HOW ARE WE DIFFERENT?</h3>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <img class="connectors img-responsive center" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/connectors.svg" >
                    </div>
                </div>
                <div class="row">
                    <div class="sell-box" id="sell-1">
                        <div class="sell-icon">
                            <div class="icon-circle">
                                <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                                  <use class="Shakinghands" xlink:href="#Shakinghands" x="0" y="0" />
                                </svg>
                            </div>
                        </div>
                        <div class="card">
                            <div class="content">
                                <h5 class="card-title">Compassionate</h5>
                                <p class="sell-cont-text">We care about your patients like you do. Focusing only on healthcare - our team empathetically serves our clients so they can focus on patients.</p>
                            </div>
                        </div>
                    </div>
                    <div class="sell-box" id="sell-2">
                        <div class="sell-icon">
                            <div class="icon-circle">
                                <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                                  <use class="Effects" xlink:href="#Effects" x="0" y="0" />
                                </svg>
                            </div>
                        </div>
                        <div class="card">
                            <div class="content">
                                <h5 class="card-title">Comprehensive</h5>
                                <p class="sell-cont-text">Single vendor with a deep bench. We have every resources your practice could need from HL7 experts to database analysts and systems engineers. You won't need another vendor for any technology need when working with Path Forward.</p>
                            </div>
                        </div>
                    </div>
                    <div class="sell-box" id="sell-3">
                        <div class="sell-icon">
                            <div class="icon-circle">
                                <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                                  <use class="Pulley" xlink:href="#Pulley" x="0" y="0" />
                                </svg>
                            </div>
                        </div>
                        <div class="card">
                            <div class="content">
                                <h5 class="card-title">Creative</h5>
                                <p class="sell-cont-text">The answer to every IT challenge can't be to buy something, at least not in Healthcare. We tap our experience with similar organizations to bring creative solutions to our clients every day</p>
                            </div>
                        </div>
                    </div>
                    <div class="sell-box" id="sell-4">
                        <div class="sell-icon">
                            <div class="icon-circle">
                                <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                                  <use class="Heartarrow" xlink:href="#Heartarrow" x="0" y="0" />
                                </svg>
                            </div>
                        </div>
                        <div class="card">
                            <div class="content">
                                <h5 class="card-title">Charming</h5>
                                <p class="sell-cont-text">We aren't bragging here but we are the most non-"IT", IT people you will ever meet. We are fun to work with and explain things in terms you can understand. We are partners with our clients and enjoy long term relationships.</p>
                            </div>
                        </div>
                    </div>
                    <div class="sell-box" id="sell-5">
                        <div class="sell-icon">
                            <div class="icon-circle">
                                <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                                  <use class="Message" xlink:href="#Message" x="0" y="0" />
                                </svg>
                            </div>
                        </div>
                        <div class="card">
                            <div class="content">
                                <h5 class="card-title">Communication</h5>
                                <p class="sell-cont-text">It's not what you say, it's how you say it! From timely ticket updates, agenda driven weekly project updates to  emergency response notifications - you always know what is going on, without having to ask for an update.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <p class="serv-off-desc">If you aren't familiar with the terms RTO and RPO you should just go ahead and call us now. Disaster Recovery and Business Continuity planning don’t have to cost a fortune and the reality is that many physician practices are not equipped to handle extended downtime situations. Our team can create real, tangible solutions to help you care for patients in the event of an emergency. </p>
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
                        <p class="serv-off-desc">In healthcare wireless performance is critical to keeping your physicians running on time. Our team of experts will evaluate and configure your environment to keep Doctors and Patients connected and on time.</p>
                    </div>

                    <a class="serv-off-title collapsed" href="#collapseOff5" data-toggle="collapse">
                        <h5 class="serv-off-title-text">
                            Cloud
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
                        <p class="serv-off-desc">Knowing what to purchase for your practice and when doesn't have to be like solving a puzzle. We provide unbiased recommendations based on our exclusive focus serving clients just like you. This ensure you have a clear plan on what technology investments need to be made to keep pace with your practices needs and when. </p>
                    </div>
                    <a class="serv-off-title collapsed" href="#collapseOff6" data-toggle="collapse">
                        <h5 class="serv-off-title-text">
                            DTelephony
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
