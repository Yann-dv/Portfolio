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
      if($project['private'] != false){
        // Don't show privates projects if transmitted by error
      }
      else {
        if (array_search($project, $projects_list) === 0 && $project['visibility'] === 'public') {
          //nothing
        }
        else {
          echo '<div class="project" id="project_'. array_search($project, $projects_list) . '">' 
          . '<p>' . $project['name'] . '</p>'
          . '</div>';
        }
      }
    }
    '</div>' // portfolio container end
  ?>

<?php $portfolio= ob_get_clean(); ?>