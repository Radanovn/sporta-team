<?php

/*

type: layout

name: Sporta gallery

description: Sporta gallery picture list template

*/

?>
<?php if (is_array($data)): ?>
    <?php $rand = uniqid(); ?>
    <div class="mw-module-images<?php if ($no_img) { ?> no-image<?php } ?>">
        <div class="gallery-slider js-gallery-slider" id="mw-gallery-<?php print $rand; ?>">
            <?php $count = -1; foreach ($data as $item): ?>
                <?php $count++; ?>
                <div>
                    <img src="<?php print thumbnail($item['filename'], 600); ?>"/>
                </div>
            <?php endforeach;  ?>
        </div>
        <script>
            $(document).ready(function (){

                    $('#mw-gallery-<?php print $rand; ?>').slick({
                        infinite: false,
                        arrow: true,
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        variableWidth: true,
                        prevArrow:`<button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">
                            <svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M26.8203 10.438L1.83071 10.438" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.2227 1.04549L1.83016 10.438" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.2227 19.8311L1.83016 10.4386" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>`,
                        nextArrow:`<button class="slick-next slick-arrow" aria-label="Next" type="button" style="">
                            <svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.50781 10.438H26.4974" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.1055 19.8305L26.498 10.438" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.1055 1.04492L26.498 10.4374" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>`,
                        responsive: [
                            {
                                breakpoint: 1025,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 1
                                }
                            },
                            {
                                breakpoint: 992,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    variableWidth: false
                                }
                            },
                        ]
                    });

            })
        </script>
    </div>
<?php else : ?>
<?php endif; ?>

