        <footer>
            <div class="container">
                <div class="col-md-6">
                    <?php if ( dynamic_sidebar( 'footer_left' ) ): ?>
                    <?php else: ?>

                        <h5>Twitter</h5>
                        <p>Install the TwiGet plugin.</p>

                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <?php if ( dynamic_sidebar( 'footer_right' ) ): ?>
                    <?php else: ?>

                        <h5>Treehouse</h5>
                        <p>Install the Treehouse Badges plugin.</p>

                    <?php endif; ?>
                </div>
            </div>
            <div id="copyright" class="container-fluid">
                <p>&copy; Copyright <?php echo date( 'Y' ); ?> <a href="http://thomaswilson.me">Thomas Wilson</a>. All Rights Reserved.</p>
                <div class="row ss-icon">
                    <a href="facebook">&#xF610;</a>
                    <a href="twitter">&#xF611;</a>
                    <a href="linkedin">&#xF612;</a>
                    <a href="googleplus">&#xF613;</a>
                    <a href="email">&#x2709;</a>
                </div>
            </div>
        </footer>
    <?php wp_footer() ;?>
    </body>
</html>
