<?php

/*

type: layout

name: News

description: news

*/
?>
<div class="container">
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
                            <module type="btn" class="allow-drop"  template="sporta-card-links-with-icons" button_style="yellow" button_text="Read more"/>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

        <div class="col-lg-4">
            <div class="form-widget">
                <div class="form-widget-wrap">
                    <h4 class="form-widget__title edit" field="sporta-news-page-form-heading" rel="global">The most interesting articles in your mailbox?</h4>
                    <module type="contact_form" template="sporta-news-page-form"/>
                </div>
            </div>
        </div>
    </div>
</div>
