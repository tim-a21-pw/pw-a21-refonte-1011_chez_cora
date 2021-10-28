<?php get_header(); ?>

    <div class="wrapper">
        <section class="hero hero__menu">
            <div class="swiper-container swiper--artistesVedettes" data-component="Carousel">
                <div class="swiper-wrapper">
                    <?php
                        query_posts(array(
                        'post_type' => 'Promotions',
                        'post_status' => 'publish',
                        'showposts' => 4
                        ));
                    ?>

                    <?php while (have_posts()) : the_post(); ?>
                        <?php if (get_field('image_de_promotion')) : ?>
                            <div class="swiper-slide">
                                <img src="<?php the_field('image_de_promotion'); ?>" alt="">
                            </div>
                        <?php endif; ?>
                        
                    <?php endwhile; ?>

                    <?php wp_reset_query(); ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section>
            <p>Désolé, mauvaise page</p>
            <h1 class="text-page-erreur">404</h1>
        </section>

        <section class="revenir">
            <a href="https://alanglois.dectim.ca/cours/pw/tp1/">Revenir à l'accueil</a>
        </section>
    </div>

<?php get_footer(); ?>