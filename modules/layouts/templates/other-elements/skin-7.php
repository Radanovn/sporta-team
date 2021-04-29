<?php

/*

type: layout

name: other elements 7

position: 7

*/

?>
<section class="section section-list-connect-4 edit safe-mode nodrop" field="layout-other-elements-skin-7-<?php print $params['id'] ?>" rel="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="section__block-title text-sm-center">
                    <h2>Connect your sport club in 4 steps</h2>
                    <p class="lead-text">Are you convinced? You can connect in 5 minutes and is very easy!<br>More
                        than 1,400 clubs preceded you. How do you connect?</p>
                </div>
            </div>
        </div>
        <div class="wrap-list-connect">
            <ol class="list-unstyled list-connect list-connect--4-elements mb-0">
                <li class="list-connect__item list-connect__item--red">
                    <div class="circles circles--first-list-item d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/other-elements/skin-3.svg">
                    </div>
                    <div class="list-connect__item-content">Check whether your club meets all the conditions</div>
                </li>
                <li class="list-connect__item list-connect__item--green">
                    <div class="list-connect__item-content">Fill in and forward the online connection form.</div>
                </li>
                <li class="list-connect__item list-connect__item--green">
                    <div class="list-connect__item-content">You will receive all the infor&shy;mation you need to
                        further or&shy;ganize your club and member administration via My Beheer.
                    </div>
                </li>
                <li class="list-connect__item list-connect__item--yellow">
                    <div class="circles circles--last-list-item d-none d-lg-block">
                        <img src="<?php print template_url(); ?>modules/layouts/svg/other-elements/skin-4.svg">
                    </div>
                    <div class="list-connect__item-content">As soon as your members have been entered in My Manage&shy;ment,
                        they are connected and insured! It is not more than that.
                    </div>
                </li>
            </ol>
        </div>
        <div class="section-wrapper-btn text-center">
            <module type="btn" template="sporta-buttons" button_style="btn btn-animate btn-green" button_text="Get started now"/>
        </div>
    </div>
</section>
