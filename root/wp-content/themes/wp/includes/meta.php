<?php
  global $post, $pageid;
?>

<?php
/* <body class="p-<?php echo $pageid ?>"> */
if ( empty( $GLOBALS['pageid'] ) ) {
	if ( is_front_page() || is_home() ) {
		$pageid = 'top';
	} else if ( is_page() ) {
		$pageid = $post->post_name;
	} else if ( is_single() ) {
		$pageid = $post->post_type . 'detail';
	} else {
		$pageid = '';
	}
}
?>

<?php
// Always set initial value, same as TOP.
$title = " MIZUKI Responsibility to each order";
$description = "";
// Set to true on the page where the script is loaded.
$scripts = false;

if ( is_front_page() || is_home() ) {
	$title       = "MIZUKI Responsibility to each order";
	$description = "";
	$scripts     = true;
} else if ( is_page() ) {
	$title       = $post->post_title . " | MIZUKI Responsibility to each order";
	$description = "";
} else if ( is_single() ) {
	$title       = $post->post_title . " | MIZUKI Responsibility to each order";
	$description = "";
}

// meta follow $pageid
// if ( $pageid === 'news' ) {
// 	$title       = "お知らせ | ○○";
// 	$description = "";
// }
// if ( $pageid === 'news-detail' ) {
// 	$title       = esc_attr( get_the_title() ) . " | ○○";
// 	$description = "";
// }
?>
