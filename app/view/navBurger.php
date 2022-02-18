<?php ob_start(); ?>
<div id="draggable_burger_container" data-boxtype="drop" data-appendto="true">
    <label for="toggle" draggable="true" id="draggable_burger">☰</label>
        <input type="checkbox" id="toggle">
     
        <div class="burger_links" role="menu" aria-haspopup="true" aria-controls="burger_links">
            <a href="#services" role="menuitem"><?php echo strtoupper('Services'); ?> </a>
            <a href="#skills" role="menuitem"><?php echo strtoupper('Competences'); ?></a>
            <a href="#portfolio" role="menuitem"><?php echo strtoupper('Portfolio'); ?></a>
            <a href="#prices" role="menuitem"><?php echo strtoupper('Tarifs'); ?></a>
            <a href="#about" role="menuitem"><?php echo strtoupper('A propos'); ?></a>
            <a href="#contact" role="menuitem"><?php echo strtoupper('Contact'); ?></a>
        </div>
        <div id="arrowAnim" class="hidden" aria-hidden="true">
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