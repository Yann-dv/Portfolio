<?php ob_start(); ?>
<label for="toggle">☰</label>
    <input type="checkbox" id="toggle">
    <div class="burger_links">
        <a href="#services"><?php echo strtoupper('Services'); ?> </a>
        <a href="#skills"><?php echo strtoupper('Competences'); ?></a>
        <a href="#portfolio"><?php echo strtoupper('Portfolio'); ?></a>
        <a href="#prices"><?php echo strtoupper('Tarifs'); ?></a>
        <a href="#about"><?php echo strtoupper('A propos'); ?></a>
        <a href="#contact"><?php echo strtoupper('Contact'); ?></a>
    </div>

<?php $navburger= ob_get_clean(); ?>