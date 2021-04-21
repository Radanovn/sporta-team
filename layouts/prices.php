<?php

/*

type: layout
content_type: static
name: Prices
position: 11
description: Prices

*/

?>
<?php include template_dir() . "header.php"; ?>

<div class="edit main-content" rel="content" field="sporta-team_prices">
    <section class="section prices-hero">
        <div class="container position-relative">
            <div class="circles circles--top-right d-none d-lg-block">
                <img src="<?php print template_url(); ?>modules/layouts/svg/prices/skin-1.svg">
            </div>
            <div class="row no-gutters">
                <div class="col-md-10 col-lg-8">
                    <h1 class="prices-hero__title mb-0"><span class="text-green">Het toppunt</span> van waar voor je geld krijgenen</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-prices-insurance">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-3">
                    <p>...is een verbazend aansluitingstarief betalen voor een unieke sportverzekering. Afhankelijk van het risico op blessures dat een bepaalde sport met zich meebrengt, hebben we samen met onze verzekeraar Ethias de lidgel-den per lid per jaar zo zacht mogelijk gehouden. </p>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <ol class="list-unstyled list-insurance mb-0">
                        <li class="list-insurance__item list-insurance__item--red">
                            <div>
                                <h6>Staat jouw sport niet in de lijst?</h6>
                                <p>Contacteer ons en stellen zo mogelijk een tarief voor.</p>
                            </div>
                        </li>
                        <li class="list-insurance__item list-insurance__item--yellow">
                            <div>
                                <h6>Meerdere sporten?</h6>
                                <p>Bij clubs die meerdere sporten aanbieden (omnisport&#8209;clubs), bepaalt de sport die het lid effectief beoefent het lidgeld voor dat specifieke lid.</p>
                            </div>
                        </li>
                        <li class="list-insurance__item list-insurance__item--green">
                            <div>
                                <h6>Officieel geregistreerd als club?</h6>
                                <p>Om te kunnen aansluiten moet jouw club uit min. 10 leden bestaan en officieel geregistreerd zijn als vzw.</p>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-prices-table">
        <div class="container">
            <div class="row no-gutters position-relative">
                <div class="circles circles--right d-none d-lg-block">
                    <img src="<?php print template_url(); ?>modules/layouts/svg/prices/skin-2.svg">
                </div>
                <div class="col-12">
                    <div class="st-table">
                        <div class="st-table-header">
                            <div class="st-table-row">
                                <div class="st-table-header-cell st-table-cell--category">
                                    <h4>CATEGORIE</h4>
                                </div>
                                <div class="st-table-header-cell st-table-cell--branch">
                                    <h4>SPORTTAKKEN</h4>
                                </div>
                                <div class="st-table-header-cell st-table-cell--price text-right">
                                    <h4>TARIEF PER LID/JAAR</h4>
                                </div>
                            </div>
                        </div>
                        <div class="st-table-body">
                            <div class="st-table-row">
                                <div class="st-table-cell st-table-cell--category">
                                    <div class="cell-category-centered" data-title="CATEGORIE">
                                        <h4 class="text-red">A</h4>
                                    </div>
                                </div>
                                <div class="st-table-cell st-table-cell--branch">
                                    <div class="st-table-cell__content st-table-cell__content-centered" data-title="SPORTTAKKEN">
                                        <p>Atletiek, badminton, ballet, baseball&#8209;softball, basketbal, biljart, BMX, boogschieten, bridge, bowling, capoeira, curvebowling, dansen, duivensport, fitness, frisbee, gehandicaptensport, golf, gymnastiek, handbal, handboogschieten(wip), hengelen, hockey, hondensport *, hydrobic, indoor cycling, jogging, judo, kaatsen, kano-kajak, kin-ball, korfbal, krachtbal, muurklimmen, netbal, oriëntatielopen, petanque, reddend zwemmen, roeien, rolschaatsen, ropeskipping, rugby, schaken, squash, tafeltennis, tai-chi, tennis, triatlon-duatlon, volksdans, volksspelen, volleybal, wandelen, waterpolo, wielrennen, windsurfing, yoga, zeilen, zwemmen</p>
                                    </div>
                                </div>
                                <div class="st-table-cell st-table-cell--price">
                                    <div class="cell-price-centered" data-title="TARIEF PER LID/JAAR">
                                        <h4>€ 11,00</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="st-table-row">
                                <div class="st-table-cell st-table-cell--category">
                                    <div class="cell-category-centered" data-title="CATEGORIE">
                                        <h4 class="text-red">B</h4>
                                    </div>
                                </div>
                                <div class="st-table-cell st-table-cell--branch">
                                    <div class="st-table-cell__content st-table-cell__content-centered" data-title="SPORTTAKKEN">
                                        <p>Aikido, bikepolo, circustechnieken, gewichtheffen-powerliften, hapkido, highland games, iaido, ijshockey, ijsschaatsen, ju-jitsu, karate, kendo, minivoetbal, paintball, paardrijden, schermen, taekwondo, voetbal, wing chun, worstelen, wushu, zaalvoetbal</p>
                                    </div>
                                </div>
                                <div class="st-table-cell st-table-cell--price">
                                    <div class="cell-price-centered" data-title="TARIEF PER LID/JAAR">
                                        <h4>€ 13,00</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="st-table-row">
                                <div class="st-table-cell st-table-cell--category">
                                    <div class="cell-category-centered" data-title="CATEGORIE">
                                        <h4 class="text-red">C</h4>
                                    </div>
                                </div>
                                <div class="st-table-cell st-table-cell--branch">
                                    <div class="st-table-cell__content st-table-cell__content-centered" data-title="SPORTTAKKEN">
                                        <p>Duiken, lacrosse, mountainbike, mountainboard, rollerderby, waterskiën</p>
                                    </div>
                                </div>
                                <div class="st-table-cell st-table-cell--price">
                                    <div class="cell-price-centered" data-title="TARIEF PER LID/JAAR">
                                        <h4>€ 17,00</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="st-table-row">
                                <div class="st-table-cell st-table-cell--category">
                                    <div class="cell-category-centered" data-title="CATEGORIE">
                                        <h4 class="text-red">M</h4>
                                    </div>
                                </div>
                                <div class="st-table-cell st-table-cell--branch">
                                    <div class="st-table-cell__content st-table-cell__content-centered" data-title="SPORTTAKKEN">
                                        <p>Multimove (erkend), Multi SkillZ (licentie), bewegingsschool** </p>
                                    </div>
                                </div>
                                <div class="st-table-cell st-table-cell--price">
                                    <div class="cell-price-centered" data-title="TARIEF PER LID/JAAR">
                                        <h4>€ 5,00</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="st-table-row">
                                <div class="st-table-cell st-table-cell--category">
                                    <div class="cell-category-centered" data-title="CATEGORIE">
                                        <h4 class="text-red">Z</h4>
                                    </div>
                                </div>
                                <div class="st-table-cell st-table-cell--branch">
                                    <div class="st-table-cell__content st-table-cell__content-centered" data-title="SPORTTAKKEN">
                                        <p>Bergbeklimmen, boksen, full contact karate, kick boxing, kite-surfen, MMA, motorrijden, muay-tai-boxing, parachutisme, risicovechtsporten, schieten, speedsailing, speleologie, zeilwagenrijden</p>
                                    </div>
                                </div>
                                <div class="st-table-cell st-table-cell--price">
                                    <div class="cell-price-centered" data-title="TARIEF PER LID/JAAR">
                                        <h4 class="text-center not-insured text-break">worden niet<br>verzekerd</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-fullwidth-img section-prices-info">
        <div class="wrap-img">
            <picture>
                <source srcset="<?php print template_url(); ?>images/volleyball-tablet.jpg" media="(max-width: 991px)">
                <img src="<?php print template_url(); ?>images/volleyball.jpg" alt="" class="img-cover">
            </picture>
        </div>

        <div class="container position-relative">
            <div class="card-info text-center">
                <h3 class="card-info__title">Ready to get started?</h3>
                <div class="card-info__wrap-btn">
                    <module type="btn" template="sporta-buttons" button_style="btn btn-animate btn-red" button_text="SLUIT JE NU AAN">
                </div>
                <p class="card-info__text">Not sure yet, questions?</p>
                <p><module type="btn" template="sporta-buttons" button_style="card-info__link-contact" button_text="contact us"></p>
            </div>
        </div>
    </section>
</div>

<?php include template_dir() . "footer.php"; ?>
