<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
if(is_archive() || is_search()){
get_template_part('entry','summary');
} else {
get_template_part('blog','content');
}
?>

</div> 