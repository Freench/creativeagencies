
<footer>
    <div id="pre-footer">
        <!-- ajout de ma nouvelle widget area -->
        <?php if ( is_active_sidebar( 'pre-footer-widgets-area-left' ) ) : ?>
            <div id="pre-footer-widgets-area-left" class="pre-footer-widgets-area-left widget-area" role="complementary">
                <?php dynamic_sidebar( 'pre-footer-widgets-area-left' ); ?>
            </div>
        <?php endif; ?>
        <!-- fin nouvelle widget area -->

        <!-- ajout de ma nouvelle widget area -->
        <?php if ( is_active_sidebar( 'pre-footer-widgets-area-right' ) ) : ?>
            <div id="pre-footer-widgets-area-right" class="pre-footer-widgets-area-right widget-area" role="complementary">
                <?php dynamic_sidebar( 'pre-footer-widgets-area-right' ); ?>
            </div>
        <?php endif; ?>
        <!-- fin nouvelle widget area -->
    </div>

     <!-- ajout de ma nouvelle widget area -->
    <?php if ( is_active_sidebar( 'footer-widgets-area' ) ) : ?>
        <div id="footer-widgets-area" class="footer-widgets-area widget-area" role="complementary">
            <?php dynamic_sidebar( 'footer-widgets-area' ); ?>
        </div>
    <?php endif; ?>
    <!-- fin nouvelle widget area -->
</footer>

</body></html>