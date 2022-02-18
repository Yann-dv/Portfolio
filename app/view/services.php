<?php ob_start(); ?>
<h3 class="sectionTitle"><?php echo strtoupper('Mes services') ?></h3>
    <section class="sectionHeader">
        
        <p>Des prestations adaptées à vos besoins</p>
        <hr class="under_border">
    </section>

    <section class="servicesContainer">
            <div class="item-service">
                <div class="iconBlock">
                    <span class="fa-stack">
                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                        <i class="fas fa-stack-1x fa-globe"></i>
                    </span> 
                </div>
                <div class="service_desc">
                    <h4><?php echo strtoupper('Gestion de projets web'); ?></h4>
                    <p>Site vitrine, e-commerce, réseau social, évènementiel, corporate, application mobile</p>
                </div>
            </div>
            <div class="item-service">
                <div class="iconBlock">
                <span class="fa-stack">
                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                        <i class="fa fa-stack-1x fa-pencil-square-o"></i>
                    </span>
                </div>
                <div class="service_desc">
                    <h4><?php echo strtoupper('Integration Web'); ?></h4>
                    <p>Des intégrations (X)HTML / CSS respectueuses des standards du Web</p>
                </div>
            </div>
            <div class="item-service">
                <div class="iconBlock">
                <span class="fa-stack">
                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                        <i class="fas fa-stack-1x fa-wrench"></i>
                    </span>
                </div>
                <div class="service_desc">
                    <h4><?php echo strtoupper('Referencement web'); ?></h4>
                    <p>Affichage sémantique des informations, des pages propres pour un référencement optimal.</p>
                </div>
            </div>
            <div class="item-service">
                <div class="iconBlock">
                <span class="fa-stack">
                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                        <i class="fa fa-stack-1x fa-check-square-o"></i>
                    </span>
                </div>
                <div class="service_desc">
                    <h4><?php echo strtoupper('Developpements specifiques'); ?></h4>
                    <p>Des outils adaptés à votre coeur de métier, applications & solutions personnalisées</p>
                </div>
            </div>



            <div class="item-service ">
                    <div class="iconBlock">
                    <span class="fa-stack">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-stack-1x fa-pencil"></i>
                    </span>
                    </div>
                    <div class="service_desc">
                        <h4><?php echo strtoupper('Conception graphique'); ?></h4>
                        <p>Logos, templates Web, plaquettes publicitaires, cartes de visite, newsletters...</p>
                    </div>
            </div>
            <div class="item-service">
                <div class="iconBlock">
                <span class="fa-stack">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-stack-1x fa-refresh"></i>
                </span>
                </div>
                <div class="service_desc">
                    <h4><?php echo strtoupper('Dynamisme des pages'); ?></h4>
                    <p>Des animations de contenu non intrusives pour embellir votre projet.</p>
                </div>
            </div>
            <div class="item-service">
                <div class="iconBlock">
                <span class="fa-stack">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-stack-1x fa-cog"></i>
                </span>
                </div>
                <div class="service_desc">
                    <h4><?php echo strtoupper('Interface d\'administration'); ?></h4>
                    <p>Outils spécifiques au bon fonctionnement de votre entreprise.</p>
                </div>
            </div>
            <div class="item-service">
                <div class="iconBlock">
                <span class="fa-stack">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-stack-1x fa-retweet"></i>
                </span>
                </div>
                <div class="service_desc">
                    <h4><?php echo strtoupper('Responsive design'); ?></h4>
                    <p>Compatible tous supports, tablette & application mobile. Développement mobile-first</p>
                </div>
            </div>
    </section>


<?php $services= ob_get_clean(); ?>