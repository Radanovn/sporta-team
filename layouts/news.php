<?php

/*

type: layout
content_type: dynamic
name: News
position: 3
description: News

*/


?>
<?php include template_dir() . "header.php"; ?>

<section class="section section-news news-page edit main-content" rel="content" field="sporta-team_news">
    <div class="container">
        <module type="layouts" template="news/skin-1"/>
        <module type="layouts" template="news/skin-2"/>
        <module type="layouts" template="news/skin-3"/>
        <module type="layouts" template="news/skin-4"/>
        <module type="layouts" template="news/skin-5"/>
    </div>
</section>

