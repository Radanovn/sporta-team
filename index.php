
<?php include THIS_TEMPLATE_DIR . "header.php"; ?>
<section class="hero-section">
    <div id="heroSlider" class="carousel slide" data-ride="carousel" data-interval="false">
        <ol class="carousel-indicators">
            <li data-target="#heroSlider" data-slide-to="0" class="active"></li>
            <li data-target="#heroSlider" data-slide-to="1"></li>
            <li data-target="#heroSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row no-gutters">
                    <div class="col-12 col-md-4 order-1 slide__text">
                        <h1 class="slide__text-title">YOU THE SPORT, WE THE <span class="text-red">SUPPORT</span></h1>
                    </div>
                    <div class="col-12 col-md-8 order-0 order-md-1 slide__img">
                        <picture>
                            <source srcset="<?php print template_url(); ?>images/slide1-mobile.jpg" media="(max-width: 767px)">
                            <img src="<?php print template_url(); ?>images/slide1.jpg" alt="" class="img-cover">
                        </picture>
                        <div class="slide__img-decor-left bg-yellow d-none d-md-block"></div>
                        <div class="slide__img-decor-right d-none d-md-block"></div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row no-gutters">
                    <div class="col-12 col-md-4 order-1 slide__text">
                        <div class="slide__text-title">YOU THE SPORT, WE THE <span class="text-red">SUPPORT</span></div>
                    </div>
                    <div class="col-12 col-md-8 order-0 order-md-1 slide__img">
                        <picture>
                            <source srcset="<?php print template_url(); ?>images/slide2-mobile.jpg" media="(max-width: 767px)">
                            <img src="<?php print template_url(); ?>images/slide2.jpg" alt="" class="img-cover">
                        </picture>
                        <div class="slide__img-decor-left bg-green d-none d-md-block"></div>
                        <div class="slide__img-decor-right d-none d-md-block"></div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row no-gutters">
                    <div class="col-12 col-md-4 order-1 slide__text">
                        <div class="slide__text-title">YOU THE SPORT, WE THE <span class="text-green">SUPPORT</span></div>
                    </div>
                    <div class="col-12 col-md-8 order-0 order-md-1 slide__img">
                        <picture>
                            <source srcset="<?php print template_url(); ?>images/slide3-mobile.jpg" media="(max-width: 767px)">
                            <img src="<?php print template_url(); ?>images/slide3.jpg" alt="" class="img-cover">
                        </picture>
                        <div class="slide__img-decor-left bg-red d-none d-md-block"></div>
                        <div class="slide__img-decor-right d-none d-md-block"></div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-next d-none d-md-flex" href="#heroSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="circles circles--bottom-right d-none d-lg-block">
        <svg width="36" height="34" viewBox="0 0 36 34" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="3.3646" cy="3.20945" r="2.78745" fill="#52B392"/>
            <circle cx="17.1551" cy="3.20945" r="2.78745" fill="#52B392"/>
            <circle cx="32.4128" cy="3.20945" r="2.78745" fill="#52B392"/>
            <circle cx="32.4128" cy="17" r="2.78745" fill="#52B392"/>
            <circle cx="17.1551" cy="17" r="2.78745" fill="#52B392"/>
            <circle cx="3.3646" cy="17" r="2.78745" fill="#52B392"/>
            <circle cx="3.3646" cy="30.7905" r="2.78745" fill="#52B392"/>
            <circle cx="17.1551" cy="30.7905" r="2.78745" fill="#52B392"/>
            <circle cx="32.4128" cy="30.7905" r="2.78745" fill="#52B392"/>
        </svg>
    </div>
