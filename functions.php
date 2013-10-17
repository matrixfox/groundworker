<?php

function catch_everything() {
global $post, $posts;
$first_img = '';
$match = array();
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches[1][0];
if ( $first_img != '' ) {
return $first_img;
}
preg_match('#https?://www\.youtube(?:\-nocookie)?\.com/embed/([A-Za-z0-9\-_]+)#', $post->post_content, $match);
if ( $match[1] != '' ) {
return 'http://img.youtube.com/vi/'.$match[1].'/0.jpg';
}
preg_match('#(?:https?(?:a|vh?)?://)?(?:www\.)?youtube(?:\-nocookie)?\.com/watch\?.*v=([A-Za-z0-9\-_]+)#', $post->post_content, $match);
if ( $match[1] != '' ) {
return 'http://img.youtube.com/vi/'.$match[1].'/0.jpg';
}
preg_match('#http://player\.vimeo\.com/video/([0-9]+)#', $post->post_content, $match);
if ( $match[1] != '' ) {
$hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$match[1].php"));
return $hash[0]['thumbnail_large'];
}
preg_match('#(?:http://)?(?:www\.)?vimeo\.com/([A-Za-z0-9\-_]+)#', $post->post_content, $match);
if ( $match[1] != '' ) {
$hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$match[1].php"));
return $hash[0]['thumbnail_large'];
}
else {
return 'http://placehold.it/750x400/2ecc71/ffffff/&amp;text=Default+Image';
}
}





add_action('after_setup_theme', 'groundworker_setup');
function blankslate_setup()
{
load_theme_textdomain('groundworker', get_template_directory() . '/languages');
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'groundworker' ) )
);
}
add_action('wp_enqueue_scripts', 'groundworker_load_scripts');
function groundworker_load_scripts()
{
wp_enqueue_script('jquery');
}
add_action('comment_form_before', 'groundworker_enqueue_comment_reply_script');
function groundworker_enqueue_comment_reply_script()
{
if (get_option('thread_comments')) { wp_enqueue_script('comment-reply'); }
}
add_filter('the_title', 'groundworker_title');
function groundworker_title($title) {
if ($title == '') {
return '&rarr;';
} else {
return $title;
}
}
add_filter('wp_title', 'groundworker_filter_wp_title');
function groundworker_filter_wp_title($title)
{
return $title . esc_attr(get_bloginfo('name'));
}
add_action('widgets_init', 'groundworker_widgets_init');
function groundworker_widgets_init()
{
register_sidebar( array (
'name' => __('Sidebar Widget Area', 'groundworker'),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function groundworker_custom_pings($comment)
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter('get_comments_number', 'groundworker_comments_number');
function groundworker_comments_number($count)
{
if (!is_admin()) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count($comments_by_type['comment']);
} else {
return $count;
}
}