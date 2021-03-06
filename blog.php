<?php /* Template Name: Blog Page 1 */ ?>
<?php get_header(); ?>
<div id="content" class="padded three fourths bounceInDown animated">

<?php $temp = $wp_query; ?>
<?php $wp_query = null; ?>
<?php $wp_query = new WP_QUERY; ?>
<?php $wp_query->query( 'posts_per_page=3&paged=' . $paged ); ?>

<?php while ( have_posts() ) : the_post() ?>
<?php get_template_part( 'entry', 'blog' ); ?>
<?php comments_template(); ?>
<hr>
<?php endwhile; ?>
<?php get_template_part( 'nav', 'below' ); ?>

<?php $wp_query = null; ?>
<?php $wp_query = $temp; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>