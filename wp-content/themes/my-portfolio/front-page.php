<?php get_header() ?>
    
    <?php get_template_part("content", "featured-work") ?>

    <div id="content" class="container">
        
        <?php get_template_part("content", "featured-post") ?>
        
        <div class="row">
            
            <div class="col-md-8 col-sm-6">
                <?php get_template_part("content", "recent-work") ?>
            </div>
            
            <div class="col-md-4 col-sm-6">
                <?php get_template_part("content", "recent-post") ?>
            </div>

        </div>
        
        <div class="row">
            
            <?php get_template_part( 'content', 'testimonials' ) ?>
            
        </div>
        
    </div>

<?php get_footer() ?>

