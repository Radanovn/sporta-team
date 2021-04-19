<?php
/*

  type: layout

  name: News - 1

  position: 1

 */
?>

<section class="edit safe-mode nodrop" field="layout-news-article-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="row no-gutters position-relative decor-block">
        <div class="circles circles--top-right d-none d-lg-block">
            <img src="<?php print template_url(); ?>modules/layouts/templates/svg/news_inner/skin-1.svg">
        </div>
        <div class="col-lg-8 mx-auto text-center">
            <div class="single-post__date"><?php echo date('d M Y', strtotime($post['created_at'])); ?></div>
            <h1 class="single-post__title"><?php echo $post['title']; ?></h1>
        </div>
    </div>
</section>
