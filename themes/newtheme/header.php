<!DOCTYPE html>
<html>

    <head>

        <?php wp_head(); ?>



    </head>


<body <?php body_class(); ?>>



<header>

    <!-- Navigation menu -->
    <?php wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'navigation',
            )
    ); ?>

</header>