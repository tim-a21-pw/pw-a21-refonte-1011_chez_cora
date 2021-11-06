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
            <h1>Une idée-cadeau qui a du goût!</h1>
        </div>
    </section>
        
    <section class="subTittle">
        <?php the_content(); ?>
    </section>

    <div class="infoCarteCadeau" data-scrolly="FlipfromBottom">
        <?php if( have_rows('information_carte_cadeau') ): ?>
            <?php while( have_rows('information_carte_cadeau') ): the_row(); ?>
                <section class="section__carte">
                    <?php if( have_rows('section') ): ?>
                        <?php while( have_rows('section') ): the_row(); ?>
                        <div>
                            <?php if ( get_sub_field('titre') ) : ?>
                                <h2 class="subTitle"><?php the_sub_field('titre'); ?></h2>
                            <?php endif; ?>

                            <?php if ( get_sub_field('information') ) : ?>
                                <p><?php the_sub_field('information'); ?></p>
                            <?php endif; ?>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <section class="section__rdv" data-scrolly="FlipfromBottom">
        <?php if ( get_field('rendez-vous') ) : ?>
            <p class="infoCarteCadeau__rdv">
                <?php the_field('rendez-vous'); ?></h2>
            </p>
        <?php endif; ?>
    </section>
</div>

<?php get_footer(); ?>