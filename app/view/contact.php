<?php ob_start(); ?>
<div class="sectionHeader">
        <h3 class="sectionTitle"><?php echo strtoupper('Contact') ?></h3>
        <p>Contactez moi si vous souhaitez des informations, un devis, etc.</p>
        <hr class="under_border">
</div>

<div class="contactContainer">
        <span class="contactLink"><a href="#contactModal" title="ouvrir le formulaire de contact">
                FORMULAIRE DE CONTACT</a>
        </span>
</div>
<?php $contact= ob_get_clean(); ?>