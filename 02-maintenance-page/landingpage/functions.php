<?php
// Enqueues style.css on the front.
if ( ! function_exists( 'landingpage_enqueue_styles' ) ) :
	function landingpage_enqueue_styles() {
		wp_enqueue_style(
			'landingpage-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'landingpage_enqueue_styles' );
if ( ! function_exists( 'landingpage_set_icon' ) ) :
	function landingpage_set_icon() {
		?>
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="icon" href="https://yoursite/favicon.ico" sizes="80x80" />
<link rel="apple-touch-icon" href="https://yoursite/favicon.ico" />
		<?php
	}
endif;
add_action('wp_head', 'landingpage_set_icon');
?>