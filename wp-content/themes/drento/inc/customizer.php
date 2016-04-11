<?php
/**
 * drento Theme Customizer.
 *
 * @package drento
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function drento_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'drento_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function drento_customize_preview_js() {
	wp_enqueue_script( 'drento_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'drento_customize_preview_js' );

/*
Enqueue Script for top buttons
*/
if ( ! function_exists( 'drento_customizer_controls' ) ){
	function drento_customizer_controls(){

		wp_register_script( 'drento_customizer_top_buttons', get_template_directory_uri() . '/js/theme-customizer-top-buttons.js', array( 'jquery' ), true  );
		wp_enqueue_script( 'drento_customizer_top_buttons' );

		wp_localize_script( 'drento_customizer_top_buttons', 'customBtns', array(
			'prodemo' => esc_html__( 'Demo PRO version', 'drento' ),
            'proget' => esc_html__( 'Get PRO Version', 'drento' )
		) );
	}
}//end if function_exists
add_action( 'customize_controls_enqueue_scripts', 'drento_customizer_controls' );

 /**
 * Register Custom Settings
 */
function drento_custom_settings_register( $wp_customize ) {
	
	/*
	Start Drento Colors
	=====================================================
	*/
	
	$colors = array();
	
	$colors[] = array(
	'slug'=>'drento_box_background_color', 
	'default' => '#ededed',
	'label' => __('Borders, Sidebar and separator color', 'drento')
	);
	
	$colors[] = array(
	'slug'=>'drento_box_text_color', 
	'default' => '#404040',
	'label' => __('Text Color', 'drento')
	);
	
	$colors[] = array(
	'slug'=>'drento_box_second_text_color', 
	'default' => '#b9b9b9',
	'label' => __('Secondary Text Color', 'drento')
	);
	
	$colors[] = array(
	'slug'=>'drento_special_color', 
	'default' => '#e2ae69',
	'label' => __('Special Color', 'drento')
	);
	
	foreach( $colors as $drento_theme_options ) {
		// SETTINGS
		$wp_customize->add_setting( 'drento_theme_options[' . $drento_theme_options['slug'] . ']', array(
			'default' => $drento_theme_options['default'],
			'type' => 'option', 
			'sanitize_callback' => 'sanitize_hex_color',
			'capability' => 'edit_theme_options'
		)
		);
		// CONTROLS
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				$drento_theme_options['slug'], 
				array('label' => $drento_theme_options['label'], 
				'section' => 'colors',
				'settings' =>'drento_theme_options[' . $drento_theme_options['slug'] . ']',
				)
			)
		);
	}

	/*
	Start Drento Options
	=====================================================
	*/
	$wp_customize->add_section( 'cresta_drento_options', array(
	     'title'    => esc_attr__( 'Drento Theme Options', 'drento' ),
	     'priority' => 50,
	) );
	/*
	Social Icons
	=====================================================
	*/
	$socialmedia = array();
	
	$socialmedia[] = array(
	'slug'=>'facebookurl', 
	'default' => '#',
	'label' => __('Facebook URL', 'drento')
	);
	$socialmedia[] = array(
	'slug'=>'twitterurl', 
	'default' => '#',
	'label' => __('Twitter URL', 'drento')
	);
	$socialmedia[] = array(
	'slug'=>'googleplusurl', 
	'default' => '#',
	'label' => __('Google Plus URL', 'drento')
	);
	$socialmedia[] = array(
	'slug'=>'linkedinurl', 
	'default' => '#',
	'label' => __('Linkedin URL', 'drento')
	);
	$socialmedia[] = array(
	'slug'=>'instagramurl', 
	'default' => '#',
	'label' => __('Instagram URL', 'drento')
	);
	$socialmedia[] = array(
	'slug'=>'youtubeurl', 
	'default' => '#',
	'label' => __('YouTube URL', 'drento')
	);
	$socialmedia[] = array(
	'slug'=>'pinteresturl', 
	'default' => '#',
	'label' => __('Pinterest URL', 'drento')
	);
	$socialmedia[] = array(
	'slug'=>'tumblrurl', 
	'default' => '#',
	'label' => __('Tumblr URL', 'drento')
	);
	$socialmedia[] = array(
	'slug'=>'vkurl', 
	'default' => '#',
	'label' => __('VK URL', 'drento')
	);
	
	foreach( $socialmedia as $drento_theme_options ) {
		// SETTINGS
		$wp_customize->add_setting(
			'drento_theme_options_' . $drento_theme_options['slug'], array(
				'default' => $drento_theme_options['default'],
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
				'type'     => 'theme_mod',
			)
		);
		// CONTROLS
		$wp_customize->add_control(
			$drento_theme_options['slug'], 
			array('label' => $drento_theme_options['label'], 
			'section'    => 'cresta_drento_options',
			'settings' =>'drento_theme_options_' . $drento_theme_options['slug'],
			)
		);
	}
	
	/*
	Opacity on header
	=====================================================
	*/
	$wp_customize->add_setting('drento_theme_options_showsocial', array(
        'default'    => '1',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'drento_sanitize_checkbox'
    ) );
	
	$wp_customize->add_control('drento_theme_options_showsocial', array(
        'label'      => __( 'Show Social Buttons', 'drento' ),
        'section'    => 'cresta_drento_options',
        'settings'   => 'drento_theme_options_showsocial',
        'type'       => 'checkbox',
    ) );
	
	/*
	Search Button
	=====================================================
	*/
	$wp_customize->add_setting('drento_theme_options_hidesearch', array(
        'default'    => '1',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'drento_sanitize_checkbox'
    ) );
	
	$wp_customize->add_control('drento_theme_options_hidesearch', array(
        'label'      => __( 'Show Search Button', 'drento' ),
        'section'    => 'cresta_drento_options',
        'settings'   => 'drento_theme_options_hidesearch',
        'type'       => 'checkbox',
    ) );
	
}
add_action( 'customize_register', 'drento_custom_settings_register' );

