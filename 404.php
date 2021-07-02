<?php include template_dir() . "header.php"; ?>


<section class="section section-error-404 edit" field="404" rel="global">
    <div class="container">
        <div class="text-center">
            <img src="<?php print template_url(); ?>images/404-img.svg" alt="">
            <h4>Something went wrong (</h4>
            <p>Page not found, try going pack to home page.</p>
            <module type="btn"  url="<?php print site_url(); ?>" template="sporta-buttons" button_style="btn btn-animate btn-red" button_text="Back to home"/>
        </div>
    </div>
</section>


<?php include template_dir() . "footer.php"; ?>
