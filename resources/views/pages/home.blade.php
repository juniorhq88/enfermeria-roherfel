@extends('layouts.app')
@section('content')
    <div class="page-content">

        @include('pages.home.services')


        <section>
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-lg-6 clinic-colum">
                    </div>
                    <div class="col-lg-6 clinic-bg-color position-relative">
                        <div class="clinic-content ">
                            <div class="pbmit-heading-subheading">
                                <h4 class="pbmit-subtitle">¿Que hacemos?</h4>
                                <h2 class="pbmit-title text-white">Ayudamos a tus seres queridos a tener una mejor calidad de
                                    vida, con ética y profesionalismo</h2>
                            </div>
                            <div class="row ">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-borderless ">
                                        <li class="list-group-item text-white">
                                            <i class="pbmit-doctery-icon-approved-signal"></i> Standards of
                                            Treatment
                                        </li>
                                        <li class="list-group-item text-white">
                                            <i class="pbmit-doctery-icon-approved-signal"></i> Quality of Care
                                            Services
                                        </li>
                                        <li class="list-group-item text-white">
                                            <i class="pbmit-doctery-icon-approved-signal"></i> Well Communication
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-borderless">
                                        <li class="list-group-item text-white">
                                            <i class="pbmit-doctery-icon-approved-signal"></i> Infection Prevention
                                        </li>
                                        <li class="list-group-item text-white">
                                            <i class="pbmit-doctery-icon-approved-signal"></i>Patient Experience
                                        </li>
                                        <li class="list-group-item text-white">
                                            <i class="pbmit-doctery-icon-approved-signal"></i> Quality of Care
                                            Services
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="home2-team-section-bg">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center icon-box-wrapper">
                        <div class="icon-box-icon me-md-5 me-sm-0">
                            <i aria-hidden="true" class="pbmit-doctery-icon pbmit-doctery-icon-hospital"></i>
                        </div>
                        <div class="icon-box-content">
                            <h3 class="text-white">¿Busca atención médica profesional y confiable?</h3>
                            <h3 class="pbmit-color-global">No dudes en contactarnos</h3>
                        </div>
                    </div>
                    <div class="my-sm-4">
                        <a href="{{ route('contact') }}" class="pbmit-btn  pbmit-btn-hover-white">Contactenos</a>
                    </div>
                </div>
            </div>
        </section>

        @include('pages.home.testimonials')


        <section class="home2-client-section">
            <div class="container">

            </div>
        </section>

    </div>
@endsection
