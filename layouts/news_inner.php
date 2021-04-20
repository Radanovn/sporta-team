<?php

/*

type: layout
content_type: dynamic
name: News inner
position: 4
description: News inner page

*/


$post = get_content_by_id($content['id']);
$picture = get_picture($content['id']);

if (!$picture) {
    $picture = '';
}

$itemData = content_data($content['id']);
$itemTags = content_tags($content['id']);
?>

<?php include template_dir() . "header.php"; ?>

    <article class="single-post"  id="news-content-<?php print $content['id']; ?>">
        <div class="container">
            <div class="row no-gutters position-relative decor-block">
                <div class="circles circles--top-right d-none d-lg-block">
                    <img src="<?php print template_url(); ?>modules/layouts/svg/news_inner/skin-1.svg">
                </div>
                <div class="col-lg-8 mx-auto text-center">
                    <div class="single-post__date"><?php echo date('d M Y', strtotime($content['created_at'])); ?></div>
                    <h1 class="single-post__title"><?php echo $content['title']; ?></h1>
                </div>
            </div>

            <div class="row no-gutters position-relative decor-block">
                <div class="circles circles--bottom-left d-none d-lg-block">
                    <img src="<?php print template_url(); ?>modules/layouts/svg/news_inner/skin-2.svg">
                </div>

                <?php if ($picture) : ?>
                <div class="col-lg-9 mx-auto">
                    <div class="single-post__thumbnail">
                        <picture>
                            <source srcset="<?php print template_url(); ?>images/single-post-thumbnail-mobile.jpg" media="(max-width: 479px)">
                            <source srcset="<?php print template_url(); ?>images/single-post-thumbnail-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                            <img src="<?php print $picture ?>" alt="">
                        </picture>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <div class="row no-gutters position-relative decor-block">
                <div class="circles circles--left d-none d-lg-block">
                    <img src="<?php print template_url(); ?>modules/layouts/svg/news_inner/skin-3.svg">
                </div>
                <div class="col-lg-8 col-xl-6 mx-auto edit main-content" rel="content" field="content">
                    <p class="font-weight-600"><?php print $content['description'] ?></p>
                    <p><?php print $content['description'] ?></p>
                    <div class="single-post__space"></div>
                    <h2><?php echo $content['title']; ?></h2>
                    <p><?php print $content['description'] ?> </p>
                    <figure>
                        <img src="<?php print template_url(); ?>images/single-post-img-3.jpg" class="img-cover" alt="">
                        <figcaption>Photo or video description</figcaption>
                    </figure>
                </div>
            </div>

            <module type="layouts" template="news_inner/skin-1"/>
            <module type="layouts" template="news_inner/skin-2"/>
            <module type="layouts" template="news_inner/skin-3"/>
            <module type="layouts" template="news_inner/skin-4"/>
            <module type="layouts" template="news_inner/skin-5"/>
            <module type="layouts" template="news_inner/skin-6"/>
            <module type="layouts" template="news_inner/skin-7"/>
            <module type="layouts" template="news_inner/skin-8"/>
        </div>
    </article>

<?php include template_dir() . "footer.php"; ?>

