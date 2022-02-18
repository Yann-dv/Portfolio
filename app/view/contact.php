<?php ob_start(); ?>
<h3 class="sectionTitle"><?php echo strtoupper('Contact') ?></h3>
<section class="sectionHeader">
        <h4>Contactez moi si vous souhaitez des informations, un devis, etc.</h4>
        <hr class="under_border">
</section>

<section class="contactContainer">
        <a href="#contactModal" title="ouvrir le formulaire de contact">
                <span class="contactLink modal-trigger rounded">FORMULAIRE DE CONTACT</span>
        </a>
        
</section>
<?php $contact= ob_get_clean(); ?>