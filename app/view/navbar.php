<?php ob_start(); ?>
<div class="leftHolder"></div>
    <ul role="menu">
        <a href="#services" role="menuitem"><li role="none"><?php echo strtoupper('Services'); ?> </li></a>
        <a href="#skills" role="menuitem"><li role="none"><?php echo strtoupper('Competences'); ?></li></a>
        <a href="#portfolio" role="menuitem"><li role="none"><?php echo strtoupper('Portfolio'); ?></li></a>
        <a href="#prices" role="menuitem"><li role="none"><?php echo strtoupper('Tarifs'); ?></li></a>
        <a href="#about" role="menuitem"><li role="none"><?php echo strtoupper('A propos'); ?></li></a>
        <a href="#contact" role="menuitem"><li role="none"><?php echo strtoupper('Contact'); ?></li></a>
        </ul>
<div class="rightHolder"></div>

<?php $navbar= ob_get_clean(); ?>