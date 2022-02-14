<?php ob_start(); ?>
<section class="sectionHeader">
        <h3 class="sectionTitle"><?php echo strtoupper('Mes competences') ?></h3>
        <p>Des prestations adaptées à vos besoins</p>
        <hr class="under_border">
    </section>

    <section class="skillsContainer">
        <div class="leftSkillsList">
            <div class="skillsList">
                <ul>
                    <h4><?php echo strtoupper('Domaines de competences'); ?></h4>
					<li class="item-skills reduced">
						<strong>Gestion de projets web</strong>
						<br>
						<em class="skillsDesc">Site vitrine, corporate, évènementiel, e-commerce, intranet, application mobile.</em>
					</li>
					<li class="item-skills reduced">
						<strong>Conception graphique &amp; Webdesign</strong>
						<br>
						<em class="skillsDesc">Logos, templates Web, plaquettes publicitaires, cartes de visite, newsletters...</em>											
					</li>
					<li class="item-skills reduced">
						<strong>Applications spécifiques et Interface d'administration</strong>
						<br>
						<span class="skillsDesc"><abbr title="Hypertext Preprocessor">PHP</abbr> - <abbr title="My Structured Query Language">MySQL</abbr> - <abbr title="Structured Query Language from POSTGRE">PostgreSQL</abbr>
                        / <abbr title="Structured Query Language">SQL</abbr></span>										
					</li>
					<li class="item-skills reduced">
						<strong>Mise en place / Modification / Gestion de <abbr title="Content Management System">CMS</abbr></strong> 
						<br>
						<em class="skillsDesc">Wordpress, Wix</em>											
					</li>
					<li class="item-skills reduced">
						<strong> Intégration <abbr title="HyperText Markup Language">HTML</abbr> / <abbr title="Cascading Style Sheets">CSS</abbr></strong>
						<br>
						<em class="skillsDesc">Codage à partir de 0 en respectant les standards du développement Web</em>
					</li>
					<li class="item-skills reduced">
						<strong>Dynamisme des pages par <abbr title="Langage de développement web orienté client">JavaScript</abbr></strong> 
						<br>
						<em class="skillsDesc">jQuery, Express, Node.Js, VueJS</em>
					</li>
					<li class="item-skills reduced">
						<strong>Validation <abbr title="World Wide Web Consortium">W3C</abbr>, <abbr title="Web Accessibility Initiative">WAI</abbr> &amp; référencement naturel <abbr title="Search Engine Optimisation">SEO</abbr></strong>
						<br>
						<em class="skillsDesc">Accessibilité &amp; ergonomie des pages web</em>											
					</li>
					<li class="item-skills reduced">
						<strong>Conception multi-plateformes</strong>
						<br>
						<em class="skillsDesc">Compatible tous supports, tablette &amp; application mobile</em>
					</li>
                </ul>
			</div>
        </div>

        <div class="rightSkillsList">
            <div class="skillsLevel">
                <ul class="skillsList_dev">
                <h4><?php echo strtoupper('Languages de programmation'); ?></h4>
                    <li class="item-skills reduced">
                        <div class="progress-bar">
                            <span data-value="85">HTML5/CSS3</span>
                            <progress value="85" max="100"></progress>
                        </div>
					</li>
                    <li class="item-skills reduced">
                        <div class="progress-bar">
                            <span data-value="70">JavaScript</span>
                            <progress value="70" max="100"></progress>
                        </div>
					</li>
					<li class="item-skills reduced">
                        <div class="progress-bar">
                            <span data-value="60">PHP</span>
                            <progress value="60" max="100"></progress>
                        </div>
					</li>
					<li class="item-skills reduced">
                        <div class="progress-bar">
                            <span data-value="50">MySQL, PostgreSQL</span>
                            <progress value="50" max="100"></progress>
                        </div>
					</li>
                </ul>
                <ul class="skillsList_tools">
                <h4><?php echo strtoupper('Outils de developpement : frameworks, CMS'); ?></h4>
                <li class="item-skills reduced">
                        <div class="progress-bar">
                            <span data-value="75">Bootstrap, Symfony</span>
                            <progress value="75" max="100"></progress>
                        </div>
					</li>
                    <li class="item-skills reduced">
                        <div class="progress-bar">
                            <span data-value="70">VueJS, ExpressJS, Node.JS</span>
                            <progress value="70" max="100"></progress>
                        </div>
					</li>
                    <li class="item-skills reduced">
                        <div class="progress-bar">
                            <span data-value="70">Api REST</span>
                            <progress value="70" max="100"></progress>
                        </div>
					</li>
                    <li class="item-skills reduced">
                        <div class="progress-bar">
                            <span data-value="80">Wordpress, Wix</span>
                            <progress value="80" max="100"></progress>
                        </div>
					</li>
                </ul>
                <ul class="skillsList_design">
                <h4><?php echo strtoupper('Outils de conception graphique'); ?></h4>
                <li class="item-skills reduced">
                        <div class="progress-bar">
                            <span data-value="75">PHOTOSHOP</span>
                            <progress value="75" max="100"></progress>
                        </div>
					</li>
                    <li class="item-skills reduced">
                        <div class="progress-bar">
                            <span data-value="50">ILLUSTRATOR</span>
                            <progress value="50" max="100"></progress>
                        </div>
					</li>
                </ul>
			</div>
        </div>
</section>

<?php $skills= ob_get_clean(); ?>