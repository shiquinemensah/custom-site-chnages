<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="style.css">
        <!-- <link rel="shortcut icon" href="wp-content/themes/appletesttheme/assets/images/apple.png"> -->

        <?php wp_head() ?>
    </head>
    <body>
        <div class="nav-container">

            <!-- adds logo to the header and site page -->
            <?php
                if(function_exists('the_custom_logo')){

                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);

                }
            
            ?>



            <img src= "<?php echo $logo[0] ?>" alt="" class="apple-logo" >
            
            <!-- dynamic site name -->
            <?php echo get_bloginfo('name'); ?>
            
            <?php
                wp_nav_menu(
                    array(
                        'menu'              =>  'primary',
                        'container'         =>  '',
                        'theme_location'    =>  'primary',
                        'items_wrap'        =>  '<ul id="" class="">%3$s</ul>',
                        'menu_id'           =>  'test',
                    )

                );
            ?>


        </div>

        <header>
            <div class = 'header-container'>
                <h1> <?php the_title(); ?> </h1>
            </div>
        </header>