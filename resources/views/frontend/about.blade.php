@extends("frontend.layout.app")
@section("title","About Us")
@section("content")
    <section>
        <div class="w-100 pb-80 position-relative">
            <div class="page-top-wrap position-relative w-100">
                <div class="container">
                    <div class="page-top-inner d-flex flex-wrap align-items-center position-relative w-100">
                        <div class="page-title-info position-relative">
                            <i class="position-absolute"><svg viewBox="0 0 359 354" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M358.5 351H323V300.316L250.863 264.339V331.541H278.904V170.438L201.566 91.0182L200.661 327.921L223.727 351L224.179 71.1066L166.063 3V142.381L126.489 156.862L149.781 267.507L171.49 289.455V212.75H115.635L80.3576 331.541H171.49V306.651H34V351H0" stroke="#f1f1f1" stroke-width="2"/></svg></i>
                            <h1 class="mb-0">About Author</h1>
                            <ol class="breadcrumb mb-0 list-unstyled">
                                <li class="breadcrumb-item"><a href="{{ route("main") }}" title=""><i class="icon-home"></i>Home</a></li>
                                <li class="breadcrumb-item active">About Author</li>
                            </ol>
                        </div>
                        <div class="page-title-img position-absolute"><div class="page-title-img-inner d-block w-100" style="background-image: url(assets/images/page-title-bg1.jpg);"></div><span class="position-absolute sec-watermark center-watermark overlap-btm-shap88 font-200">About</span></div>
                    </div>
                </div>
            </div><!-- Page Top Wrap -->
        </div>
    </section>
    <section>
        <div class="w-100 pt-20 pb-130 position-relative">
            <svg class="sec-btm-rgt-shp overlap-btmshap150 opc-6 stroke-clr position-absolute" width="444" height="721" viewBox="0 0 444 721" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M0.769252 365.057L117.32 627.406H292.971L176.421 365.057H0.769252Z" stroke="#000000"/><path d="M605.475 68.2185L488.925 330.567L313.273 330.567L429.823 68.2185H605.475Z" stroke="#000000"/><path d="M157.597 458.151L274.147 720.5H449.799L333.249 458.151H157.597Z" stroke="#000000"/><path d="M449.8 161.312L333.249 423.661L157.598 423.661L274.148 161.312H449.8Z" stroke="#000000"/><path d="M233.605 297.339L350.155 559.688H525.807L409.256 297.339H233.605Z" stroke="#000000"/><path d="M372.64 0.499969L256.089 262.849L80.4375 262.849L196.988 0.499969H372.64Z" stroke="#000000"/></g></svg>
            <div class="container">
                <div class="about-me-wrap w-100">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="about-me-img position-relative w-100">
                                <div class="about-me-bg position-absolute" style="background-image: url({{ asset('assets/images/about-me-img-bg.jpg') }});"></div>
                                <img class="img-fluid w-100" src="{{ asset('assets/images/resources/about-me-img.jpg') }}" alt="About Me Image">
                                <div class="scl-links v2 w-100">
                                    <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="sec-title w-100">
                                <div class="sec-title-inner d-inline-block">
                                    <span class="d-block thm-clr">About Me</span>
                                    <h2 class="mb-0">Samuel Adamson<i></i></h2>
                                </div>
                            </div><!-- Sec Title -->
                            <div class="about-me-desc w-100">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <ul class="about-me-info list-unstyled mb-0">
                                    <li>Name:<span>Samuel Adamson</span></li>
                                    <li>Age:<span>33</span></li>
                                    <li>Email:<span><a href="mailto:adamson@mail.com" title="">adamson@mail.com</a></span></li>
                                </ul>
                                <a class="thm-btn bg-color1 d-inline-block position-relative" href="team-detail.html" title="">Learn More<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
                            </div>
                        </div>
                    </div>
                </div><!-- About Me Wrap -->
                <div class="my-skills-wrap w-100">
                    <h3 class="mb-0">Skills:</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="progress-wrap w-100">
                                <h5 class="">Interior Sketch</h5>
                                <div class="progress w-100"><div class="progress-bar thm-bg w-75 slideInLeft wow" data-wow-duration=".2s" data-wow-delay=".1s"><span class="thm-bg">75%</span></div></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="progress-wrap w-100">
                                <h5 class="">3D Modeling</h5>
                                <div class="progress w-100"><div class="progress-bar thm-bg w-80 slideInLeft wow" data-wow-duration=".2s" data-wow-delay=".2s"><span class="thm-bg">80%</span></div></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="progress-wrap w-100">
                                <h5 class="">Architectural Project</h5>
                                <div class="progress w-100"><div class="progress-bar thm-bg w-90 slideInLeft wow" data-wow-duration=".2s" data-wow-delay=".3s"><span class="thm-bg">90%</span></div></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="progress-wrap w-100">
                                <h5 class="">Visualization</h5>
                                <div class="progress w-100"><div class="progress-bar thm-bg w-50 slideInLeft wow" data-wow-duration=".2s" data-wow-delay=".4s"><span class="thm-bg">50%</span></div></div>
                            </div>
                        </div>
                    </div>
                </div><!-- My Skills Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-60 dark-layer opc3 paralx-70 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/parallax-bg5.jpg);"></div>
            <div class="container">
                <div class="sec-title text-center w-100">
                    <div class="sec-title-inner d-inline-block">
                        <span class="d-block thm-clr">Services</span>
                        <h2 class="mb-0">What i create<i></i></h2>
                    </div>
                </div><!-- Sec Title -->
                <div class="serv-create-wrap res-row position-relative w-100">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-create-box text-center position-relative w-100">
                                <span class="position-absolute">01</span>
                                <i class="icon-interior-design thm-clr"></i>
                                <h3 class="mb-0">Interior Design</h3>
                                <p class="mb-0">Nemo enim ipsam voluptatem voluptas sit aspernatur aut odit</p>
                                <a class="thm-btn bg-color1 d-inline-block position-relative" href="services.html" title="">More<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-create-box text-center position-relative w-100">
                                <span class="position-absolute">02</span>
                                <i class="icon-build thm-clr"></i>
                                <h3 class="mb-0">Architectural Project</h3>
                                <p class="mb-0">Nemo enim ipsam voluptatem voluptas sit aspernatur aut odit</p>
                                <a class="thm-btn bg-color1 d-inline-block position-relative" href="services.html" title="">More<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-create-box text-center position-relative w-100">
                                <span class="position-absolute">03</span>
                                <i class="icon-brick thm-clr"></i>
                                <h3 class="mb-0">Construction & Repair</h3>
                                <p class="mb-0">Nemo enim ipsam voluptatem voluptas sit aspernatur aut odit</p>
                                <a class="thm-btn bg-color1 d-inline-block position-relative" href="services.html" title="">More<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
                            </div>
                        </div>
                    </div>
                </div><!-- Services Create Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-140 pb-130 position-relative">
            <svg class="sec-tp-lft-shp opc-6 stroke-clr position-absolute overlap-tp-shap10" width="358" height="721" viewBox="0 0 358 721" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M356.475 355.943L239.925 93.594L64.2729 93.594L180.823 355.943L356.475 355.943Z" stroke="#000000"/><path d="M-248.231 652.782L-131.68 390.433L43.9714 390.433L-72.579 652.782L-248.231 652.782Z" stroke="#000000"/><path d="M199.647 262.849L83.0971 0.49999L-92.5547 0.499974L23.9957 262.849L199.647 262.849Z" stroke="#000000"/><path d="M-92.5555 559.688L23.9949 297.339L199.647 297.339L83.0963 559.688L-92.5555 559.688Z" stroke="#000000"/><path d="M123.64 423.661L7.08952 161.312L-168.562 161.312L-52.0119 423.661L123.64 423.661Z" stroke="#000000"/><path d="M-15.3953 720.5L101.155 458.151L276.807 458.151L160.256 720.5L-15.3953 720.5Z" stroke="#000000"/></g></svg>
            <div class="container">
                <div class="sec-title text-center w-100">
                    <div class="sec-title-inner d-inline-block">
                        <span class="d-block thm-clr">Timeline</span>
                        <h2 class="mb-0">What awards do i have<i></i></h2>
                    </div>
                </div><!-- Sec Title -->
                <div class="timeline-wrap position-relative w-100">
                    <ul class="timeline-list position-relative d-flex flex-wrap list-unstyled mb-0">
                        <li>
                            <div class="timeline-box-wrap position-relative w-100">
                                <div class="timeline-box-head">
                                    <h4 class="">2019<i>year</i></h4>
                                    <span class="d-inline-block position-relative"><i><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></i></span>
                                </div>
                                <div class="timeline-box position-relative">
                                    <span class="d-block"><i class="icon-calendar-alt thm-clr"></i>June</span>
                                    <h4 class="mb-0"><a href="javascript:void(0);" title="">Union Trust Building Repositioning</a></h4>
                                    <div class="loc d-block"><span>Pittsburgh</span>, <span>Pennsylvania</span></div>
                                    <span class="d-block prize-desg">Special Prize of the Jury (2nd Prize)</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-box-wrap position-relative w-100">
                                <div class="timeline-box-head">
                                    <h4 class="">2018<i>year</i></h4>
                                    <span class="d-inline-block position-relative"><i><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></i></span>
                                </div>
                                <div class="timeline-box position-relative">
                                    <span class="d-block"><i class="icon-calendar-alt thm-clr"></i>July</span>
                                    <h4 class="mb-0"><a href="javascript:void(0);" title="">Union Trust Building Repositioning</a></h4>
                                    <div class="loc d-block"><span>Pittsburgh</span>, <span>Pennsylvania</span></div>
                                    <span class="d-block prize-desg">Special Prize of the Jury (1st Prize)</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-box-wrap active position-relative w-100">
                                <div class="timeline-box-head">
                                    <h4 class="">2016<i>year</i></h4>
                                    <span class="d-inline-block position-relative"><i><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></i></span>
                                </div>
                                <div class="timeline-box position-relative">
                                    <span class="d-block"><i class="icon-calendar-alt thm-clr"></i>March</span>
                                    <h4 class="mb-0"><a href="javascript:void(0);" title="">Union Trust Building Repositioning</a></h4>
                                    <div class="loc d-block"><span>Pittsburgh</span>, <span>Pennsylvania</span></div>
                                    <span class="d-block prize-desg">Special Prize of the Jury (3rd Prize)</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-box-wrap position-relative w-100">
                                <div class="timeline-box-head">
                                    <h4 class="">2015<i>year</i></h4>
                                    <span class="d-inline-block position-relative"><i><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></i></span>
                                </div>
                                <div class="timeline-box position-relative">
                                    <span class="d-block"><i class="icon-calendar-alt thm-clr"></i>June</span>
                                    <h4 class="mb-0"><a href="javascript:void(0);" title="">Union Trust Building Repositioning</a></h4>
                                    <div class="loc d-block"><span>Pittsburgh</span>, <span>Pennsylvania</span></div>
                                    <span class="d-block prize-desg">Special Prize of the Jury (2nd Prize)</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-box-wrap position-relative w-100">
                                <div class="timeline-box-head">
                                    <h4 class="">2011<i>year</i></h4>
                                    <span class="d-inline-block position-relative"><i><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></i></span>
                                </div>
                                <div class="timeline-box position-relative">
                                    <span class="d-block"><i class="icon-calendar-alt thm-clr"></i>July</span>
                                    <h4 class="mb-0"><a href="javascript:void(0);" title="">Union Trust Building Repositioning</a></h4>
                                    <div class="loc d-block"><span>Pittsburgh</span>, <span>Pennsylvania</span></div>
                                    <span class="d-block prize-desg">Special Prize of the Jury (1st Prize)</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div><!-- Timeline Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pb-130 position-relative">
            <div class="video-wrap w-100 position-relative">
                <div class="video-inner position-relative w-100">
                    <span class="position-absolute sec-tp-rgt-shp sec-watermark overlap-tp-shap100 font-200">Video</span>
                    <div class="video-img position-relative w-100">
                        <img class="img-fluid w-100" src="{{ asset('assets/images/resources/video-img1.jpg') }}" alt="Video Image 1">
                        <a class="thm-bg position-absolute" href="https://www.youtube.com/embed/_Ecl_XEETEA" data-fancybox title=""><svg viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.3682 6.7081L1.93934 0.20524C1.17325 -0.322864 0 0.189616 0 1.49581V14.4984C0 15.6702 1.09021 16.3765 1.93934 15.789L11.3682 9.28925C12.2093 8.71115 12.2119 7.2862 11.3682 6.7081Z" fill="black"/></svg></a>
                    </div>
                </div>
            </div><!-- Video Wrap -->
        </div>
    </section>
    <section>
        <div class="w-100 pb-110 position-relative">
            <span class="position-absolute sec-watermark left-watermark overlap-btm-shap20 sec-btm-lft-shp font-200 pos-lft-445">Reviews</span>
            <div class="container">
                <div class="sec-title mb-0 w-100">
                    <div class="sec-title-inner d-inline-block">
                        <span class="d-block thm-clr">Reviews</span>
                        <h2 class="mb-0">What say about us<i></i></h2>
                    </div>
                </div><!-- Sec Title -->
                <div class="reviws-wrap position-relative w-100">
                    <div class="reviws-caro w-100">
                        <div class="reviw-item d-flex flex-wrap align-items-center justify-content-between w-100">
                            <div class="reviw-info position-relative d-inline-flex flex-wrap align-items-center">
                                <img class="img-fluid rounded-circle" src="{{ asset('assets/images/resources/reviw-img1-1.jpg') }}" alt="Review Image 1">
                                <div class="reviw-info-inner">
                                    <h4 class="mb-0">Bill Parson</h4>
                                    <span class="d-block thm-clr">New York</span>
                                </div>
                                <i><svg viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z"/><path d="M21 8L0 8"/></svg></i>
                            </div>
                            <div class="reviw-cap text-center position-relative">
                                <p class="mb-0 position-relative"><i class="icon-quote-left thm-clr position-absolute"></i>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness<i class="icon-quote-right thm-clr position-absolute"></i></p>
                            </div>
                        </div>
                        <div class="reviw-item d-flex flex-wrap align-items-center justify-content-between w-100">
                            <div class="reviw-info position-relative d-inline-flex flex-wrap align-items-center">
                                <img class="img-fluid rounded-circle" src="{{ asset('assets/images/resources/reviw-img1-2.jpg') }}" alt="Review Image 2">
                                <div class="reviw-info-inner">
                                    <h4 class="mb-0">John Doe</h4>
                                    <span class="d-block thm-clr">New York</span>
                                </div>
                                <i><svg viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z"/><path d="M21 8L0 8"/></svg></i>
                            </div>
                            <div class="reviw-cap text-center position-relative">
                                <p class="mb-0 position-relative"><i class="icon-quote-left thm-clr position-absolute"></i>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness<i class="icon-quote-right thm-clr position-absolute"></i></p>
                            </div>
                        </div>
                    </div>
                </div><!-- Reviews Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-160 pb-130 position-relative">
            <div class="container">
                <div class="exc-proj-wrap w-100">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-lg-6 order-md-1">
                            <div class="exc-proj-imgs-wrap position-relative w-100">
                                <div class="exc-proj-img-bg position-absolute" style="background-image: url({{ asset('assets/images/exc-proj-img-bg.jpg') }});"></div>
                                <div class="exc-proj-img-caro">
                                    <div class="exc-proj-img d-block w-100"><img class="img-fluid w-100" src="{{ asset('assets/images/resources/exc-proj-img1-1.jpg') }}" alt="Excellent Project Image 1"></div>
                                    <div class="exc-proj-img d-block w-100"><img class="img-fluid w-100" src="{{ asset('assets/images/resources/exc-proj-img1-2.jpg') }}" alt="Excellent Project Image 2"></div>
                                    <div class="exc-proj-img d-block w-100"><img class="img-fluid w-100" src="{{ asset('assets/images/resources/exc-proj-img1-3.jpg') }}" alt="Excellent Project Image 3"></div>
                                </div>
                                <div class="pagiInfo"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="sec-title w-100">
                                <div class="sec-title-inner d-inline-block">
                                    <span class="d-block thm-clr">Gallery</span>
                                    <h2 class="mb-0">My excellent projects<i></i></h2>
                                </div>
                            </div><!-- Sec Title -->
                            <div class="exc-porj-desc position-relative w-100">
                                <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>
                                <ul class="exc-proj-list mb-0 list-unstyled w-100">
                                    <li><span class="position-absolute text-center">01<svg viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z" fill="#1e1e20"/><path d="M21 8L0 8" stroke="#1e1e20"/></svg></span><p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p></li>
                                    <li><span class="position-absolute text-center">02<svg viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z" fill="#1e1e20"/><path d="M21 8L0 8" stroke="#1e1e20"/></svg></span><p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p></li>
                                    <li><span class="position-absolute text-center">03<svg viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z" fill="#1e1e20"/><path d="M21 8L0 8" stroke="#1e1e20"/></svg></span><p class="mb-0">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because</p></li>
                                </ul>
                                <a class="thm-btn thm-bg d-inline-block position-relative" href="about.html" title="">Learn More<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
                                <svg class="position-absolute" width="359" height="354" viewBox="0 0 359 354" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M358.5 351H323V300.316L250.863 264.339V331.541H278.904V170.438L201.566 91.0182L200.661 327.921L223.727 351L224.179 71.1066L166.063 3V142.381L126.489 156.862L149.781 267.507L171.49 289.455V212.75H115.635L80.3576 331.541H171.49V306.651H34V351H0" stroke="#F1F1F1" stroke-width="2"/></svg>
                            </div>
                        </div>
                    </div>
                </div><!-- Excellent Pfojects Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-90 white-layer opc4 pb-90 position-relative">
            <div class="fixed-bg" style="background-image: url({{ asset('assets/images/parallax-bg1.jpg') }});"></div>
            <span class="frame thm-brd-clr position-absolute"></span>
            <div class="container">
                <div class="sec-title2 position-relative text-center w-100">
                    <div class="sec-title2-inner d-inline-block">
                        <h2 class="mb-0">Want to receive interior design news?</h2>
                        <p class="mb-0">But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences</p>
                    </div>
                </div><!-- Sec Title 2 -->
                <div class="newsletter-wrap position-relative text-center w-100">
                    <div class="newsletter-inner d-inline-block">
                        <form class="position-relative w-100" id="subscribe-form" method="post" action="#">
                            <span class="field-box d-block w-100 position-relative"><i class="thm-clr icon-envelope"></i><input name="email" class="email" type="email" placeholder="Your Email"></span>
                            <button class="thm-btn bg-color1 position-absolute" type="submit" id="subscribe-button">Sign Up<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></button>
                            <div class="response w-100"></div>
                        </form>
                    </div>
                </div><!-- Newsletter Wrap -->
            </div>
        </div>
    </section>
@endsection
