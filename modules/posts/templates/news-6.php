<?php

/*

type: layout

name: News

description: news

*/
?>
<div class="container section section-news news-page">
    <div class="row wrap-cards">
        <?php if (!empty($data)): ?>
            <?php foreach ($data as $key => $item): ?>
                <?php
                $itemData = content_data($item['id']);
                $itemTags = content_tags($item['id']);
                ?>
                <div class="col-lg-6">
                    <div class="card color-green text-center border-0 h-100 mx-sm-auto ml-lg-0">
                        <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
                            <img src="<?php print thumbnail($item['image'], 400,400); ?>" alt="">
                        <?php endif; ?>

                        <div class="card-body">

                            <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                <h5 class="card-title">
                                    <?php print $item['title'] ?>
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
