    <footer>
        <div class="container">
            <div class="col-md-6">
                <?php if ( dynamic_sidebar( 'footer_left' ) ): ?>

                <?php endif; ?>
            </div>
            <div class="col-md-6">
                <?php if ( dynamic_sidebar( 'footer_right' ) ): ?>

                <?php endif; ?>
            </div>
        </div>
        <div id="copyright" class="container-fluid">
            <p>&copy; Copyright <?php echo date( 'Y' ); ?> <a href="http://thomaswilson.me">Thomas Wilson</a>. All Rights Reserved.</p>
            <div class="row ss-icon">
                <i class="fa fa-facebook" href="facebook"></i>
                <i class="fa fa-twitter" href="twitter"></i>
                <i class="fa fa-envelope" href="email"></i>
            </div>
        </div>
    </footer>
    <?php wp_footer() ;?>
    </body>
</html>
