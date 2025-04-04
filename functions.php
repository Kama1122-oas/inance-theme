<?php
function enqueue_theme_scripts() {
    // Enqueue CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('extra-styling', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // Enqueue Owl Carousel CSS
    wp_enqueue_style('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
    wp_enqueue_style('owl-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');

    // Enqueue JavaScript (Ensure Dependencies are Correct)
    wp_enqueue_script('jquery'); // Load WordPress jQuery

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), null, true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array('jquery'), null, true);

    // Enqueue Owl Carousel JS
    wp_enqueue_script('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), null, true);
   // Enqueue Google Maps API
    wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap', array(), null, true);

}
add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');

function my_custom_menus() {
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'your-theme-textdomain'),
    ));
}
add_action('init', 'my_custom_menus');

require_once get_template_directory() . '/class-bootstrap-navwalker.php';

/* function home_services_settings_init() {
    // Register settings
    register_setting('home_services_options_group', 'home_phone_number');
    register_setting('home_services_options_group', 'home_email_address');
    register_setting('home_services_options_group', 'home_heading');
    register_setting('home_services_options_group', 'home_paragraph');
    register_setting('home_services_options_group', 'home_button_text');
}

add_action('admin_init', 'home_services_settings_init');
function home_services_menu() {
    add_menu_page(
        'Home Services Settings', 
        'Theme Settings', 
        'manage_options', 
        'home-services-settings', 
        'home_services_settings_page'
    );
}

add_action('admin_menu', 'home_services_menu');

function home_services_settings_page() {
    ?>
    <div class="wrap">
        <h1>Home Services Theme Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('home_services_options_group');
            do_settings_sections('home_services_options_group');
            ?>
            <table class="form-table">
                <tr><th>Phone Number:</th>
                    <td><input type="text" name="home_phone_number" value="<?php echo esc_attr(get_option('home_phone_number')); ?>"></td>
                </tr>
                <tr><th>Email Address:</th>
                    <td><input type="email" name="home_email_address" value="<?php echo esc_attr(get_option('home_email_address')); ?>"></td>
                </tr>
                <tr><th>Heading:</th>
                    <td><input type="text" name="home_heading" value="<?php echo esc_attr(get_option('home_heading')); ?>"></td>
                </tr>
                <tr><th>Paragraph:</th>
                    <td><textarea name="home_paragraph"><?php echo esc_textarea(get_option('home_paragraph')); ?></textarea></td>
                </tr>
                <tr><th>Button Text:</th>
                    <td><input type="text" name="home_button_text" value="<?php echo esc_attr(get_option('home_button_text')); ?>"></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>

        
    </div>
    <?php
}


function home_services_set_defaults() {
    $defaults = array(
        'home_phone_number' => '+01 123455678990',
        'home_email_address' => 'demo@gmail.com',
        'home_heading'       => 'Welcome to Our Website',
        'home_paragraph'     => 'This is a default paragraph. Update it from the settings.',
        'home_button_text'   => 'Learn More'
    );

    foreach ($defaults as $key => $value) {
        if (get_option($key) === false) {
            update_option($key, $value);
        }
    }
}

add_action('after_switch_theme', 'home_services_set_defaults'); */

function theme_customizer_settings($wp_customize) {
    
    // Add Section for Contact Information
    $wp_customize->add_section('theme_contact_settings', array(
        'title'    => __('Contact Info', 'your-theme'),
        'priority' => 30,
    ));

    // Phone Number
    $wp_customize->add_setting('home_phone_number', array(
        'default'   => '+01 123455678990',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('home_phone_number', array(
        'label'    => __('Phone Number', 'your-theme'),
        'section'  => 'theme_contact_settings',
        'type'     => 'text',
    ));

    // Email Address
    $wp_customize->add_setting('home_email_address', array(
        'default'   => 'demo@gmail.com',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('home_email_address', array(
        'label'    => __('Email Address', 'your-theme'),
        'section'  => 'theme_contact_settings',
        'type'     => 'email',
    ));

    // Add Section for Home Page Content
    $wp_customize->add_section('theme_homepage_settings', array(
        'title'    => __('Homepage Content', 'your-theme'),
        'priority' => 31,
    ));

    // Heading Text
    $wp_customize->add_setting('home_heading', array(
        'default'   => 'Welcome to Our Website',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('home_heading', array(
        'label'    => __('Homepage Heading', 'your-theme'),
        'section'  => 'theme_homepage_settings',
        'type'     => 'text',
    ));

    // Paragraph Text
    $wp_customize->add_setting('home_paragraph', array(
        'default'   => 'This is a default paragraph. Update it from the settings.',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('home_paragraph', array(
        'label'    => __('Homepage Paragraph', 'your-theme'),
        'section'  => 'theme_homepage_settings',
        'type'     => 'textarea',
    ));

    // Button Text
    $wp_customize->add_setting('home_button_text', array(
        'default'   => 'Learn More',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('home_button_text', array(
        'label'    => __('Button Text', 'your-theme'),
        'section'  => 'theme_homepage_settings',
        'type'     => 'text',
    ));

    // Heading Section Image
    $wp_customize->add_setting('home_heading_image', array(
        'default'   => get_template_directory_uri() . '/images/slider-img.png',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_heading_image', array(
        'label'    => __('Heading Section Image', 'your-theme'),
        'section'  => 'theme_homepage_settings',
        'settings' => 'home_heading_image',
    )));

    // Website Logo (Already Supported in Customizer)
    $wp_customize->add_setting('custom_logo');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'custom_logo', array(
        'label'    => __('Website Logo', 'your-theme'),
        'section'  => 'title_tagline',
        'settings' => 'custom_logo',
        'width'    => 250, 
        'height'   => 100,
    )));
}
add_action('customize_register', 'theme_customizer_settings');

function theme_customize_register($wp_customize) {
    // Add Site Logo Support
    $wp_customize->add_setting('custom_logo', array(
        'capability' => 'edit_theme_options',
        'transport'  => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'custom_logo', array(
        'label'       => __('Site Logo', 'textdomain'),
        'section'     => 'title_tagline',
        'settings'    => 'custom_logo',
        'width'       => 250,
        'height'      => 80,
        'flex_width'  => true,
        'flex_height' => true,
    )));
}
add_action('customize_register', 'theme_customize_register');






?>