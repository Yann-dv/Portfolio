<?php ob_start(); ?>
    <div class="sectionHeader">
        <h3 class="sectionTitle"><?php echo strtoupper('Mes services') ?></h3>
        <p>Des prestations adaptées à vos besoins</p>
        <hr class="under_border">
    </div>

    <div class="servicesContainer">
        <div class="leftServicesList">
            <div class="item-service">
                <div class="iconBlock">
                    <i class="fas fa-globe"></i>
                </div>
                <div>
                    <h4><?php echo strtoupper('Gestion de projets web'); ?></h4>
                    <p>Site vitrine, e-commerce, réseau social, évènementiel, corporate, application mobile</p>
                </div>
            </div>
            <div class="item-service">
                <div class="iconBlock">
                    <i class="fa fa-pencil-square-o"></i>
                </div>
                <div>
                    <h4><?php echo strtoupper('Integration Web'); ?></h4>
                    <p>Des intégrations (X)HTML / CSS respectueuses des standards du Web</p>
                </div>
            </div>
            <div class="item-service">
                <div class="iconBlock">
                    <i class="fas fa-wrench"></i>
                </div>
                <div>
                    <h4><?php echo strtoupper('Referencement web'); ?></h4>
                    <p>Affichage sémantique des informations, des pages propres pour un référencement optimal.</p>
                </div>
            </div>
            <div class="item-service">
                <div class="iconBlock">
                    <i class="fa fa-check-square-o"></i>
                </div>
                <div>
                    <h4><?php echo strtoupper('Developpements specifiques'); ?></h4>
                    <p>Des outils adaptés à votre coeur de métier, applications & solutions personnalisées</p>
                </div>
            </div>
        </div>

        <div class="rightServicesList">
        <div class="item-service">
                <div class="iconBlock">
                    <i class="fa fa-pencil"></i>
                </div>
                <div>
                    <h4><?php echo strtoupper('Conception graphique et Webdesign'); ?></h4>
                    <p>Logos, templates Web, plaquettes publicitaires, cartes de visite, newsletters...</p>
                </div>
            </div>
            <div class="item-service">
                <div class="iconBlock">
                    <i class="fa fa-refresh"></i>
                </div>
                <div>
                    <h4><?php echo strtoupper('Dynamisme des pages'); ?></h4>
                    <p>Des animations de contenu non intrusives pour embellir votre projet.</p>
                </div>
            </div>
            <div class="item-service">
                <div class="iconBlock">
                    <i class="fa fa-cog"></i>
                </div>
                <div>
                    <h4><?php echo strtoupper('Interface d\'administration'); ?></h4>
                    <p>Outils spécifiques au bon fonctionnement de votre entreprise.</p>
                </div>
            </div>
            <div class="item-service">
                <div class="iconBlock">
                    <i class="fa fa-retweet"></i>
                </div>
                <div>
                    <h4><?php echo strtoupper('Responsive design'); ?></h4>
                    <p>Compatible tous supports, tablette & application mobile. Développement mobile-first</p>
                </div>
            </div>
        </div>
    </div>

<?php $services= ob_get_clean(); ?>