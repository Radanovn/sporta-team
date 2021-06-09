<?php

/*

type: layout

name: Calendar 5

position: 5

*/

?>

<section class="section section-filter section-calendar-trainings edit safe-mode nodrop" field="layout-blog-<?php print $params['id'] ?>" rel="content">
    <div class="container position-relative">
        <div class="circles circles--top-right d-none d-lg-block">
            <img src="<?php print template_url(); ?>modules/layouts/svg/calendar/skin-6.svg">
        </div>
        <div class="circles circles--bottom-left d-none d-xl-block">
            <img src="<?php print template_url(); ?>modules/layouts/svg/calendar/skin-7.svg">
        </div>
        <div class="row">
            <div class="col-lg-9 mx-lg-auto">
                <div class="section__block-title text-sm-center">
                    <h2>Blog</h2>
                    <p class="lead-text">This is the simple blog</p>
                </div>
            </div>
        </div>
        <module type="blog" />
    </div>
</section>
