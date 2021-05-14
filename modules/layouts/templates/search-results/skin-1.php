<?php

/*

type: layout

name: Search results 1

position: 1

*/

?>
<section class="section section-search-results edit safe-mode nodrop" field="layout-search-results-skin-1-<?php print $params['id'] ?>" rel="content">
    <div class="container position-relative">
        <div class="circles circles--top-left d-none d-lg-block">
            <img src="<?php print template_url(); ?>modules/layouts/svg/search-results/skin-1.svg">
        </div>
        <div class="circles circles--right d-none d-lg-block">
            <img src="<?php print template_url(); ?>modules/layouts/svg/search-results/skin-2.svg">
        </div>
        <div class="circles circles--bottom-left d-none d-lg-block">
            <img src="<?php print template_url(); ?>modules/layouts/svg/search-results/skin-3.svg">
        </div>
        <div class="row no-gutters">
            <div class="col-lg-9 mx-auto">
                <h1 class="search-results__title mb-0">6 results found for "search word"</h1>
                <module type="posts" template="search-results">
            </div>
        </div>
    </div>
</section>
