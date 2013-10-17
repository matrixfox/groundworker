<?php get_header(); ?>
<section id="content" class="padded one bounceInDown animated" role="main">
<header class="header">
<h1 class="entry-title"><?php 
if ( is_day() ) { printf( __( 'Daily Archives: %s', 'groundworker' ), get_the_time(get_option('date_format') ) ); }
elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'groundworker' ), get_the_time('F Y') ); }
elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'groundworker' ), get_the_time('Y') ); }
else { _e( 'Archives', 'groundworker' ); }
?></h1>
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part('entry'); ?>
<?php endwhile; endif; ?>
<?php get_template_part('nav', 'below'); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>