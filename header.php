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
    <link href="<?php print template_url(); ?>main.css" rel="stylesheet"></head>
<body>
<div class="wrapper">
    <div class="content">
        <header class="header">
            <div class="header-top">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg p-0">
                        <div class="d-flex align-items-center">
                            <a class="navbar-brand p-0" href="#">
                                <img src="<?php print template_url(); ?>images/Logo.svg" class="d-inline-block align-top" alt="">
                            </a>
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
                                    <a class="nav-link active" href="#">News</a>
                                    <a class="nav-link" href="#">Contact</a>
                                </div>
                                <div class="v-divider d-none d-lg-block order-lg-1"></div>
                                <div class="order-lg-1">
                                    <a href="#" class="btn-login">
                                <span class="btn-login__icon">
                                    <img src="<?php print template_url(); ?>images/user-icon.svg" class="d-inline-block align-top" alt="">
                                </span>
                                        <span>Log in</span>
                                    </a>
                                </div>
                                <div class="wrap-btn text-center order-lg-1">
                                    <a href="#" class="btn btn-animate btn-red">Join Sporta Club</a>
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
                                        <div>
                                            <a class="dropdown-item" href="#">
                                        <span class="dropdown-item__icon">
                                            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.17621 4.37166H17.4762V1.90243C17.4762 1.32076 16.935 0.891152 16.3701 1.02438L2.17621 4.37166Z" stroke="#F6D278" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M18.3754 16.9998H2.17539C1.68039 16.9998 1.27539 16.5939 1.27539 16.0978V5.27337C1.27539 4.77725 1.68039 4.37134 2.17539 4.37134H18.3754C18.8704 4.37134 19.2754 4.77725 19.2754 5.27337V16.0978C19.2754 16.5939 18.8704 16.9998 18.3754 16.9998Z" stroke="#F6D278" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M19.2753 12.49H15.6753C14.6853 12.49 13.8753 11.6781 13.8753 10.6859C13.8753 9.69367 14.6853 8.88184 15.6753 8.88184H19.2753V12.49Z" stroke="#F6D278" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                                <span>Prices</span>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                        <span class="dropdown-item__icon">
                                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.27539 1.9V13.6C1.27539 14.095 1.68039 14.5 2.17539 14.5H4.87539V19L10.2754 14.5H18.3754C18.8704 14.5 19.2754 14.095 19.2754 13.6V1.9C19.2754 1.405 18.8704 1 18.3754 1H2.17539C1.68039 1 1.27539 1.405 1.27539 1.9Z" stroke="#F6D278" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10.2754 11.7998H10.2844" stroke="#F6D278" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.47534 5.5362C8.51134 5.2752 8.61934 4.7892 8.97934 4.3572C9.07834 4.2402 9.24934 4.0332 9.54634 3.8802C9.89734 3.7002 10.2213 3.7002 10.3653 3.7002C10.5363 3.7002 10.9143 3.7182 11.3103 3.9792C11.7963 4.3032 11.9493 4.7712 11.9943 4.9152C12.0213 4.9872 12.1563 5.4642 11.9943 6.0132C11.8953 6.3552 11.7153 6.5712 11.5533 6.7512C10.9233 7.4982 10.3743 7.4352 10.2753 7.9212C10.2663 7.9572 10.2753 8.2272 10.2753 8.7582C10.2753 8.9022 10.2753 9.0192 10.2753 9.1002" stroke="#F6D278" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                                <span>Why participate</span>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                        <span class="dropdown-item__icon">
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.7754 13.5019C17.6054 13.5019 18.2754 14.1717 18.2754 15.0014C18.2754 15.8312 17.6054 16.501 16.7754 16.501H14.2754H16.2754C17.1054 16.501 17.7754 17.1707 17.7754 18.0005C17.7754 18.8302 17.1054 19.5 16.2754 19.5H15.2754H7.27539C3.96539 19.5 1.27539 16.8009 1.27539 13.4819C1.27539 10.7828 3.04539 8.49349 5.49539 7.73373C6.72539 7.34386 7.64539 6.30419 8.04539 5.06458L8.96539 2.23548C9.12539 1.58568 9.78539 1.41574 10.4454 1.5357C11.4954 1.71564 12.3854 3.06521 12.3854 5.50444L12.2754 7.5038H17.7754C18.6054 7.5038 19.2754 8.17359 19.2754 9.0033C19.2754 9.8331 18.6054 10.5029 17.7754 10.5029H15.2754H17.2754C18.1054 10.5029 18.7754 11.1726 18.7754 12.0024C18.7754 12.8321 18.1054 13.5019 17.2754 13.5019H14.7754" stroke="#F6D278" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                                <span>Onze clubs</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown has-megamenu">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">For clubs</a>
                                <div class="dropdown-menu w-100 megamenu">
                                    <div class="row justify-content-between flex-xl-nowrap">
                                        <div class="megamenu__column">
                                            <a class="dropdown-item" href="#">
                                        <span class="dropdown-item__icon">
                                            <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.49133 2L8.69133 1L15.8913 2V10.2342C15.8913 12.5932 14.7357 14.8025 12.7982 16.148L8.69133 19L4.58448 16.148C2.6469 14.8025 1.49133 12.5932 1.49133 10.2342V2Z" stroke="#CA2F4E" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.2913 7.29999L7.92633 11.8L5.99133 9.81099" stroke="#CA2F4E" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                                <span>Insurance</span>
                                            </a>
                                            <ul class="list-unstyled dropdown-item__sublist">
                                                <li>
                                                    <a href="#">Our sports insurance</a>
                                                </li>
                                                <li>
                                                    <a href="#">Additional options</a>
                                                </li>
                                                <li>
                                                    <a href="#">What to do in the event of an accident?</a>
                                                </li>
                                            </ul>
                                            <a class="dropdown-item" href="#">
                                        <span class="dropdown-item__icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1L12.7 7.3H19L14.5 12.7L16.3 19L10 15.4L3.7 19L5.5 12.7L1 7.3H7.3L10 1Z" stroke="#CA2F4E" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                                <span>Club Support</span>
                                            </a>
                                            <ul class="list-unstyled dropdown-item__sublist">
                                                <li>
                                                    <a href="#">Club benefits</a>
                                                </li>
                                                <li>
                                                    <a href="#">Ideas and tools for your club</a>
                                                </li>
                                                <li>
                                                    <a href="#">Youth sports subsidy</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="megamenu__column">
                                            <a class="dropdown-item" href="#">
                                        <span class="dropdown-item__icon">
                                            <svg width="27" height="20" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M23.2838 17.5858H5.46537C3.31179 17.5858 1.6106 15.7249 1.82488 13.5804L2.65645 5.4429H5.0832L6.52426 8.3272C7.28919 9.85817 9.35438 10.1381 10.4986 8.86573C11.6428 7.5934 13.3424 5.4429 13.3424 5.4429C13.3424 5.4429 16.4685 7.75637 18.4303 9.08576C20.2452 10.3156 22.8713 11.7922 24.4234 12.6414C25.2135 13.0737 26.0924 13.8997 26.0924 14.8008V15.1572C26.0924 16.4985 24.624 17.5858 23.2838 17.5858Z" stroke="#CA2F4E" stroke-width="1.75"/>
                                                <path d="M9.09235 17.5858V18.8" stroke="#CA2F4E" stroke-width="1.75" stroke-linecap="round"/>
                                                <path d="M18.8066 17.5858V18.8" stroke="#CA2F4E" stroke-width="1.75" stroke-linecap="round"/>
                                                <path d="M5.44952 17.5858V18.8" stroke="#CA2F4E" stroke-width="1.75" stroke-linecap="round"/>
                                                <path d="M15.1638 17.5858V18.8" stroke="#CA2F4E" stroke-width="1.75" stroke-linecap="round"/>
                                                <path d="M22.4495 17.5858V18.8" stroke="#CA2F4E" stroke-width="1.75" stroke-linecap="round"/>
                                                <path d="M19.2892 13.564L21.2593 10.8525" stroke="#CA2F4E" stroke-width="1.75"/>
                                                <path d="M16.8334 11.7798L18.6736 9.25266" stroke="#CA2F4E" stroke-width="1.75"/>
                                                <path d="M14.3776 9.99539L16.203 7.48297" stroke="#CA2F4E" stroke-width="1.75"/>
                                                <path d="M2.03192 11.5143C2.03192 11.5143 4.90176 12.6203 6.28192 13.9429C7.51636 15.1259 8.71049 17.5858 8.71049 17.5858" stroke="#CA2F4E" stroke-width="1.75" stroke-linecap="round"/>
                                                <path d="M13.342 5.44291L11.5206 1.80005C11.5206 1.80005 11.0782 2.16636 10.8618 2.45884C10.2293 3.31368 9.95569 4.22 10.3469 5.13275L11.4665 7.7452C12.4132 6.61826 13.342 5.44291 13.342 5.44291Z" stroke="#CA2F4E" stroke-width="1.75" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                                <span>Sport for all</span>
                                            </a>
                                            <ul class="list-unstyled dropdown-item__sublist">
                                                <li>
                                                    <a href="#">Sport (a) for everyone</a>
                                                </li>
                                                <li>
                                                    <a href="#">Social rate</a>
                                                </li>
                                            </ul>
                                            <a class="dropdown-item" href="#">
                                        <span class="dropdown-item__icon">
                                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <mask id="path-1-inside-1" fill="white">
                                                <rect x="0.949463" y="0.679932" width="7.76161" height="7.76161" rx="1"/>
                                                </mask>
                                                <rect x="0.949463" y="0.679932" width="7.76161" height="7.76161" rx="1" stroke="#CA2F4E" stroke-width="3.5" mask="url(#path-1-inside-1)"/>
                                                <mask id="path-2-inside-2" fill="white">
                                                <rect x="0.949463" y="10.5583" width="7.76161" height="7.76161" rx="1"/>
                                                </mask>
                                                <rect x="0.949463" y="10.5583" width="7.76161" height="7.76161" rx="1" stroke="#CA2F4E" stroke-width="3.5" mask="url(#path-2-inside-2)"/>
                                                <mask id="path-3-inside-3" fill="white">
                                                <rect x="11.1879" y="10.5583" width="7.76161" height="7.76161" rx="1"/>
                                                </mask>
                                                <rect x="11.1879" y="10.5583" width="7.76161" height="7.76161" rx="1" stroke="#CA2F4E" stroke-width="3.5" mask="url(#path-3-inside-3)"/>
                                                <rect x="12.0629" y="1.55493" width="6.01161" height="6.01161" rx="3.00581" stroke="#CA2F4E" stroke-width="1.75"/>
                                            </svg>
                                        </span>
                                                <span>Multi sports</span>
                                            </a>
                                            <ul class="list-unstyled dropdown-item__sublist">
                                                <li>
                                                    <a href="#">Support for clubs</a>
                                                </li>
                                                <li>
                                                    <a href="#">Methodologies “in the picture”</a>
                                                </li>
                                            </ul>
                                            <a class="dropdown-item" href="#">
                                        <span class="dropdown-item__icon">
                                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.9495 1C13.0691 0.99993 10.9495 4 10.9495 4C10.9495 4 9.03026 1 5.94946 1C3.04862 1 0.949563 3.00004 0.949463 5.99998C0.949563 8.9999 1.94956 11 4.94946 14C6.94956 16 10.9495 19 10.9495 19C10.9495 19 14.9496 16 16.9495 14C19.9496 11 20.9496 9 20.9496 6C20.9496 3.00004 18.8503 1.00007 15.9495 1Z" stroke="#CA2F4E" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M1.83228 10.0156L4.94936 10L6.94942 6L8.94942 12L10.9494 9L12.9494 12L14.9494 6L16.9494 10L20.0666 10.0156" stroke="#CA2F4E" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                                <span>Healthy Sports</span>
                                            </a>
                                        </div>
                                        <div class="megamenu__column">
                                            <a class="dropdown-item" href="#">
                                        <span class="dropdown-item__icon">
                                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.3692 21L9.16918 18.57C9.16918 18.57 5.05918 18.89 4.97918 18.47C4.71918 17.13 4.23918 14.46 4.10918 13.53L1.62918 12.3C1.42918 12.3 1.29918 12.12 1.40918 11.98L5.13918 7.16C5.07918 2.72 8.02918 1 10.3692 1C13.6892 1 21.0392 1.08 21.3592 8.74C21.4192 10.1 21.0292 11.39 21.0292 11.39" stroke="#CA2F4E" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.919 13.69C14.349 12.96 17.919 9.28 15.769 6.45999C14.029 4.15999 10.709 4.15999 8.959 6.45999C6.809 9.29 10.389 12.96 11.809 13.69C12.169 13.87 12.569 13.87 12.919 13.69Z" stroke="#CA2F4E" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.369 9.78003V13.82" stroke="#CA2F4E" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10.7692 13.8199H13.9692" stroke="#CA2F4E" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10.7692 16.46H13.9692" stroke="#CA2F4E" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.369 9.78C12.6451 9.78 12.869 9.5562 12.869 9.28C12.869 9.0039 12.6451 8.78003 12.369 8.78003C12.0929 8.78003 11.869 9.0039 11.869 9.28C11.869 9.5562 12.0929 9.78 12.369 9.78Z" stroke="#CA2F4E" stroke-width="1.75" stroke-miterlimit="10"/>
                                            </svg>
                                        </span>
                                                <span>Training</span>
                                            </a>
                                            <ul class="list-unstyled dropdown-item__sublist">
                                                <li>
                                                    <a href="#">Offer Sporta</a>
                                                </li>
                                                <li>
                                                    <a href="#">Offer VTS</a>
                                                </li>
                                            </ul>
                                            <a class="dropdown-item" href="#">
                                        <span class="dropdown-item__icon">
                                            <svg width="26" height="19" viewBox="0 0 26 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.2293 5.95158L8.10779 4.17273" stroke="#CA2F4E" stroke-width="1.75" stroke-miterlimit="10"/>
                                                <path d="M14.2769 11.442L17.0148 14.3535C17.4083 14.77 18.0464 14.77 18.4399 14.3535V14.3535C18.8335 13.937 18.8335 13.2617 18.4399 12.8452" stroke="#CA2F4E" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M14.2768 11.442L16.3022 13.5993C16.6957 14.0158 16.6957 14.6911 16.3022 15.1076L16.3022 15.1076C15.9087 15.5241 15.2706 15.5241 14.8771 15.1076L12.8517 12.9503" stroke="#CA2F4E" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.8518 12.9503L14.1646 14.3535C14.5581 14.77 14.5581 15.4453 14.1646 15.8618L14.1646 15.8618C13.7711 16.2783 13.133 16.2783 12.7395 15.8618L11.4266 14.4586" stroke="#CA2F4E" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M11.4266 14.4586L12.0268 15.1076C12.4204 15.5241 12.4204 16.1994 12.0268 16.6159L12.0268 16.6159C11.6333 17.0324 10.9952 17.0324 10.6017 16.6159L9.53284 15.4847L6.68262 12.4682L4.1886 8.32043" stroke="#CA2F4E" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M2.7635 9.07457L1.33837 7.5663C1.1416 7.35806 1.1416 7.02042 1.33837 6.81217L6.68261 1.15619C6.87938 0.947938 7.19841 0.947938 7.39518 1.15619L8.82031 2.66445C9.01708 2.8727 9.01708 3.21033 8.82031 3.41858L3.47607 9.07457C3.2793 9.28281 2.96027 9.28281 2.7635 9.07457Z" stroke="#CA2F4E" stroke-width="1.75" stroke-miterlimit="10"/>
                                                <path d="M19.0787 3.93712L21.0107 3.25022C21.2774 3.15538 21.5746 3.29858 21.6744 3.57007L24.1579 10.5033C24.2578 10.7748 24.1225 11.0717 23.8557 11.1666L21.9238 11.8535C21.657 11.9483 21.3599 11.8051 21.26 11.5336L18.7765 4.60041C18.6767 4.32892 18.812 4.03196 19.0787 3.93712Z" stroke="#CA2F4E" stroke-width="1.75" stroke-miterlimit="10"/>
                                                <path d="M13.517 7.63515L18.3032 12.7006L21.1244 11.1463L19.1464 5.83684L13.8526 5.22514C13.6301 5.19942 13.4067 5.23076 13.1993 5.31777C12.4106 5.64862 10.3815 6.49815 9.98721 6.64602C9.98721 6.64602 8.09621 8.0884 10.2018 8.60678C10.4872 8.67705 10.7907 8.63748 11.057 8.51061C11.6587 8.224 13.058 7.63515 13.517 7.63515Z" stroke="#CA2F4E" stroke-width="1.75" stroke-miterlimit="10"/>
                                                <path d="M6.4858 12.0024L5.17793 13.0251C4.72312 13.3777 4.076 13.2844 3.73254 12.8168L3.73254 12.8168C3.38908 12.3491 3.47935 11.6843 3.93416 11.3317L5.24203 10.309" stroke="#CA2F4E" stroke-width="1.75" stroke-miterlimit="10"/>
                                                <path d="M7.38294 14.015L5.59819 15.3569C5.14338 15.7094 4.49626 15.6162 4.1528 15.1485L4.1528 15.1485C3.80935 14.6809 3.56048 14.27 4.35442 13.6634L6.00143 12.3867" stroke="#CA2F4E" stroke-width="1.75" stroke-miterlimit="10"/>
                                                <path d="M8.56161 15.7084L7.25373 16.7312C6.79893 17.0837 6.15181 16.9904 5.80835 16.5228L5.80835 16.5228C5.46489 16.0552 5.55516 15.3903 6.00997 15.0377L7.79472 13.6958" stroke="#CA2F4E" stroke-width="1.75" stroke-miterlimit="10"/>
                                                <path d="M10.6289 16.7635L9.321 17.7862C8.86619 18.1388 8.21907 18.0455 7.87561 17.5779L7.87561 17.5779C7.53215 17.1103 7.62242 16.4454 8.07723 16.0928L9.3851 15.0701" stroke="#CA2F4E" stroke-width="1.75" stroke-miterlimit="10"/>
                                            </svg>
                                        </span>
                                                <span>Ethical sports</span>
                                            </a>
                                            <ul class="list-unstyled dropdown-item__sublist">
                                                <li>
                                                    <a href="#">Unacceptable behavior</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="megamenu__column">
                                            <a class="dropdown-item" href="#">
                                        <span class="dropdown-item__icon">
                                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.4529 1.00037C10.4529 1.00037 9.1343 3.94989 9.21339 5.93541C9.27917 7.58397 10.3655 10 10.3655 10C10.3655 10 9.02444 12.5492 7.64871 13.6972C6.24319 14.8699 3.42456 15.7292 3.42456 15.7292C1.28732 13.1362 0.695911 9.44575 2.21066 6.19736C3.74945 2.8974 7.03485 0.969265 10.4529 1.00037Z" stroke="#CA2F4E" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10.3652 10C10.3652 10 9.27892 7.58394 9.21315 5.93539C9.13396 3.94985 10.4526 1.00034 10.4526 1.00034C11.6995 1.01169 12.9641 1.28374 14.1679 1.8451C18.6717 3.94525 20.6203 9.29883 18.5201 13.8026C18.5201 13.8026 16.9182 11.0701 15.2032 10.2703C13.4882 9.4706 10.3652 10 10.3652 10Z" stroke="#CA2F4E" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.4248 15.7292C3.4248 15.7292 6.24342 14.87 7.64893 13.6972C9.02462 12.5492 10.3658 10 10.3658 10C10.3658 10 13.4887 9.47059 15.2037 10.2703C16.9187 11.0701 18.5206 13.8026 18.5206 13.8026C16.4204 18.3064 11.0669 20.255 6.56308 18.1548C5.30767 17.5694 4.25079 16.7313 3.4248 15.7292Z" stroke="#CA2F4E" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M9.21329 5.93542C9.1342 3.94989 10.4527 1.00037 10.4527 1.00037C8.67368 0.984175 6.93054 1.49878 5.45092 2.46135L5.45808 2.46391C4.679 4.58668 4.31316 6.29399 4.49438 8.75139C4.6771 11.2294 6.8606 14.2288 6.8606 14.2288L6.86612 14.2438C7.15231 14.0716 7.41927 13.8885 7.64861 13.6972C9.02433 12.5492 10.3654 10 10.3654 10C10.3654 10 9.27906 7.58397 9.21329 5.93542Z" stroke="#CA2F4E" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M9.33019 4.59152C9.33019 4.59152 12.7918 4.15354 15.7637 5.50078C17.1927 6.14859 18.3145 7.04419 19.0805 7.77991L19.0839 7.77464C19.5814 9.71923 19.4346 11.8415 18.5201 13.8026C18.5201 13.8026 16.9182 11.07 15.2032 10.2703C13.4882 9.47053 10.3652 9.99996 10.3652 9.99996C10.3652 9.99996 9.27891 7.58387 9.21313 5.93532C9.19649 5.51689 9.24184 5.05565 9.3239 4.58822L9.33019 4.59152Z" stroke="#CA2F4E" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M7.64893 13.6972C6.24342 14.87 3.4248 15.7292 3.4248 15.7292C4.25079 16.7313 5.30767 17.5694 6.56308 18.1548C6.89737 18.3107 7.23634 18.4443 7.57831 18.5562C7.67628 18.5249 7.77423 18.4936 7.87213 18.4622C8.43068 18.2829 8.9871 18.0988 9.53102 17.8839C10.6192 17.4541 11.6595 16.9002 12.5732 16.0111C13.4683 15.1402 14.3401 13.8035 14.9873 12.6875C15.3111 12.129 15.5791 11.6247 15.7663 11.2601C15.8599 11.0777 15.9332 10.9303 15.9832 10.8284L16.0071 10.7796C15.746 10.5735 15.4764 10.3975 15.2037 10.2703C13.4887 9.47059 10.3658 10 10.3658 10C10.3658 10 9.02462 12.5492 7.64893 13.6972Z" stroke="#CA2F4E" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                                <span>Sports Activities</span>
                                            </a>
                                            <ul class="list-unstyled dropdown-item__sublist">
                                                <li>
                                                    <a href="#">Volley-ball</a>
                                                </li>
                                                <li>
                                                    <a href="#">Table tennis</a>
                                                </li>
                                                <li>
                                                    <a href="#">Swimming</a>
                                                </li>
                                                <li>
                                                    <a href="#">Jogging</a>
                                                </li>
                                                <li>
                                                    <a href="#">Gym & Dance</a>
                                                </li>
                                                <li>
                                                    <a href="#">Badminton</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About Sporta Team</a>
                                <div class="dropdown-menu w-100">
                                    <div class="row row-cols-xl-2">
                                        <a class="dropdown-item" href="#">
                                        <span class="dropdown-item__icon">
                                            <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.46875 13.1875C3.53625 13.1875 1.15625 15.5675 1.15625 18.5C1.16687 18.5 11.7812 18.5 11.7812 18.5C11.7812 15.5675 9.40125 13.1875 6.46875 13.1875Z" stroke="#52B392" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.46875 13.1875C7.93575 13.1875 9.125 11.9982 9.125 10.5312C9.125 9.06426 7.93575 7.875 6.46875 7.875C5.00175 7.875 3.8125 9.06426 3.8125 10.5312C3.8125 11.9982 5.00175 13.1875 6.46875 13.1875Z" stroke="#52B392" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M17.0938 6.8125C14.1613 6.8125 11.7812 9.1925 11.7812 12.125C11.7919 12.125 22.4062 12.125 22.4062 12.125C22.4062 9.1925 20.0262 6.8125 17.0938 6.8125Z" stroke="#52B392" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M17.0938 6.8125C18.5607 6.8125 19.75 5.62325 19.75 4.15625C19.75 2.68925 18.5607 1.5 17.0938 1.5C15.6268 1.5 14.4375 2.68925 14.4375 4.15625C14.4375 5.62325 15.6268 6.8125 17.0938 6.8125Z" stroke="#52B392" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                            <span>The team</span>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <span class="dropdown-item__icon">
                                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19.6125 18.55H2.5125C1.99 18.55 1.5625 18.1225 1.5625 17.6V6.2C1.5625 5.6775 1.99 5.25 2.5125 5.25H19.6125C20.135 5.25 20.5625 5.6775 20.5625 6.2V17.6C20.5625 18.1225 20.135 18.55 19.6125 18.55Z" stroke="#52B392" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M15.3375 5.24995H6.78748V2.87495C6.78748 2.08645 7.42398 1.44995 8.21248 1.44995H13.9125C14.701 1.44995 15.3375 2.08645 15.3375 2.87495V5.24995Z" stroke="#52B392" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M20.5625 10.7505C16.8385 11.6625 13.561 11.9 11.0625 11.9C7.234 11.9 3.9945 11.349 1.5625 10.7505V6.2C1.5625 5.6775 1.99 5.25 2.5125 5.25H19.6125C20.135 5.25 20.5625 5.6775 20.5625 6.2V10.7505Z" stroke="#52B392" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.5378 8.09998H10.5878V9.04998H11.5378V8.09998Z" stroke="#52B392" stroke-width="1.75" stroke-linecap="round"/>
                                                </svg>
                                            </span>
                                            <span>Board and policy</span>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                        <span class="dropdown-item__icon">
                                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.7812 1L13.4812 7.3H19.7812L15.2812 12.7L17.0812 19L10.7812 15.4L4.48125 19L6.28125 12.7L1.78125 7.3H8.08125L10.7812 1Z" stroke="#52B392" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                            <span>Mission / Vision</span>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <span class="dropdown-item__icon">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.2913 3.601L11.9981 1.396C11.9697 1.171 11.771 1 11.5251 1H8.58352C8.34706 1 8.13897 1.171 8.11059 1.396L7.85521 3.331C7.8363 3.493 7.71334 3.637 7.55254 3.691C6.75802 3.97 6.00134 4.402 5.3487 4.96L3.19216 4.096C2.97461 4.006 2.71923 4.087 2.59627 4.285L1.12074 6.715C1.00723 6.913 1.06399 7.165 1.25316 7.3L3.11649 8.641C2.91786 9.55 2.91786 10.477 3.10703 11.359H3.11649L1.25316 12.7C1.06399 12.835 1.00723 13.087 1.1302 13.285L2.60573 15.715C2.72869 15.913 2.98407 15.994 3.20161 15.904L5.35816 15.04L5.3487 15.049C5.69867 15.346 6.09593 15.616 6.52156 15.85C6.94719 16.084 7.38229 16.273 7.8363 16.417V16.399L8.12951 18.604C8.13897 18.829 8.34706 19 8.58352 19H11.5346C11.771 19 11.9697 18.829 12.0075 18.604L12.2629 16.669C12.2818 16.507 12.4048 16.363 12.5656 16.309C13.3601 16.03 14.1168 15.598 14.7694 15.04L16.9259 15.904C17.1435 15.994 17.3989 15.913 17.5218 15.715L18.9974 13.285C19.1203 13.087 19.0636 12.835 18.8744 12.7L17.0111 11.359C17.2097 10.45 17.2097 9.523 17.0205 8.641H17.0111L18.8555 7.3C19.0447 7.165 19.1014 6.913 18.9785 6.715L17.5029 4.285C17.38 4.087 17.1246 4.006 16.907 4.096L14.7599 4.96L14.7694 4.951C14.4194 4.654 14.0222 4.384 13.5965 4.15C13.1709 3.916 12.7358 3.727 12.2818 3.583" stroke="#52B392" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10.0593 13.6C12.1488 13.6 13.8427 11.9882 13.8427 10C13.8427 8.0118 12.1488 6.40002 10.0593 6.40002C7.96977 6.40002 6.27588 8.0118 6.27588 10C6.27588 11.9882 7.96977 13.6 10.0593 13.6Z" stroke="#52B392" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>
                                            <span>House rules</span>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                        <span class="dropdown-item__icon">
                                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.9813 10.9C17.2343 10.333 16.2983 10 15.2813 10C12.7973 10 10.7813 12.016 10.7813 14.5C10.7813 15.517 11.1143 16.453 11.6813 17.2H2.68125C2.18625 17.2 1.78125 16.795 1.78125 16.3V1.9C1.78125 1.405 2.18625 1 2.68125 1H14.0123C14.2463 1 14.4803 1.099 14.6423 1.261L17.7202 4.339C17.8822 4.501 17.9813 4.735 17.9813 4.969V10.9Z" stroke="#52B392" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10.8712 13.6H5.38123" stroke="#52B392" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M5.38123 9.09998H14.3812" stroke="#52B392" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M5.38123 4.59998H9.88123" stroke="#52B392" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M15.2812 19C17.7665 19 19.7812 16.9853 19.7812 14.5C19.7812 12.0147 17.7665 10 15.2812 10C12.796 10 10.7812 12.0147 10.7812 14.5C10.7812 16.9853 12.796 19 15.2812 19Z" stroke="#52B392" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.1208 13.915L14.7408 15.535L17.4408 12.835" stroke="#52B392" stroke-width="1.75" stroke-miterlimit="10"/>
                                                <path d="M13.4812 1V5.5H17.9812V4.969C17.9812 4.735 17.8822 4.501 17.7202 4.339L14.6422 1.261C14.4802 1.099 14.2462 1 14.0122 1H13.4812Z" stroke="#52B392" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                            <span>Values and norms</span>
                                        </a>


                                        <a class="dropdown-item" href="#">
                                        <span class="dropdown-item__icon">
                                            <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <line x1="1.4375" y1="2.61911" x2="1.4394" y2="13.7026" stroke="#52B392" stroke-width="1.75"/>
                                                <line x1="0.564331" y1="1.74426" x2="19.5625" y2="1.74426" stroke="#52B392" stroke-width="1.75"/>
                                                <line x1="0.564331" y1="12.8278" x2="19.5625" y2="12.8278" stroke="#52B392" stroke-width="1.75"/>
                                                <path d="M19.0826 2.35315L16.4493 7.86508" stroke="#52B392" stroke-width="1.75"/>
                                                <path d="M16.4626 7.3949L19.0819 12.8588" stroke="#52B392" stroke-width="1.75"/>
                                            </svg>
                                        </span>
                                            <span>Sporta</span>
                                        </a>
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
                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.0553 10.2285L14.25 13.5M12.4128 6.21562C12.4128 9.37227 9.91391 11.9312 6.8314 11.9312C3.74888 11.9312 1.25 9.37227 1.25 6.21562C1.25 3.05897 3.74888 0.5 6.8314 0.5C9.91391 0.5 12.4128 3.05897 12.4128 6.21562Z" stroke="#818181" stroke-linecap="round"/>
                            </svg>
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
                            <a class="nav-link" href="#">Contact</a>
                            <a class="nav-link" href="#">News</a>
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
