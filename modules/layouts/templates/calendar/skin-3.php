<?php

/*

type: layout

name: Calendar 3

position: 3

*/

?>
<section class="section-fullwidth-img section-calendar-fullwidth-img edit safe-mode nodrop" field="layout-calendar-skin-3-<?php print $params['id'] ?>" rel="content">
    <div class="wrap-img">
        <picture>
            <source srcset="<?php print template_url(); ?>images/calendar-img-1-mobile.jpg"
                    media="(max-width: 479px)">
            <source srcset="<?php print template_url(); ?>images/calendar-img-1-tablet.jpg"
                    media="(min-width: 480px) and (max-width: 991px)">
            <img src="<?php print template_url(); ?>images/calendar-img-1.jpg" alt="" class="img-cover">
        </picture>
    </div>
</section>

