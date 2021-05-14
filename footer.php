</main>
</div>
<footer class="footer bg-gray">
    <div class="container">
        <div class="edit nodrop safe-mode" field="sporta-team_footer" rel="global">
            <div class="row no-gutters justify-content-between">
                <div class="col-md-3 col-xl-3 pr-xl-0 pr-lg-3">
                    <div class="text-center text-md-left">
                        <a class="navbar-brand" href="#">
                            <img src="<?php print template_url(); ?>images/logo.png"/>
                        </a>
                    </div>
                    <p class="footer__small-text text-center text-md-left">The pinnacle of recreational sports is what Sporta-federatie vzw has to offer sports clubs.<br>
                        The Sporta employees not only have the knowledge and experience, they are particularly keen to support your club activities fourfold.</p>
                    <div class="follow-us-block">
                        <p class="follow-us-block__title">Follow us</p>
                        <module type="social_links" template="sporta-socials"/>
                    </div>
                    <div class="collaboration-block text-center text-md-left">
                        <p class="collaboration-block__title">In collaboration with</p>
                        <div>
                            <div class="collaboration-block__logo cloneable">
                                <a href="#">
                                    <img src="<?php print template_url(); ?>images/logo_ethias.png" class="d-inline-block align-top" alt="">
                                </a>
                            </div>
                            <div class="collaboration-block__logo cloneable">
                                <a href="#">
                                    <img src="<?php print template_url(); ?>images/logo_sport.png" class="d-inline-block align-top" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <module type="menu" name="footer_menu_1" template="footer"/>

                </div>
            </div>
            <div class="footer__bottom">
                <p class="copyright"><span class="copyright__symbol">©</span> Sporta Team</p>
                <ul class="list-unstyled d-flex justify-content-end align-items-center footer__bottom-menu">
                    <module type="menu" name="footer_menu_2" template="footer_bottom"/>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>
<script src="<?php print template_url(); ?>js/bundle.js"></script></body>
</html>
