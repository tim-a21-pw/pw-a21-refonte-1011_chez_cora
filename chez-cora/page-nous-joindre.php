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
                <h1>Communiquez avec nous</h1>
            </div>
        </section>
            <section class="subTittle desir">
                <h2 class="sub__title">
                    Notre désir est de vous offrir une expérience sans pareille.
                </h2>
            </section>
            <section class="commentaires">
                <h3 class="sub__title">
                    Vous aimeriez nous faire part de vos commentaires?
                </h3>
                <p>Remplissez notre formulaire plus bas.</p>
            </section>

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php if( have_rows('pw_contact_blocs') ): ?>
                        <?php while( have_rows('pw_contact_blocs') ): the_row(); ?>

                            <?php if (get_row_layout() == 'pw_nous_ecrire'): ?>
                                <section class="ecrire">
                                    <h3 class="sub__title">
                                        <?php if ( get_sub_field('pw_titre_nous_ecrire') ) : ?>
                                            <?php the_sub_field('pw_titre_nous_ecrire'); ?>
                                        <?php endif; ?>
                                    </h3>
                                    <p>
                                        <?php if ( get_sub_field('pw_adresse_ligne_1') ) : ?>
                                            <?php the_sub_field('pw_adresse_ligne_1'); ?>
                                        <?php endif; ?>
                                    </p>
                                    <p>
                                        <?php if ( get_sub_field('pw_adresse_ligne_2') ) : ?>
                                            <?php the_sub_field('pw_adresse_ligne_2'); ?>
                                        <?php endif; ?>
                                    </p>
                                    <p>
                                        <?php if ( get_sub_field('pw_ville') ) : ?>
                                            <?php the_sub_field('pw_ville'); ?>
                                        <?php endif; ?>
                                    </p>
                                    <p>
                                        <?php if ( get_sub_field('pw_province_code_postal') ) : ?>
                                            <?php the_sub_field('pw_province_code_postal'); ?>
                                        <?php endif; ?>
                                    </p>
                                    <p>
                                        <?php if ( get_sub_field('pw_pays') ) : ?>
                                            <?php the_sub_field('pw_pays'); ?>
                                        <?php endif; ?>
                                    </p>
                                </section>
                            <?php endif; ?>

                            <?php if (get_row_layout() == 'pw_contact_internet'): ?>
                                <section class="internet">
                                    <h3 class="sub__title">
                                        <?php if ( get_sub_field('pw_titre_contact_internet') ) : ?>
                                            <?php the_sub_field('pw_titre_contact_internet'); ?>
                                        <?php endif; ?>
                                    </h3>
                                    <p>
                                        <?php if ( get_sub_field('pw_telephone_contact_internet') ) : ?>
                                            <?php the_sub_field('pw_telephone_contact_internet'); ?>
                                        <?php endif; ?>
                                    </p>
                                    <p>
                                        <?php if ( get_sub_field('pw_telecopieur_contact_internet') ) : ?>
                                            <?php the_sub_field('pw_telecopieur_contact_internet'); ?>
                                        <?php endif; ?>
                                    </p>
                                    <p>
                                        <?php if ( get_sub_field('pw_couriel_contact_internet') ) : ?>
                                            <?php the_sub_field('pw_couriel_contact_internet'); ?>
                                        <?php endif; ?>
                                    </p>
                                </section>
                            <?php endif; ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>

            <section class="formulaire" id="formulaire">
                <?php the_content(); ?>
            </section>
        </div>
            <?php get_footer(); ?>