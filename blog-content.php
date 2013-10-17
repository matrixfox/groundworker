<div class="blog-content">

<!-- Display the Title as a link to the Post's permalink. -->
<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Hyperlink to <?php the_title_attribute(); ?>"><?php $test_the_title = $post->post_title; echo substr($test_the_title, 0, 64); ?></a></h2>

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