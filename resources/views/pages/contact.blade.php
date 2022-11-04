@extends('layouts.app')
@section('content')
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <h1 class="pbmit-tbar-title">Contáctenos</h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="#"
                                    class="home"><span>{{ config('app.name') }}</span></a></span>
                            <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                            <span><span class="post-root post post-post current-item">Contáctenos</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="page-content">

        <section class="section-lgt contact-section">
            <div class="container">
                <div class="pbmit-heading-subheading text-center">
                    <h4 class="pbmit-subtitle">Póngase en contacto con nosotros </h4>
                    <h2 class="pbmit-title mb-3"> Llámenos o escriba un mensaje</h2>
                    <p>Estamos para atenderle</p>
                </div>
                <div class="row g-0">
                    <div class="col-md-4 col-sm-12">
                        <div class="pbmit-ihbox-style-8">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper">
                                        <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                            <i class="pbmit-doctery-icon pbmit-doctery-icon-map"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title"> Dirección​​</h2>
                                    <div class="pbmit-heading-desc">456, Lorem Street, 09780 CDMX</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="pbmit-ihbox-style-8">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper">
                                        <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                            <i class="pbmit-doctery-icon pbmit-doctery-icon-phone-call"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title"> Teléfono</h2>
                                    <div class="pbmit-heading-desc"> <a href="tel:5579094524">55-7909-4524</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="pbmit-ihbox-style-8">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper">
                                        <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                            <i class="pbmit-doctery-icon pbmit-doctery-icon-email"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title"> Correo electrónico</h2>
                                    <div class="pbmit-heading-desc"><a href="mailto:info@enfermeriaroherfel.com"
                                            class="__cf_email__"
                                            data-cfemail="eb8884859f8a889fab8e938a869b878ec5888486">info@enfermeriaroherfel.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pbmit-bg-color-light section-lg contact-section-bg">
            <div class="container ">
                <div class="row g-3 g-lg-5">
                    <div class="col-lg-8 col-sm-12">
                        <div class="pbmit-heading-subheading text-left">
                            <h4 class="pbmit-subtitle">Contáctenos</h4>
                            <h2 class="pbmit-title">le atenderemos lo más pronto posible</h2>

                        </div>
                        <form method="POST">
                            @csrf
                            <div class="row mb-3 g-3">
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control" placeholder="Nombre" name="first_name"
                                        required>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control" placeholder="Apellidos" name="last_name"
                                        required>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control" placeholder="Correo electrónico"
                                        name="email" required>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control" placeholder="Teléfono" name="phone"
                                        required>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <select class="form-select" aria-label="Default select example" required>
                                        <option selected="">Seleccione un servicio</option>
                                        @foreach ($services as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <textarea class="form-control" name="message" rows="4" placeholder="Mensaje" required></textarea>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <button type="submit" class="pbmit-btn">Enviar mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-contact home2-Emergency-Cases-section-bg">
                            <div class="single-service-contact-last">
                                <h2 class="pbmit-element-title text-white mb-5">Nuestros horarios</h2>
                                <div class="widget mb-5">
                                    <ul class="pbmit-timelist-list Emergency-timelist-list">
                                        <li>
                                            <span class="pbmit-timelist-li-title pbmit-color-global">Lunes</span>
                                            <span class="pbmit-timelist-li-value text-white">09:00 am - 19:00
                                                pm</span>
                                        </li>
                                        <li>
                                            <span class="pbmit-timelist-li-title pbmit-color-global">Martes:</span>
                                            <span class="pbmit-timelist-li-value text-white">09:00 am - 19:00
                                                pm</span>
                                        </li>
                                        <li>
                                            <span class="pbmit-timelist-li-title pbmit-color-global">Miércoles:</span>
                                            <span class="pbmit-timelist-li-value text-white">09:00 am - 19:00
                                                pm</span>
                                        </li>
                                        <li>
                                            <span class="pbmit-timelist-li-title pbmit-color-global">Jueves:</span>
                                            <span class="pbmit-timelist-li-value text-white">09:00 am - 19:00
                                                pm</span>
                                        </li>
                                        <li>
                                            <span class="pbmit-timelist-li-title pbmit-color-global">Viernes:</span>
                                            <span class="pbmit-timelist-li-value text-white">09:00 am - 19:00
                                                pm</span>
                                        </li>
                                        <li>
                                            <span class="pbmit-timelist-li-title pbmit-color-global">Sabado</span>
                                            <span class="pbmit-timelist-li-value text-white">09:00 am - 19:00
                                                pm</span>
                                        </li>
                                        <li>
                                            <span class="pbmit-timelist-li-title pbmit-color-global">Domingo</span>
                                            <span class="pbmit-timelist-li-value text-white">Cerrado</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
