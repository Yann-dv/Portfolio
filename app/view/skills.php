<?php ob_start(); ?>
<div class="sectionHeader">
        <h3 class="sectionTitle"><?php echo strtoupper('Mes competences') ?></h3>
        <p>Des prestations adaptées à vos besoins</p>
    </div>

    <div class="skillsContainer">
        <div class="leftSkillsList">
            <div class="skillsList">
                <ul>
                    <h4><?php echo strtoupper('Domaines de competences'); ?></h4>
					<li class="item-skills">
						<strong>Gestion de projets web</strong>
						<br>
						<em class="skillsDesc">Site vitrine, corporate, évènementiel, e-commerce, intranet, application mobile.</em>
					</li>
					<li class="item-skills">
						<strong>Conception graphique &amp; Webdesign</strong>
						<br>
						<em class="skillsDesc">Logos, templates Web, plaquettes publicitaires, cartes de visite, newsletters...</em>											
					</li>
					<li class="item-skills">
						<strong>Applications spécifiques et Interface d'administration</strong>
						<br>
						<span class="skillsDesc"><abbr title="Hypertext Preprocessor">PHP</abbr> - <abbr title="My Structured Query Language">MySQL</abbr> - <abbr title="Asynchronous JavaScript and XML">AJAX</abbr> / 
						<abbr title="Active Server Pages">ASP</abbr>.NET - <abbr title="C Sharp">C#</abbr> - <abbr title="Structured Query Language">SQL</abbr></span>										
					</li>
					<li class="item-skills">
						<strong>Mise en place / Modification / Gestion de <abbr title="Content Management System">CMS</abbr></strong> 
						<br>
						<em class="skillsDesc">Wordpress, Joomla, Prestashop, phpBB, IPBoard</em>											
					</li>
					<li class="item-skills">
						<strong> Intégration <abbr title="(eXtensible) HyperText Markup Language">(X)HTML</abbr> / <abbr title="Cascading Style Sheets">CSS</abbr></strong>
						<br>
						<em class="skillsDesc">Codage à la main respectueux des standards du Web</em>
					</li>
					<li class="item-skills">
						<strong>Dynamise des pages par <abbr title="Langage de développement web orienté client">JavaScript</abbr> / <abbr title="Asynchronous JavaScript and XML">AJAX</abbr></strong> 
						<br>
						<em class="skillsDesc">jQuery, Prototype, Mootools, Scriptaculous</em>
					</li>
					<li class="item-skills">
						<strong>Validation <abbr title="World Wide Web Consortium">W3C</abbr>, <abbr title="Web Accessibility Initiative">WAI</abbr> &amp; référencement naturel <abbr title="Search Engine Optimisation">SEO</abbr></strong>
						<br>
						<em class="skillsDesc">Accessibilité &amp; ergonomie des pages web</em>											
					</li>
					<li class="item-skills">
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
                <h4><?php echo strtoupper('competences en developpement'); ?></h4>
                    <li class="item-skills">
                        <div class="progress-bar">
                            <span data-value="75">HTML5/CSS3</span>
                            <progress value="75" max="100"></progress>
                        </div>
					</li>
                    <li class="item-skills">
                        <div class="progress-bar">
                            <span data-value="70">JavaScript</span>
                            <progress value="70" max="100"></progress>
                        </div>
					</li>
					<li class="item-skills">
                        <div class="progress-bar">
                            <span data-value="60">PHP</span>
                            <progress value="60" max="100"></progress>
                        </div>
					</li>
					<li class="item-skills">
                        <div class="progress-bar">
                            <span data-value="50">MySQL, PostgreSQL</span>
                            <progress value="50" max="100"></progress>
                        </div>
					</li>
                </ul>
                <ul class="skillsList_design">
                <h4><?php echo strtoupper('competences en conception graphique'); ?></h4>
                <li class="item-skills">
                        <div class="progress-bar">
                            <span data-value="75">PHOTOSHOP</span>
                            <progress value="75" max="100"></progress>
                        </div>
					</li>
                    <li class="item-skills">
                        <div class="progress-bar">
                            <span data-value="70">ILLUSTRATOR</span>
                            <progress value="70" max="100"></progress>
                        </div>
					</li>
					<li class="item-skills">
                        <div class="progress-bar">
                            <span data-value="60">PHP</span>
                            <progress value="60" max="100"></progress>
                        </div>
					</li>
					<li class="item-skills">
                        <div class="progress-bar">
                            <span data-value="50">MySQL, PostgreSQL</span>
                            <progress value="50" max="100"></progress>
                        </div>
					</li>
                </ul>
			</div>
        </div>
    </div>

<?php $skills= ob_get_clean(); ?>