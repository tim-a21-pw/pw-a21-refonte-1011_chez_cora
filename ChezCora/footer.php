<footer>
                <div class="socials">
                    <div class="groupeicone">
                        <div class="icones">
                            <svg class="icon">
                                <use xlink:href="#icon-facebook-f"></use>
                            </svg>
                        </div>
                        <div class="icones">
                            <svg class="icon">
                                <use xlink:href="#icon-pinterest"></use>
                            </svg>
                        </div>
                    </div>

                    <div class="groupeicone">
                        <div class="icones">
                            <svg class="icon">
                                <use xlink:href="#icon-instagram"></use>
                            </svg>
                        </div>
                        <div class="icones">
                            <svg class="icon">
                                <use xlink:href="#icon-courriel"></use>
                            </svg>
                        </div>
                    </div>
                    <!-- ///////////////////////////////////////////////////////////////////// -->
                    <!-- <?php if ( have_rows('tp3_medias', 'option') ): ?>
                            <?php while( have_rows('tp3_medias', 'option') ): the_row(); ?>
                                <?php if ( get_sub_field('tp3_medias_logo') === 'Dribbble' ) : ?>
                                    <a href="<?php the_sub_field('tp3_media_url'); ?>" target="_blank">
                                    <img src="<?php bloginfo('template_url') ?>/assets/images/Medias2.svg" alt="logo medias" />
                                    </a>

                                <?php elseif ( get_sub_field('tp3_medias_logo') === 'Instagram') : ?>
                                    <a href="<?php the_sub_field('tp3_media_url'); ?>" target="_blank">
                                    <img src="<?php bloginfo('template_url') ?>/assets/images/Medias1.svg" alt="logo medias" />
                                    </a>
                                <?php elseif ( get_sub_field('tp3_medias_logo') === 'Youtube') : ?>
                                    <a href="<?php the_sub_field('tp3_media_url'); ?>" target="_blank">
                                    <img src="<?php bloginfo('template_url') ?>/assets/images/Medias4.svg" alt="logo medias" />
                                    </a>
                                <?php elseif ( get_sub_field('tp3_medias_logo') === 'Twitter') : ?>
                                    <a href="<?php the_sub_field('tp3_media_url'); ?>" target="_blank">
                                    <img src="<?php bloginfo('template_url') ?>/assets/images/Medias3.svg" alt="logo medias" />
                                    </a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                    <?php endif; ?> -->
                    <!-- ///////////////////////////////////////////////////////////////////// -->
                </div>
                <nav>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'menu_footer',)
                    ); ?>
                    <p class="copyright">
                        ᴹᴰ Marque déposée de Coramark inc. Copyright 2011 -
                        2021, Coramark inc. Chez Cora : Déjeuners et dîners.
                        Tous droits réservés.
                    </p>
                </nav>
            </footer>

            <section class="footer--mobile">
                <p class="copyright--mobile">
                    ᴹᴰ Marque déposée de Coramark inc. Copyright 2011 - 2021,
                    Coramark inc. Chez Cora : Déjeuners et dîners. Tous droits
                    réservés.
                </p>
            </section>
        </div>

        <?php wp_footer(); ?>
    </body>
</html>