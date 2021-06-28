<?php

/*

type: layout

name: News related

description: news related posts

*/
?>

<?php if (!empty($data)): ?>

        <div class="popular-posts-widget" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
            <h3 class="mb-0 edit" field="sporta-related-news" rel="global">Most read</h3>
            <div class="popular-posts-wrap">
    <?php foreach ($data as $key => $item): ?>
        <?php
        $itemData = content_data($item['id']);
        $itemTags = content_tags($item['id']);
        ?>
                <div class="popular-post__item">
                    <a href="<?php print $item['link'] ?>" class="popular-post__item--link-img">
                        <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
                            <img src="<?php print thumbnail($item['image'], 150,150); ?>" class="img-cover" alt="">
                        <?php endif; ?>
                    </a>
                    <div class="popular-post__item--content">
                        <h6>
                            <a href="<?php print $item['link'] ?>"><?php print $item['title'] ?></a>
                        </h6>
                        <p class="popular-post__item--date"><?php echo date('d M Y', strtotime($item['created_at'])); ?></p>
                    </div>
                </div>
    <?php endforeach; ?>
            </div>
        </div>
<?php endif; ?>

