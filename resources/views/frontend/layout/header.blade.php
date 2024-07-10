<header class="stick style1 w-100">
    <div class="container">
        <div class="logo-menu-wrap d-flex flex-wrap justify-content-between align-items-center w-100">
            <div class="logo"><h1 class="mb-0"><a href="{{ route("main") }}" title="Home"><img class="img-fluid default-logo"
                                                                                               src="{{ asset('assets/images/logo.png') }}"
                                                                                               srcset="{{ asset('assets/images/retina-logo.png') }}"
                                                                                               alt="Logo"><img
                            class="img-fluid hover-logo" src="{{ asset('assets/images/logo.png') }}"
                            srcset="{{ asset('assets/images/retina-logo.png') }}" alt="Hover Logo"></a></h1></div>
            <!-- Logo -->
            <nav class="d-flex flex-wrap justify-content-between align-items-center">
                <div class="nav-left">
                    <ul class="mb-0 list-unstyled d-inline-flex flex-wrap w-100">
                        <li class="menu-item">
                            <a href="{{ route("main") }}" title=""><span>Home</span></a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route("projects") }}" title=""><span>Projects</span></a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route("about_us") }}" title=""><span>About Us</span></a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route("contacts") }}" title=""><span>Contacts</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div><!-- Logo Menu Wrap -->
    </div>
</header><!-- Header -->
<div class="header-search d-flex flex-wrap align-items-center position-fixed">
    <span class="search-close-btn position-absolute"><i class="fas fa-times"></i></span>
    <form class="w-100 position-relative">
        <button type="submit"><i class="icon-search"></i></button>
        <input type="text" placeholder="Search">
    </form>
</div><!-- Header Search -->
<div class="responsive-menu position-fixed w-100">
    <span class="menu-close"><i class="fas fa-times"></i></span>
    <ul class="mb-0 list-unstyled w-100">
        <li class="menu-item"><a href="{{ route("main") }}" title=""><span>Home</span></a>
        </li>
        <li class="menu-item">
            <a href="{{ route("projects") }}" title=""><span>Projects</span></a>
        </li>
        <li class="menu-item">
            <a href="{{ route("about_us") }}" title=""><span>About Us</span></a>
        </li>
        <li class="menu-item">
            <a href="{{ route("contacts") }}" title=""><span>Contacts</span></a>
        </li>
    </ul>
    <div class="scl-links v2 d-flex flex-wrap w-100">
        <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
    </div>
</div><!-- Responsive Menu -->
