<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Accueil - Cora</title>
        <link
            rel="shortcut icon"
            type="image/jpg"
            href="assets/images/favicon.png"
        />

        <link rel="stylesheet" href="styles/main.css" />
        <script src="scripts/main.js" defer></script>
    </head>

    <body>
        <header class="header" data-component="Header">
            <aside class="menu_principal">
                <a href="index.html">
                    <img
                        class="logoSite"
                        src="assets/images/logo-chez-cora-dejeuners-diners 1.png"
                        alt=""
                    />
                </a>

                <ul>
                    <li><a href="menu.html">Déjeuner</a></li>
                    <li><a href="menu.html#favoris">Favoris du midi</a></li>
                    <li><a href="menu.html#enfants">Enfants</a></li>
                    <li><a href="cartecadeau.html">Carte-cadeau</a></li>
                    <li><a href="fidelite.html">Fidélité</a></li>
                    <li><a href="">Devenir Franchisé</a></li>
                </ul>

                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="">Moi j'déjeune</a></li>
                    <li><a href="">Infolettre</a></li>
                    <li><a href="apropos.html">À propos</a></li>
                    <li><a href="">Emplois</a></li>
                    <li><a href="contact.html">Nous joindre</a></li>
                </ul>

                <div class="langue">
                    <p>English</p>
                </div>

                <div class="trouver_restaurant">
                    <p>
                        Trouver un <br />
                        restaurant
                    </p>
                    <a href="">
                        <button>
                            <svg class="icon icon--lg icon--carte">
                                <use xlink:href="#icon-carte"></use>
                            </svg>
                            <p class="coordonnerU">
                                Province/Ville/Code postal
                            </p>
                            <svg class="icon icon--xs">
                                <use xlink:href="#icon-fleche"></use>
                            </svg>
                        </button>
                    </a>
                </div>
            </aside>

            <nav class="navMobile">
                <div class="hamburgerEtLogo wrapper">
                    <div class="menu-hamburger js-toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <nav class="mobileModal">
                    <a href="index.html"
                        ><img
                            src="assets/images/logo-chez-cora-dejeuners-diners 1.png"
                            alt=""
                    /></a>
                    <ul>
                        <li><a href="menu.html">Déjeuner</a></li>
                        <li>
                            <a href="menu.html#favoris">Favoris du midi</a>
                        </li>
                        <li><a href="menu.html#enfants">Enfants</a></li>
                        <li><a href="cartecadeau.html">Carte-cadeau</a></li>
                        <li><a href="fidelite.html">Fidélité</a></li>
                        <li><a href="">Devenir Franchisé</a></li>
                    </ul>

                    <ul>
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="">Moi j'déjeune</a></li>
                        <li><a href="">Infolettre</a></li>
                        <li><a href="apropos.html">À propos</a></li>
                        <li><a href="">Emplois</a></li>
                        <li><a href="contact.html">Nous joindre</a></li>
                    </ul>

                    <div class="langue">
                        <p>English</p>
                    </div>

                    <div class="trouver_restaurant">
                        <p>
                            Trouver un <br />
                            restaurant
                        </p>
                        <a href="">
                            <button>
                                <svg class="icon icon--lg icon--carte">
                                    <use xlink:href="#icon-carte"></use>
                                </svg>
                                <p class="coordonnerU">
                                    Province/Ville/Code postal
                                </p>
                                <svg class="icon icon--xs">
                                    <use xlink:href="#icon-fleche"></use>
                                </svg>
                            </button>
                        </a>
                    </div>
                </nav>
            </nav>
        </header>

        <div class="wrapper">
            <section class="hero">
                <div
                    class="swiper-container swiper--artistesVedettes"
                    data-component="Carousel"
                >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img
                                src="assets/images/accueil/Hero.png"
                                alt="Un artiste"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="assets/images/accueil/Hero.png"
                                alt="Un artiste"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="assets/images/accueil/Hero.png"
                                alt="Un artiste"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="assets/images/accueil/Hero.png"
                                alt="Un artiste"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="assets/images/accueil/Hero.png"
                                alt="Un artiste"
                            />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>

                    <h1>Concours cora tout l'été!</h1>
                </div>
            </section>

            <section class="subTittle">
                <p>
                    Nous servons plus de 250 000 petits déjeuners chaque
                    semaines à travers le pays. Venez, vous aussi, déjeuner avec
                    votre sourire chez Cora.
                </p>
            </section>
            <div class="divTop">
                <section class="sectionCassolettes">
                    <img
                        src="assets/images/accueil/Cassolettes.png"
                        alt="images des assiettes de cassolettes"
                    />
                    <h2>Nos cassolettes voyagent jusqu'à vous!</h2>
                    <p>
                        Laissez-vous tenter par l'une de nos réconfortantes
                        cassolettes, partout, tout le temps!
                    </p>
                </section>

                <section class="sectionFavorisAdos">
                    <img
                        src="assets/images/accueil/FavorisDesAdos.png"
                        alt="images des assiettes de cassolettes"
                    />
                    <h2>Favoris des ados</h2>
                    <p>
                        Les ados de tous âges raffolent de ces classiques
                        réinventés, conçus spécialement pour les appétits
                        délinquants.
                    </p>
                </section>
            </div>
        </div>

        <section class="sectionPlatsPartager">
            <img
                src="assets/images/accueil/bannierre1.png"
                alt="images des plats à partager"
            />
            <div class="wrapper">
                <h2>les plats à partager</h2>
                <p>
                    Laissez-vous tenter par l'une de nos réconfortantes
                    cassolettes, partout, tout le temps!
                </p>
            </div>
        </section>
        <section class="sectionConcours">
            <img
                src="assets/images/accueil/bannierre2.png"
                alt="images des concours"
            />
            <div class="wrapper">
                <h2>Concours Cora tout l’été</h2>
                <p>
                    Chaque semaine nous vous présenterons quatre endroits
                    inspirants où savourer un délicieux déjeuner Cora! Votez
                    pour votre endroit favori et courez la chance de gagner! Un
                    gagnant d’une carte-cadeau de 50$ chaque semaine jusqu’au
                    1er septembre 2021. Un grand prix de 250$.
                </p>
            </div>
        </section>
        <div class="wrapper">
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
                </div>
                <nav>
                    <ul>
                        <li><a href="">Emplois</a></li>
                        <li><a href="">Médias</a></li>
                        <li><a href="">Commentaires</a></li>
                        <li><a href="">Avis Légal</a></li>
                        <li><a href="">Accès Franchisé</a></li>
                        <li><a href="">Valeurs Nutritives</a></li>
                        <li><a href="">Infolettre</a></li>
                    </ul>
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
    </body>
</html>