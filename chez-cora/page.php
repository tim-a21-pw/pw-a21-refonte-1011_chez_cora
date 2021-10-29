<?php get_header(); ?>

    <div class="wrapper accueil" data-component="Scrolly">
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
                <h1><?php the_title(); ?></h1>
            </div>
            
        </section>

        <section class="subTittle" data-scrolly="FlipfromBottom"> 
            <p>
                <?php the_excerpt(); ?>
            </p>
        </section>

        <section class="page-contenu" data-scrolly="FlipfromBottom">
            <?php the_content(); ?>
        </section>
    </div>
    
<?php get_footer(); ?>