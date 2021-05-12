<?php

/*

type: layout

name: No result

position: 1

*/

?>
<section class="section section-no-result edit safe-mode nodrop" field="layout-no-result-skin-1-<?php print $params['id'] ?>" rel="content">
    <div class="container position-relative">
        <div class="circles circles--bottom-right d-none d-lg-block">
            <img src="<?php print template_url(); ?>modules/layouts/svg/no-result/skin-1.svg">
        </div>
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="section-no-result__sidebar mx-auto ml-md-0">
                        <module type="search" template="no-result">
                    <div class="categories">
                        <a href="#" class="categories__item categories__item--green">financieel</a>
                        <a href="#" class="categories__item categories__item--green">management</a>
                        <a href="#" class="categories__item categories__item--red">financieel</a>
                        <a href="#" class="categories__item categories__item--red">promotioneel</a>
                        <a href="#" class="categories__item categories__item--yellow">administratief</a>
                        <a href="#" class="categories__item categories__item--yellow">sportief</a>
                        <a href="#" class="categories__item categories__item--red">sociaal</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="section-no-result__content text-center">
                    <div class="wrap-content">
                        <img src="<?php print template_url(); ?>images/no-result-img.svg" alt="">
                        <h4>Oops...</h4>
                        <p> We haven’t found anything. Please try another search</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
