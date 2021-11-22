
<footer>
     <!-- ajout de ma nouvelle widget area -->
 <?php if ( is_active_sidebar( 'footer-widgets-area' ) ) : ?>
 <div id="footer-widgets-area" class="footer-widgets-area widget-area" role="complementary">
 <?php dynamic_sidebar( 'footer-widgets-area' ); ?>
 </div>
 <?php endif; ?>
 <!-- fin nouvelle widget area -->
</footer>

</body></html>