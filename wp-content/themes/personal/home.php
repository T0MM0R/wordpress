<?php get_header();?>


<div class="container">

    <div class="recent-posts">
        <div class="page-header">
            <h2>Recent Posts <small>Read about my thoughts on technology, cycling, family, and the church.</small></h2>
        </div>
        
        <?php get_template_part('content', 'thumbnail-posts'); ?>
        
    </div>
        
</div>

<?php get_footer();?>