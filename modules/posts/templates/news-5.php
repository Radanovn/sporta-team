<?php

/*

type: layout

name: News

description: news

*/
?>
<div class="container section section-news news-page">
    <div class="row cards-wrap mx-lg-auto">
        <?php if (!empty($data)): ?>
            <?php foreach ($data as $key => $item): ?>
                <?php
                $itemData = content_data($item['id']);
                $itemTags = content_tags($item['id']);
                ?>
                <div class="col-lg-4">
                    <div class="card border-0 bg-transparent color-yellow rounded-0">
                        <a href="<?php print $item['link'] ?>" class="link-img card-img-top">
                            <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
                                <img src="<?php print thumbnail($item['image'], 400,400); ?>" class="img-cover" alt="">
                            <?php endif; ?>
                        </a>

                        <div class="card-body">
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
                            <module type="btn" class="allow-drop"  template="sporta-card-links-with-icons" button_style="yellow" button_text="Find out more"/>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>
</div>
<!--<div class="row">-->
<!--    <div class="col-12">-->
<!--        <nav aria-label="Page navigation">-->
<!--            --><?php //if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
<!--                <module type="pagination" template="sporta-pagination" pages_count="--><?php //echo $pages_count; ?><!--" paging_param="--><?php //echo $paging_param; ?><!--"/>-->
<!--            --><?php //endif; ?>
<!--        </nav>-->
<!--    </div>-->
<!--</div>-->
