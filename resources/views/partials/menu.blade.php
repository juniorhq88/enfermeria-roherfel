<div class="site-header-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex align-items-center">
                    <div class="site-branding flex-grow-1">
                        <a href="{{ route('home') }}">
                            <img class="logo-img" alt="optico" src="images/logo-dark.png" />
                        </a>
                    </div>
                    <div class="site-navigation ml-auto">
                        <nav class="main-menu navbar-expand-xl navbar-light">
                            <div class="navbar-header">

                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="pbmit-base-icon-menu-1"></i>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a
                                            href="{{ route('home') }}">Inicio</a></li>
                                    <li class="{{ Request::is('acerca-de-nosotros') ? 'active' : '' }}"><a
                                            href="{{ route('about') }}">Nosotros</a></li>
                                    <li class="{{ Request::is('servicios') ? 'active' : '' }}"><a
                                            href="{{ route('service') }}">Servicios</a></li>
                                    <li class="{{ Request::is('contacto') ? 'active' : '' }}"><a
                                            href="{{ route('contact') }}">Contacto</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-right-box d-flex align-items-center">
                        <a href="#" class="search-btn"><i class="optico-icon-search-1"></i></a>
                        <div class="header-button">
                            <a href="{{ route('contact') }}" class="pbmit-btn"><i
                                    class="pbmit-base-icon-appointment me-1"></i>
                                Agendar una cita</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
