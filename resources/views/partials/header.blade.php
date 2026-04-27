<header class="header-section">
    <div class="navigation-container">
        <nav class="navigation grid grid-3-cols">
            <x-logo href=" {{ route ('welcome') }}" />
            <div class="left-links">
                <ul class="nav-links flex" id="left-links">
                    @yield('nav-left-links')
                </ul>
            </div>
            <div class="right-links flex">
                <!-- TODO-->
                <!-- ADD TRANSLATE FUNCTION -->
                <ul class="nav-links flex" id="right-links">
                    @yield('nav-right-links')
                </ul>
                <!-- MOBILE NAVIGATION  -->
                <div class="mobile-nav-button">
                    <button class="buttonMobile" aria-controls="primary-navigation" aria-expanded="false">
                        <svg stroke="#fff" class="brger" fill="none" viewBox="-10 -10 120 120" width="70">
                            <path class="line" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"
                                d="m 20 40 h 60 a 1 1 0 0 1 0 20 h -60 a 1 1 0 0 1 0 -40 h 30 v 70"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </div>
    <div class="hero-text-box">
        @yield('hero')
    </div>
    <div class="footprints">
        @yield("footprints")
    </div>
</header>