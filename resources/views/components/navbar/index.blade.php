@push('script')
    <script>
        function navbarComponent() {
            return {
                profile: '',
                init() {
                    window.addEventListener('profile-fetched', event => {
                        this.profile = event.detail;
                        console.log('Profile telah diterima:', Alpine.store('profileStore').profile);
                    });
                }
            }
        }
    </script>
@endpush

<header class="site-header sofax-header-section site-header--menu-center" id="sticky-menu">
    <div class="container" x-data="navbarComponent()">
        <nav class="navbar site-navbar">
            <!-- Brand Logo-->
            <div class="brand-logo">
                <a href="/" class="lead fw-bolder" style="text-decoration: none;color:brown;">
                    Pasang Kaca Stiker
                </a>
            </div>
            <div class="menu-block-wrapper">
                <div class="menu-overlay"></div>
                <nav class="menu-block" id="append-menu-header">
                    <div class="mobile-menu-head">
                        <div class="go-back">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="current-menu-title"></div>
                        <div class="mobile-menu-close">&times;</div>
                    </div>
                    <ul class="site-menu-main">

                        <li class="nav-item">
                            <a href="#home" class="nav-link-item">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#service" class="nav-link-item">Service</a>
                        </li>
                        <li class="nav-item">
                            <a href="#pricing" class="nav-link-item">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#blog" class="nav-link-item">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#testimonial" class="nav-link-item">Blog</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="header-btn header-three-site-btn header-btn-l1 ms-auto d-none d-xs-inline-flex">

            </div>
            <!-- mobile menu trigger -->
            <div class="mobile-menu-trigger ">
                <span></span>
            </div>
            <!--/.Mobile Menu Hamburger Ends-->
        </nav>
    </div>
</header>
<!--End landex-header-section -->
