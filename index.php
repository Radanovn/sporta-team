<?php

/*
  type: layout
  content_type: static
  name: Home
  position: 1
  description: Home layout
*/

?>

<?php include template_dir() . "header.php"; ?>

<div class="edit main-content" rel="content" field="sporta-team_content">
    <module type="layouts" template="home-sliders/skin-1"/>
    <module type="layouts" template="skin-2"/>
    <module type="layouts" template="skin-3"/>
    <module type="layouts" template="skin-5"/>
    <module type="layouts" template="skin-6"/>
    <module type="layouts" template="skin-7"/>
</div>

<?php include template_dir() . "footer.php"; ?>




