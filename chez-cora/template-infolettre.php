<?php
/*
Template Name: Page Infolettre / Newsletter
*/
;?>

<?php get_header(); ?>

 <div class="wrapper" data-component="Scrolly">
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
                <h1>S'inscrire à notre infolettre</h1>
            </div>
            
        </section>

        <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php if( have_rows('pw_infolettre_blocs') ): ?>
                        <?php while( have_rows('pw_infolettre_blocs') ): the_row(); ?>

                            <?php if (get_row_layout() == 'pw_infolettre_paragraphe'): ?>
                                <section class="ecrire" data-scrolly="FlipfromBottom">
                                    <h3 class="sub__title">
                                        <?php if ( get_sub_field('pw_titre_infolettre') ) : ?>
                                            <?php the_sub_field('pw_titre_infolettre'); ?>
                                        <?php endif; ?>
                                    </h3>
                                    <p>
                                        <?php if ( get_sub_field('pw_infolettre_texte') ) : ?>
                                            <?php the_sub_field('pw_infolettre_texte'); ?>
                                        <?php endif; ?>
                                    </p>
                                </section>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>

   

            <section class="formulaire" id="formulaire" data-scrolly="FlipfromBottom">
                <?php the_content(); ?>
            </section>
    </div>
<?php get_footer(); ?>