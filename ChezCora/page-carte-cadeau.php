<?php get_header(); ?>

        <div class="wrapper">
            <section class="hero">
                <div
                    class="swiper-container swiper--artistesVedettes"
                    data-component="Carousel"
                >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img
                                src="<?php bloginfo('template_url') ?>/assets/images/accueil/Hero.png"
                                alt="Un artiste"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="<?php bloginfo('template_url') ?>/assets/images/accueil/Hero.png"
                                alt="Un artiste"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="<?php bloginfo('template_url') ?>/assets/images/accueil/Hero.png"
                                alt="Un artiste"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="<?php bloginfo('template_url') ?>/assets/images/accueil/Hero.png"
                                alt="Un artiste"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="<?php bloginfo('template_url') ?>/assets/images/accueil/Hero.png"
                                alt="Un artiste"
                            />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <h1>Une idée-cadeau qui a du goût!</h1>
                </div>
            </section>

            <section class="subTittle">
                <h2 class="subTitle">
                    2 façons d’acheter la carte-cadeau Cora:
                </h2>
                <ul>
                    <li>En restaurant</li>
                    <li>
                        Chez : Jean Coutu, Walmart, Couche-Tard ou Familiprix
                    </li>
                </ul>
                <img
                    src="<?php bloginfo('template_url') ?>/assets/images/carteCadeaux/CartesCadeaux.png"
                    alt="images de cartes-cadeaux"
                />
            </section>
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
                <h1>Une idée-cadeau qui a du goût!</h1>
            </div>
        </section>

            <div class="infoCarteCadeau">
                <section class="section__carte">
                    <div class="infoCarteCadeau__carte pratique">
                        <h2 class="subTitle">Pratique</h2>
                        <p>
                            Cora souhaite vous simplifier la vie! Offrez la
                            carte-cadeau Cora à tous ceux que vous voulez choyer
                            : parent, ami, professeur, gardienne… Ce cadeau
                            plaira à tout le monde!
                        </p>
                    </div>

                    <div class="infoCarteCadeau__carte perso">
                        <h2 class="subTitle">Personnalisée</h2>
                        <p>
                            Vous pouvez vous procurer des cartes-cadeaux Cora de
                            25 $ ou de 50 $, ou encore en personnaliser une au
                            montant de votre choix!
                        </p>
                    </div>
                </section>

                <section class="section__carte">
                    <div class="infoCarteCadeau__carte delicieux">
                        <h2 class="subTitle">Délicieux</h2>
                        <p>
                            Que vos proches aient le bec sucré ou salé, vous
                            êtes assuré de faire des heureux en donnant la
                            carte-cadeau Cora!
                        </p>
                    </div>

                    <div class="infoCarteCadeau__carte donner">
                        <h2 class="subTitle">Prêt-à-donner</h2>
                        <p>
                            Chaque carte-cadeau est présentée dans une jolie
                            pochette. Vous pouvez choisir parmi plusieurs
                            modèles et y inscrire un message personnalisé.
                        </p>
                    </div>
                </section>
            </div>

            <section class="section__rdv">
                <p class="infoCarteCadeau__rdv">
                    Pour vous procurer la carte-cadeau Cora, rendez-vous dans
                    l'un de nos restaurants, dans une succursale des pharmacies
                    Jean Coutu ou chez Walmart. Vos proches deviendront des
                    mordus du déjeuner!
                </p>
            </section>
</div>
            <?php get_footer(); ?>