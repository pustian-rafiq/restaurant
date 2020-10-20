        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Restaurant</title>
            <?php wp_head(); ?>
        </head>
        <body>

    <header class="site-header">
        <div class="container">
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Logo Image" class="logoimage">
                    </a>
                </div> <!-- logo end -->
   
                <div class="header-information">
                    <div class="socials">
                        <?php 
                            $args = array(

                                'theme_location'   => 'social-menu',
                                'container'        => 'nav',
                                'container_class' => 'socials',
                                'container_id'    => 'socials',
                                'link_before'     => '<span class="sr-text">',
                                'link_after'      =>'</span>'
                            );

                            wp_nav_menu($args);

                    ?>

                    </div><!-- Socials -->

                    <div class="address">
                        <p>Mirpur-10 Dhaka, Bangladesh</p>
                        <p>Phone No: +880-1991166550</p>
                    </div>

                </div><!--end Header information -->
        </div> <!-- end container -->
    </header>
        
        <div class="main-menu">
            <div class="mobile-menu">
                <a href="#" class="mobile"><i class="fa fa-bars"></i>Menu</a>

            </div>

                <div class="navigation container">

                    <?php
                        $args = array(

                            'theme_location' => 'header-menu',
                            'container' => 'nav',
                            'container_class' => 'site-nav'
                        );
                        
                        wp_nav_menu($args);
                        
                    ?>
                </div>


        </div>