<!doctype html>
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php 
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary', 
                            'menu_class' => 'navbar-nav',
                            'container' => false,
                            'walker' => new WP_Bootstrap_Navwalker()
                        )
                    );
                    ?>
                </div>
            </div>
        </nav>
    </body>
</html>