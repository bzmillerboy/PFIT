<ul class="company-photos">

    <?php
    // the query
    $the_query = new WP_Query( array( 'post_type' => 'profile', 'posts_per_page' => 999, 'orderby' => 'rand', ) );
     ?>

    <?php if ( $the_query->have_posts() ) : ?>
    	<!-- the loop -->
    	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <li>
          <div class="photo">
            <?php echo types_render_field("image", array()); ?>
            <div class="overlay">
              <h4 class="photo-title"><?php echo types_render_field( "full-name", array( ) ); ?></h4>
              <p class="photo-position"><?php echo types_render_field( "position", array( ) ); ?></p>
            </div>
          </div>
        </li>

    	<?php endwhile; ?>
    	<!-- end of the loop -->
    	<?php wp_reset_postdata(); ?>
    <?php endif; ?>

</ul>
