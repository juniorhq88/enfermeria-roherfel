<header class="site-header">
    <div class="pre-header">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center justify-content-center">
                    <ul class="nav pbmit-contact-info justify-content-center justify-content-md-start">
                        <li class="nav-item me-3">
                            <i class="pbmit-base-icon-marker me-2 pbmit-color-global"></i> <a href="tel:5579094524">
                                55-7909-4524</a>
                        </li>
                        <li>
                            <i class="pbmit-base-icon-contact pbmit-color-global me-2"></i><a
                                href="mailto:info@enfermeriaroherfel.com"
                                class="__cf_email__">info@enfermeriaroherfel.com</a> - Soporte 24/7
                    </ul>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <!--ul class="list-unstyled d-flex">
                        <li> <a class="px-2" href="#"><i class="pbmit-base-icon-facebook-squared"></i></a> </li>
                        <li> <a class="px-2" href="#"><i class="pbmit-base-icon-twitter"></i></a> </li>
                        <li> <a class="ps-2" href="#"><i class="pbmit-base-icon-linkedin-squared"></i></a> </li>
                    </ul-->
                </div>
            </div>
        </div>
    </div>

    @include('partials.menu')

    @if (Request::is('/'))
        @include('partials.slider')
    @endif
</header>
