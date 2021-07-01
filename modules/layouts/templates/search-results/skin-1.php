<?php

/*

type: layout

name: Search results 1

position: 1

*/
$keyword = isset($_GET['q']) ? $_GET['q'] : '';
?>
<section class="section section-search-results safe-mode allow-drop">
    <div class="container position-relative">
        <div class="circles circles--top-left d-none d-lg-block">
            <img src="<?php print template_url(); ?>modules/layouts/svg/search-results/skin-1.svg">
        </div>
        <div class="circles circles--right d-none d-lg-block">
            <img src="<?php print template_url(); ?>modules/layouts/svg/search-results/skin-2.svg">
        </div>
<!--        <div class="circles circles--bottom-left d-none d-lg-block">-->
<!--            <img src="--><?php //print template_url(); ?><!--modules/layouts/svg/search-results/skin-3.svg">-->
<!--        </div>-->
        <div class="row no-gutters">
            <div class="col-lg-9 mx-auto">
                <module type="posts" keyword="<?php print $keyword; ?>" template="search-results">
            </div>
        </div>
    </div>
</section>
