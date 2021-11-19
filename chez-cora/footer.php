            <div class="wrapper">
                <div class="iconeScroll" id="IconeScroll">
                    <svg class="icon icon--sm Fleche-scroll" data-component="ScrollTop">
                        <use xlink:href="#icon-fleche"></use>
                    </svg>
                </div>
                
                <footer data-component="Scrolly">
                    <div class="socials">
                        <div class="groupeicone" data-scrolly="FlipfromBottom" >                                                         
                            <?php if ( have_rows('medias_sociaux', 'option') ): ?>
                                <?php while( have_rows('medias_sociaux', 'option') ): the_row(); ?>  
                                    <div class="icones">
                                        <?php if ( get_sub_field('type') === 'Facebook' ) : ?>
                                            <a href="<?php the_sub_field('url'); ?>" target="_blank">
                                                <svg class="icon">
                                                    <use xlink:href="#icon-facebook-f"></use>
                                                </svg>
                                            </a>

                                        <?php elseif ( get_sub_field('type') === 'Pinterest') : ?>
                                            <a href="<?php the_sub_field('url'); ?>" target="_blank">
                                                <svg class="icon">
                                                    <use xlink:href="#icon-pinterest"></use>
                                                </svg>
                                            </a>
                                        <?php endif; ?> 
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?> 
                        </div>

                        <div class="groupeicone" data-scrolly="FlipfromBottom">                                                          
                            <?php if ( have_rows('medias_sociaux_2', 'option') ): ?>
                                <?php while( have_rows('medias_sociaux_2', 'option') ): the_row(); ?>  
                                    <div class="icones">
                                        <?php if ( get_sub_field('type') === 'Instagram' ) : ?>
                                            <a href="<?php the_sub_field('url'); ?>" target="_blank">
                                                <svg class="icon">
                                                    <use xlink:href="#icon-instagram"></use>
                                                </svg>
                                            </a>

                                        <?php elseif ( get_sub_field('type') === 'Courriel') : ?>
                                            <a href="mailto: <?php the_sub_field('courriel'); ?>" target="_blank">
                                                <svg class="icon">
                                                    <use xlink:href="#icon-courriel"></use>
                                                </svg>
                                            </a>
                                        <?php endif; ?> 
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?> 
                        </div>
                    </div>            

                    <nav data-scrolly="FlipfromBottom">

                        <?php wp_nav_menu(array(
                            'theme_location' => 'menu_footer',)
                        ); ?>

                        <?php if ( get_field('copyright', 'options') ) : ?>
                            <p class="copyright">
                                ᴹᴰ Marque déposée de Coramark inc. Copyright 2011 - 2021, Coramark inc. Chez Cora : Déjeuners et dîners. Tous droits réservés.
                            </p>
                        <?php endif; ?>
                    </nav>
                </footer>

                <section class="footer--mobile">
                    <?php if ( get_field('copyright', 'options') ) : ?>
                        <p class="copyright--mobile">
                            ᴹᴰ Marque déposée de Coramark inc. Copyright 2011 - 2021, Coramark inc. Chez Cora : Déjeuners et dîners. Tous droits réservés.
                        </p>
                    <?php endif; ?>
                </section>
            </div>  
        <?php wp_footer(); ?>
    </body>
</html>