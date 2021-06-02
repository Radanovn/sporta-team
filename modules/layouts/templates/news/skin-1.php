<?php
/*

  type: layout

  name: News article - 1

  position: 1

 */
?>

<section class="edit safe-mode allow-drop" field="layout-news-skin-1-<?php print $params['id'] ?>" rel="content">
    <div class="section__block-title d-flex align-items-center justify-content-between flex-wrap">
        <h1 class="mb-0">News</h1>
        <form class="d-flex mb-0 news-page-search-form" method="get" action="<?php print site_url(); ?>search-results">
            <div class="input-group">
                <input class="form-control border-right-0 border" type="search" name="q"  value="<?php print isset($_GET['q']) ? $_GET['q'] : '';?>" placeholder="Search..." aria-label="Search">
                <span class="input-group-append">
                    <button class="btn btn-sm border-left-0 border btn-search" type="submit">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/news/skin-1.svg">
                    </button>
                </span>
            </div>
        </form>
    </div>
</section>
