<?php

/*

type: layout

name: News

description: news

*/
?>
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
                            <img src="<?php print $item['image']; ?>" class="img-cover" alt="">
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
                    <div class="card-footer card-footer bg-transparent border-0">
                        <module type="btn" class="cloneable"  template="sporta-buttons" button_style="btn btn-animate" button_text="Meer info"/>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
