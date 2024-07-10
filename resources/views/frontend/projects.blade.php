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
                            <h1 class="mb-0">Portfolio 3 Columns</h1>
                            <ol class="breadcrumb mb-0 list-unstyled">
                                <li class="breadcrumb-item"><a href="{{ route("main") }}" title=""><i class="icon-home"></i>Home</a></li>
                                <li class="breadcrumb-item active">Portfolio 3 Columns</li>
                            </ol>
                        </div>
                        <div class="page-title-img position-absolute"><div class="page-title-img-inner d-block w-100" style="background-image: url(assets/images/page-title-bg5.jpg);"></div><span class="position-absolute sec-watermark center-watermark overlap-btm-shap88 font-200">Portfolio</span></div>
                    </div>
                </div>
            </div><!-- Page Top Wrap -->
        </div>
    </section>
    <section>
        <div class="w-100 pt-80 pb-130 position-relative">
            <svg class="sec-tp-rgt-shp overlap-tpshap250 opc-6 stroke-clr position-absolute" width="444" height="721" viewBox="0 0 444 721" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M0.769252 365.057L117.32 627.406H292.971L176.421 365.057H0.769252Z" stroke="#000000"/><path d="M605.475 68.2185L488.925 330.567L313.273 330.567L429.823 68.2185H605.475Z" stroke="#000000"/><path d="M157.597 458.151L274.147 720.5H449.799L333.249 458.151H157.597Z" stroke="#000000"/><path d="M449.8 161.312L333.249 423.661L157.598 423.661L274.148 161.312H449.8Z" stroke="#000000"/><path d="M233.605 297.339L350.155 559.688H525.807L409.256 297.339H233.605Z" stroke="#000000"/><path d="M372.64 0.499969L256.089 262.849L80.4375 262.849L196.988 0.499969H372.64Z" stroke="#000000"/></g></svg>
            <svg class="sec-btm-lft-shp overlap-btmshap130 opc-6 stroke-clr position-absolute" width="358" height="721" viewBox="0 0 358 721" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M356.475 355.943L239.925 93.594L64.2729 93.594L180.823 355.943L356.475 355.943Z" stroke="#000000"/><path d="M-248.231 652.782L-131.68 390.433L43.9714 390.433L-72.579 652.782L-248.231 652.782Z" stroke="#000000"/><path d="M199.647 262.849L83.0971 0.49999L-92.5547 0.499974L23.9957 262.849L199.647 262.849Z" stroke="#000000"/><path d="M-92.5555 559.688L23.9949 297.339L199.647 297.339L83.0963 559.688L-92.5555 559.688Z" stroke="#000000"/><path d="M123.64 423.661L7.08952 161.312L-168.562 161.312L-52.0119 423.661L123.64 423.661Z" stroke="#000000"/><path d="M-15.3953 720.5L101.155 458.151L276.807 458.151L160.256 720.5L-15.3953 720.5Z" stroke="#000000"/></g></svg>
            <div class="container">
                <div class="sec-title text-center w-100">
                    <div class="sec-title-inner d-inline-block">
                        <span class="d-block thm-clr">Portfolio</span>
                        <h2 class="mb-0">Our best works<i></i></h2>
                    </div>
                </div><!-- Sec Title -->
                <div class="port-wrap position-relative w-100">
                    <ul class="filter-links mb-0 list-unstyled d-flex flex-wrap justify-content-center w-100">
                        <li class="active"><a data-filter="*" href="javascript:void(0);" title="">All<span>9</span></a></li>
                        <li><a data-filter=".fltr-itm1" href="javascript:void(0);" title="">Interior<span>3</span></a></li>
                        <li><a data-filter=".fltr-itm2" href="javascript:void(0);" title="">Architecture<span>3</span></a></li>
                        <li><a data-filter=".fltr-itm3" href="javascript:void(0);" title="">Exterior<span>3</span></a></li>
                        <li><a data-filter=".fltr-itm4" href="javascript:void(0);" title="">Building<span>3</span></a></li>
                    </ul>
                    <div class="port-inner position-relative w-100">
                        <div class="row masonry">
                            <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                <div class="port-box position-relative w-100">
                                    <div class="port-img position-relative overflow-hidden w-100">
                                        <img class="img-fluid w-100" src="assets/images/resources/port-img2-1.jpg" alt="Portfolio Image 1">
                                        <a class="thm-bg position-absolute" href="assets/images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>
                                    </div>
                                    <div class="port-info position-relative w-100">
                                        <h3 class="mb-0"><a href="portfolio-single.html" title="">Modern natural materials</a></h3>
                                        <span class="thm-clr d-block">Architecture</span>
                                        <a class="position-absolute thm-clr" href="portfolio-single.html" title=""><i class="icon-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm2">
                                <div class="port-box position-relative w-100">
                                    <div class="port-img position-relative overflow-hidden w-100">
                                        <img class="img-fluid w-100" src="assets/images/resources/port-img2-2.jpg" alt="Portfolio Image 2">
                                        <a class="thm-bg position-absolute" href="assets/images/resources/port-img2-2.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>
                                    </div>
                                    <div class="port-info position-relative w-100">
                                        <h3 class="mb-0"><a href="portfolio-single.html" title="">Minimal Smart House</a></h3>
                                        <span class="thm-clr d-block">Interior</span>
                                        <a class="position-absolute thm-clr" href="portfolio-single.html" title=""><i class="icon-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm3">
                                <div class="port-box position-relative w-100">
                                    <div class="port-img position-relative overflow-hidden w-100">
                                        <img class="img-fluid w-100" src="assets/images/resources/port-img2-3.jpg" alt="Portfolio Image 3">
                                        <a class="thm-bg position-absolute" href="assets/images/resources/port-img2-3.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>
                                    </div>
                                    <div class="port-info position-relative w-100">
                                        <h3 class="mb-0"><a href="portfolio-single.html" title="">Beautiful Wooden Stairs</a></h3>
                                        <span class="thm-clr d-block">Architecture</span>
                                        <a class="position-absolute thm-clr" href="portfolio-single.html" title=""><i class="icon-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm4">
                                <div class="port-box position-relative w-100">
                                    <div class="port-img position-relative overflow-hidden w-100">
                                        <img class="img-fluid w-100" src="assets/images/resources/port-img2-4.jpg" alt="Portfolio Image 4">
                                        <a class="thm-bg position-absolute" href="assets/images/resources/port-img2-4.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>
                                    </div>
                                    <div class="port-info position-relative w-100">
                                        <h3 class="mb-0"><a href="portfolio-single.html" title="">Scandinavian Style Room</a></h3>
                                        <span class="thm-clr d-block">Interior</span>
                                        <a class="position-absolute thm-clr" href="portfolio-single.html" title=""><i class="icon-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                <div class="port-box position-relative w-100">
                                    <div class="port-img position-relative overflow-hidden w-100">
                                        <img class="img-fluid w-100" src="assets/images/resources/port-img2-5.jpg" alt="Portfolio Image 5">
                                        <a class="thm-bg position-absolute" href="assets/images/resources/port-img2-5.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>
                                    </div>
                                    <div class="port-info position-relative w-100">
                                        <h3 class="mb-0"><a href="portfolio-single.html" title="">Abstract Architecture</a></h3>
                                        <span class="thm-clr d-block">Architecture</span>
                                        <a class="position-absolute thm-clr" href="portfolio-single.html" title=""><i class="icon-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm2">
                                <div class="port-box position-relative w-100">
                                    <div class="port-img position-relative overflow-hidden w-100">
                                        <img class="img-fluid w-100" src="assets/images/resources/port-img2-6.jpg" alt="Portfolio Image 6">
                                        <a class="thm-bg position-absolute" href="assets/images/resources/port-img2-6.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>
                                    </div>
                                    <div class="port-info position-relative w-100">
                                        <h3 class="mb-0"><a href="portfolio-single.html" title="">Design Your Space</a></h3>
                                        <span class="thm-clr d-block">Interior</span>
                                        <a class="position-absolute thm-clr" href="portfolio-single.html" title=""><i class="icon-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm3">
                                <div class="port-box position-relative w-100">
                                    <div class="port-img position-relative overflow-hidden w-100">
                                        <img class="img-fluid w-100" src="assets/images/resources/port-img2-7.jpg" alt="Portfolio Image 7">
                                        <a class="thm-bg position-absolute" href="assets/images/resources/port-img2-7.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>
                                    </div>
                                    <div class="port-info position-relative w-100">
                                        <h3 class="mb-0"><a href="portfolio-single.html" title="">Abstract Minimal Hall</a></h3>
                                        <span class="thm-clr d-block">Architecture</span>
                                        <a class="position-absolute thm-clr" href="portfolio-single.html" title=""><i class="icon-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm4">
                                <div class="port-box position-relative w-100">
                                    <div class="port-img position-relative overflow-hidden w-100">
                                        <img class="img-fluid w-100" src="assets/images/resources/port-img2-8.jpg" alt="Portfolio Image 8">
                                        <a class="thm-bg position-absolute" href="assets/images/resources/port-img2-8.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>
                                    </div>
                                    <div class="port-info position-relative w-100">
                                        <h3 class="mb-0"><a href="portfolio-single.html" title="">Green Style Room</a></h3>
                                        <span class="thm-clr d-block">Interior</span>
                                        <a class="position-absolute thm-clr" href="portfolio-single.html" title=""><i class="icon-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1 fltr-itm2 fltr-itm3 fltr-itm4">
                                <div class="port-box position-relative w-100">
                                    <div class="port-img position-relative overflow-hidden w-100">
                                        <img class="img-fluid w-100" src="assets/images/resources/port-img2-9.jpg" alt="Portfolio Image 9">
                                        <a class="thm-bg position-absolute" href="assets/images/resources/port-img2-9.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>
                                    </div>
                                    <div class="port-info position-relative w-100">
                                        <h3 class="mb-0"><a href="portfolio-single.html" title="">Modern Wood House</a></h3>
                                        <span class="thm-clr d-block">Architecture</span>
                                        <a class="position-absolute thm-clr" href="portfolio-single.html" title=""><i class="icon-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Portfolio Wrap -->
                <div class="view-all text-center w-100">
                    <a class="thm-btn thm-bg d-inline-block position-relative" href="javascript:void(0);" title="">See More<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
                </div><!-- View All -->
            </div>
        </div>
    </section>
@endsection
