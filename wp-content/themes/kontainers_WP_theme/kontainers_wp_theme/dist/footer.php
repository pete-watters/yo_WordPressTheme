<?php
/**
 * kontainers_WP_theme template for displaying the footer
 *
 * @package WordPress
 * @subpackage kontainers_WP_theme
 * @since kontainers_WP_theme 1.0
 */
?>

<?php wp_footer(); ?>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

<!-- Script for pagepiling
<script type="text/javascript" src="js/jquery.pagepiling.js"></script>
<script type="text/javascript">
   $(document).ready(function() {

       $('#pagepiling').pagepiling({
           menu: '#menu',
           anchors: ['page1', 'page2', 'page3', 'page4'],
           navigation: {
               'position': 'right',
                  'tooltips': ['Home', 'Future', 'Features', 'Test Drive'],
               'navclass': ['nav-1', 'nav-3', 'nav-3', 'nav-4']

              },
           afterRender: function(){
               $('#pp-nav').addClass('custom');
           },
           afterLoad: function(anchorLink, index){
               if(index>1){
                   $('#pp-nav').removeClass('custom');
               }else{
                   $('#pp-nav').addClass('custom');
               }
           }
       });


   });
</script> -->
<!-- Event handlers   -->
<script src="<?php echo get_template_directory_uri(); ?>/js/blog-handlers.js"></script>
</body>
</html>