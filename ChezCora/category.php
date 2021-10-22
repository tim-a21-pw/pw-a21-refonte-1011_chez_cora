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
                    'theme_location' => 'menu_menu',)
                ); ?>
            </aside>

            <section class="menu__items">
                
            <?php if (have_posts()) : ?>
                 <h2><?php the_category(); ?></h2>
                <?php while (have_posts()) : the_post(); ?>
                                   
                                    <article class="item item1">
                                        <div class="img">
                                            <?php the_post_thumbnail('medium'); ?>
                                        </div>
                                        <div class="contenu">
                                            <h3 class="sub__title"><?php the_title(); ?></h3>
                                            <p>
                                                <?php the_content(); ?>
                                            </p>

                                            <p>Aussi offert en portion réduite.</p>
                                        </div>
                                    </article>
                                    <?php endwhile; ?>
                <?php else: ?>
                    <p>Malheuresement, il n'y a pas d'items dans cette catégorie. </p>
                <?php endif; ?>
            </section>
        </div>
</div>
<?php get_footer(); ?>