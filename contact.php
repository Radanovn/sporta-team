<?php include THIS_TEMPLATE_DIR . "header.php"; ?>

            <section class="section section-contact contact-page">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="section-contact__content mx-auto ml-lg-0">
                                <div class="section__block-title text-center text-sm-left">
                                    <h1>Feel free<br class="d-none d-lg-inline"> to call or email us.</h1>
                                    <p class="lead-text">We are happy to help you.</p>
                                </div>

                                <form class="contact-page-form needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="form-group col-sm-6">
                                            <input type="text" class="form-control" placeholder="Your name" required>
                                            <div class="invalid-feedback">Error text</div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <input type="text" class="form-control" placeholder="Voornaam*">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-6">
                                            <input type="email" class="form-control" placeholder="Your.email@domain.com" required>
                                            <div class="invalid-feedback">Error text</div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <input type="tel" class="form-control" placeholder="Telefoonnummer">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <select>
                                                <option data-display="I have a question about" value=""></option>
                                                <option value="1">Question 1</option>
                                                <option value="2">Question 2</option>
                                                <option value="3">Question 3</option>
                                                <option value="4">Question 4</option>
                                                <option value="5">Question 5</option>
                                                <option value="6">Question 6</option>
                                                <option value="7">Question 7</option>
                                                <option value="8">Question 8</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="4" placeholder="Beoefende sporttakken"></textarea>
                                    </div>
                                    <div class="form-group checkbox-wrap">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check-newsletter">
                                            <label class="custom-control-label" for="check-newsletter">Ja, ik wil op de hoogte gehouden worden via de nieuwsbrief</label>
                                        </div>
                                    </div>
                                    <div class="text-center text-sm-left">
                                        <button type="submit" class="btn btn-animate btn-red">Versturen</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="section-contact__wrap-img">
                                <div class="rect rect--top-right rect--yellow"></div>
                                <div class="circles circles--top-right">
                                    <svg width="36" height="34" viewBox="0 0 36 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="3.77829" cy="3.36509" r="2.78745" fill="#CA2F4E"/>
                                        <circle cx="17.5688" cy="3.36509" r="2.78745" fill="#CA2F4E"/>
                                        <circle cx="32.8264" cy="3.36509" r="2.78745" fill="#CA2F4E"/>
                                        <circle cx="32.8264" cy="17.1556" r="2.78745" fill="#CA2F4E"/>
                                        <circle cx="17.5688" cy="17.1556" r="2.78745" fill="#CA2F4E"/>
                                        <circle cx="3.77829" cy="17.1556" r="2.78745" fill="#CA2F4E"/>
                                        <circle cx="3.77829" cy="30.9461" r="2.78745" fill="#CA2F4E"/>
                                        <circle cx="17.5688" cy="30.9461" r="2.78745" fill="#CA2F4E"/>
                                        <circle cx="32.8264" cy="30.9461" r="2.78745" fill="#CA2F4E"/>
                                    </svg>
                                </div>
                                <img src="<?php print template_url(); ?>images/contact-img-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-map">
                <div id="map">
                    <img src="<?php print template_url(); ?>images/map-img.jpg" class="img-cover" alt="">
                </div>
                <div class="container">
                    <div class="section-map__content">
                        <div class="section-map__content-col-left">
                            <div class="font-weight-600 pb-2 mb-3">
                                <a href="mailto:feederatie@sporta.be" class="link-email">feederatie@sporta.be</a><br>
                                <a href="tel:+32033615340" class="link-phone">+ 32 (0) 3 361 53 40</a>
                            </div>
                            <div>
                                Boomgaardstraat 22<br>
                                Bus 50 B- 2600 Berchem
                            </div>
                        </div>
                        <div class="section-map__content-col-right">
                            <div class="font-weight-600 pb-2 mb-3">
                                Coontact details of the point of contact integrity (api):
                            </div>
                            <div>
                                Charlotte Verboven<br>
                                <a href="mailto:cverboven@sporta.be" class="link-email">cverboven@sporta.be</a><br>
                                <a href="tel:+32014539525" class="link-phone">+32 (0) 14 53 95 25</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-fullwidth-img">
                <div class="wrap-img">
                    <picture>
                        <source srcset="<?php print template_url(); ?>images/contact-img-2-mobile.jpg" media="(max-width: 767px)">
                        <img src="<?php print template_url(); ?>images/contact-img-2.jpg" alt="" class="img-cover">
                    </picture>
                </div>
            </section>

            <section class="section section-contact-person">
                <div class="container position-relative">
                    <div class="circles circles--top-right d-none d-lg-block">
                        <svg width="36" height="34" viewBox="0 0 36 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="3.43088" cy="3.20932" r="2.78745" fill="#52B392"/>
                            <circle cx="17.2214" cy="3.20932" r="2.78745" fill="#52B392"/>
                            <circle cx="32.479" cy="3.20932" r="2.78745" fill="#52B392"/>
                            <circle cx="32.479" cy="16.9999" r="2.78745" fill="#52B392"/>
                            <circle cx="17.2214" cy="16.9999" r="2.78745" fill="#52B392"/>
                            <circle cx="3.43088" cy="16.9999" r="2.78745" fill="#52B392"/>
                            <circle cx="3.43088" cy="30.7904" r="2.78745" fill="#52B392"/>
                            <circle cx="17.2214" cy="30.7904" r="2.78745" fill="#52B392"/>
                            <circle cx="32.479" cy="30.7904" r="2.78745" fill="#52B392"/>
                        </svg>
                    </div>
                    <div class="circles circles--bottom-left d-none d-lg-block">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2.78745" cy="3.20932" r="2.78745" fill="#F6D278"/>
                            <circle cx="16.578" cy="3.20932" r="2.78745" fill="#F6D278"/>
                            <circle cx="31.8355" cy="3.20932" r="2.78745" fill="#F6D278"/>
                            <circle cx="31.8355" cy="16.9999" r="2.78745" fill="#F6D278"/>
                            <circle cx="16.578" cy="16.9999" r="2.78745" fill="#F6D278"/>
                            <circle cx="2.78745" cy="16.9999" r="2.78745" fill="#F6D278"/>
                            <circle cx="2.78745" cy="30.7904" r="2.78745" fill="#F6D278"/>
                            <circle cx="16.578" cy="30.7904" r="2.78745" fill="#F6D278"/>
                            <circle cx="31.8355" cy="30.7904" r="2.78745" fill="#F6D278"/>
                        </svg>
                    </div>
                    <div class="row">
                        <div class="col-lg-9 mx-auto">
                            <div class="section__block-title text-sm-center">
                                <h2>Benieuwd wie er achter dit contactforiumier schuil gaat?</h2>
                            </div>
                        </div>
                    </div>
                    <div class="contact-person-wrap">
                        <div class="contact-person__item">
                            <div class="contact-person__item-photo">
                                <img src="<?php print template_url(); ?>images/photo.jpg" class="img-cover" alt="">
                            </div>
                            <div>
                                <h5 class="contact-person__item-name">Joyce Van Heyst</h5>
                                <p class="contact-person__item-position">Consulent basketbal</p>
                            </div>
                        </div>
                        <div class="contact-person__item">
                            <div class="contact-person__item-photo">
                                <img src="<?php print template_url(); ?>images/photo.jpg" class="img-cover" alt="">
                            </div>
                            <div>
                                <h5 class="contact-person__item-name">Joyce Van Heyst</h5>
                                <p class="contact-person__item-position">Consulent basketbal</p>
                            </div>
                        </div>
                        <div class="contact-person__item">
                            <div class="contact-person__item-photo">
                                <img src="<?php print template_url(); ?>images/photo.jpg" class="img-cover" alt="">
                            </div>
                            <div>
                                <h5 class="contact-person__item-name">Joyce Van Heyst</h5>
                                <p class="contact-person__item-position">Consulent basketbal</p>
                            </div>
                        </div>
                        <div class="contact-person__item">
                            <div class="contact-person__item-photo">
                                <img src="<?php print template_url(); ?>images/photo.jpg" class="img-cover" alt="">
                            </div>
                            <div>
                                <h5 class="contact-person__item-name">Joyce Van Heyst</h5>
                                <p class="contact-person__item-position">Consulent basketbal</p>
                            </div>
                        </div>
                        <div class="contact-person__item">
                            <div class="contact-person__item-photo">
                                <img src="<?php print template_url(); ?>images/photo.jpg" class="img-cover" alt="">
                            </div>
                            <div>
                                <h5 class="contact-person__item-name">Joyce Van Heyst</h5>
                                <p class="contact-person__item-position">Consulent basketbal</p>
                            </div>
                        </div>
                        <div class="contact-person__item">
                            <div class="contact-person__item-photo">
                                <img src="<?php print template_url(); ?>images/photo.jpg" class="img-cover" alt="">
                            </div>
                            <div>
                                <h5 class="contact-person__item-name">Joyce Van Heyst</h5>
                                <p class="contact-person__item-position">Consulent basketbal</p>
                            </div>
                        </div>
                        <div class="contact-person__item">
                            <div class="contact-person__item-photo">
                                <img src="<?php print template_url(); ?>images/photo.jpg" class="img-cover" alt="">
                            </div>
                            <div>
                                <h5 class="contact-person__item-name">Joyce Van Heyst</h5>
                                <p class="contact-person__item-position">Consulent basketbal</p>
                            </div>
                        </div>
                        <div class="contact-person__item">
                            <div class="contact-person__item-photo">
                                <img src="<?php print template_url(); ?>images/photo.jpg" class="img-cover" alt="">
                            </div>
                            <div>
                                <h5 class="contact-person__item-name">Joyce Van Heyst</h5>
                                <p class="contact-person__item-position">Consulent basketbal</p>
                            </div>
                        </div>
                        <div class="contact-person__item">
                            <div class="contact-person__item-photo">
                                <img src="<?php print template_url(); ?>images/photo.jpg" class="img-cover" alt="">
                            </div>
                            <div>
                                <h5 class="contact-person__item-name">Joyce Van Heyst</h5>
                                <p class="contact-person__item-position">Consulent basketbal</p>
                            </div>
                        </div>
                        <div class="contact-person__item">
                            <div class="contact-person__item-photo">
                                <img src="<?php print template_url(); ?>images/photo.jpg" class="img-cover" alt="">
                            </div>
                            <div>
                                <h5 class="contact-person__item-name">Joyce Van Heyst</h5>
                                <p class="contact-person__item-position">Consulent basketbal</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-wrapper-btn text-center">
                        <a href="#" class="btn btn-animate btn-green">more about Sporta team</a>
                    </div>
                </div>
            </section>

<?php include THIS_TEMPLATE_DIR . "footer.php"; ?>