</section>
               <section class="section section-participate">
                   <div class="container">
                       <div class="section__block-title text-sm-center edit safe-element">
                           <h2>Why participate in Sporta Club?</h2>
                           <p class="lead-text">Some text about advantages of joining the Sporta club</p>
                       </div>
                       <div class="wrap-cards">
                           <div class="wrap-card__item">
                               <div class="card border-0 color-red">
                                   <div class="card-header bg-transparent border-0 edit safe-element">
                                       <h5 class="card-title m-0 h-100">
                                       <span class="card-header__icon">
                                           <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <circle cx="23.5" cy="23.5779" r="23" fill="#000000"/>
                                               <path d="M15.5 14.689L23.5 13.5779L31.5 14.689V23.8381C31.5 26.4592 30.216 28.914 28.0632 30.409L23.5 33.5779L18.9368 30.409C16.784 28.914 15.5 26.4592 15.5 23.8381V14.689Z" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                               <path d="M27.5 20.5779L22.65 25.5779L20.5 23.3679" stroke="white" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                           </svg>
                                       </span>
                                           <span>Insurance</span>
                                       </h5>
                                   </div>
                                   <div class="card-body edit safe-element">
                                       <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                   </div>
                                   <div class="card-footer bg-transparent border-0">
                                       <module type="btn" template="sporta-links-with-icons"/>

                                   </div>
                               </div>
                           </div>
                           <div class="wrap-card__item">
                               <div class="card border-0 color-green">
                                   <div class="card-header bg-transparent border-0 edit safe-element">
                                       <h5 class="card-title m-0 h-100">
                                       <span class="card-header__icon">
                                           <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="23.5" cy="23.5779" r="23" fill="#52B392"/>
                                                <path d="M23.5971 13.5783C23.5971 13.5783 22.132 16.8555 22.2199 19.0617C22.293 20.8934 23.5 23.5779 23.5 23.5779C23.5 23.5779 22.0099 26.4103 20.4814 27.6858C18.9197 28.9889 15.7879 29.9436 15.7879 29.9436C13.4132 27.0626 12.756 22.962 14.4391 19.3527C16.1489 15.6861 19.7993 13.5437 23.5971 13.5783Z" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M23.5001 23.5779C23.5001 23.5779 22.2931 20.8934 22.22 19.0616C22.132 16.8555 23.5972 13.5782 23.5972 13.5782C24.9826 13.5909 26.3877 13.8931 27.7253 14.5169C32.7295 16.8504 34.8946 22.7988 32.5611 27.803C32.5611 27.803 30.7812 24.7668 28.8756 23.8782C26.9701 22.9896 23.5001 23.5779 23.5001 23.5779Z" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M15.7881 29.9436C15.7881 29.9436 18.9199 28.9889 20.4816 27.6858C22.0101 26.4103 23.5003 23.5779 23.5003 23.5779C23.5003 23.5779 26.9702 22.9896 28.8758 23.8782C30.7813 24.7668 32.5612 27.803 32.5612 27.803C30.2277 32.8072 24.2793 34.9723 19.2751 32.6388C17.8802 31.9883 16.7058 31.057 15.7881 29.9436Z" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M22.22 19.0617C22.1321 16.8555 23.5971 13.5783 23.5971 13.5783C21.6204 13.5603 19.6836 14.1321 18.0396 15.2016L18.0475 15.2045C17.1819 17.5631 16.7754 19.4601 16.9767 22.1905C17.1798 24.9439 19.6059 28.2765 19.6059 28.2765L19.612 28.2932C19.93 28.1018 20.2266 27.8985 20.4814 27.6858C22.01 26.4103 23.5001 23.5779 23.5001 23.5779C23.5001 23.5779 22.2931 20.8934 22.22 19.0617Z" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M22.3501 17.5685C22.3501 17.5685 26.1962 17.0818 29.4984 18.5788C31.0862 19.2985 32.3326 20.2936 33.1837 21.1111L33.1875 21.1053C33.7403 23.2659 33.5771 25.624 32.561 27.8029C32.561 27.8029 30.7812 24.7668 28.8756 23.8782C26.9701 22.9896 23.5001 23.5778 23.5001 23.5778C23.5001 23.5778 22.2931 20.8933 22.22 19.0616C22.2015 18.5967 22.2519 18.0842 22.3431 17.5648L22.3501 17.5685Z" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M20.4816 27.6858C18.9199 28.9889 15.7881 29.9436 15.7881 29.9436C16.7058 31.057 17.8802 31.9883 19.2751 32.6388C19.6465 32.812 20.0231 32.9604 20.4031 33.0848C20.5119 33.05 20.6208 33.0152 20.7296 32.9803C21.3502 32.781 21.9684 32.5765 22.5728 32.3377C23.7819 31.8601 24.9377 31.2448 25.953 30.2568C26.9475 29.2892 27.9162 27.804 28.6352 26.564C28.9951 25.9434 29.2929 25.3831 29.5008 24.978C29.6048 24.7753 29.6863 24.6116 29.7419 24.4983L29.7684 24.4441C29.4783 24.215 29.1787 24.0195 28.8758 23.8782C26.9702 22.9896 23.5003 23.5779 23.5003 23.5779C23.5003 23.5779 22.0101 26.4103 20.4816 27.6858Z" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                       </span>
                                           <span>Club support</span>
                                       </h5>
                                   </div>
                                   <div class="card-body edit safe-element">
                                       <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                   </div>
                                   <div class="card-footer bg-transparent border-0">
                                       <module type="btn" template="sporta-links-with-icons"/>
                                   </div>
                               </div>
                           </div>
                           <div class="wrap-card__item">
                               <div class="card border-0 color-yellow">
                                   <div class="card-header bg-transparent border-0 edit safe-element">
                                       <h5 class="card-title m-0 h-100">
                                       <span class="card-header__icon">
                                           <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="23.5" cy="23.5779" r="23" fill="#F6D278"/>
                                                <path d="M17.5 13.5779H14.5C13.9477 13.5779 13.5 14.0256 13.5 14.5779V17.5779" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M29.5 33.5779H32.5C33.0523 33.5779 33.5 33.1302 33.5 32.5779V29.5779" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M33.5 17.5779V14.5779C33.5 14.0256 33.0523 13.5779 32.5 13.5779H29.5" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.5 29.5779V32.5779C13.5 33.1302 13.9477 33.5779 14.5 33.5779H17.5" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M28.5 29.5038V28.5779C28.5 25.8165 26.2614 23.5779 23.5 23.5779C20.7386 23.5779 18.5 25.8165 18.5 28.5779V29.5038C18.5 29.5447 18.5332 29.5779 18.5741 29.5779H28.4259C28.4668 29.5779 28.5 29.5447 28.5 29.5038Z" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M23.5 23.5779C25.1569 23.5779 26.5 22.2347 26.5 20.5779C26.5 18.921 25.1569 17.5779 23.5 17.5779C21.8431 17.5779 20.5 18.921 20.5 20.5779C20.5 22.2347 21.8431 23.5779 23.5 23.5779Z" stroke="white" stroke-width="1.75" stroke-linecap="round"/>
                                            </svg>
                                       </span>
                                           <span>Members’ Administration</span>
                                       </h5>
                                   </div>
                                   <div class="card-body edit safe-element">
                                       <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                   </div>
                                   <div class="card-footer bg-transparent border-0">
                                       <a href="#" class="card-link link">
                                           Find out more
                                           <span class="link__arrow">
                                           <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <path d="M1.70711 0.370774C1.31658 -0.0197506 0.683417 -0.0197506 0.292893 0.370774C-0.0976315 0.761298 -0.0976314 1.39446 0.292893 1.78499L1.70711 0.370774ZM5 5.07788L5.70711 5.78499C5.89464 5.59745 6 5.3431 6 5.07788C6 4.81266 5.89464 4.55831 5.70711 4.37077L5 5.07788ZM0.292893 8.37077C-0.0976311 8.7613 -0.0976311 9.39446 0.292893 9.78499C0.683418 10.1755 1.31658 10.1755 1.70711 9.78499L0.292893 8.37077ZM0.292893 1.78499L4.29289 5.78499L5.70711 4.37077L1.70711 0.370774L0.292893 1.78499ZM4.29289 4.37077L0.292893 8.37077L1.70711 9.78499L5.70711 5.78499L4.29289 4.37077Z" fill="#000000"/>
                                           </svg>
                                       </span>
                                       </a>
                                   </div>
                               </div>
                           </div>
                           <div class="wrap-card__item">
                               <div class="card border-0 color-red">
                                   <div class="card-header bg-transparent border-0 edit safe-element">
                                       <h5 class="card-title m-0 h-100">
                                       <span class="card-header__icon">
                                           <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="23.5" cy="23.5779" r="23" fill="#CA2F4E"/>
                                                <path d="M30.7222 26.9133C31.6444 26.9133 32.3889 27.6575 32.3889 28.5794C32.3889 29.5014 31.6444 30.2457 30.7222 30.2457H27.9444H30.1667C31.0889 30.2457 31.8333 30.9898 31.8333 31.9118C31.8333 32.8337 31.0889 33.5779 30.1667 33.5779H29.0556H20.1667C16.4889 33.5779 13.5 30.5789 13.5 26.8911C13.5 23.8921 15.4667 21.3484 18.1889 20.5042C19.5556 20.0711 20.5778 18.9159 21.0222 17.5385L22.0444 14.3951C22.2222 13.6731 22.9556 13.4843 23.6889 13.6175C24.8556 13.8175 25.8444 15.317 25.8444 18.0273L25.7222 20.2488H31.8333C32.7556 20.2488 33.5 20.993 33.5 21.9149C33.5 22.8369 32.7556 23.5811 31.8333 23.5811H29.0556H31.2778C32.2 23.5811 32.9444 24.3252 32.9444 25.2472C32.9444 26.1691 32.2 26.9133 31.2778 26.9133H28.5" stroke="white" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                       </span>
                                           <span>Easy all-in price formula</span>
                                       </h5>
                                   </div>
                                   <div class="card-body edit safe-element">
                                       <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                   </div>
                                   <div class="card-footer bg-transparent border-0">
                                       <module type="btn" template="sporta-links-with-icons"/>
                                       </a>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="section-wrapper-btn text-center">
                           <module type="btn" template="sporta-buttons" button_style="btn-green"/>
                       </div>
                   </div>
               </section>

               <section class="section section-member bg-gray">
                   <div class="container position-relative">
                       <div class="circles circles--top-right d-none d-lg-block">
                           <svg width="36" height="34" viewBox="0 0 36 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <circle cx="3.43088" cy="3.20932" r="2.78745" fill="#CA2F4E"/>
                               <circle cx="17.2214" cy="3.20932" r="2.78745" fill="#CA2F4E"/>
                               <circle cx="32.479" cy="3.20932" r="2.78745" fill="#CA2F4E"/>
                               <circle cx="32.479" cy="16.9999" r="2.78745" fill="#CA2F4E"/>
                               <circle cx="17.2214" cy="16.9999" r="2.78745" fill="#CA2F4E"/>
                               <circle cx="3.43088" cy="16.9999" r="2.78745" fill="#CA2F4E"/>
                               <circle cx="3.43088" cy="30.7904" r="2.78745" fill="#CA2F4E"/>
                               <circle cx="17.2214" cy="30.7904" r="2.78745" fill="#CA2F4E"/>
                               <circle cx="32.479" cy="30.7904" r="2.78745" fill="#CA2F4E"/>
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
                       <div class="section__block-title text-center edit safe-element">
                           <h2>Already a member?</h2>
                           <p class="lead-text">Get all advanteges of your membership</p>
                       </div>
                       <div class="row">
                           <div class="col-12 col-md-10 col-lg-11 mx-auto">
                               <div class="row wrapper-cards">
                                   <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                       <div class="card color-red text-center border-0">