function drento_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}

/**
 * Add Custom CSS to Header 
 */
function drento_custom_css_styles() {
	global $drento_theme_options;
	$se_options = get_option( 'drento_theme_options', $drento_theme_options );
	if( isset( $se_options[ 'drento_box_background_color' ] ) ) {
		$drento_box_background_color = $se_options['drento_box_background_color'];
	}
	if( isset( $se_options[ 'drento_box_text_color' ] ) ) {
		$drento_box_text_color = $se_options['drento_box_text_color'];
	}
	if( isset( $se_options[ 'drento_box_second_text_color' ] ) ) {
		$drento_box_second_text_color = $se_options['drento_box_second_text_color'];
	}
	if( isset( $se_options[ 'drento_special_color' ] ) ) {
		$drento_special_color = $se_options['drento_special_color'];
	}
	?>
	<style type="text/css">
		<?php if (!empty($drento_special_color) ) : ?>
			blockquote::before,
			a,
			a:visited,
			.main-navigation div ul li.current-menu-item > a, 
			.main-navigation div ul li.current-menu-parent > a, 
			.main-navigation div ul li.current-page-ancestor > a,
			.main-navigation div .current_page_item > a, 
			.main-navigation div .current_page_parent > a,
			.main-navigation div ul li:hover > a, 
			.main-navigation div ul li.focus > a,
			.entry-meta i,
			.drentoSearch.search-open,
			.drentoSocial.social-open {
				color: <?php echo esc_attr($drento_special_color); ?>;
			}
			.post-navigation a .post-title,
			#wp-calendar > caption,
			.drentoContentBox .entry-featuredImg,
			.main-sidebar-box.sidebar-open span:before,
			.main-sidebar-box.sidebar-open span:after,
			.drentoSpace {
				background: <?php echo esc_attr($drento_special_color); ?>;
			}
			blockquote {
				border-left: 4px solid <?php echo esc_attr($drento_special_color); ?>;
				border-right: 1px solid <?php echo esc_attr($drento_special_color); ?>;
			}
			input[type="text"]:focus,
			input[type="email"]:focus,
			input[type="url"]:focus,
			input[type="password"]:focus,
			input[type="search"]:focus,
			input[type="number"]:focus,
			input[type="tel"]:focus,
			input[type="range"]:focus,
			input[type="date"]:focus,
			input[type="month"]:focus,
			input[type="week"]:focus,
			input[type="time"]:focus,
			input[type="datetime"]:focus,
			input[type="datetime-local"]:focus,
			input[type="color"]:focus,
			textarea:focus {
				border: 3px solid <?php echo esc_attr($drento_special_color); ?>;
			}
			.post-navigation .nav-next {
				border-left: 3px solid <?php echo esc_attr($drento_special_color); ?>;
			}
			#wp-calendar tbody td#today {
				border: 1px solid <?php echo esc_attr($drento_special_color); ?>;
			}
			.site-branding .site-description,
			.comment-notes {
				border-top: 3px solid <?php echo esc_attr($drento_special_color); ?>;
			}
			h3.widget-title {
				border-bottom: 3px solid <?php echo esc_attr($drento_special_color); ?>;
			}
		<?php endif; ?>
		<?php if (!empty($drento_box_background_color) ) : ?>
			button:hover,
			input[type="button"]:hover,
			input[type="reset"]:hover,
			input[type="submit"]:hover,
			button:focus,
			input[type="button"]:focus,
			input[type="reset"]:focus,
			input[type="submit"]:focus,
			button:active,
			input[type="button"]:active,
			input[type="reset"]:active,
			input[type="submit"]:active,
			.post-navigation a .post-title,
			#wp-calendar > caption ,
			.tagcloud a:hover,
			.cat-links a:hover,
			.read-more:hover,
			.posts-navigation .nav-previous a:hover,
			.posts-navigation .nav-next a:hover,
			.site-main .navigation.pagination a:hover,
			.comment-navigation .nav-previous a:hover,
			.comment-navigation .nav-next a:hover,
			.read-more:hover a {
				color: <?php echo esc_attr($drento_box_background_color); ?>;
			}
			input[type="text"],
			input[type="email"],
			input[type="url"],
			input[type="password"],
			input[type="search"],
			input[type="number"],
			input[type="tel"],
			input[type="range"],
			input[type="date"],
			input[type="month"],
			input[type="week"],
			input[type="time"],
			input[type="datetime"],
			input[type="datetime-local"],
			input[type="color"],
			textarea,
			.main-navigation ul ul a,
			.post-navigation a:before,
			.post-navigation .meta-nav,
			.border-fixed,
			.drentoColor.drentoPrevNext,
			.drentoDiv,
			.drentoDiv:before,
			.drentoDiv:after,
			header.page-header,
			.tags-links a,
			.tags-links a:after,
			.socialLine a,
			.drentoSearchFull,
			.page-links > a,
			.wp-caption .wp-caption-text,
			.nano > .nano-content,
			hr {
				background: <?php echo esc_attr($drento_box_background_color); ?>;
			}
			.main-navigation {
				border-top: 1px solid <?php echo esc_attr($drento_box_background_color); ?>;
				border-bottom: 1px solid <?php echo esc_attr($drento_box_background_color); ?>;
			}
			.main-navigation div > ul > li > ul::before,
			.main-navigation div > ul > li > ul::after {
				border-bottom-color: <?php echo esc_attr($drento_box_background_color); ?>;
			}
			.navigation.pagination span.current,
			.page-links > span.page-links-number {
				border: 3px solid <?php echo esc_attr($drento_box_background_color); ?>;
			}
			#comments ol .pingback,
			#comments ol article {
				border-bottom: 1px dashed <?php echo esc_attr($drento_box_background_color); ?>;
			}
			@media all and (max-width: 769px) {
				.main-navigation {
					background: <?php echo esc_attr($drento_box_background_color); ?>;
				}
			}
		<?php endif; ?>
		<?php if (!empty($drento_box_text_color) ) : ?>
			<?php list($r, $g, $b) = sscanf($drento_box_text_color, '#%02x%02x%02x'); ?>
			body,
			button,
			input,
			select,
			textarea,
			button,
			input[type="button"],
			input[type="reset"],
			input[type="submit"],
			input[type="text"],
			input[type="email"],
			input[type="url"],
			input[type="password"],
			input[type="search"],
			input[type="number"],
			input[type="tel"],
			input[type="range"],
			input[type="date"],
			input[type="month"],
			input[type="week"],
			input[type="time"],
			input[type="datetime"],
			input[type="datetime-local"],
			input[type="color"],
			textarea,
			.entry-title a,
			a:hover,
			a:focus,
			a:active,
			.entry-meta a:hover,
			.main-navigation a,
			.post-navigation .meta-nav,
			.site-branding .site-title a,
			#toTop,
			.tagcloud a,
			.tags-links a,
			.cat-links a,
			.read-more,
			.posts-navigation .nav-previous a,
			.posts-navigation .nav-next a,
			.site-main .navigation.pagination a,
			.comment-navigation .nav-previous a,
			.comment-navigation .nav-next a,
			.read-more a,
			.tags-links a {
				color: <?php echo esc_attr($drento_box_text_color); ?>;
			}
			button:hover,
			input[type="button"]:hover,
			input[type="reset"]:hover,
			input[type="submit"]:hover,
			button:focus,
			input[type="button"]:focus,
			input[type="reset"]:focus,
			input[type="submit"]:focus,
			button:active,
			input[type="button"]:active,
			input[type="reset"]:active,
			input[type="submit"]:active,
			.main-sidebar-box span,
			.main-sidebar-box span:before,
			.main-sidebar-box span:after,
			.tags-links a:before,
			.tagcloud a:hover,
			.cat-links a:hover,
			.read-more:hover,
			.posts-navigation .nav-previous a:hover,
			.posts-navigation .nav-next a:hover,
			.site-main .navigation.pagination a:hover,
			.comment-navigation .nav-previous a:hover,
			.comment-navigation .nav-next a:hover,
			.nano > .nano-pane > .nano-slider {
				background: <?php echo esc_attr($drento_box_text_color); ?>;
			}
			button,
			input[type="button"],
			input[type="reset"],
			input[type="submit"],
			.tagcloud a,
			.tags-links a,
			.cat-links a,
			.read-more,
			.posts-navigation .nav-previous a,
			.posts-navigation .nav-next a,
			.site-main .navigation.pagination a,
			.comment-navigation .nav-previous a,
			.comment-navigation .nav-next a	{
				border: 3px solid <?php echo esc_attr($drento_box_text_color); ?>;
			}
			#wp-calendar th {
				background: rgba(<?php echo esc_attr($r).', '.esc_attr($g).', '.esc_attr($b); ?>, 0.1);
			}
			#wp-calendar tbody td, td, th, table {
				border: 1px solid rgba(<?php echo esc_attr($r).', '.esc_attr($g).', '.esc_attr($b); ?>, 0.1);
			}
			.opacityBox {
				background: rgba(<?php echo esc_attr($r).', '.esc_attr($g).', '.esc_attr($b); ?>, 0.7);
			}
			aside ul li {
				border-bottom: 1px dashed rgba(<?php echo esc_attr($r).', '.esc_attr($g).', '.esc_attr($b); ?>, 0.1);
			}
			aside ul li ul.sub-menu, aside ul li ul.children {
				border-left: 1px dashed rgba(<?php echo esc_attr($r).', '.esc_attr($g).', '.esc_attr($b); ?>, 0.1);
			}
			.nano > .nano-pane {
				background: rgba(<?php echo esc_attr($r).', '.esc_attr($g).', '.esc_attr($b); ?>, 0.15);
			}
			.nano > .nano-pane > .nano-slider {
				background: rgba(<?php echo esc_attr($r).', '.esc_attr($g).', '.esc_attr($b); ?>, 0.3);
			}
			@media all and (max-width: 769px) {
				.main-navigation ul li .indicator {
					border-left: 1px dashed rgba(<?php echo esc_attr($r).', '.esc_attr($g).', '.esc_attr($b); ?>, 0.1);
				}
				.main-navigation a,
				.main-navigation ul ul li:last-child > a {
					border-bottom: 1px dashed rgba(<?php echo esc_attr($r).', '.esc_attr($g).', '.esc_attr($b); ?>, 0.1);
				}
			}
		<?php endif; ?>
		<?php if (!empty($drento_box_second_text_color) ) : ?>
			.smallPart, .tagcloud,
			.entry-meta,
			.entry-meta a,
			.site-branding .site-description {
				color: <?php echo esc_attr($drento_box_second_text_color); ?>;
			}
		<?php endif; ?>
		<?php
		//PREVIOUS AND NEXT POST
			if ( is_single() ) {
				$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
				$next     = get_adjacent_post( false, '', false );

				if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
					$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'drento-related-box' );
					echo '
						.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
					';
				}

				if ( $next && has_post_thumbnail( $next->ID ) ) {
					$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'drento-related-box' );
					echo '
						.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); }
					';
				}
			}
		?>
	</style>
	<?php
}
add_action('wp_head', 'drento_custom_css_styles');
