<?php
/*
type: layout
name: Sporta pagination
description: Sporta pagination template
*/
?>
<nav aria-label="Page navigation">
    <ul class="pagination border-0 rounded-0 justify-content-center">
        <li class="page-item invisible">
            <a class="page-link" aria-label="Previous">
                <span aria-hidden="true" aria-label="Previous" >
                    <img src="<?php print template_url(); ?>modules/layouts/svg/filter/skin-1.svg">
                </span>
            </a>
        </li>
    <?php foreach ($pagination_links as $pagination_link): ?>
    <?php if ($pagination_link['attributes']['current']): ?>
        <li class="page-item active">
            <span class="page-link">
                 <?php echo $pagination_link['title']; ?>
            </span>
        </li>
    <?php else: ?>
        <li class="page-item">
            <a class="page-link" data-page-number-dont-copy="<?php echo $pagination_link['attributes']['data-page-number']; ?>" href="<?php echo $pagination_link['attributes']['href']; ?>">
                <?php echo $pagination_link['title']; ?>
            </a>
        </li>
    <?php endif; ?>
    <?php endforeach; ?>
        <li class="page-item">
            <a class="page-link" href="<?php echo $pagination_link['attributes']['href']; ?> aria-label="Next">
                <span aria-hidden="true">
                    <img src="<?php print template_url(); ?>modules/layouts/svg/filter/skin-2.svg">
                </span>
            </a>
        </li>
    </ul>
</nav>



