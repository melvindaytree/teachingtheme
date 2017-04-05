<?php 

add_theme_support( 'title-tag' );

// Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );      
           submit_button(); 
       ?>          
    </form>
  </div>
<?php }

// Twitter
function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );
    add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
   add_settings_field( 'github', 'GitHub URL', 'setting_github', 'theme-options', 'section' );
	 add_settings_field( 'portfolio', 'portfolio URL', 'setting_portfolio', 'theme-options', 'section' );
  
	register_setting( 'section', 'twitter' );
  register_setting( 'section', 'github' );
	register_setting( 'section', 'portfolio' );
}
add_action( 'admin_init', 'custom_settings_page_setup' );

add_theme_support( 'title-tag' );

function setting_github() { ?>
  <input type="text" name="github" id="github" value="<?php echo get_option('github'); ?>" />
<?php }

function setting_portfolio() { ?>
  <input type="text" name="portfolio" id="portfolio" value="<?php echo get_option('portfolio'); ?>" />
<?php }

add_theme_support( 'post-thumbnails' );

function create_post_your_post() {
	register_post_type( 'homework',
		array(
			'labels'       => array(
				'name'       => __( 'Homework' ),
			),
			'public'       => true,
			'hierarchical' => true,
			'has_archive'  => true,
			'supports'     => array(
				'title',
				'editor',
				'thumbnail',
				'comments',
			), 
		)
	);

}
add_action( 'init', 'create_post_your_post' );



