<?php ob_start(); ?>
<h3 class="sectionTitle"><?php echo strtoupper('A propos') ?></h3>
<section class="sectionHeader">
        <h4>Un développeur web passionné !</h4>
        <hr class="under_border">
</section>
<section class="aboutContainer">
        <img src="./public/image/avatar.jpg" alt="Image portrait de moi-même" title="Moi-même">
        <p>
        Ma passion pour l'informatique et la programmation commence dès l'adolescence, dans les années 2000. 
        Gameur, passionné de technologies et codeur à mes heures perdues (je ne remercierais jamais assez l'éditeur
        de modules de NeverWinter Nights !), cette passion n'est à l'époque qu'un 
        loisir, que je mettrais d'ailleurs au second plan (sans jamais arrêter cependant) durant ma carrière dans 
        les médecines alternatives.
        En effet, après une période de travail de 10 ans dans le domaine de la santé, je suis revenu à mes 
        premières passions : coder et développer ! C'est au début de l'année 2021 que j'entreprend de me 
        reconvertir pour le métier de Développeur Web. Je suis alors une formation de 6 mois auprès d'
        <a class="external_link" href="https://openclassrooms.com/fr/paths/185-developpeur-web" target="_blank">
        Openclassrooms.
        </a>
        </p>
       <p>Cette formation s'avèrera extremement riche en enseignements et en projets professionnalisants, et c'est fort des connaissances acquises durant cette formation, 
        ainsi que celles que j'ai développé en me formant en parallèle en autodidacte que je démarre ma carrière de Développeur Web !
        Depuis ma reconversion, j'ai pu participer à différentes projets de développement, notamment des créations de sites vitrines pour des professionnels du sport.
        </p>
</section>
<?php $about= ob_get_clean(); ?>