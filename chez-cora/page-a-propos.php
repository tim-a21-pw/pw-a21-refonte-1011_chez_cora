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
                        <div class="swiper-slide">
                            <img src="<?php the_field('image_de_promotion'); ?>" alt="">
                        </div>
                    <?php endif; ?>
                    
                <?php endwhile; ?>

                <?php wp_reset_query(); ?>
            </div>
            <div class="swiper-pagination"></div>
            <h1>Notre histoire</h1>
        </div>
    </section>
    
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php if( have_rows('pw_apropos_blocs') ): ?>
                <?php while( have_rows('pw_apropos_blocs') ): the_row(); ?>

                    <?php if (get_row_layout() == 'pw_notre_histoire'): ?>
                        <section class="histoire" data-scrolly="FlipfromBottom">
                            <h2 class="subTitle">
                                <?php if ( get_sub_field('pw_titre_notre_histoire') ) : ?>
                                    <?php the_sub_field('pw_titre_notre_histoire'); ?>
                                <?php endif; ?>
                            </h2>

                            <?php if( have_rows('pw_histoire_paragraphe') ): ?>
                                <?php while( have_rows('pw_histoire_paragraphe') ): the_row(); ?>
                                <p>
                                    <?php if ( get_sub_field('pw_texte_histoire') ) : ?>
                                        <?php the_sub_field('pw_texte_histoire'); ?>
                                    <?php endif; ?>
                                </p>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </section>
                    <?php endif; ?>

                    <?php if (get_row_layout() == 'pw_notre_fondatrice'): ?>
                        <section class="fondatrice" data-scrolly="FlipfromBottom">
                            <h2 class="subTitle">
                                <?php if ( get_sub_field('pw_titre_fondatrice') ) : ?>
                                    <?php the_sub_field('pw_titre_fondatrice'); ?>
                                <?php endif; ?>
                            </h2>

                            <?php if( have_rows('pw_paragraphe_fondatrice') ): ?>
                                <?php while( have_rows('pw_paragraphe_fondatrice') ): the_row(); ?>
                                    <?php if ( get_sub_field('pw_titre_rep_fondatrice') ) : ?>
                                        <h3 class="sub__title">
                                            <?php the_sub_field('pw_titre_rep_fondatrice'); ?>
                                        </h3>
                                    <?php endif; ?>
                                    <?php if ( get_sub_field('pw_paragraphe_fondatrice') ) : ?>
                                        <p>
                                            <?php the_sub_field('pw_paragraphe_fondatrice'); ?>
                                        </p>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </section>
                    <?php endif; ?>

                    <?php if (get_row_layout() == 'pw_franchisage'): ?>
                        <section class="franchisage" data-scrolly="FlipfromBottom">
                            <h2 class="subTitle">
                                <?php if ( get_sub_field('pw_titre_franchisage') ) : ?>
                                    <?php the_sub_field('pw_titre_franchisage'); ?>
                                <?php endif; ?>
                            </h2>
                            <?php if( have_rows('pw_paragraphe_franchisage') ): ?>
                                <?php while( have_rows('pw_paragraphe_franchisage') ): the_row(); ?>
                                <p>
                                    <?php if ( get_sub_field('pw_texte_franchisage') ) : ?>
                                        <?php the_sub_field('pw_texte_franchisage'); ?>
                                    <?php endif; ?>
                                </p>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </section>
                    <?php endif; ?>

                    <?php if (get_row_layout() == 'pw_fondation'): ?>
                        <section class="fondation" data-scrolly="FlipfromBottom">
                            <h2 class="subTitle">
                                <?php if ( get_sub_field('pw_titre_fondation') ) : ?>
                                    <?php the_sub_field('pw_titre_fondation'); ?>
                                <?php endif; ?>
                            </h2>
                            <?php if( have_rows('pw_paragraphe_fondation') ): ?>
                                <?php while( have_rows('pw_paragraphe_fondation') ): the_row(); ?>
                                    <?php if ( get_sub_field('pw_titre_paragraphe_fondation') ) : ?>
                                        <h3 class="sub__title">
                                            <?php the_sub_field('pw_titre_paragraphe_fondation'); ?>
                                        </h3>
                                    <?php endif; ?>
                                    <?php if ( get_sub_field('pw_texte_fondation') ) : ?>
                                        <p>
                                            <?php the_sub_field('pw_texte_fondation'); ?>
                                        </p>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </section>
                    <?php endif; ?>

                <?php endwhile; ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>