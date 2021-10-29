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
          echo '<a href="https://yann-dv.github.io/' . $project['name'] . '">'
          . '<div class="project" id="project_'. array_search($project, $projects_list) . '" ' 
          . 'style=background-image:url("./public/image/mini_' . $project['name'] . '.jpg")>' 
          . '<p>' . $project['name'] . '</p>'
          . '<div class="project_details">' 
          . '</div>'
          . '</div>'
          . '</a>';
        }
      }
    }
    '</div>' // portfolio container end
  ?>

<?php $portfolio= ob_get_clean(); ?>