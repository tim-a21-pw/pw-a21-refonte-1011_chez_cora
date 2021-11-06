<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php bloginfo('name') ?> <?php wp_title() ?>
        </title>
        <link
            rel="shortcut icon"
            type="image/jpg"
            href="<?php bloginfo('template_url') ?>/assets/images/favicon.png"
        />

        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/styles/main.css" />
        <script src="<?php bloginfo('template_url') ?>/scripts/main.js" defer></script>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>> 
        <header class="header" data-component="Header">
            <aside class="menu_principal">
                
                <?php if ( function_exists( 'the_custom_logo' ) ): ?>
                    <a href="index.html">
                        <?php the_custom_logo(); ?>
                    </a>
                <?php endif; ?>  
               

                <?php wp_nav_menu(array(
                    'theme_location' => 'menu_principal',)
                ); ?>

                <?php wp_nav_menu(array(
                    'theme_location' => 'menu_secondaire',)
                ); ?>

                <div class="langue">
                    <p>English</p>
                </div>

                <div class="trouver_restaurant">
                    <a href="https://alanglois.dectim.ca/cours/pw/tp1/nous-joindre/#wpgmza_map">
                        <button>
                            <svg class="icon icon--lg icon--carte">
                                <use xlink:href="#icon-carte"></use>
                            </svg>
                            <p class="coordonnerU">
                                Trouver un restaurant
                            </p>
                            <svg class="icon icon--xs">
                                <use xlink:href="#icon-fleche"></use>
                            </svg>
                        </button>
                    </a>
                </div>
            </aside>

            <nav class="navMobile">
                <div class="hamburgerEtLogo wrapper">
                    <div class="menu-hamburger js-toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <nav class="mobileModal">
                    <?php if ( function_exists( 'the_custom_logo' ) ): ?>
                        <a href="index.html">
                            <?php the_custom_logo(); ?>
                        </a>
                    <?php endif; ?>  
                    <?php wp_nav_menu(array(
                        'theme_location' => 'menu_principal',)
                    ); ?>

                    <?php wp_nav_menu(array(
                        'theme_location' => 'menu_secondaire',)
                    ); ?>

                    <div class="langue">
                        <p>English</p>
                    </div>

                    <div class="trouver_restaurant">
                        <p>
                            Trouver un <br />
                            restaurant
                        </p>
                        <a href="">
                            <button>
                                <svg class="icon icon--lg icon--carte">
                                    <use xlink:href="#icon-carte"></use>
                                </svg>
                                <p class="coordonnerU">
                                    Province/Ville/Code postal
                                </p>
                                <svg class="icon icon--xs">
                                    <use xlink:href="#icon-fleche"></use>
                                </svg>
                            </button>
                        </a>
                    </div>
                </nav>
            </nav>
        </header>