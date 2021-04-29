<?php

/*

type: layout

name: Safety 6

position: 6

*/

?>
<section class="section section-news section-safety-news bg-gray edit safe-mode nodrop" field="layout-safety-skin-6-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="container">
            <div class="section__block-title text-center">
                <h2>News</h2>
            </div>

            <module type="posts" limit="3" template="default"/>

            <div class="section-wrapper-btn text-center">
                <module type="btn" template="sporta-buttons" button_style="btn btn-animate btn-red" button_text="Read all news"/>
            </div>
        </div>
    </div>
</section>
