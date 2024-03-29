<?php get_header(); ?>

    <div class="wrapper" data-component="Scrolly">
        <button class="btnCommander">Commander</button>
        <section class="hero hero__menu" data-scrolly="FlipfromBottom">
            <div class="swiper-container swiper--artistesVedettes" data-component="Carousel">
                <div class="swiper-wrapper" >
                    <?php
                        query_posts(array(
                        'post_type' => 'Promotions',
                        'post_status' => 'publish',
                        'showposts' => 4
                        ));
                    ?>

                    <?php while (have_posts()) : the_post(); ?>
                        <?php if (get_field('image_de_promotion')) : ?>
                            <!-- <a href="">
                            Page IMDB
                            </a> -->
                            <div class="swiper-slide">
                                <img src="<?php the_field('image_de_promotion'); ?>" alt="">
                            </div>
                        <?php endif; ?>
                        
                    <?php endwhile; ?>

                    <?php wp_reset_query(); ?>
                </div>
                <div class="swiper-pagination"></div>
                <h1>Menu</h1>
            </div>
        </section>

        <div class="menu_aside" data-scrolly="FlipfromBottom">
            <aside class="sous-menu">
                <?php wp_nav_menu(array(
                    'theme_location' => 'menu_menu',)
                ); ?>
            </aside>

            <section class="menu__items">
                
            <?php if (have_posts()) : ?>
                 <h2><?php the_category(); ?></h2>
                <?php while (have_posts()) : the_post(); ?>               
                    <article class="item" data-scrolly="FlipfromBottom">
                        <div class="img">
                            <?php the_post_thumbnail(); ?>
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

<?php
    query_posts(array(
    'post_type' => 'Promotions',
    'post_status' => 'publish',
    'showposts' => 4
    ));
?>
<?php get_footer(); ?>