<!DOCTYPE html>
<html class="is-scrolling">
<head>
    <title>UAVS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100;9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800;9..40,900&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    @yield('css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<header>
    <div class="head-line"></div>
    <div class="head-content">
        <div class="wrapper">
            <a href="#" class="header-logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="">
            </a>
            <div class="header-nav">
                <a href="/" class="{{ $page == 'index' ? 'is-selected' : '' }}">Home</a>
                <a href="{{ route('customer.about') }}" class="{{ $page == 'about' ? 'is-selected' : '' }}">About</a>
                <a href="{{ route('customer.sponsor') }}" class="{{ $page == 'sponsor' ? 'is-selected' : '' }}">Sponsor</a>
                <a href="{{ route('customer.blog') }}" class="{{ $page == 'blog' ? 'is-selected' : '' }}">Blog</a>
                <a href="{{ route('customer.contact') }}" class="{{ $page == 'contact' ? 'is-selected' : '' }}">Contact</a>
                <a href="{{ route('customer.register') }}" class="register-button">Register</a>
            </div>
            <div class="nav-control">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </div>
</header>
<main>
    @yield('body')
</main>
<footer>
    <div class="wrapper">
        <div class="footer-wrapper">
            <div class="footer-layout">
                <div class="logo">
                    <img src="{{ asset('assets/images/logo-footer.png') }}" alt="">
                </div>
                <a href="" class="email">info@uavs-nsw.org</a>
                <div class="footer-social">
                    <div class="social-item">
                        <a href="https://www.facebook.com/uavsnsw?mibextid=LQQJ4d"><img src="{{ asset('assets/images/facebook-logo.svg') }}" alt=""></a>
                    </div>
                    <div class="social-item">
                        <a href="https://instagram.com/uavs.nsw?igshid=MzMyNGUyNmU2YQ=="><img src="{{ asset('assets/images/instagram.svg') }}" alt=""></a>
                    </div>
                    <div class="social-item">
                        <a href="#"><img src="{{ asset('assets/images/linkedin.svg') }}" alt=""></a>
                    </div>
                    <div class="social-item">
                        <a href="#"><img src="{{ asset('assets/images/discord.svg') }}" alt=""></a>
                    </div>
                    <div class="social-item">
                        <a href="#"><img src="{{ asset('assets/images/medium.svg') }}" alt=""></a>
                    </div>
                    <div class="social-item">
                        <a href="#"><img src="{{ asset('assets/images/tik-tok.svg') }}" alt=""></a>
                    </div>
                </div>
                <div class="copyright">2021 - 2025 © UAVS</div>
            </div>
            <div class="footer-layout">
                <div class="layout-title">Sort Link</div>
                <a href="/" class="layout-link">Homepage</a>
                <a href="{{ route('customer.about') }}" class="layout-link">About</a>
                <a href="{{ route('customer.event') }}" class="layout-link">Events</a>
                <a href="{{ route('customer.blog') }}" class="layout-link">Blog</a>
                <a href="{{ route('customer.contact') }}" class="layout-link">Contact</a>
            </div>
            <div class="footer-layout">
                <div class="layout-title">What do we do</div>
                <a href="" class="layout-link">Events</a>
                <a href="" class="layout-link">Associated Events</a>
            </div>
            <div class="footer-layout">
                <div class="layout-title">More Action</div>
                <a href="" class="layout-link">Contact us</a>
                <a href="" class="layout-link">Join UAVS</a>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="https://kit.fontawesome.com/d8162761f2.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/window.js') }}"></script>
@yield('js')
</html>
