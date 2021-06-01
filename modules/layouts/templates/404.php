<?php

/*

type: layout

name: 404

position: 30

*/

?>
<section class="section section-error-404 nodrop edit" field="layout-404-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="text-center">
            <img src="<?php print template_url(); ?>images/404-img.svg" alt="">
            <h4>Something went wrong (</h4>
            <p>Page not found, try going pack to home page.</p>
            <module type="btn" class="allow-drop"  template="sporta-buttons" button_style="btn btn-animate btn-red" button_text="Back to home"/>
        </div>
    </div>
</section>
