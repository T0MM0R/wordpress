<?php get_header() ?>
    
    <?php get_template_part("content", "featured-work") ?>

    <div id="content" class="container">
        
        <?php get_template_part("content", "featured-post") ?>
        
        <div class="row">
            
            <?php get_template_part("content", "recent-work") ?>

            <?php get_template_part("content", "recent-post") ?>

        </div>
        
        <div class="row">
            
            <?php get_template_part( 'content', 'testimonials' ) ?>
            
        </div>
        
    </div>

<?php get_footer() ?>