<!--                                           <a href="#" class="full-card-link"></a>-->
                                           <div class="card-header bg-transparent border-0 edit safe-element">
                                               <h5 class="card-title ">Insurance</h5>
                                           </div>
                                           <div class="card-body edit safe-element">
                                               <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                           </div>
                                           <div class="card-footer bg-transparent border-top-0">
                                               <module type="btn" template="sporta-links-with-icons"/>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                       <div class="card color-yellow text-center border-0 edit safe-element">
<!--                                           <a href="#" class="full-card-link"></a>-->
                                           <div class="card-header bg-transparent border-0">
                                               <h5 class="card-title">Club support</h5>
                                           </div>
                                           <div class="card-body edit safe-element">
                                               <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                           </div>
                                           <div class="card-footer bg-transparent border-top-0">
                                               <module type="btn" template="sporta-links-with-icons"/>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                       <div class="card color-green text-center border-0 edit safe-element">
<!--                                           <a href="#" class="full-card-link"></a>-->
                                           <div class="card-header bg-transparent border-0">
                                               <h5 class="card-title">Sport for all</h5>
                                           </div>
                                           <div class="card-body edit safe-element">
                                               <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                           </div>
                                           <div class="card-footer bg-transparent border-top-0">
                                               <module type="btn" template="sporta-links-with-icons"/>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                       <div class="card color-red text-center border-0 edit safe-element">
