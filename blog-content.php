<div class="blog-content">



<?php
if ( get_the_post_thumbnail($post_id) != '' ) {
echo '<a href="'; the_permalink(); echo '" class="thumbnail-wrapper">';
the_post_thumbnail();
echo '</a>';
} else {
echo '<a href="'; the_permalink(); echo '" class="thumbnail-wrapper">';
echo '<img src="';
echo catch_everything();
echo '" alt="" />';
echo '</a><br />';
}
?>

<div class="info">

<?php get_template_part( 'entry', 'meta' ); ?>


<?php the_excerpt(); ?>

<?php 
if ( is_single() ) {
get_template_part( 'entry-footer', 'single' ); 
} else {
get_template_part( 'entry-footer' ); 
}
?>

</div><!-- END INFO -->

</div>