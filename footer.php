</div>

    <!-- Modernizr -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/modernizr-2.6.2.min.js"></script>
    <!-- jQuery-->
    <script src="../../js/jquery.js"></script>
    <!--<script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js' type='text/javascript'></script>-->
    <!-- javascript-->
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/groundwork.all.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/script.js"></script>

<footer id="footer" role="contentinfo">
<div id="copyright">
<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date('Y'), esc_html(get_bloginfo('name')) ); echo sprintf( __( ' Theme By: %1$s.', 'blankslate' ), '<a href="http://tidythemes.com/">TidyThemes</a>' ); ?>
</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>