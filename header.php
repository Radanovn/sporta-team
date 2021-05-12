<!doctype html>
<html lang="en">
<head>
    <title>{content_meta_title}</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--  Site Meta Data  -->
    <meta name="keywords" content="{content_meta_keywords}">
    <meta name="description" content="{content_meta_description}">


    <!--  Site Open Graph Meta Data  -->
    <meta property="og:title" content="{content_meta_title}">
    <meta property="og:type" content="{og_type}">
    <meta property="og:url" content="{content_url}">
    <meta property="og:image" content="{content_image}">
    <meta property="og:description" content="{og_description}">
    <meta property="og:site_name" content="{og_site_name}">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Main page</title>
    <link href="<?php print template_url(); ?>css/main.css" rel="stylesheet">
    <link href="<?php print template_url(); ?>css/custom.css" rel="stylesheet">

</head>
<body>
<div class="wrapper">
    <div class="content">
        <header class="header">
            <div class="header-top">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg p-0">
                        <div class="d-flex align-items-center">
                            <module type="logo" id="logo" template="default" class="d-inline-block align-top" default-text="Sporta"/>
                            <span class="navbar-text p-0 d-none d-xl-inline-block">In full force for you sport club</span>
                        </div>

                        <button class="navbar-toggler d-md-none js-mobile-menu" type="button" data-toggle="collapse" data-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <span class="line"></span>
                            </span>
                        </button>

                        <button class="navbar-toggler d-none d-md-block d-lg-none js-tablet-menu" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <span class="line"></span>
                            </span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-end" id="navbarTop">
                            <div class="wrap-navbar-top d-lg-flex align-items-lg-center">
                                <form class="d-flex order-lg-1 form-navbar-top">
                                    <div class="input-group">
                                        <input class="form-control border-right-0 border" type="search" placeholder="Search..." aria-label="Search">
                                        <span class="input-group-append">
                                <button class="btn btn-sm border-left-0 border btn-search" type="submit">
                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.0553 10.2285L14.25 13.5M12.4128 6.21562C12.4128 9.37227 9.91391 11.9312 6.8314 11.9312C3.74888 11.9312 1.25 9.37227 1.25 6.21562C1.25 3.05897 3.74888 0.5 6.8314 0.5C9.91391 0.5 12.4128 3.05897 12.4128 6.21562Z" stroke="#818181" stroke-linecap="round"/>
                                    </svg>
                                </button>
                            </span>
                                    </div>
                                </form>
                                <div class="navbar-nav order-0">
                                    <module type="menu" name="header_menu" template="default"/>
                                </div>
                                <div class="v-divider d-none d-lg-block order-lg-1"></div>
                                <div class="order-lg-1">
                                    <module type="btn" template="sporta-login" button_style="btn-link" button_text="Login" />
                                </div>
                                <div class="wrap-btn text-center order-lg-1">
                                    <module type="btn" template="sporta-buttons" button_style="btn btn-animate btn-red" button_text="Join sporta club"/>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="header-bottom">
                <nav class="navbar navbar-expand-md p-0">
                    <div class="collapse navbar-collapse" id="navbarBottom">
                        <ul class="navbar-nav nav-justified w-100">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Join Sporta Club</a>
                                <div class="dropdown-menu w-100 megamenu">
                                    <div class="row justify-content-between flex-xl-nowrap">
                                        <module type="menu" class="megamenu__column" template="header-main"  id="join-sporta-club-menu" menu-name="join-sporta-club" />
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown has-megamenu">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">For clubs</a>
                                <div class="dropdown-menu w-100 megamenu">
                                    <div class="row justify-content-between flex-xl-nowrap">
                                        <module type="menu" class="megamenu__column" template="header-main"  id="for-clubs-menu-1" menu-name="For clubs - 1st column" />
                                        <module type="menu" class="megamenu__column" template="header-main"  id="for-clubs-menu-2" menu-name="For clubs - 2nd column" />
                                        <module type="menu" class="megamenu__column" template="header-main"  id="for-clubs-menu-3" menu-name="For clubs - 3rd column" />
                                        <module type="menu" class="megamenu__column" template="header-main"  id="for-clubs-menu-4" menu-name="For clubs - 4th column" />
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About Sporta Team</a>
                                <div class="dropdown-menu w-100">
                                    <div class="row row-cols-xl-2">
                                        <module type="menu" class="megamenu__column" template="header-main"  id="about-sporta-team-menu" menu-name="About sporta team" />
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <!--mobile menu-->
            <nav class="navbar p-0 d-md-none">
                <div class="collapse navbar-collapse" id="navbarMobile">
                    <div class="wrap-mobile-menu">
                        <form class="d-flex form-header-mobile">
                            <div class="input-group">
                                <span class="input-group-append">
                                    <button class="btn btn-sm border-right-0 border btn-search" type="submit">
                                        <img src="<?php print template_url(); ?>modules/layouts/svg/header/skin-18.svg">
                                    </button>
                                </span>
                                <input class="form-control border-left-0 border" type="search" placeholder="Search..." aria-label="Search">
                            </div>
                        </form>
                        <ul class="navbar-nav w-100">
                            <li class="nav-item has-submenu">
                                <a class="nav-link submenu-toggle" href="#" role="button">Join Sporta Club</a>
                                <div class="submenu">
                                    <div class="submenu-wrap">
                                        <div class="submenu-header">
                                            <div class="btn-close-submenu">back</div>
                                            <div class="submenu-title">Join Sporta Club</div>
                                        </div>
                                        <ul class="navbar-nav w-100">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Prices</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Why participate</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Onze clubs</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item has-submenu">
                                <a class="nav-link submenu-toggle" href="#" role="button">For clubs</a>
                                <div class="submenu">
                                    <div class="submenu-wrap">
                                        <div class="submenu-header">
                                            <div class="btn-close-submenu">back</div>
                                            <div class="submenu-title">For clubs</div>
                                        </div>
                                        <ul class="navbar-nav w-100">
                                            <li class="nav-item has-submenu">
                                                <a class="nav-link submenu-toggle" href="#" role="button">Insurance</a>
                                                <div class="submenu">
                                                    <div class="submenu-wrap">
                                                        <div class="submenu-header">
                                                            <div class="btn-close-submenu">back</div>
                                                            <div class="submenu-title">Insurance</div>
                                                        </div>
                                                        <ul class="navbar-nav w-100">
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Our sports insurance</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Additional options</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">What to do in the event of an accident?</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item has-submenu">
                                                <a class="nav-link submenu-toggle" href="#" role="button">Club Support</a>
                                                <div class="submenu">
                                                    <div class="submenu-wrap">
                                                        <div class="submenu-header">
                                                            <div class="btn-close-submenu">back</div>
                                                            <div class="submenu-title">Club Support</div>
                                                        </div>
                                                        <ul class="navbar-nav w-100">
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Club benefits</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Ideas and tools for your club</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Youth sports subsidy</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item has-submenu">
                                                <a class="nav-link submenu-toggle" href="#" role="button">Sport for all</a>
                                                <div class="submenu">
                                                    <div class="submenu-wrap">
                                                        <div class="submenu-header">
                                                            <div class="btn-close-submenu">back</div>
                                                            <div class="submenu-title">Sport for all</div>
                                                        </div>
                                                        <ul class="navbar-nav w-100">
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Sport (a) for everyone</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Social rate</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item has-submenu">
                                                <a class="nav-link submenu-toggle" href="#" role="button">Multi sports</a>
                                                <div class="submenu">
                                                    <div class="submenu-wrap">
                                                        <div class="submenu-header">
                                                            <div class="btn-close-submenu">back</div>
                                                            <div class="submenu-title">Multi sports</div>
                                                        </div>
                                                        <ul class="navbar-nav w-100">
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Support for clubs</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Methodologies “in the picture”</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" role="button">Healthy Sports</a>
                                            </li>
                                            <li class="nav-item has-submenu">
                                                <a class="nav-link submenu-toggle" href="#" role="button">Training</a>
                                                <div class="submenu">
                                                    <div class="submenu-wrap">
                                                        <div class="submenu-header">
                                                            <div class="btn-close-submenu">back</div>
                                                            <div class="submenu-title">Training</div>
                                                        </div>
                                                        <ul class="navbar-nav w-100">
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Offer Sporta</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Offer VTS</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item has-submenu">
                                                <a class="nav-link submenu-toggle" href="#" role="button">Ethical sports</a>
                                                <div class="submenu">
                                                    <div class="submenu-wrap">
                                                        <div class="submenu-header">
                                                            <div class="btn-close-submenu">back</div>
                                                            <div class="submenu-title">Ethical sports</div>
                                                        </div>
                                                        <ul class="navbar-nav w-100">
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Unacceptable behavior</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item has-submenu">
                                                <a class="nav-link submenu-toggle" href="#" role="button">Sports Activities</a>
                                                <div class="submenu">
                                                    <div class="submenu-wrap">
                                                        <div class="submenu-header">
                                                            <div class="btn-close-submenu">back</div>
                                                            <div class="submenu-title">Sports Activities</div>
                                                        </div>
                                                        <ul class="navbar-nav w-100">
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Volley-ball</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Table tennis</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Swimming</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Jogging</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Gym & Dance</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Badminton</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item has-submenu">
                                <a class="nav-link submenu-toggle" href="#" role="button">About Sporta Team</a>
                                <div class="submenu">
                                    <div class="submenu-wrap">
                                        <div class="submenu-header">
                                            <div class="btn-close-submenu">back</div>
                                            <div class="submenu-title">About Sporta Team</div>
                                        </div>
                                        <ul class="navbar-nav w-100">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">The team</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Board and policy</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Mission / Vision</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">House rules</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Values and norms</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Sporta</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="navbar-nav">
                            <module type="menu" name="header_menu"template="default"/>
                            <a href="#" class="nav-link btn-login">
                    <span class="btn-login__icon">
                        <img src="<?php print template_url(); ?>images/user-icon.svg" class="d-inline-block align-top" alt="">
                    </span>
                                <span>Log in</span>
                            </a>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="btn btn-animate btn-red">Join Sporta Club</a>
                        </div>
                    </div>

                </div>
            </nav>
            <!--mobile menu-->

        </header>

        <main>
