<?php

/*

type: layout
content_type: dynamic
name: News
position: 3
description: News

*/


?>
<?php include template_dir() . "header.php"; ?>
<section class="section section-news news-page edit main-content" rel="content" field="sporta-team_content">
    <div class="container">
        <div class="section__block-title d-flex align-items-center justify-content-between flex-wrap">
            <h1 class="mb-0">News</h1>
            <form class="d-flex mb-0 news-page-search-form">
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
        </div>

        <module type="layouts" template="posts/skin-1"/>


        <div class="row row-news-card">
            <div class="col-lg-8">
                <div class="card card--big border-0 bg-transparent">
                    <a href="#" class="link-img card-img-top">
                        <img src="<?php print template_url(); ?>images/news-1.jpg" class="img-cover" alt="">
                    </a>
                    <div class="card-body">
                        <p class="card-date">October 12, 2020</p>
                        <h5 class="card-title">
                            <a href="#">Materiele ondersteuning van clubs die multimove aanbieden</a>
                        </h5>
                        <p class="card-text">Het Sport-i-Label is een kwaliteitslabel waarmee Sporta sportclubs, die een bloeiende jeugdwerking hebben of daarin willen investeren beloont en bekroont.</p>
                    </div>
                    <div class="card-footer border-0 bg-transparent">
                        <a href="#" class="card-link link color-yellow">
                            Read more
                            <span class="link__arrow">
                           <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M1.70711 0.370774C1.31658 -0.0197506 0.683417 -0.0197506 0.292893 0.370774C-0.0976315 0.761298 -0.0976314 1.39446 0.292893 1.78499L1.70711 0.370774ZM5 5.07788L5.70711 5.78499C5.89464 5.59745 6 5.3431 6 5.07788C6 4.81266 5.89464 4.55831 5.70711 4.37077L5 5.07788ZM0.292893 8.37077C-0.0976311 8.7613 -0.0976311 9.39446 0.292893 9.78499C0.683418 10.1755 1.31658 10.1755 1.70711 9.78499L0.292893 8.37077ZM0.292893 1.78499L4.29289 5.78499L5.70711 4.37077L1.70711 0.370774L0.292893 1.78499ZM4.29289 4.37077L0.292893 8.37077L1.70711 9.78499L5.70711 5.78499L4.29289 4.37077Z" fill="#000000"/>
                           </svg>
                       </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <div class="popular-posts-widget">
                    <h3 class="mb-0">Most read</h3>
                    <div class="popular-posts-wrap">
                        <div class="popular-post__item">
                            <a href="#" class="popular-post__item--link-img">
                                <img src="<?php print template_url(); ?>images/news-1.jpg" class="img-cover" alt="">
                            </a>
                            <div class="popular-post__item--content">
                                <h6>
                                    <a href="#">Materiele ondersteuning van clubs die multimove aanbieden</a>
                                </h6>
                                <p class="popular-post__item--date">October 12, 2020</p>
                            </div>
                        </div>
                        <div class="popular-post__item">
                            <a href="#" class="popular-post__item--link-img">
                                <img src="<?php print template_url(); ?>images/news-1.jpg" class="img-cover" alt="">
                            </a>
                            <div class="popular-post__item--content">
                                <h6>
                                    <a href="#">Materiele ondersteuning van clubs die multimove aanbieden</a>
                                </h6>
                                <p class="popular-post__item--date">October 12, 2020</p>
                            </div>
                        </div>
                        <div class="popular-post__item">
                            <a href="#" class="popular-post__item--link-img">
                                <img src="<?php print template_url(); ?>images/news-1.jpg" class="img-cover" alt="">
                            </a>
                            <div class="popular-post__item--content">
                                <h6>
                                    <a href="#">Materiele ondersteuning van clubs die multimove aanbieden</a>
                                </h6>
                                <p class="popular-post__item--date">October 12, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-news-card">
            <div class="col-lg-4">
                <div class="card border-0 bg-transparent">
                    <a href="#" class="link-img card-img-top">
                        <img src="<?php print template_url(); ?>images/news-1.jpg" class="img-cover" alt="">
                    </a>
                    <div class="card-body">
                        <p class="card-date">October 12, 2020</p>
                        <h5 class="card-title">
                            <a href="#">Materiele ondersteuning van clubs die multimove aanbieden</a>
                        </h5>
                        <p class="card-text">Het Sport-i-Label is een kwaliteitslabel waarmee Sporta sportclubs, die een bloeiende jeugdwerking hebben of daarin willen investeren beloont en bekroont.</p>
                    </div>
                    <div class="card-footer border-0 bg-transparent">
                        <a href="#" class="card-link link color-yellow">
                            Read more
                            <span class="link__arrow">
                           <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M1.70711 0.370774C1.31658 -0.0197506 0.683417 -0.0197506 0.292893 0.370774C-0.0976315 0.761298 -0.0976314 1.39446 0.292893 1.78499L1.70711 0.370774ZM5 5.07788L5.70711 5.78499C5.89464 5.59745 6 5.3431 6 5.07788C6 4.81266 5.89464 4.55831 5.70711 4.37077L5 5.07788ZM0.292893 8.37077C-0.0976311 8.7613 -0.0976311 9.39446 0.292893 9.78499C0.683418 10.1755 1.31658 10.1755 1.70711 9.78499L0.292893 8.37077ZM0.292893 1.78499L4.29289 5.78499L5.70711 4.37077L1.70711 0.370774L0.292893 1.78499ZM4.29289 4.37077L0.292893 8.37077L1.70711 9.78499L5.70711 5.78499L4.29289 4.37077Z" fill="#000000"/>
                           </svg>
                       </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 bg-transparent">
                    <a href="#" class="link-img card-img-top">
                        <img src="<?php print template_url(); ?>images/news-1.jpg" class="img-cover" alt="">
                    </a>

                    <div class="card-body">
                        <p class="card-date">October 12, 2020</p>
                        <h5 class="card-title">
                            <a href="#">Materiele ondersteuning van clubs die multimove aanbieden</a>
                        </h5>
                        <p class="card-text">Het Sport-i-Label is een kwaliteitslabel waarmee Sporta sportclubs, die een bloeiende jeugdwerking hebben of daarin willen investeren beloont en bekroont.</p>
                    </div>
                    <div class="card-footer border-0 bg-transparent">
                        <a href="#" class="card-link link color-yellow">
                            Read more
                            <span class="link__arrow">
                           <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M1.70711 0.370774C1.31658 -0.0197506 0.683417 -0.0197506 0.292893 0.370774C-0.0976315 0.761298 -0.0976314 1.39446 0.292893 1.78499L1.70711 0.370774ZM5 5.07788L5.70711 5.78499C5.89464 5.59745 6 5.3431 6 5.07788C6 4.81266 5.89464 4.55831 5.70711 4.37077L5 5.07788ZM0.292893 8.37077C-0.0976311 8.7613 -0.0976311 9.39446 0.292893 9.78499C0.683418 10.1755 1.31658 10.1755 1.70711 9.78499L0.292893 8.37077ZM0.292893 1.78499L4.29289 5.78499L5.70711 4.37077L1.70711 0.370774L0.292893 1.78499ZM4.29289 4.37077L0.292893 8.37077L1.70711 9.78499L5.70711 5.78499L4.29289 4.37077Z" fill="#000000"/>
                           </svg>
                       </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <div class="popular-posts-widget">
                    <h3 class="mb-0">Most read</h3>
                    <div class="popular-posts-wrap">
                        <div class="popular-post__item">
                            <a href="#" class="popular-post__item--link-img">
                                <img src="<?php print template_url(); ?>images/news-1.jpg" class="img-cover" alt="">
                            </a>
                            <div class="popular-post__item--content">
                                <h6>
                                    <a href="#">Materiele ondersteuning van clubs die multimove aanbieden</a>
                                </h6>
                                <p class="popular-post__item--date">October 12, 2020</p>
                            </div>
                        </div>
                        <div class="popular-post__item">
                            <a href="#" class="popular-post__item--link-img">
                                <img src="<?php print template_url(); ?>images/news-1.jpg" class="img-cover" alt="">
                            </a>
                            <div class="popular-post__item--content">
                                <h6>
                                    <a href="#">Materiele ondersteuning van clubs die multimove aanbieden</a>
                                </h6>
                                <p class="popular-post__item--date">October 12, 2020</p>
                            </div>
                        </div>
                        <div class="popular-post__item">
                            <a href="#" class="popular-post__item--link-img">
                                <img src="<?php print template_url(); ?>images/news-1.jpg" class="img-cover" alt="">
                            </a>
                            <div class="popular-post__item--content">
                                <h6>
                                    <a href="#">Materiele ondersteuning van clubs die multimove aanbieden</a>
                                </h6>
                                <p class="popular-post__item--date">October 12, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-news-card">
            <div class="col-lg-4">
                <div class="card border-0 bg-transparent">
                    <a href="#" class="link-img card-img-top">
                        <img src="<?php print template_url(); ?>images/news-1.jpg" class="img-cover" alt="">
                    </a>
                    <div class="card-body">
                        <p class="card-date">October 12, 2020</p>
                        <h5 class="card-title">
                            <a href="#">Materiele ondersteuning van clubs die multimove aanbieden</a>
                        </h5>
                        <p class="card-text">Het Sport-i-Label is een kwaliteitslabel waarmee Sporta sportclubs, die een bloeiende jeugdwerking hebben of daarin willen investeren beloont en bekroont.</p>
                    </div>
                    <div class="card-footer border-0 bg-transparent">
                        <a href="#" class="card-link link color-green">
                            Read more
                            <span class="link__arrow">
                           <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M1.70711 0.370774C1.31658 -0.0197506 0.683417 -0.0197506 0.292893 0.370774C-0.0976315 0.761298 -0.0976314 1.39446 0.292893 1.78499L1.70711 0.370774ZM5 5.07788L5.70711 5.78499C5.89464 5.59745 6 5.3431 6 5.07788C6 4.81266 5.89464 4.55831 5.70711 4.37077L5 5.07788ZM0.292893 8.37077C-0.0976311 8.7613 -0.0976311 9.39446 0.292893 9.78499C0.683418 10.1755 1.31658 10.1755 1.70711 9.78499L0.292893 8.37077ZM0.292893 1.78499L4.29289 5.78499L5.70711 4.37077L1.70711 0.370774L0.292893 1.78499ZM4.29289 4.37077L0.292893 8.37077L1.70711 9.78499L5.70711 5.78499L4.29289 4.37077Z" fill="#000000"/>
                           </svg>
                       </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 bg-transparent">
                    <a href="#" class="link-img card-img-top">
                        <img src="<?php print template_url(); ?>images/news-1.jpg" class="img-cover" alt="">
                    </a>

                    <div class="card-body">
                        <p class="card-date">October 12, 2020</p>
                        <h5 class="card-title">
                            <a href="#">Materiele ondersteuning van clubs die multimove aanbieden</a>
                        </h5>
                        <p class="card-text">Het Sport-i-Label is een kwaliteitslabel waarmee Sporta sportclubs, die een bloeiende jeugdwerking hebben of daarin willen investeren beloont en bekroont.</p>
                    </div>
                    <div class="card-footer border-0 bg-transparent">
                        <a href="#" class="card-link link color-green">
                            Read more
                            <span class="link__arrow">
                           <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M1.70711 0.370774C1.31658 -0.0197506 0.683417 -0.0197506 0.292893 0.370774C-0.0976315 0.761298 -0.0976314 1.39446 0.292893 1.78499L1.70711 0.370774ZM5 5.07788L5.70711 5.78499C5.89464 5.59745 6 5.3431 6 5.07788C6 4.81266 5.89464 4.55831 5.70711 4.37077L5 5.07788ZM0.292893 8.37077C-0.0976311 8.7613 -0.0976311 9.39446 0.292893 9.78499C0.683418 10.1755 1.31658 10.1755 1.70711 9.78499L0.292893 8.37077ZM0.292893 1.78499L4.29289 5.78499L5.70711 4.37077L1.70711 0.370774L0.292893 1.78499ZM4.29289 4.37077L0.292893 8.37077L1.70711 9.78499L5.70711 5.78499L4.29289 4.37077Z" fill="#000000"/>
                           </svg>
                       </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-widget">
                    <div class="form-widget-wrap">
                        <h4 class="form-widget__title">The most interesting articles in your mailbox?</h4>
                        <form class="form-widget-subscribe needs-validation" novalidate>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Firstname">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your.email@domain.com" required>
                                <div class="invalid-feedback">Error text</div>
                            </div>
                            <button type="submit" class="btn btn-animate btn-red">schrijf in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<?php include template_dir() . "footer.php"; ?>
