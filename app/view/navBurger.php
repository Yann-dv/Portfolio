<?php ob_start(); ?>
<div id="draggable_burger_container" data-boxtype="drop" data-appendto="true">
    <label for="toggle" draggable="true" id="draggable_burger">☰</label>
        <input type="checkbox" id="toggle">
     
        <div class="burger_links">
            <a href="#services"><?php echo strtoupper('Services'); ?> </a>
            <a href="#skills"><?php echo strtoupper('Competences'); ?></a>
            <a href="#portfolio"><?php echo strtoupper('Portfolio'); ?></a>
            <a href="#prices"><?php echo strtoupper('Tarifs'); ?></a>
            <a href="#about"><?php echo strtoupper('A propos'); ?></a>
            <a href="#contact"><?php echo strtoupper('Contact'); ?></a>
        </div>
        <div id="arrowAnim" class="hidden">
            <div class="arrowSliding">
                <div class="arrow"></div>
            </div>
            <div class="arrowSliding delay1">
                <div class="arrow"></div>
            </div>
            <div class="arrowSliding delay2">
                <div class="arrow"></div>
            </div>
            <div class="arrowSliding delay3">
                <div class="arrow"></div>
            </div>
        </div>
</div>

<?php $navburger= ob_get_clean(); ?>