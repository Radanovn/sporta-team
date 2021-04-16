<?php

/*

type: layout

name: skin-2

position: 2

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-100';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-100';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> section-participate nodrop edit" field="layout-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="section__block-title text-sm-center edit safe-element">
            <h2>Why participate in Sporta Club?</h2>
            <p class="lead-text">Some text about advantages of joining the Sporta club</p>
        </div>
        <div class="wrap-cards">
            <div class="wrap-card__item">
                <div class="card border-0 color-red">
                    <div class="card-header bg-transparent border-0 edit safe-element">
                        <h5 class="card-title m-0 h-100">
                               <span class="card-header__icon">
                                    <img src="<?php print template_url(); ?>modules/layouts/templates/svg/skin-2-svg-1.svg">
                               </span>
                            <span>Insurance</span>
                        </h5>
                    </div>
                    <div class="card-body edit safe-element">
                        <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <module type="btn" template="sporta-links-with-icons"/>
                    </div>
                </div>
            </div>
            <div class="wrap-card__item">
                <div class="card border-0 color-green">
                    <div class="card-header bg-transparent border-0 edit safe-element">
                        <h5 class="card-title m-0 h-100">
                               <span class="card-header__icon">
                                    <img src="<?php print template_url(); ?>modules/layouts/templates/svg/skin-2-svg-2.svg">
                               </span>
                            <span>Club support</span>
                        </h5>
                    </div>
                    <div class="card-body edit safe-element">
                        <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <module type="btn" template="sporta-links-with-icons"/>
                    </div>
                </div>
            </div>
            <div class="wrap-card__item">
                <div class="card border-0 color-yellow">
                    <div class="card-header bg-transparent border-0 edit safe-element">
                        <h5 class="card-title m-0 h-100">
                               <span class="card-header__icon">
                                    <img src="<?php print template_url(); ?>modules/layouts/templates/svg/skin-2-svg-3.svg">
                               </span>
                            <span>Members’ Administration</span>
                        </h5>
                    </div>
                    <div class="card-body edit safe-element">
                        <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <module type="btn" template="sporta-links-with-icons"/>
                    </div>
                </div>
            </div>
            <div class="wrap-card__item">
                <div class="card border-0 color-red">
                    <div class="card-header bg-transparent border-0 edit safe-element">
                        <h5 class="card-title m-0 h-100">
                               <span class="card-header__icon">
                                    <img src="<?php print template_url(); ?>modules/layouts/templates/svg/skin-2-svg-4.svg">
                               </span>
                            <span>Easy all-in price formula</span>
                        </h5>
                    </div>
                    <div class="card-body edit safe-element">
                        <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <module type="btn" template="sporta-links-with-icons"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-wrapper-btn text-center">
            <module type="btn" template="sporta-buttons" button_style="btn-green"/>
        </div>
    </div>
</section>
