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
                <h1><?php wp_title('') ?></h1>
            </div>
        </section>

            <section class="subTittle">
                <p>
                    Nous servons plus de 250 000 petits déjeuners chaque
                    semaines à travers le pays. Venez, vous aussi, déjeuner avec
                    votre sourire chez Cora.
                </p>
            </section>
            <div class="divTop">
                <section class="sectionCassolettes">
                    <img
                        src="<?php bloginfo('template_url') ?>/assets/images/accueil/Cassolettes.png"
                        alt="images des assiettes de cassolettes"
                    />
                    <h2>Nos cassolettes voyagent jusqu'à vous!</h2>
                    <p>
                        Laissez-vous tenter par l'une de nos réconfortantes
                        cassolettes, partout, tout le temps!
                    </p>
                </section>

                <section class="sectionFavorisAdos">
                    <img
                        src="<?php bloginfo('template_url') ?>/assets/images/accueil/FavorisDesAdos.png"
                        alt="images des assiettes de cassolettes"
                    />
                    <h2>Favoris des ados</h2>
                    <p>
                        Les ados de tous âges raffolent de ces classiques
                        réinventés, conçus spécialement pour les appétits
                        délinquants.
                    </p>
                </section>
            </div>
        </div>

        
        <section class="sectionPlatsPartager">
            <img
            src="<?php bloginfo('template_url') ?>/assets/images/accueil/bannierre1.png"
            alt="images des plats à partager"
        />
            <div class="wrapper">
                <h2>les plats à partager</h2>
                <p>
                    Laissez-vous tenter par l'une de nos réconfortantes
                    cassolettes, partout, tout le temps!
                </p>
            </div>
        </section>
        <section class="sectionConcours">
            <img
                src="<?php bloginfo('template_url') ?>/assets/images/accueil/bannierre2.png"
                alt="images des concours"
            />
            <div class="wrapper">
                <h2>Concours Cora tout l’été</h2>
                <p>
                    Chaque semaine nous vous présenterons quatre endroits
                    inspirants où savourer un délicieux déjeuner Cora! Votez
                    pour votre endroit favori et courez la chance de gagner! Un
                    gagnant d’une carte-cadeau de 50$ chaque semaine jusqu’au
                    1er septembre 2021. Un grand prix de 250$.
                </p>
        </div>
        </section>
<?php get_footer(); ?>