<header class="header">
    <div class="container">
        <div class="header__wrapper">
            <div class="logo">
                <a href="{{ route('home') }}" class="logo__link">
                    <img src="{{ asset('img/logo2.svg') }}" alt="STS logo">
                </a>
            </div>
            <div class="menu">
                <button id="mobileMenuOpen" class="menu__btn"></button>
            </div>
        </div>
    </div>
</header>
<div id="mobileMenu" class="mobile-menu-layout">
    <button id="mobileMenuClose" class="mobile-menu-layout__btn"></button>
</div>