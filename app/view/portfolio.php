<?php ob_start(); ?>

<div class="sectionHeader">
        <h3 class="sectionTitle"><?php echo strtoupper('Mes projets') ?></h3>
        <p>Apperçu des projets sur lesquels j'ai travaillé</p>
        <hr class="under_border">
</div>

<div class="skillsContainer" id="portfolioList">
</div>

<?php echo '<script type="text/javascript" src="../app.js"></script>' ?>

<?php $portfolio= ob_get_clean(); ?>