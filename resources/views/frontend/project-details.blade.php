@extends("frontend.layout.app")
@section("title","Projects")
@section("content")
    <section>
        <div class="w-100 pb-80 position-relative">
            <div class="page-top-wrap position-relative w-100">
                <div class="container">
                    <div class="page-top-inner d-flex flex-wrap align-items-center position-relative w-100">
                        <div class="page-title-info position-relative">
                            <i class="position-absolute"><svg viewBox="0 0 359 354" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M358.5 351H323V300.316L250.863 264.339V331.541H278.904V170.438L201.566 91.0182L200.661 327.921L223.727 351L224.179 71.1066L166.063 3V142.381L126.489 156.862L149.781 267.507L171.49 289.455V212.75H115.635L80.3576 331.541H171.49V306.651H34V351H0" stroke="#f1f1f1" stroke-width="2"/></svg></i>
                            <h1 class="mb-0">Portfolio Single</h1>
                            <ol class="breadcrumb mb-0 list-unstyled">
                                <li class="breadcrumb-item"><a href="{{ route("main") }}" title=""><i class="icon-home"></i>Home</a></li>
                                <li class="breadcrumb-item"><a href="portfolio-masonry.html" title="">Portfolio</a></li>
                                <li class="breadcrumb-item active">Portfolio Single</li>
                            </ol>
                        </div>
                        <div class="page-title-img position-absolute"><div class="page-title-img-inner d-block w-100" style="background-image: url({{ asset('assets/images/page-title-bg5.jpg') }});"></div><span class="position-absolute sec-watermark center-watermark overlap-btm-shap88 font-200">Single</span></div>
                    </div>
                </div>
            </div><!-- Page Top Wrap -->
        </div>
    </section>
    <section>
        <div class="w-100 pt-80 position-relative">
            <img class="img-fluid sec-btm-lft-shp overlap-tpshap375 opc-3 position-absolute" src="{{ asset('assets/images/sec-shap10.jpg') }}" alt="Sec Shape 10">
            <div class="container">
                <div class="port-dtl-wrap position-relative w-100">
                    <div class="port-dtl-img position-relative w-100">
                        <div class="port-dtl-img-caro">
                            <div class="port-dtl-img d-block w-100"><img class="img-fluid w-100" src="{{ asset('assets/images/resources/port-dtl-img1-1.jpg') }}" alt="Portfolio Detail Image 1"></div>
                            <div class="port-dtl-img d-block w-100"><img class="img-fluid w-100" src="{{ asset('assets/images/resources/port-dtl-img1-2.jpg') }}" alt="Portfolio Detail Image 2"></div>
                            <div class="port-dtl-img d-block w-100"><img class="img-fluid w-100" src="{{ asset('assets/images/resources/port-dtl-img1-3.jpg') }}" alt="Portfolio Detail Image 3"></div>
                        </div>
                    </div>
                    <div class="port-dtl-cont d-flex flex-wrap w-100">
                        <div class="port-dtl-cont-inner port-dtl-desc">
                            <h1 class="mb-0">Design Your Space<i></i></h1>
                            <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
                        </div>
                        <div class="port-dtl-cont-inner port-dtl-info">
                            <div class="scl-links d-flex flex-wrap justify-content-end w-100">
                                <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                            </div>
                            <ul class="port-dtl-info-list mb-0 list-unstyled w-100">
                                <li>Project type: <span>Interior Design</span></li>
                                <li>Architect: <span>Brad Wilson</span></li>
                                <li>Location: <span>New York</span></li>
                                <li>Deadlines: <span>6 month</span></li>
                                <li>Strategy: <span>Loft Style</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="port-dtl-gal-imgs w-100">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6"><a class="d-block position-relative overflow-hidden w-100" href="{{ asset('assets/images/resources/port-dtl-gal-img1.jpg') }}" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/port-dtl-gal-img1.jpg" alt="Portfolio Detail Gallery Image 1"></a></div>
                            <div class="col-md-6 col-sm-6 col-lg-6"><a class="d-block position-relative overflow-hidden w-100" href="{{ asset('assets/images/resources/port-dtl-gal-img2.jpg') }}" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/port-dtl-gal-img2.jpg" alt="Portfolio Detail Gallery Image 2"></a></div>
                        </div>
                    </div>
                </div><!-- Portfolio Detail Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-130 pb-70 position-relative">
            <img class="img-fluid sec-btm-rgt-shp opc-03 position-absolute" src="{{ asset('assets/images/sec-shap9.jpg') }}" alt="Sec Shape 9">
            <div class="container">
                <div class="sec-title text-center w-100">
                    <div class="sec-title-inner d-inline-block">
                        <span class="d-block thm-clr">Portfolio</span>
                        <h2 class="mb-0">Related Projects<i></i></h2>
                    </div>
                </div><!-- Sec Title -->
                <div class="rlt-port-wrap position-relative w-100">
                    <div class="row mrg45 rlt-port-caro">
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="port-box v2 position-relative w-100">
                                <div class="port-img position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/resources/rlt-port-img1-1.jpg') }}" alt="Related Portfolio Image 1">
                                    <a class="thm-btn thm-bg d-inline-block position-absolute" href="portfolio-single.html" title="">View<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
                                </div>
                                <div class="port-info position-relative w-100">
                                    <h3 class="mb-0"><a href="portfolio-single.html" title="">Beautiful Wooden Stairs</a></h3>
                                    <span class="thm-clr d-block">Architecture</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="port-box v2 position-relative w-100">
                                <div class="port-img position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/resources/rlt-port-img1-2.jpg') }}" alt="Related Portfolio Image 2">
                                    <a class="thm-btn thm-bg d-inline-block position-absolute" href="portfolio-single.html" title="">View<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
                                </div>
                                <div class="port-info position-relative w-100">
                                    <h3 class="mb-0"><a href="portfolio-single.html" title="">Design Your Space</a></h3>
                                    <span class="thm-clr d-block">Interior</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="port-box v2 position-relative w-100">
                                <div class="port-img position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/resources/rlt-port-img1-3.jpg') }}" alt="Related Portfolio Image 3">
                                    <a class="thm-btn thm-bg d-inline-block position-absolute" href="portfolio-single.html" title="">View<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
                                </div>
                                <div class="port-info position-relative w-100">
                                    <h3 class="mb-0"><a href="portfolio-single.html" title="">Abstract Minimal Hall</a></h3>
                                    <span class="thm-clr d-block">Architecture</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="port-box v2 position-relative w-100">
                                <div class="port-img position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/resources/rlt-port-img1-4.jpg') }}" alt="Related Portfolio Image 4">
                                    <a class="thm-btn thm-bg d-inline-block position-absolute" href="portfolio-single.html" title="">View<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
                                </div>
                                <div class="port-info position-relative w-100">
                                    <h3 class="mb-0"><a href="portfolio-single.html" title="">Minimal Smart House</a></h3>
                                    <span class="thm-clr d-block">Interior</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
