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

    <section class="hero company" style="background-attachment:inherit;">
        <div class="container">
            <h1 class="brand">
                DEFYING CATEGORIZATION SINCE 2002.
            </h1>
        </div>
    </section>

    <section class="section pad-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h3>WE’RE PROUD OF WHAT MAKES US UNIQUE.</h3>
					<p class="text-muted">We were founded in 2002 with the specific mission of making IT work better for physician practices. We combine practical, hands-on experience—earned through our daily support of thousands of physicians’ IT needs across more than twenty specialities—with finely honed strategic and unbiased services. Our mission has expanded to using our technology, application and operational know-how to serve our clients with new, creative services.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section pad-section section-perfect">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Vision</h3>
                    <p>To empower US healthcare providers with innovative technology
                    solutions that free them to focus on patient care.</p>
                </div>
                <div class="col-sm-6">
                    <h3>Mission</h3>
                    <p>To improve our clients’ efficiency and effectiveness with unbiased
                    guidance, seamless IT systems and applications support, and an
                    unrelenting commitment to service.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section pad-section section-tight">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="brand">Why people love us</h2>
                    <br>
                    <br>
                    <div class="col-val">
                        <img class="ser-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Datawork.svg" />
                        <h3 class="ser-title">Service</h3>
                        <p class="ser-desc">We go out of our way to prioritize others’ needs.</p>
                    </div>
                    <div class="col-val">
                        <img class="ser-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Key.svg" />
                        <h3 class="ser-title">Ownership</h3>
                        <p class="ser-desc">We propose solutions, we don’t pass the buck.</p>
                    </div>
                    <div class="col-val">
                        <img class="ser-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Shakinghands.svg" />
                        <h3 class="ser-title">Respect</h3>
                        <p class="ser-desc">We treat others as we’d hope to be treated.</p>
                    </div>
                    <div class="col-val">
                        <img class="ser-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Loopheart.svg" />
                        <h3 class="ser-title">Transparency</h3>
                        <p class="ser-desc">We’re honest and forthright at all times.</p>
                    </div>
                    <div class="col-val">
                        <img class="ser-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Balance.svg" />
                        <h3 class="ser-title">Integrity</h3>
                        <p class="ser-desc">We say what we mean, and mean what we say.</p>
                    </div>
                    <div class="col-val">
                        <img class="ser-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Lovestudy.svg" />
                        <h3 class="ser-title">Empathy</h3>
                        <p class="ser-desc">We listen to others’ emotions and expectations.</p>
                    </div>
               </div>
           </div>
        </div>
    </section>

	<section class="section pad-section">
        <div class="container">
            <div class="team-presentation">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                        <h2 class="brand">Meet the team</h2>
                        <p>Our strength is our team. More than 200 strong, we serve each other, our community and our clients with an unrelenting passion. Here are a few of our key players.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <?php get_template_part( 'includes/company-profiles' ); ?>
                    </div>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'includes/maps' ); ?>

    		</main><!-- #main -->
    	</div><!-- #primary -->
<?php get_footer(); ?>
