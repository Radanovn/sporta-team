<?php

/*

type: layout

name: Search results

description: Search results

*/
?>

<h1 class="search-results__title mb-0"><?php print empty($data) ? 'No' : sizeof($data);  ?>  <?php print isset($_GET['q']) ? (' results found for "' . $_GET['q'] . '"') : 'posts found';?></h1>

<?php if (!empty($data)): ?>
    <div itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
        <?php foreach ($data as $key => $item): ?>
            <article class="search-results__item">
                <?php
                    $itemData = content_data($item['id']);
                    $itemTags = content_tags($item['id']);
                ?>
                <h4 class="search-results__item-title">
                    <a href="<?php print $item['link'] ?>"><?php print $item['title'] ?></a>
                </h4>
                <p class="search-results__item-content"><?php echo date('d M Y', strtotime($item['created_at'])); ?></p>
            </article>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
