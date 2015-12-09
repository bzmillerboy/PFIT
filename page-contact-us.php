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

    <section class="hero contact-us">
        <div class="container">
            <h1 class="brand">
                Contact Us
            </h1>
            <p>We’d love to talk with you about how Path Forward can help with your IT initiatives, so you can focus on patient care. Please drop us a line and we’ll get back to you promptly.</p>
        </div>
    </section>

    <section class="section">
        <div class="map">
            <div class="container-fluid hard-right">
                <div class="row">
                    <div class="col-xs-8 col-sm-5 col-md-3 col-lg-4 arrow-container">
                        <div class="row">
                            <div class="col-sm-12 push-bottom">
                                <div class="arrow-box">
                                    <h3 class="timeline-title brand editable">Cincinnati</h3>
                                    <address>
                                        6900 Steger Dr<br>
                                        Cincinnati, OH 45237<br>
                                        (513) 924-5500
                                    </address>
                                </div>
                            </div>
                            <div class="col-sm-12 push-bottom">
                                <div class="arrow-box">
                                    <h3 class="timeline-title brand editable">Columbus</h3>
                                    <address>
                                        6900 Steger Dr<br>
                                        Cincinnati, OH 45237<br>
                                        (513) 924-5500
                                    </address>
                                </div>
                            </div>
                            <div class="col-sm-12 push-bottom">
                                <div class="arrow-box">
                                    <h3 class="timeline-title brand editable">Indianapolis</h3>
                                    <address>
                                        6900 Steger Dr<br>
                                        Cincinnati, OH 45237<br>
                                        (513) 924-5500
                                    </address>
                                </div>
                            </div>
                            <div class="col-sm-12 push-bottom">
                                <div class="arrow-box">
                                    <h3 class="timeline-title brand editable">Jacksonville</h3>
                                    <address>
                                        6900 Steger Dr<br>
                                        Cincinnati, OH 45237<br>
                                        (513) 924-5500
                                    </address>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="arrow-box">
                                    <h3 class="timeline-title brand editable">Memphis</h3>
                                    <address>
                                        6900 Steger Dr<br>
                                        Cincinnati, OH 45237<br>
                                        (513) 924-5500
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section pad-section section-perfect">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form role="form">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" id="firstname" name="firstname" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" id="lastname" name="lastname" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control input-lg" id="email" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control input-lg" id="phone" name="phone" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                <textarea class="form-control input-lg" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="button" id="submit" name="submit" class="btn btn-lg btn-primary pull-right">Submit Form</button>
                                <img class="recaptcha" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/recaptcha.png" />
                            </div>
                        </div>
                    </form>
               </div>
           </div>
        </div>
    </section>

    		</main><!-- #main -->
    	</div><!-- #primary -->
<?php get_footer(); ?>
