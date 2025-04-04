<header class="header_section">
    <div class="header_top">
        <div class="container-fluid">
            <div class="contact_nav">
                <a href="tel:<?php echo esc_attr(get_option('home_phone_number', '+01 123455678990')); ?>">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>Phone: <?php echo esc_html(get_theme_mod('home_phone_number', '+01 123455678990')); ?></span>
                </a>
                <a href="mailto:<?php echo esc_attr(get_option('home_email_address', 'demo@gmail.com')); ?>">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>Email: <?php echo esc_html(get_theme_mod('home_email_address', 'demo@gmail.com')); ?></span>
                </a>
            </div>
        </div>
    </div>

    <div class="header_bottom">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <div class="logo-title-container">
                    <?php if (has_custom_logo()) : ?>
                        <div class="site-logo">
                            <?php the_custom_logo(); ?> <!-- Display Logo -->
                        </div>
                    <?php endif; ?>

                    <div class="site-info">
                        <span class="site-title"><?php bloginfo('name'); ?></span> <!-- Display Title -->
                        <p class="site-tagline"><?php echo esc_html(get_bloginfo('description')); ?></p> <!-- Display Tagline -->
                    </div>
                </div>
            </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container'      => false,
                        'menu_class'     => 'navbar-nav',
                        'fallback_cb'    => false,
                        'walker'         => new Bootstrap_NavWalker()
                    ));
                    ?>
                </div>
            </nav>
        </div>
    </div>
</header>
<?php wp_head(); ?>
