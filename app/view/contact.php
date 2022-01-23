<?php ob_start(); ?>
<div class="sectionHeader">
        <h3 class="sectionTitle"><?php echo strtoupper('Contact') ?></h3>
        <p>Contactez moi si vous souhaitez des informations, un devis, etc.</p>
        <hr class="under_border">
</div>

<div class="contactContainer">
        <a href="#contactModal" title="ouvrir le formulaire de contact">
                <span class="contactLink modal-trigger rounded">FORMULAIRE DE CONTACT</span>
        </a>
        
</div>
<?php $contact= ob_get_clean(); ?>