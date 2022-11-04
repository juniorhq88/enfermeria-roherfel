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
                            <h2 class="pbmit-title">y le atenderemos lo más pronto posible</h2>

                        </div>
                        <form>
                            <div class="row mb-3 g-3">
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control" placeholder="First Name" name="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control" placeholder="Last Name" name="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control" placeholder="Email" name="Email">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control" placeholder="Phone" name="Phone">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="">Select Department</option>
                                        <option value="1">Department 1</option>
                                        <option value="2">Department 2</option>
                                        <option value="3">Department 3</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="">Select Doctor</option>
                                        <option value="1">Doctor 1</option>
                                        <option value="2">Doctor 2</option>
                                        <option value="3">Doctor 3</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="">Date</option>
                                        <option value="1">Date 1</option>
                                        <option value="2">Date 2</option>
                                        <option value="3">Date 3</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="">Time</option>
                                        <option value="1">Time 1</option>
                                        <option value="2">Time 4</option>
                                        <option value="3">Time 3</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <textarea class="form-control" name="message" rows="4" placeholder="Message"></textarea>
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
                                            <span class="pbmit-timelist-li-title pbmit-color-global">Monday</span>
                                            <span class="pbmit-timelist-li-value text-white">09:00 am - 19:00
                                                pm</span>
                                        </li>
                                        <li>
                                            <span class="pbmit-timelist-li-title pbmit-color-global">Tuesday:</span>
                                            <span class="pbmit-timelist-li-value text-white">09:00 am - 19:00
                                                pm</span>
                                        </li>
                                        <li>
                                            <span class="pbmit-timelist-li-title pbmit-color-global">Wednesday:</span>
                                            <span class="pbmit-timelist-li-value text-white">09:00 am - 19:00
                                                pm</span>
                                        </li>
                                        <li>
                                            <span class="pbmit-timelist-li-title pbmit-color-global">Thursday:</span>
                                            <span class="pbmit-timelist-li-value text-white">09:00 am - 19:00
                                                pm</span>
                                        </li>
                                        <li>
                                            <span class="pbmit-timelist-li-title pbmit-color-global">Friday:</span>
                                            <span class="pbmit-timelist-li-value text-white">09:00 am - 19:00
                                                pm</span>
                                        </li>
                                        <li>
                                            <span class="pbmit-timelist-li-title pbmit-color-global">Saturday</span>
                                            <span class="pbmit-timelist-li-value text-white">09:00 am - 19:00
                                                pm</span>
                                        </li>
                                        <li>
                                            <span class="pbmit-timelist-li-title pbmit-color-global">Sunday</span>
                                            <span class="pbmit-timelist-li-value text-white">Closed*</span>
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
