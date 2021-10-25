<?php ob_start(); ?>
<div class="leftHolder"></div>
<nav>
    <ul>
        <a href="#services"><li>Services</li></a>
        <a href="#skills"><li>Compétences</li></a>
        <a href="#portfolio"><li>Portfolio</li></a>
        <a href="#prices"><li>Tarifs</li></a>
        <a href="#about"><li>A propos</li></a>
        <a href="#contact"><li>Contact</li></a>
        </ul>
</nav>
<div class="rightHolder"></div>

<?php $navbar= ob_get_clean(); ?>