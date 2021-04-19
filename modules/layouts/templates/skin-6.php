<?php

/*

type: layout

name: skin-6

position: 6

*/

?>

<section class="section section-news bg-gray nodrop edit" field="layout-skin-6-<?php print $params['id'] ?>" rel="content">
        <div class="container">
            <div class="section__block-title text-center">
                <h2>News</h2>
            </div>

            <module type="posts" limit="3" template="default"/>

            <div class="section-wrapper-btn text-center">
                <module type="btn" template="sporta-buttons" button_style="btn-green"/>
            </div>
        </div>
</section>
