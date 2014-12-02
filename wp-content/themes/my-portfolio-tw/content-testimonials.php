<?php             
    $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => 1,
        'orderby' => 'rand'
    );

    $the_query = new WP_Query( $args );

    ?>

    <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div class="testimonial col-md-10">
        <blockquote>&ldquo;<?php the_field( 'testimonial' ); ?>&rdquo;</blockquote>
        <cite>&mdash; <?php the_field( 'name' ); ?></cite>
    </div>

<?php endwhile; endif; ?>