<!--                                           <a href="#" class="full-card-link"></a>-->
                                           <div class="card-header bg-transparent border-0">
                                               <h5 class="card-title">Multisports</h5>
                                           </div>
                                           <div class="card-body edit safe-element">
                                               <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                           </div>
                                           <div class="card-footer bg-transparent border-top-0">
                                               <module type="btn" template="sporta-links-with-icons"/>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                       <div class="card color-yellow text-center border-0 edit safe-element">
<!--                                           <a href="#" class="full-card-link"></a>-->
                                           <div class="card-header bg-transparent border-0">
                                               <h5 class="card-title">Healthy sports</h5>
                                           </div>
                                           <div class="card-body edit safe-element">
                                               <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                           </div>
                                           <div class="card-footer bg-transparent border-top-0">
                                               <module type="btn" template="sporta-links-with-icons"/>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                       <div class="card color-green text-center border-0 edit safe-element">
<!--                                           <a href="#" class="full-card-link"></a>-->
                                           <div class="card-header bg-transparent border-0">
                                               <h5 class="card-title">Ethical sporta</h5>
                                           </div>
                                           <div class="card-body edit safe-element">
                                               <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                           </div>
                                           <div class="card-footer bg-transparent border-top-0">
                                               <module type="btn" template="sporta-links-with-icons"/>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                       <div class="card color-red text-center border-0 edit safe-element">
