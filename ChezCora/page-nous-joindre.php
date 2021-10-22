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
                    <h1>
                        Communiquez <br />
                        Avec nous!
                    </h1>
                </div>
            </section>
            <section class="subTittle">
                <h2 class="sub__title desir">
                    Notre désir est de vous offrir une expérience sans pareille.
                </h2>
            </section>
            <section class="commentaires">
                <h3 class="sub__title">
                    Vous aimeriez nous faire part de vos commentaires?
                </h3>
                <a href="contact.html#form">
                    <p>Remplissez notre formulaire plus bas.</p>
                </a>
            </section>
            <section class="ecrire">
                <h3 class="sub__title">Nous écrire</h3>
                <p>
                    Franchises Cora inc.<br />16, rue Sicard, local 50<br />Sainte-Thérèse
                    (Québec)<br />J7E 3W7
                </p>
            </section>
            <section class="internet">
                <h3 class="sub__title">Nous contacter par internet</h3>
                <p>
                    Téléphone : 450 435-2426<br />Télécopieur : 450 435-2428<br />info@chezcora.com
                </p>
            </section>
            <section class="formulaire">
                <form
                    action=""
                    class="form"
                    autocomplete="off"
                    data-component="Form"
                    id="form"
                >
                    <div class="form__body">
                        <fieldset class="grid">
                            <div class="input">
                                <label class="input__label" for="fullname"
                                    >Nom complet</label
                                >
                                <input
                                    class="input__element"
                                    type="text"
                                    name="fullname"
                                    id="fullname"
                                    placeholder="Roméo Girard"
                                    required
                                />
                            </div>

                            <div class="input">
                                <label class="input__label" for="email"
                                    >Courriel</label
                                >
                                <input
                                    class="input__element"
                                    type="email"
                                    name="email"
                                    id="email"
                                    placeholder="email@gmail.com"
                                    required
                                />
                            </div>

                            <div class="input">
                                <label class="input__label" for="phone"
                                    >Téléphone (optionnel)</label
                                >
                                <input
                                    class="input__element"
                                    type="tel"
                                    name="phone"
                                    id="phone"
                                    placeholder="(123) 456 7890"
                                    pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$"
                                />
                            </div>

                            <div class="input">
                                <label class="input__label" for="zip"
                                    >Code postal</label
                                >
                                <input
                                    class="input__element"
                                    type="text"
                                    name="zip"
                                    id="zip"
                                    placeholder="H1Y 0A9"
                                />
                            </div>

                            <div class="input textarea u-grid-fullwidth">
                                <label class="input__label" for="comment"
                                    >Commentaires</label
                                >
                                <textarea
                                    class="input__element"
                                    name="comment"
                                    id="comment"
                                    required
                                ></textarea>
                            </div>
                        </fieldset>

                        <footer class="form__footer">
                            <button class="button">Envoyer</button>
                        </footer>
                    </div>
                    <div class="form__confirmation">
                        <h2>Merci pour votre commentaire</h2>
                        <p>Votre formulaire a bien été envoyé!</p>
                    </div>
                </form>
            </section>
            <?php get_footer(); ?>