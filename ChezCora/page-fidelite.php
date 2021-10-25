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
            <h1>Carte de fidélité</h1>
        </div>
    </section>
    <section class="subTittle categorie-fidelite">
        <nav>
            <ul>
                <div class="section1">
                    <li>Accéder à votre compte</li>
                    <li><div></div></li>
                    <li>Enregistrer votre carte</li>
                    <li><div></div></li>
                    <li>Compléter votre profil</li>
                    <li><div></div></li>
                    <li>Obtenir et utiliser votre carte</li>
                </div>

                <div class="section2">
                    <li class="tiretMobile"><div></div></li>
                    <li>Foire aux questions</li>
                    <li><div></div></li>
                    <li>Conditions d'utilisations</li>
                </div>
            </ul>
        </nav>
    </section>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php if( have_rows('pw_fidelite_blocs') ): ?>
                <?php while( have_rows('pw_fidelite_blocs') ): the_row(); ?>

                    <?php if (get_row_layout() == 'pw_intro_fidelite'): ?>
                        <section class="introductionFidelite">
                                <p>
                                    <?php if ( get_sub_field('pw_intro_texte_fidelite') ) : ?>
                                        <?php the_sub_field('pw_intro_texte_fidelite'); ?>
                                    <?php endif; ?>
                                </p>
                        </section>
                    <?php endif; ?>

                    <?php if (get_row_layout() == 'pw_information_gen_fidelite'): ?>
                        <section class="infoCarte">
                            <?php if( have_rows('pw_paragraphe_info_gen_fidelite') ): ?>
                                <?php while( have_rows('pw_paragraphe_info_gen_fidelite') ): the_row(); ?>
                                    <?php if ( get_sub_field('pw_titre_info_gen_fidelite') ) : ?>
                                        <h3 class="sub__title">
                                            <?php the_sub_field('pw_titre_info_gen_fidelite'); ?>
                                        </h3>
                                    <?php endif; ?>
                                    <?php if ( get_sub_field('pw_texte_info_gen_fidelite') ) : ?>
                                        <p>
                                            <?php the_sub_field('pw_texte_info_gen_fidelite'); ?>
                                        </p>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </section>
                    <?php endif; ?>

                    <?php if (get_row_layout() == 'pw_foire_aux_questions_fidelite'): ?>
                        <section class="questionCarte">
                            <h2 class="subTitle">
                                <?php if ( get_sub_field('pw_titre_faq_fidelite') ) : ?>
                                    <?php the_sub_field('pw_titre_faq_fidelite'); ?>
                                <?php endif; ?>
                            </h2>

                            <?php if( have_rows('pw_paragraphe_faq_fidelite') ): ?>
                                <?php while( have_rows('pw_paragraphe_faq_fidelite') ): the_row(); ?>
                                    <?php if ( get_sub_field('pw_titre_paragraphe_faq_fidelite') ) : ?>
                                        <h3 class="sub__title">
                                            <?php the_sub_field('pw_titre_paragraphe_faq_fidelite'); ?>
                                        </h3>
                                    <?php endif; ?>
                                    <?php if ( get_sub_field('pw_texte_paragraphe_faq_fidelite') ) : ?>
                                        <p>
                                            <?php the_sub_field('pw_texte_paragraphe_faq_fidelite'); ?>
                                        </p>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </section>
                    <?php endif; ?>

                    <?php if (get_row_layout() == 'pw_problemes_fidelite'): ?>
                        <section class="problemesCarte">
                            <h2 class="subTitle">
                                <?php if ( get_sub_field('pw_titre_probleme_fidelite') ) : ?>
                                    <?php the_sub_field('pw_titre_probleme_fidelite'); ?>
                                <?php endif; ?>
                            </h2>

                            <?php if( have_rows('pw_paragraphe_probleme_fidelite') ): ?>
                                <?php while( have_rows('pw_paragraphe_probleme_fidelite') ): the_row(); ?>
                                    <?php if ( get_sub_field('pw_texte_probleme_fidelite') ) : ?>
                                        <p>
                                            <?php the_sub_field('pw_texte_probleme_fidelite'); ?>
                                        </p>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </section>
                    <?php endif; ?>

                    <?php if (get_row_layout() == 'pw_conditions_dutilisation_fidelite'): ?>
                        <section class="conditionsCarte">
                            <h3 class="sub__title">
                                <?php if ( get_sub_field('pw_titre_conditions_fidelite') ) : ?>
                                    <?php the_sub_field('pw_titre_conditions_fidelite'); ?>
                                <?php endif; ?>
                            </h3>
                            <p>
                                <?php if ( get_sub_field('pw_texte_conditions_fidelite') ) : ?>
                                    <?php the_sub_field('pw_texte_conditions_fidelite'); ?>
                                <?php endif; ?>
                            </p>
                        </section>
                    <?php endif; ?>

                <?php endwhile; ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>