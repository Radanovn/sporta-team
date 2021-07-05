<?php

/*

type: layout

name: News

description: news

*/
?>
<div class="container section section-news news-page">
    <div class="row row-news-card">
        <?php if (!empty($data)): ?>
            <?php foreach ($data as $key => $item): ?>
                <?php
                $itemData = content_data($item['id']);
                $itemTags = content_tags($item['id']);
                ?>
                <div class="col-lg-4">
                    <div class="card border-0 bg-transparent">
                        <a href="<?php print $item['link'] ?>" class="link-img card-img-top">
                            <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
                                <img src="<?php print thumbnail($item['image'], 400,400); ?>" class="img-cover" alt="">
                            <?php endif; ?>
                        </a>

                        <div class="card-body">
                            <p class="card-date"><?php echo date('d M Y', strtotime($item['created_at'])); ?></p>

                            <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                <h5 class="card-title">
                                    <a href="<?php print $item['link'] ?>"><?php print $item['title'] ?></a>
                                </h5>
                            <?php endif; ?>

                            <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                                <p class="card-text"><?php print $item['description'] ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="card-footer border-0 bg-transparent">
                            <a class="card-link link color-red" href="<?php print $item['link'] ?>" ><?php echo $read_more_text;?></a>
                            <span class="link__arrow">
                                <img src="<?php print template_url(); ?>modules/layouts/svg/news/skin-2.svg">
                            </span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

