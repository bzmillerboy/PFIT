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

    <section class="hero compliance-security">
        <div class="container">
            <h1 class="brand">
                COMPLIANCE =
                <span class="x-out-container">BURDEN<img class="x-out" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/x.png" /></span> RESPONSIBILITY
            </h1>
            
        </div>
    </section>

    <section class="section pad-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h3>PROTECTING WHAT MATTERS.</h3>
                    <p class="text-muted">Maybe it's just us, but we feel like many people are looking at HIPAA compliance all wrong. It’s not simply a “burden,” it’s a responsibility. It’s a commitment to patients who trust you with their care that you will take their information, circumstances and private health matters seriously—and do your best to protect them.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section pad-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h3>21st CENTURY EXPECTATIONS</h3>
                    <p>
                        <em>...Like seatbelts in cars.</em>
                    </p>
                    <p class="text-muted">In this day and age, HIPAA compliance should be part of what you do every day—not something you do once a year. It sometimes feels like a burden because most of our competitors approach it with price gouging, fear-based sales, and complicated services with no clear endpoint. Not at Path Forward. Our practical, day-to-day guidance provides what you need to operationalize HIPAA compliance practically.</p>
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
                          <use class="papersdesk" xlink:href="#papersdesk" x="0" y="0" />
                        </svg>
                    </div>
                    <h2 class="text-center brand">Compliance &amp; Security Offerings</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <a class="serv-off-title collapsed" href="#collapseOff1" data-toggle="collapse">
                        <h4 class="serv-off-title-text">
                            HIPAA Risk Assessment & Remediation Services
                            <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <use class="serv-off-icon" xlink:href="#icon-arrow-right" x="0" y="0" />
                            </svg>
                        </h4>
                    </a>
                    <div class="collapse" id="collapseOff1">
                        <p class="serv-off-desc">Our team provides exceptional assessments at reasonable costs. Our reports are actionable and easy to understand, ensuring that you have the ability to remediate risks without a 
shepherd guide.</p>
                    </div>

                    <a class="serv-off-title collapsed" href="#collapseOff2" data-toggle="collapse">
                        <h4 class="serv-off-title-text">
                            Policies & Procedure Development
                            <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <use class="serv-off-arrow" xlink:href="#icon-arrow-right" x="0" y="0" />
                            </svg>
                        </h4>
                    </a>
                    <div class="collapse" id="collapseOff2">
                        <p class="serv-off-desc">Whether you need help improving your security program, building it from the ground up, or just establishing a realistic starting point, our experts have drafted hundreds of policies to meet the unique needs of our clients—and we can do the same for you.</p>
                    </div>

                </div>
                <div class="col-sm-12 col-md-6">
                    <a class="serv-off-title collapsed" href="#collapseOff4" data-toggle="collapse">
                        <h4 class="serv-off-title-text">
                            Threat Management
                            <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <use class="serv-off-arrow" xlink:href="#icon-arrow-right" x="0" y="0" />
                            </svg>
                        </h4>
                    </a>
                    <div class="collapse" id="collapseOff4">
                        <p class="serv-off-desc">A realistic and cost-effective Information Security program requires proactive monitoring and management of everyday vulnerabilities. Path Forward utilizes best practice recommendations, as well as an offensive and defensive approach, to keep up with a rapidly evolving security landscape. Our unique experience serving both IT and security needs keeps our clients’ security posture strong, and their mind at peace.</p>
                    </div>

                    <a class="serv-off-title collapsed" href="#collapseOff5" data-toggle="collapse">
                        <h4 class="serv-off-title-text">
                            Business Continuity & Disaster Recovery Planning
                            <svg class="icon icon-transparent" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <use class="serv-off-arrow" xlink:href="#icon-arrow-right" x="0" y="0" />
                            </svg>
                        </h4>
                    </a>
                    <div class="collapse" id="collapseOff5">
                        <p class="serv-off-desc">Preparing for setbacks, or even worst-case scenarios, often falls at the bottom of priority lists. With our results-driven, practical approach, your office can feel confident about being prepared for whatever comes its way.</p>
                        

                    </div>

                </div>
            </div>
        </div>
    </section>
    		</main><!-- #main -->
    	</div><!-- #primary -->
<?php get_footer(); ?>
