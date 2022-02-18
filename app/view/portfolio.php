<?php ob_start(); ?>
<h3 class="sectionTitle"><?php echo strtoupper('Mes projets') ?></h3>
<section class="sectionHeader">
        <h4>Aperçu des projets sur lesquels j'ai travaillé</h4>
        <hr class="under_border">
</section>

<?php require('./back/api.php'); ?> <!--Get Github Api public datas-->

  <?php
   echo '<section class="projectsContainer" id="portfolioList">';
    foreach($projects_list as $project) {
      if($project['private'] !== false && $project['visibility'] !== 'public'){
        // Don't show privates projects if transmitted by error
      }
      else {
        if ( ($project['name'] === 'github-slideshow') || ($project['name'] === 'Portfolio') 
        || (str_ends_with($project['name'], '-app')) ) {
          //don't show it
        }
        //For wix projects -> the url's are placed into the wix projects description on github repos
        else if( (preg_match("/_wix/", $project['name'])) ) {
          echo '<a href="' . $project['description'] . '" target="_blank" title="Cliquer pour visualiser">'
          . '<div class="project" id="project_'. array_search($project, $projects_list) . '">' 
            . '<h3 class="project_title">' . $project['name'] . '</h3>'
            . '<image src="./public/image/min_' . $project['name'] . '.jpg"' . ' alt="Image du lien vers le projet ' . $project['name'] . '">'
            . '</div>'
          . '</a>';

        }
        //For page-deployed projects
        else if(($project['name'] === 'Groupomania') || ($project['name'] === 'Pekocko')) {
          echo '<a href="https://github.com/Yann-dv/' . $project['name'] . '" target="_blank" title="Cliquer pour visualiser">'
          . '<div class="project" id="project_'. array_search($project, $projects_list) . '">' 
            . '<h3 class="project_title">' . $project['name'] . '</h3>'
            . '<image src="./public/image/min_' . $project['name'] . '.jpg"' . ' alt="Image du lien vers le projet ' . $project['name'] . '">'
            . '</div>'
          . '</a>';
        }
        else {
          echo '<a href="https://yann-dv.github.io/' . $project['name'] . '" target="_blank" title="Cliquer pour visualiser">'
          . '<div class="project" id="project_'. array_search($project, $projects_list) . '">' 
            . '<h3 class="project_title">' . $project['name'] . '</h3>'
            . '<image src="./public/image/min_' . $project['name'] . '.jpg"' . ' alt="Image du lien vers le projet ' . $project['name'] . '">'
            . '</div>'
          . '</a>';
        }
      }
    }
    echo '</section>' // portfolio container end
  ?>  

<?php $portfolio= ob_get_clean(); ?>