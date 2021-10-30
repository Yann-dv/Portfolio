<?php ob_start(); ?>

<div class="sectionHeader">
        <h3 class="sectionTitle"><?php echo strtoupper('Mes projets') ?></h3>
        <p>Aperçu des projets sur lesquels j'ai travaillé</p>
        <hr class="under_border">
</div>

<?php require('./back/api.php'); ?> <!--Get Github Api public datas-->

  <?php
   echo '<div class="projectsContainer" id="portfolioList">';
    foreach($projects_list as $project) {
      if($project['private'] !== false && $project['visibility'] !== 'public'){
        // Don't show privates projects if transmitted by error
      }
      else {
        if (($project['name'] === 'github-slideshow') || ($project['name'] === 'Portfolio')) {
          //don't show it
        }
        else {
          echo '<a href="https://yann-dv.github.io/' . $project['name'] . '" target="_blank" title="Cliquer pour visualiser">'
          . '<div class="project" id="project_'. array_search($project, $projects_list) . '">' 
          . '<h3 class="project_title">' . $project['name'] . '</h3>'
          . '<image src="./public/image/min_' . $project['name'] . '.jpg"' . '>'
          . '</div>'
          . '</a>';
        }
      }
    }
    echo '</div>' // portfolio container end
  ?>

<?php $portfolio= ob_get_clean(); ?>