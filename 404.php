<?php

/*

type: layout
content_type: static
name: 404
position: 25
description: 404

*/

?>
<?php include template_dir() . "header.php"; ?>

<div class="edit main-content" rel="content" field="sporta-404_content">
    <section class="section section-error-404">
        <div class="container">
            <div class="text-center">
                <img src="<?php print template_url(); ?>images/404-img.svg" alt="">
                <h4>Something went wrong (</h4>
                <p>Page not found, try going pack to home page.</p>
                <a href="/" class="btn btn-red btn-animate">BAck to home</a>
            </div>
        </div>
    </section>
</div>

<?php include template_dir() . "footer.php"; ?>
