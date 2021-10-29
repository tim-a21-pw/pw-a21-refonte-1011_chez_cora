<?php get_header(); ?>

    <div class="wrapper accueil">
        <button class="btnCommander">Commander</button>
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
                <h1>Accueil</h1>
            </div>
            
        </section>

        <section class="subTittle">
            <p>
                <?php the_content(); ?>
            </p>
        </section>

        <?php
            query_posts(array(
            'post_type' => 'Promotions',
            'post_status' => 'publish',
            'order' => 'ASC',
            'showposts' => 4
            ));
        ?>

        <div class="accueil_promotions">
            <?php while (have_posts()) : the_post(); ?>
                <section>
                    <?php the_post_thumbnail(); ?>

                    <h2><?php the_title(); ?></h2>

                    <p><?php the_content(); ?></p>
                </section>
            <?php endwhile; ?>  
        </div>
    </div>
<?php get_footer(); ?>