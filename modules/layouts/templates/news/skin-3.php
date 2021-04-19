<?php
/*

  type: layout

  name: News - 3

  position: 3

 */
?>

<section class="edit safe-mode nodrop" field="layout-news-skin-3-<?php print $params['id'] ?>" rel="module">

<div class="row row-news-card">
    <div class="col-lg-8">
        <module type="posts" limit="1" template="news-2" />
    </div>

    <div class="col-lg-4 d-none d-lg-block">
        <module type="posts" related="true" template="news-related" />
    </div>
</div>
</section>

