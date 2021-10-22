<?php get_header(); ?>

<div class="wrapper">
        <section class="hero hero__menu">
            <div class="swiper-container swiper--artistesVedettes" data-component="Carousel">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/images/accueil/Hero.png" alt="Un artiste" />
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/accueil/Hero.png" alt="Un artiste" />
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/accueil/Hero.png" alt="Un artiste" />
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/accueil/Hero.png" alt="Un artiste" />
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/accueil/Hero.png" alt="Un artiste" />
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <h1>Menu</h1>
            </div>
        </section>

        <div class="menu_aside">
            <aside class="sous-menu">
                <?php wp_nav_menu(array(
                    'theme_location' => 'menu_principal',)
                ); ?>
            </aside>

            <section class="menu__items">
                <h2>Crêpes salées</h2>
                <article class="item item1">
                    <div class="img">
                        <img src="assets/images/menu/plat1.png" alt="" />
                    </div>
                    <div class="contenu">
                        <h3 class="sub__title">Crêpes</h3>
                        <p>
                            3 belles crêpes de farine blanche ou de farine
                            de sarrasin-sorgho servies avec l’accompagnement
                            de votre choix : bacon, saucisses, saucisses de
                            dinde, jambon ou fruits frais.
                        </p>

                        <p>Aussi offert en portion réduite.</p>
                    </div>
                </article>
                <article class="item item2">
                    <div class="img">
                        <img src="assets/images/menu/plat2.png" alt="" />
                        <div class="couleur"></div>
                    </div>
                    <div class="contenu">
                        <h3 class="sub__title">Favoris du grand patron</h3>
                        <p>
                            2 oeufs, bacon et saucisses servis sur une crêpe
                            farcie de fromage cheddar.
                        </p>
                        <p>
                            Aussi disponible en option sensible au gluten
                            (sans saucisses).
                        </p>
                    </div>
                </article>
            </section>
        </div>
</div>
<?php get_footer(); ?>