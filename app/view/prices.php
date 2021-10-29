<?php ob_start(); ?>
<div class="sectionHeader">
        <h3 class="sectionTitle"><?php echo strtoupper('Tarifs') ?></h3>
        N'hésitez pas à demander un devis gratuit pour votre projet !
        <hr class="under_border">
</div>
<div class="pricesContainer">
    <div class="prices classic_website">
      <?php echo '<p class="priceHeader">' . strtoupper('Site vitrine personnalise') . '' . '<hr class="under_border"/>'?>
		<p>À partir de 1000€ *</p>
			<span class="second-priceList-color">
				Développé sous Wordpress (Outil de gestion de contenu)
			</span>
			<span>
				
				Charte graphique à partir d'une maquette pré-définie
			</span>
				<span class="second-priceList-color">
					Sélection d'une palette de couleur
				</span>
				<span>
					Domaine et hébergement + e-mail pendant 12 mois
				</span>						
					<span class="second-priceList-color">
						Interface administrateur standard
					</span>
					<span>
						Site responsive (adapté tous supports)
					</span>
					<span class="second-priceList-color">
						Mise en place du contenu (textes &amp; images)
					</span>
					<span>
						Formulaire de contact
					</span>
					<span class="second-priceList-color">
						Liens de partage sur les réseaux sociaux
					</span>
					<span>
						Optimisation du référencement naturel
					</span>
					<span class="second-priceList-color">
						Statistiques de visite
					</span>
					<span>
						Mise en ligne du site
					</span>
					<span class="second-priceList-color">
						Formation à l'utilisation du site
					</span>
	    <a href="#" >DEMANDER UN DEVIS</a>
	</div>
    <div class="prices custom_website">
        <?php echo '<p class="priceHeader">' . strtoupper('Site vitrine personnalise') . ''  . '<hr class="under_border"/>'?>
		<p>À partir de 1600€ *</p>
			<span class="second-priceList-color">
				 Développé sous Wordpress (Outil de gestion de contenu)
			</span>
			<span>
				
				Charte graphique tirée d'une maquette pré-définie
			</span>
				<span class="second-priceList-color">
					Sélection d'une palette de couleur
				</span>
				<span>
					
					Domaine et hébergement + e-mail pendant 12 mois
				</span>						
					<span class="second-priceList-color">
					    
						Interface administrateur standard
					</span>
					<span>
						
						Site responsive (adapté tous supports)
					</span>
					<span class="second-priceList-color">
						
						Mise en place du contenu (textes &amp; images)
					</span>
					<span>
						
						Formulaire de contact
					</span>
					<span class="second-priceList-color">
						
						Liens de partage sur les réseaux sociaux
					</span>
					<span>

						Optimisation du référencement
					</span>
					<span class="second-priceList-color">
						Statistiques de visite
					</span>
					<span>
						
						Mise en ligne du site
					</span>
					<span class="second-priceList-color">
						
						Formation utilisation du site
					</span>
	    <a href="#" >DEMANDER UN DEVIS</a>
	</div>
    <div class="prices ecommerce">
        <?php echo '<p class="priceHeader">' . strtoupper('Site') . '<br/>' . strtoupper('e-commerce') . '' . '<hr class="under_border"/>' ?>
		<p>À partir de 3000 € *</p>
            <span class="second-priceList-color">
				Développé sous WORDPRESS (Outil de gestion de contenu)
			</span>
			<span>
				Charte graphique à partir d'une maquette pré-définie
			</span>
			<span class="second-priceList-color">
				Sélection d'une palette de couleur
			</span>
			<span>
				Domaine + hébergement + e-mail pendant 12 mois
			</span>						
		    <span class="second-priceList-color">
				Interface administrateur - STANDARD
			</span>
			<span>		
			    Site responsive (adapté tous supports)			
			</span>
			<span class="second-priceList-color">		
						
						Mise en place du contenu (textes &amp; images)
					</span>
					<span>
						
						Formulaire de contact
					</span>
					<span class="second-priceList-color">
						
						Liens de partage sur les réseaux sociaux
					</span>
					<span>
						Optimisation du référencement
					</span>
					<span class="second-priceList-color">
						Statistiques de visite
					</span>
					<span>
						
						Mise en ligne du site
					</span>
					<span class="second-priceList-color">
						
						Formation utilisation du site
					</span>		
	    <a href="#" >DEMANDER UN DEVIS</a>
	</div>
    <div class="prices maintenance">
        <?php echo '<p class="priceHeader">' . strtoupper('Maintenance') . '<br/>' . strtoupper('de site') . '' . '<hr class="under_border"/>' ?>
		<p>Forfait - 400€ *</p>
			<span class="second-priceList-color">
			    Développé sous Wordpress (Outil de gestion de contenu)
			</span>
			<span>
				Charte graphique à partir d'une maquette pré-définie
			</span>
            <span class="second-priceList-color">
				Sélection d'une palette de couleur
            </span>
            <span>
				Domaine + hébergement + e-mail pendant 12 mois
			</span>						
			<span class="second-priceList-color"> 
			Interface administrateur - STANDARD
					</span>
					<span>
						
						Site responsive (adapté tous supports)
					</span>
					<span class="second-priceList-color">
						
						Mise en place du contenu (textes &amp; images)
					</span>
					<span>
						
						Formulaire de contact
					</span>
					<span class="second-priceList-color">
						
						Liens de partage sur les réseaux sociaux
					</span>
					<span>
						Optimisation du référencement
					</span>
					<span class="second-priceList-color">
						Statistiques de visite
					</span>
					<span>
						Mise en ligne du site
					</span>
					<span class="second-priceList-color">
						Formation utilisation du site
					</span>
		
	    <a href="#" >DEMANDER UN DEVIS</a>
	</div>
</div>
			

<?php $prices= ob_get_clean(); ?>