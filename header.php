<!doctype html>
<html lang="en">
<head>
    <title>{content_meta_title}</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="keywords" content="{content_meta_keywords}">
    <meta name="description" content="{content_meta_description}">

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
    <script src="<?php print template_url(); ?>js/custom.js"></script>
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
                                <form class="d-flex order-lg-1 form-navbar-top" method="get" action="<?php print site_url(); ?>search-results">
                                    <div class="input-group">
                                        <input type="search" name="q" class="form-control border-right-0 border" value="<?php print isset($_GET['q']) ? $_GET['q'] : '';?>" placeholder="Search..." aria-label="Search"/>
                                        <span class="input-group-append">
                                            <button type="submit" class="btn btn-sm border-left-0 border btn-search">
                                                <img class="mb-0" src="<?php print template_url(); ?>modules/layouts/svg/no-result/skin-2.svg">
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
                                <div class="dropdown-menu">
                                    <div class="row flex-column align-items-xl-center">
                                        <module type="menu" template="header-main"  id="join-sporta-club-menu" menu-name="join-sporta-club" is-mega="false" />
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown has-megamenu">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">For clubs</a>
                                <div class="dropdown-menu w-100 megamenu">
                                    <div class="row justify-content-between flex-xl-nowrap">
                                        <module type="menu" class="megamenu__column" template="header-main"  id="for-clubs-menu-1" menu-name="For clubs - 1st column" is-mega="true" />
                                        <module type="menu" class="megamenu__column" template="header-main"  id="for-clubs-menu-2" menu-name="For clubs - 2nd column" is-mega="true" />
                                        <module type="menu" class="megamenu__column" template="header-main"  id="for-clubs-menu-3" menu-name="For clubs - 3rd column" is-mega="true" />
                                        <module type="menu" class="megamenu__column" template="header-main"  id="for-clubs-menu-4" menu-name="For clubs - 4th column" is-mega="true" />
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About Sporta Team</a>
                                <div class="dropdown-menu w-100">
                                    <module type="menu" class="row row-cols-xl-2" template="header-main" id="about-sporta-team-menu" menu-name="About sporta team" is-mega="false" />
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <nav class="navbar p-0 d-md-none">
                <div class="collapse navbar-collapse" id="navbarMobile">
                    <div class="wrap-mobile-menu">
                        <form class="d-flex form-header-mobile" method="get" action="<?php print site_url(); ?>search-results">
                            <div class="input-group">
                                <span class="input-group-append">
                                    <button class="btn btn-sm border-right-0 border btn-search" type="submit">
                                        <img src="<?php print template_url(); ?>modules/layouts/svg/header/skin-18.svg">
                                    </button>
                                </span>
                                <input class="form-control border-left-0 border" type="search" name="q"  value="<?php print isset($_GET['q']) ? $_GET['q'] : '';?>" placeholder="Search..." aria-label="Search">
                            </div>
                        </form>
                        <ul class="navbar-nav w-100" id="main-mobile-menu"></ul>
                        <div class="navbar-nav">
                            <module type="menu" name="header_menu" template="default-mobile"/>
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
        </header>
        <main>
