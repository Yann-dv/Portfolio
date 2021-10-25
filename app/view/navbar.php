<?php ob_start(); ?>
<div class="leftHolder"></div>
<nav>
    <ul>
        <a href="#services"><li><?php echo strtoupper('Services'); ?> </li></a>
        <a href="#skills"><li><?php echo strtoupper('Competences'); ?></li></a>
        <a href="#portfolio"><li><?php echo strtoupper('Portfolio'); ?></li></a>
        <a href="#prices"><li><?php echo strtoupper('Tarifs'); ?></li></a>
        <a href="#about"><li><?php echo strtoupper('A propos'); ?></li></a>
        <a href="#contact"><li><?php echo strtoupper('Contact'); ?></li></a>
        </ul>
</nav>
<div class="rightHolder"></div>

<?php $navbar= ob_get_clean(); ?>