<?php

/*

type: layout

name: Search results

description: Search results

*/
?>

<?php if (!empty($data)): ?>

    <div itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
        <article class="search-results__item">
            <?php foreach ($data as $key => $item): ?>
                <?php
                $itemData = content_data($item['id']);
                $itemTags = content_tags($item['id']);
                ?>

                <h4 class="search-results__item-title">
                    <a href="<?php print $item['link'] ?>"><?php print $item['title'] ?></a>
                </h4>
                <p class="search-results__item-content"><?php echo date('d M Y', strtotime($item['created_at'])); ?></p>
            <?php endforeach; ?>
        </article>
    </div>
<?php endif; ?>
