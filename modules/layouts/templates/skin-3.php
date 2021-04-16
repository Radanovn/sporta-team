<?php

/*

type: layout

name: skin-3

position: 3

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

<section class="section section-member bg-gray <?php print $layout_classes; ?> nodrop edit" field="layout-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="container position-relative">
        <div class="circles circles--top-right d-none d-lg-block">
            <img src="<?php print template_url(); ?>modules/layouts/templates/svg/skin-3-svg-1.svg">
        </div>
        <div class="circles circles--bottom-left d-none d-lg-block">
            <img src="<?php print template_url(); ?>modules/layouts/templates/svg/skin-3-svg-2.svg">
        </div>
        <div class="section__block-title text-center edit safe-element">
            <h2>Already a member?</h2>
            <p class="lead-text">Get all advanteges of your membership</p>
        </div>
        <div class="row">
            <div class="col-12 col-md-10 col-lg-11 mx-auto">
                <div class="row wrapper-cards">
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <div class="card color-red text-center border-0">
                            <!--                                           <a href="#" class="full-card-link"></a>-->
                            <div class="card-header bg-transparent border-0 edit safe-element">
                                <h5 class="card-title ">Insurance</h5>
                            </div>
                            <div class="card-body edit safe-element">
                                <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                            </div>
                            <div class="card-footer bg-transparent border-top-0">
                                <module type="btn" template="sporta-links-with-icons"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <div class="card color-yellow text-center border-0 edit safe-element">
                            <!--                                           <a href="#" class="full-card-link"></a>-->
                            <div class="card-header bg-transparent border-0">
                                <h5 class="card-title">Club support</h5>
                            </div>
                            <div class="card-body edit safe-element">
                                <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                            </div>
                            <div class="card-footer bg-transparent border-top-0">
                                <module type="btn" template="sporta-links-with-icons"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <div class="card color-green text-center border-0 edit safe-element">
                            <!--                                           <a href="#" class="full-card-link"></a>-->
                            <div class="card-header bg-transparent border-0">
                                <h5 class="card-title">Sport for all</h5>
                            </div>
                            <div class="card-body edit safe-element">
                                <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                            </div>
                            <div class="card-footer bg-transparent border-top-0">
                                <module type="btn" template="sporta-links-with-icons"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <div class="card color-red text-center border-0 edit safe-element">
                            <!--                                           <a href="#" class="full-card-link"></a>-->
                            <div class="card-header bg-transparent border-0">
                                <h5 class="card-title">Multisports</h5>
                            </div>
                            <div class="card-body edit safe-element">
                                <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                            </div>
                            <div class="card-footer bg-transparent border-top-0">
                                <module type="btn" template="sporta-links-with-icons"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <div class="card color-yellow text-center border-0 edit safe-element">
                            <!--                                           <a href="#" class="full-card-link"></a>-->
                            <div class="card-header bg-transparent border-0">
                                <h5 class="card-title">Healthy sports</h5>
                            </div>
                            <div class="card-body edit safe-element">
                                <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                            </div>
                            <div class="card-footer bg-transparent border-top-0">
                                <module type="btn" template="sporta-links-with-icons"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <div class="card color-green text-center border-0 edit safe-element">
                            <!--                                           <a href="#" class="full-card-link"></a>-->
                            <div class="card-header bg-transparent border-0">
                                <h5 class="card-title">Ethical sporta</h5>
                            </div>
                            <div class="card-body edit safe-element">
                                <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                            </div>
                            <div class="card-footer bg-transparent border-top-0">
                                <module type="btn" template="sporta-links-with-icons"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <div class="card color-red text-center border-0 edit safe-element">
                            <!--                                           <a href="#" class="full-card-link"></a>-->
                            <div class="card-header bg-transparent border-0">
                                <h5 class="card-title">Training</h5>
                            </div>
                            <div class="card-body edit safe-element">
                                <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                            </div>
                            <div class="card-footer bg-transparent border-top-0">
                                <module type="btn" template="sporta-links-with-icons"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <div class="card color-green text-center border-0 edit safe-element">
                            <!--                                           <a href="#" class="full-card-link"></a>-->
                            <div class="card-header bg-transparent border-0">
                                <h5 class="card-title">Sport activities</h5>
                            </div>
                            <div class="card-body edit safe-element">
                                <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                            </div>
                            <div class="card-footer bg-transparent border-top-0">
                                <module type="btn" template="sporta-links-with-icons"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-wrapper-btn text-center">
            <module type="btn" template="sporta-buttons" button_style="btn-red"/>
        </div>
    </div>
</section>
