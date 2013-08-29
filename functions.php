<?php register_nav_menus(

	array(
			'primary' => 'Primary Navigation',
			'secondary' => 'Secondary Navigation',
		));
?>
<?php add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size( 240, 240);
add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );

function my_post_image_html( $html, $post_id, $post_image_id ) {

  $html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_post_field( 'post_title', $post_id ) ) . '">' . $html . '</a>';
  return $html;

}
?>
<?php
function add_more_buttons($buttons) {
 $buttons[] = 'hr';
 $buttons[] = 'del';
 $buttons[] = 'sub';
 $buttons[] = 'sup';
 $buttons[] = 'fontselect';
 $buttons[] = 'fontsizeselect';
 $buttons[] = 'cleanup';
 $buttons[] = 'styleselect';
 return $buttons;
}
add_filter("mce_buttons_3", "add_more_buttons");
?>
<?php
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'about',
		array(
			'labels' => array(
				'name' => __( 'About Page' ),
				'singular_name' => __( 'About Page' )
			),
		'public' => true,
		'has_archive' => true,
		)
	);
}
?>