<?php

/*

type: layout
content_type: static
name: No result
position: 5
description: No result

*/

?>
<?php include template_dir() . "header.php"; ?>

<div class="edit main-content" rel="content" field="sporta-team_no-result">
    <section class="section section-no-result">
        <div class="container position-relative">
            <div class="circles circles--bottom-right d-none d-lg-block">
                <img src="<?php print template_url(); ?>modules/layouts/svg/no-result/skin-1.svg">
            </div>
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="section-no-result__sidebar mx-auto ml-md-0">
                        <form class="d-flex mb-0 search-form">
                            <div class="input-group">
                                <input
                                    class="form-control border-top-0 border-left-0 border-right-0 bg-transparent border-bottom"
                                    type="search" placeholder="Search..." aria-label="Search">
                                <span class="input-group-append">
                                            <button class="btn border-bottom btn-search" type="submit">
                                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.0553 10.2285L14.25 13.5M12.4128 6.21562C12.4128 9.37227 9.91391 11.9312 6.8314 11.9312C3.74888 11.9312 1.25 9.37227 1.25 6.21562C1.25 3.05897 3.74888 0.5 6.8314 0.5C9.91391 0.5 12.4128 3.05897 12.4128 6.21562Z"
                                                        stroke="#818181" stroke-linecap="round"/>
                                                </svg>
                                            </button>
                                        </span>
                            </div>
                        </form>
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
</div>

<?php include template_dir() . "footer.php"; ?>
