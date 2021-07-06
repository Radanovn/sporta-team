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
                            <a class="card-link link <?php echo $colorClass ?>" href="<?php print $item['link'] ?>" > <span><?php echo $read_more_text;?></span>
                                <span class="link__arrow">
                                    <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.70711 0.370774C1.31658 -0.0197506 0.683417 -0.0197506 0.292893 0.370774C-0.0976315 0.761298 -0.0976314 1.39446 0.292893 1.78499L1.70711 0.370774ZM5 5.07788L5.70711 5.78499C5.89464 5.59745 6 5.3431 6 5.07788C6 4.81266 5.89464 4.55831 5.70711 4.37077L5 5.07788ZM0.292893 8.37077C-0.0976311 8.7613 -0.0976311 9.39446 0.292893 9.78499C0.683418 10.1755 1.31658 10.1755 1.70711 9.78499L0.292893 8.37077ZM0.292893 1.78499L4.29289 5.78499L5.70711 4.37077L1.70711 0.370774L0.292893 1.78499ZM4.29289 4.37077L0.292893 8.37077L1.70711 9.78499L5.70711 5.78499L4.29289 4.37077Z" fill="#000000"/>
                                    </svg>
                                </span>
                            </a>
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
