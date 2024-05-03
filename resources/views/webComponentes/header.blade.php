<header class="main-header">
    <nav class="main-menu main-menu-no-top">
        <div class="container-fluid">
            <div class="main-menu__logo">
                <a href="index.html">
                    <img src="assets/images/logo.png" width="90" height="90" alt="nisoz">
                </a>

            </div><!-- /.main-menu__logo -->
            <div class="main-menu__nav">
                <ul class="main-menu__list one-page-scroll-menu">
                    <li class="scrollToLink current"><a href="#home">INICIO</a></li>
                    <li class="scrollToLink"><a href="#services">SERVICIOS</a></li>
                    <li class="scrollToLink"><a href="#portfolio">NUESTROS PROFECIONALES</a></li>
                    <li class="scrollToLink"><a href="#blog">OFERTAS</a></li>
                    <li class="scrollToLink"><a href="#contact">SOPORTE TENICO</a></li>
                </ul>
            </div><!-- /.main-menu__nav -->
            <div class="main-menu__right">
                <a href="#" class="main-menu__toggler mobile-nav__toggler">
                    <i class="fa fa-bars"></i>
                </a><!-- /.mobile menu btn -->
                <a href="https://wa.me/" class="main-menu__phone">
                    <i class="icon-telephone"></i>
                    <span class="main-menu__phone"></span>
                </a><!-- /.phone-number -->
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="main-menu__cart cart-toggler" target="_blank" title="volver">
                            <!--<i class="icon-magnifying-glass"></i>  class="main-menu__search search-toggler-->
                            <i class="fa fa-chevron-right fa-lg" aria-hidden="true"></i>
                        </a><!-- /.search btn -->
                        @else
                            <a href="{{ route('login') }}" class="main-menu__cart cart-toggler" target="_blank" title="login">
                                <i class="fas fa-sign-in-alt fa-lg"></i>
                                <!--<i class="icon-shopping-cart"></i>
                            <span class="main-menu__cart__count">0</span>-->

                            </a><!-- /.cart btn -->
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="main-menu__cart cart-toggler" target="_blank" title="registrate">
                                    <i class="fas fa-user-plus fa-lg"></i>
                                </a>
                            @endif
                        @endauth
                @endif

            </div>

            <!-- /.main-menu__right -->

        </div><!-- /.container -->
    </nav>
    <!-- /.main-menu -->
</header>
