<?php

/*

type: layout

name: Default

description: Grid Columns

*/
?>

<?php
$columns = get_option('columns', $params['id']);
if ($columns) {
    $columns = $columns;
} elseif (isset($params['data-columns'])) {
    $columns = $params['data-columns'];
} else {
    $columns = 'col-md-6 col-lg-4';
}


$columns_xl = get_option('columns-xl', $params['id']);
$thumb_quality = '1920';
if ($columns_xl != null OR $columns_xl != false OR $columns_xl != '') {
    if ($columns_xl == 'col-xl-12') {
        $thumbs_columns = 1;
    } else if ($columns_xl == 'col-xl-6') {
        $thumbs_columns = 2;
    } else if ($columns_xl == 'col-xl-4') {
        $thumbs_columns = 3;
    } else if ($columns_xl == 'col-xl-3') {
        $thumbs_columns = 4;
    } else if ($columns_xl == 'col-xl-2') {
        $thumbs_columns = 6;
    }

    $thumb_quality = 1920 / $thumbs_columns;
}
?>

<?php if (!empty($data)): ?>
    <?php foreach ($data as $key => $item): ?>
        <?php
        $itemData = content_data($item['id']);
        $itemTags = content_tags($item['id']);
        ?>
        <div class="<?php print $columns; ?>" <?php if(is_live_edit()): ?>no-<?php endif;?>data-aos="fade-up" data-aos-delay="<?php echo $key; ?>00" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
            <div class="card-deck justify-content-between">
                <div class="card border-0 bg-transparent">
                    <a href="<?php print $item['link'] ?>" class="link-img card-img-top">
                        <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
                             <img src="<?php print $item['image']; ?>" class="img-cover" alt="">
                        <?php endif; ?>
                    </a>

                    <div class="card-body">
                        <p class="card-date"><?php echo date('d M Y', strtotime($item['posted_at'])); ?></p>

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
                        <module type="btn" template="sporta-card-links-with-icons" button_style="yellow"/>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
