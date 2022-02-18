<?php ob_start(); ?>
<div class="leftHolder"></div>
    <ul role="menu">
        <li role="none"><a href="#services" role="menuitem"><?php echo strtoupper('Services'); ?></a></li>
        <li role="none"><a href="#skills" role="menuitem"><?php echo strtoupper('Competences'); ?></a></li>
        <li role="none"><a href="#portfolio" role="menuitem"><?php echo strtoupper('Portfolio'); ?></a></li>
        <li role="none"><a href="#prices" role="menuitem"><?php echo strtoupper('Tarifs'); ?></a></li>
        <li role="none"><a href="#about" role="menuitem"><?php echo strtoupper('A propos'); ?></a></li>
        <li role="none"><a href="#contact" role="menuitem"><?php echo strtoupper('Contact'); ?></a></li>
    </ul>
<div class="rightHolder"></div>

<?php $navbar= ob_get_clean(); ?>