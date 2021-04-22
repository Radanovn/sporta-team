<?php

/*

type: layout

name: News

description: news

*/
?>
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
                            <img src="<?php print $item['image']; ?>" class="img-cover" alt="">
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
                        <module type="btn" template="sporta-card-links-with-icons" button_style="yellow" button_text="Find out more"/>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>