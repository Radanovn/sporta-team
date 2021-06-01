<?php

/*

type: layout

name: Insurance 3

position: 3

*/

?>
<section class="section section-reminders edit safe-mode nodrop" field="layout-insurance-skin-3-<?php print $params['id'] ?>" rel="content">
    <div class="container position-relative">
        <div class="circles circles--bottom-right d-none d-lg-block">
            <img src="<?php print template_url(); ?>modules/layouts/svg/insurance/skin-2.svg">
        </div>
        <div class="section__block-title text-sm-center">
            <h2>Just a refresher. Did you know...</h2>
        </div>
        <div class="row no-gutters">
            <div class="col-md-10 col-lg-12 col-xl-11 mx-auto">
                <div class="row wrap-cards">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card h-100 border-0 color-yellow">
                            <div class="card-header bg-transparent border-0">
                                <div class="card-header__icon">
                                    <img src="<?php print template_url(); ?>modules/layouts/svg/insurance/skin-3.svg">

                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">There is no franchise, so your members will be reimbursed for all eligible costs, even if it concerns smaller amounts?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card h-100 border-0 color-red">
                            <div class="card-header bg-transparent border-0">
                                <div class="card-header__icon">
                                    <img src="<?php print template_url(); ?>modules/layouts/svg/insurance/skin-4.svg">
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Are your club members also insured for jog-ging, walking, cycling, swimming, yoga, fit-ness and roller skating outside of a club?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card h-100 border-0 color-green">
                            <div class="card-header bg-transparent border-0">
                                <div class="card-header__icon">
                                    <img src="<?php print template_url(); ?>modules/layouts/svg/insurance/skin-5.svg">
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">In addition to me-dical and pharmacy costs, can also glasses damage be reimbur-sed after a physical accident with a head injury.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card h-100 border-0 color-green">
                            <div class="card-header bg-transparent border-0">
                                <div class="card-header__icon">
                                    <img src="<?php print template_url(); ?>modules/layouts/svg/insurance/skin-6.svg">
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Are your members insured worldwide around the clock? And there is no cost ceiling for physical accidents (including stroke or heart failure)?</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="section-wrapper-btn text-center">
            <module type="btn" class="allow-drop"  template="sporta-buttons" button_style="btn btn-animate btn-green" button_text="Your insurance"/>
        </div>
    </div>
</section>
