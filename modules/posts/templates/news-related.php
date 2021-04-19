<?php

/*

type: layout

name: News

description: news

*/
?>

<?php if (!empty($data)): ?>
    <?php foreach ($data as $key => $item): ?>
        <?php
        $itemData = content_data($item['id']);
        $itemTags = content_tags($item['id']);
        ?>
        <div class="popular-posts-widget">
            <h3 class="mb-0">Most read</h3>
            <div class="popular-posts-wrap">
                <div class="popular-post__item">
                    <a href="<?php print $item['link'] ?>" class="popular-post__item--link-img">
                        <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
                            <img src="<?php print $item['image']; ?>" class="img-cover" alt="">
                        <?php endif; ?>
                    </a>
                    <div class="popular-post__item--content">
                        <h6>
                            <a href="<?php print $item['link'] ?>"><?php print $item['title'] ?></a>
                        </h6>
                        <p class="popular-post__item--date"><?php echo date('d M Y', strtotime($item['posted_at'])); ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