<!--                                           <a href="#" class="full-card-link"></a>-->
                                           <div class="card-header bg-transparent border-0">
                                               <h5 class="card-title">Training</h5>
                                           </div>
                                           <div class="card-body edit safe-element">
                                               <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                           </div>
                                           <div class="card-footer bg-transparent border-top-0">
                                               <module type="btn" template="sporta-links-with-icons"/>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                       <div class="card color-green text-center border-0 edit safe-element">
<!--                                           <a href="#" class="full-card-link"></a>-->
                                           <div class="card-header bg-transparent border-0">
                                               <h5 class="card-title">Sport activities</h5>
                                           </div>
                                           <div class="card-body edit safe-element">
                                               <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                           </div>
                                           <div class="card-footer bg-transparent border-top-0">
                                               <module type="btn" template="sporta-links-with-icons"/>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="section-wrapper-btn text-center">
                           <module type="btn" template="sporta-buttons" button_style="btn-red"/>

                       </div>
                   </div>
               </section>

               <section class="section section-about edit safe-element">
                   <div class="container">
                       <div class="section__block-title text-center edit safe-element">
                           <h2>About Sporta Team</h2>
                       </div>
                       <div class="row no-gutters about-card">
                           <div class="col-12 col-lg-5 order-1">
                               <div class="about-card-content pl-lg-1 ">
                                   <h3 class="about-card__title">Our <span class="text-red">mission</span> and vision</h3>
                                   <p class="about-card__text  about-card__text--max-width">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                   <div class="about-card__wrap-link">
                                       <module type="btn" template="sporta-links-with-icons" button-style="red text-decoration-none"/>
                                   </div>
                               </div>
                           </div>
                           <div class="col-12 col-lg-6 order-0 order-lg-1">
                               <div class="about-card__img about-card__img--ml">
                                   <div class="rect rect--top-right rect--red d-none d-lg-block"></div>
                                   <div class="circles circles--top-right d-none d-lg-block">
                                       <svg width="36" height="34" viewBox="0 0 36 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                           <circle cx="3.43088" cy="3.20932" r="2.78745" fill="#CA2F4E"/>
                                           <circle cx="17.2214" cy="3.20932" r="2.78745" fill="#CA2F4E"/>
                                           <circle cx="32.479" cy="3.20932" r="2.78745" fill="#CA2F4E"/>
                                           <circle cx="32.479" cy="16.9999" r="2.78745" fill="#CA2F4E"/>
                                           <circle cx="17.2214" cy="16.9999" r="2.78745" fill="#CA2F4E"/>
                                           <circle cx="3.43088" cy="16.9999" r="2.78745" fill="#CA2F4E"/>
                                           <circle cx="3.43088" cy="30.7904" r="2.78745" fill="#CA2F4E"/>
                                           <circle cx="17.2214" cy="30.7904" r="2.78745" fill="#CA2F4E"/>
                                           <circle cx="32.479" cy="30.7904" r="2.78745" fill="#CA2F4E"/>
                                       </svg>
                                   </div>
                                   <picture>
                                       <source srcset="<?php print template_url(); ?>images/about-img-1-mobile.jpg" media="(max-width: 479px)">
                                       <source srcset="<?php print template_url(); ?>images/about-img-1-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                                       <img src="<?php print template_url(); ?>images/about-img-1.jpg" alt="">
                                   </picture>

                               </div>
                           </div>
                       </div>
                       <div class="row no-gutters about-card">
                           <div class="col-12 col-lg-6">
                               <div class="about-card__img">
                                   <div class="rect rect--top-left rect--green d-none d-lg-block"></div>
                                   <div class="circles circles--bottom-left d-none d-lg-block">
                                       <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                           <circle cx="3.03745" cy="2.78745" r="2.78745" fill="#52B392"/>
                                           <circle cx="16.828" cy="2.78745" r="2.78745" fill="#52B392"/>
                                           <circle cx="32.0855" cy="2.78745" r="2.78745" fill="#52B392"/>
                                           <circle cx="32.0855" cy="16.578" r="2.78745" fill="#52B392"/>
                                           <circle cx="16.828" cy="16.578" r="2.78745" fill="#52B392"/>
                                           <circle cx="3.03745" cy="16.578" r="2.78745" fill="#52B392"/>
                                           <circle cx="3.03745" cy="30.3685" r="2.78745" fill="#52B392"/>
                                           <circle cx="16.828" cy="30.3685" r="2.78745" fill="#52B392"/>
                                           <circle cx="32.0855" cy="30.3685" r="2.78745" fill="#52B392"/>
                                       </svg>
                                   </div>
                                   <picture>
                                       <source srcset="<?php print template_url(); ?>images/about-img-2-mobile.jpg" media="(max-width: 479px)">
                                       <source srcset="<?php print template_url(); ?>images/about-img-2-tablet.jpg" media="(min-width: 480px) and (max-width: 991px)">
                                       <img src="<?php print template_url(); ?>images/about-img-2.jpg" alt="">
                                   </picture>
                               </div>
                           </div>
                           <div class="col-12 col-lg-5 offset-lg-1">
                               <div class="about-card-content">
                                   <h3 class="about-card__title">Our team <span class="text-green">support</span></h3>
                                   <p class="about-card__text  about-card__text--max-width">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. Exercitation veniam consequat sunt nostrud amet.</p>
                                   <div class="about-card__wrap-link">
                                       <module type="btn" template="sporta-links-with-icons" button-style="green text-decoration-none"/>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </section>

               <section class="section section-news bg-gray">
                   <div class="container">
                       <div class="section__block-title text-center edit safe-element">
                           <h2>News</h2>
                       </div>

                        <!--MODULE POSTLIST-->



                       <div class="section-wrapper-btn text-center">
                           <module type="btn" template="sporta-buttons" button_style="btn-green"/>
                       </div>

                   </div>
               </section>

               <section class="section section-contact">
                   <div class="container">
                       <div class="row no-gutters">
                           <div class="d-none d-lg-block col-lg-6">
                               <div class="section-contact__wrap-img edit safe-mode">
                                   <div class="rect rect--bottom-left rect--yellow d-none d-lg-block"></div>
                                   <div class="circles circles--bottom-left d-none d-lg-block">
                                       <svg width="36" height="34" viewBox="0 0 36 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                           <circle cx="3.77829" cy="3.36509" r="2.78745" fill="#F6D278"/>
                                           <circle cx="17.5688" cy="3.36509" r="2.78745" fill="#F6D278"/>
                                           <circle cx="32.8264" cy="3.36509" r="2.78745" fill="#F6D278"/>
                                           <circle cx="32.8264" cy="17.1556" r="2.78745" fill="#F6D278"/>
                                           <circle cx="17.5688" cy="17.1556" r="2.78745" fill="#F6D278"/>
                                           <circle cx="3.77829" cy="17.1556" r="2.78745" fill="#F6D278"/>
                                           <circle cx="3.77829" cy="30.9461" r="2.78745" fill="#F6D278"/>
                                           <circle cx="17.5688" cy="30.9461" r="2.78745" fill="#F6D278"/>
                                           <circle cx="32.8264" cy="30.9461" r="2.78745" fill="#F6D278"/>
                                       </svg>
                                   </div>
                                   <img src="<?php print template_url(); ?>images/contact-img.jpg" alt="">
                               </div>
                           </div>
                           <div class="col-12 col-lg-6">
                               <div class="section-contact__content mx-auto ml-lg-0">
                                   <div class="section__block-title text-center text-lg-left mx-auto ml-lg-0 edit safe-mode">
                                       <h2>Request <span class="d-none d-lg-inline"><br></span>a free price-offer</h2>
                                       <p class="lead-text">Nog niet overtuigd? Of heb je nog hulp nodig? Sed do eiusmod tempor incididunt u tempor incididun. Sed do eiusmod tempor.</p>
                                   </div>

                                   <module type="contact_form" template="sporta-newsletter-form"/>
                               </div>
                           </div>
                       </div>
                   </div>
               </section>
<?php include THIS_TEMPLATE_DIR . "footer.php"; ?>
