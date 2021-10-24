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
                <h1>Communiquez avec nous</h1>
            </div>
        </section>
            <section class="subTittle">
                <h2 class="sub__title desir">
                    Notre désir est de vous offrir une expérience sans pareille.
                </h2>
            </section>
            <section class="commentaires">
                <h3 class="sub__title">
                    Vous aimeriez nous faire part de vos commentaires?
                </h3>
                <a href="#formulaire">
                    <p>Remplissez notre formulaire plus bas.</p>
                </a>
            </section>
            <section class="ecrire">
                <h3 class="sub__title">Nous écrire</h3>
                <p>
                    Franchises Cora inc.<br />16, rue Sicard, local 50<br />Sainte-Thérèse
                    (Québec)<br />J7E 3W7
                </p>
            </section>
            <section class="internet">
                <h3 class="sub__title">Nous contacter par internet</h3>
                <p>
                    Téléphone : 450 435-2426<br />Télécopieur : 450 435-2428<br />info@chezcora.com
                </p>
            </section>
            <section class="formulaire" id="formulaire">
                <?php the_content(); ?>
            </section>
        </div>
            <?php get_footer(); ?>