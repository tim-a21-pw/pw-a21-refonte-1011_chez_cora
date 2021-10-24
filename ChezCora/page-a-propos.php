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
                <h1>Notre histoire</h1>
            </div>
        </section>
            <section class="histoire">
                <h2 class="subTitle">Notre histoire</h2>
                <p>
                    L’aventure de Cora Déjeuners et dîners débute en mai 1987,
                    alors que Cora achète un petit casse-croûte désaffecté dans
                    l’arrondissement de Saint-Laurent, à Montréal. Après
                    seulement quelques mois d'exploitation, Cora modifie la
                    vocation du casse-croûte et choisit de faire des déjeuners
                    sa spécialité. Alliant fruits, fromages, céréales,
                    omelettes, crêpes et pain doré, la magicienne Cora donne
                    naissance à une nouvelle gastronomie matinale au Québec qui
                    révolutionnera les habitudes de toute une génération.
                </p>
                <p>
                    S'inspirant des traditions familiales, des demandes de ses
                    clients et des suggestions quelquefois farfelues de ses
                    enfants, Cora compose ses nouveaux déjeuners en tenant aussi
                    compte des nouvelles tendances alimentaires axées sur la
                    santé. Améliorant, un à un, chacun des déjeuners
                    traditionnels, elle en invente une centaine d'autres. Chaque
                    nouvelle création bénéficie alors de sa propre illustration
                    fixée au mur du petit casse-croûte du boulevard de la
                    Côte-Vertu. Cette imagerie du menu sera d'ailleurs perpétuée
                    par les fameuses affiches de plats qui décorent toujours les
                    restaurants de la chaîne. Rapidement, le petit établissement
                    de « Côte-Vertu » fait salle comble. Les enfants de la
                    patronne quittent l'école pour lui venir en aide. Déjà, à
                    cette époque, aller manger au restaurant Chez Cora déjeuners
                    représente l'aventure gastronomique matinale par excellence.
                </p>
                <p>
                    La philosophie de Cora : « Des aliments et un service de
                    première qualité. Offrez aux gens ce qu’il y a de mieux et
                    ils viendront. Si nous servons le meilleur déjeuner en
                    ville, iront-ils ailleurs? » demande-t-elle. Très vite, on
                    constate que la réputation des déjeuners Cora entraîne un
                    achalandage qui dépasse nettement la capacité du
                    casse-croûte. On conclut alors que maman doit ouvrir un
                    second restaurant Chez Cora pendant que les enfants
                    s'occupent du petit de « Côte-Vertu ». En février 1990,
                    l'ouverture d'un deuxième Chez Cora déjeuners, sur le
                    boulevard Saint-Martin à Laval, confirme le succès de la
                    nouvelle formule de déjeuners dont on commence à parler dans
                    les journaux. Quelques mois plus tard, associée à une
                    ancienne compagne de travail, Cora ouvre un troisième Chez
                    Cora déjeuners dans un grand restaurant désaffecté, trois
                    fois plus gros que les deux premiers.
                </p>
                <p>
                    Cette nouvelle succursale remporte rapidement un vif succès,
                    et cinq autres Chez Cora déjeuners voient ensuite le jour.
                    La famille Cora s'agrandit, et plusieurs nouveaux
                    collaborateurs s'initient à l’entrepreneuriat. Ce sont les
                    enfants de Cora qui, les premiers, enseigneront tous les
                    rudiments de la nouvelle formule gagnante à ces partenaires
                    d'affaires. Encore et toujours, les restaurants Cora ont à
                    cœur de promouvoir l’importance du déjeuner auprès des
                    consommateurs et de créer pour eux des expériences
                    nutritives inoubliables en leur offrant des produits et un
                    service de qualité dans une chaleureuse atmosphère
                    familiale. Aujourd’hui, la famille Cora compte plus de 130
                    restaurants. Et l’aventure ne fait que commencer!
                </p>
            </section>
            <section class="fondatrice">
                <h2 class="subTitle">Notre fondatrice</h2>
                <p>
                    De l'initiative, de la persévérance, de la confiance en soi
                    et une montagne d'énergie : voilà les principaux ingrédients
                    qui composent la personnalité de la fondatrice des
                    restaurants Cora Déjeuners et dîners.
                </p>
                <h3 class="sub__title">
                    De la vie en Gaspésie à celle de mère
                </h3>
                <p>
                    Cora Mussely Tsouflidou est née à Caplan, un petit village
                    de la péninsule gaspésienne, au Québec. En 1960, elle
                    entreprend son cours classique à l'Institut Cardinal-Léger
                    de Montréal, où elle étudie toutes les matières nécessaires
                    au choix d’une profession libérale. Mais le destin en décide
                    autrement, et la jeune femme quitte le collège en dernière
                    année d'études pour se consacrer à un premier enfant arrivé
                    inopinément. La venue hâtive de deux autres enfants forcera
                    Cora à renoncer définitivement à une carrière
                    professionnelle. Qu'à cela ne tienne, Cora devient une
                    excellente maman à temps plein.
                </p>
                <h3 class="sub__title">Des bouches à nourrir</h3>
                <p>
                    Quelque 10 ans plus tard, lorsque son mari quitte la maison
                    familiale et qu'elle se voit obligée d'assumer seule la
                    survie de ses trois jeunes adolescents, Cora achète un petit
                    restaurant de quartier et s'y installe comme cuisinière dans
                    l'espoir de réussir à subvenir aux besoins de ses enfants.
                    Passionnée par le service à la clientèle, elle a tôt fait de
                    remplir l'établissement et celui-ci triple de valeur. Elle
                    le vend et s'engage comme hôtesse dans un grand restaurant
                    où elle gravit les échelons jusqu’au rang d’associée
                    minoritaire. Pendant ces cinq années, Cora perfectionne ses
                    connaissances en restauration et finit par en maîtriser tous
                    les aspects.
                </p>
                <h3 class="sub__title">
                    Un nouveau départ, une deuxième famille
                </h3>
                <p>
                    En mai 1987, Cora rachète un petit casse-croûte désaffecté
                    sur le boulevard de la Côte-Vertu, dans l’arrondissement de
                    Saint-Laurent, et tente une nouvelle aventure qui, cette
                    fois, la mènera beaucoup plus loin qu'elle n’aurait pu
                    l’imaginer.
                </p>
                <h3 class="sub__title">Toujours aussi passionnée!</h3>
                <p>
                    Encore aujourd’hui, Cora reste « branchée » sur la réalité
                    commerciale. Elle visite régulièrement les restaurants,
                    s’assurant du respect des normes de qualité tout en
                    demeurant en contact avec les clients, sa principale source
                    d’inspiration et de motivation. Cora s’implique dans la
                    conception des nouveaux plats, expérimentant de nouvelles
                    recettes qui pourraient ravir la clientèle.
                </p>
                <p>
                    Dans le monde des affaires, Mme Cora, une femme d’affaires
                    ayant réussi seule, est un bel exemple de réussite pour
                    l’entrepreneuriat québécois. En reconnaissance de son
                    apport, elle a reçu, en 2013, la Médaille du jubilé de
                    diamant de la reine Elizabeth II ainsi qu’un prix de
                    distinction honorifique de l’Association canadienne de la
                    franchise. Plus récemment, elle a été intronisée en 2015 au
                    Temple de la renommée du Conseil québécois de la franchise à
                    titre de Bâtisseur et a même été reconnue à l’international
                    en 2014 en remportant le prix Veuve Clicquot de la Femme
                    d’affaires. Elle a également reçu le Prix du gouverneur
                    général en 2003, le Grand Prix de l’entrepreneur d’Ernst &
                    Young dans la catégorie Fabrication et produits de
                    consommation, ainsi que le Tops in Hospitality Award du
                    magazine Food Service and Hospitality. Cora a aussi été
                    admise au Temple de la renommée de l’Association canadienne
                    des professionnels de la vente en 2004 ainsi qu’à celui de
                    l’Association canadienne de la franchise en 2005. En 2006,
                    Chez Cora déjeuners a été nommée l’une des 50 sociétés les
                    mieux gérées au Canada. Cora a reçu cette même année le prix
                    Femmes d’affaires du Québec dans la catégorie Entrepreneure,
                    grande entreprise, décerné par le Réseau des femmes
                    d’affaires du Québec.
                </p>
                <h3 class="sub__title">De mère en fils</h3>
                <p>
                    Depuis 2008, c’est Nicholas Tsouflidis, le plus jeune fils
                    de Cora Tsouflidou, qui porte le chapeau de président
                    d’entreprise. Nicholas a été impliqué dans l’entreprise
                    familiale dès son plus jeune âge et a occupé plusieurs
                    postes au sein d’un restaurant. C’est d’abord lors d’une
                    discussion concernant l’avenir de la bannière que Nicholas
                    fait part à sa mère de son intérêt d’un jour diriger
                    l’entreprise. Sa très vaste expérience dans les opérations
                    et la gestion quotidienne de la bannière de restaurants
                    ayant contribué à forger ses habilités et ses compétences,
                    Nicholas était alors devenu le choix indéniable pour remplir
                    les fonctions de président.
                </p>
            </section>
            <section class="franchisage">
                <h2 class="subtitle">L’aventure du franchisage</h2>
                <p>
                    Audacieuse et très motivée par le ravissement que suscite
                    son produit auprès des consommateurs, la famille Cora
                    entreprend de commercialiser son concept de déjeuners au
                    moyen du franchisage. Pour elle, exploiter le créneau des
                    déjeuners veut dire : le faire mieux que partout ailleurs.
                    L'équipe Cora cherche donc continuellement à se surpasser.
                    Peu à peu, elle acquiert une grande expertise en repas du
                    matin. Ce n'est pas pour rien qu'on présente aujourd'hui
                    Cora, la fondatrice, comme la reine du déjeuner au Québec.
                    Parce qu'elle aime cuisiner, Cora continue d'ouvrir des
                    restaurants jusqu'à ce qu'elle réalise qu'elle est capable
                    d'enseigner aux autres à le faire. C'est ainsi que la
                    famille découvre le principe même du franchisage :
                    transmettre sa recette du succès à des tiers, leur donner
                    accès à ses façons de faire et à son expertise. En 1993,
                    rêvant de voir des restaurants Chez Cora déjeuners partout
                    au Québec, la fondatrice étudie minutieusement cette
                    nouvelle perspective commerciale. Le franchisage devient
                    vite la stratégie d'affaires du groupe Cora, dont l'objectif
                    ultime est d’offrir ses déjeuners dans le plus d'endroits
                    possible, le plus souvent possible et au plus grand nombre
                    de clients possible.
                </p>
                <p>
                    Une belle aventure commence alors pour la nouvelle entité
                    commerciale appelée Franchises Cora inc., qui accordera une
                    première franchise en avril 1994 pour l'ouverture d'un
                    restaurant à Pointe-Claire, dans la banlieue ouest de
                    Montréal, puis plusieurs dizaines au cours des années
                    suivantes. En 2010, le nombre de franchises en activité au
                    Québec se chiffre à 55. Forte de cette réussite, l’équipe
                    Cora fait évoluer son objectif, qui devient : « Partout au
                    Canada ». En 2000, Cora fonde une nouvelle entité appelée
                    The Cora Franchise Group, et un premier établissement Cora's
                    Breakfast and Lunch ouvre ses portes à Nepean, en Ontario.
                    Grâce au travail de la nouvelle équipe, l’entreprise
                    continue de s’étendre, desservant ensuite le reste du marché
                    ontarien puis ceux des provinces de l’Atlantique et du
                    Manitoba, pour aujourd’hui assurer une présence d’un océan à
                    l’autre. Le résultat est impressionnant. En 2018, on recense
                    près de 130 restaurants du groupe, et plusieurs nouvelles
                    adresses verront le jour au cours des prochains mois. Le
                    réseau Cora sert en moyenne 12 000 litres de café, 60 000
                    crêpes et 317 000 œufs chaque semaine. Il est aujourd’hui
                    reconnu comme le chef de file de l’industrie du déjeuner au
                    Canada avec plus de 10 millions de clients satisfaits par
                    année.
                </p>
                <p>
                    Vous aimeriez faire partie de la famille Cora?
                    Renseignez-vous sur nos
                    <a href="#">occasions d’affaires</a>.
                </p>
            </section>
            <section class="fondation">
                <h2 class="subTitle">La Fondation Cora</h2>
                <p>
                    Créée au début de 1998, la Fondation Cora a pour mission de
                    venir en aide aux jeunes enfants dans le besoin. Elle
                    collabore avec des organismes à but non lucratif qu’elle
                    soutient et qui visent à améliorer la qualité de vie des
                    enfants d’ici. La Fondation est financée par des collectes
                    de dons et des événements spéciaux organisés par les
                    employés et les propriétaires de plus de 130 restaurants au
                    Canada. Depuis plusieurs années, la Fondation Cora s’associe
                    au Club des petits déjeuners afin d’aider à fournir aux
                    écoliers un petit déjeuner nutritif pour qu’ils puissent
                    entamer leur journée du bon pied. Les deux groupes partagent
                    les mêmes préoccupations quant au bien-être et à l’éducation
                    des jeunes enfants partout au pays.
                </p>
                <h3 class="sub__title">Communiquez avec la Fondation Cora</h3>
                <p>
                    Vous pouvez nous joindre aux coordonnées ci-dessous pour
                    demander de l’information concernant la Fondation ou pour
                    lui faire parvenir un don :
                </p>
                <ul>
                    <li>La Fondation Cora</li>
                    <li>
                        16, rue Sicard, local 50 Sainte-Thérèse (Québec) J7E 3W7
                    </li>
                    <li>Téléphone : 450 435-3900</li>
                    <li><a href="#">fondation@chezcora.com </a></li>
                    <li class="sub__title">Club des petits déjeuners</li>
                    <li>
                        <a href="www.clubdejeuner.org">www.clubdejeuner.org</a>
                    </li>
                </ul>
            </section>

            <?php get_footer(); ?>