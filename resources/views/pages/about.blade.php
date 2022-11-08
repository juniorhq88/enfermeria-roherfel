@extends('layouts.app')
@section('content')
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <h1 class="pbmit-tbar-title">Acerca de nosotros</h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="#"
                                    class="home"><span>{{ config('app.name') }}</span></a></span>
                            <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                            <span><span class="post-root post post-post current-item">Acerca de nosotros</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="page-content">

        <section class="home1-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-end">
                        <img class="about-us-img" src="images/img-02.png" alt="" />
                    </div>
                    <div class="col-lg-6">
                        <div class="pbmit-heading-subheading my-4">
                            <h2 class="pbmit-title">
                                ¿Quienes somos?
                            </h2>
                        </div>
                        <div class="mb-5">
                            <p>Somos un grupo de personas con calidad humana, que te brinda un servicio de ética y
                                profesionalismo, para ayudar a ti y a tu familia a tener una mejor calidad de vida
                            </p>
                        </div>
                        <!--div class="row pb-4 align-items-center">
                                                <div class="col-md-4">
                                                    <img class="img-fluid" src="images/signature-img.png" alt="" />
                                                </div>
                                                <div class="col-md-8 border-start ps-5">
                                                    <div class="pbmit-ihbox pbmit-ihbox-style-6">
                                                        <div class="d-flex align-items-center">
                                                            <div class="pbmit-ihbox-icon">
                                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                                                    <img src="images/author.jpg" alt="Richard Muldoone" />
                                                                </div>
                                                            </div>
                                                            <div class="pbmit-ihbox-contents">
                                                                <h2 class="pbmit-element-title">
                                                                    Richard Muldoone
                                                                </h2>
                                                                <h6 class="pbmit-element-heading">
                                                                    FOUNDER
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </!--div-->
                        <div class="list-wrap">
                            <div class="row">
                                <div class="col-md-5">
                                    <ul class="list-group list-group-borderless">
                                        <li class="list-group-item">
                                            <i class="pbmit-doctery-icon-approved-signal"></i> Fisioterapeutas
                                        </li>
                                        <li class="list-group-item">
                                            <i class="pbmit-doctery-icon-approved-signal"></i> Enfermeras generales
                                        </li>
                                        <li class="list-group-item">
                                            <i class="pbmit-doctery-icon-approved-signal"></i> Auxiliar de enfermería
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-7">
                                    <ul class="list-group list-group-borderless">

                                        <li class="list-group-item">
                                            <i class="pbmit-doctery-icon-approved-signal"></i> Cuidadoras
                                        </li>
                                        <li class="list-group-item">
                                            <i class="pbmit-doctery-icon-approved-signal"></i> Nanas
                                        </li>
                                        <li class="list-group-item">
                                            <i class="pbmit-doctery-icon-approved-signal"></i> Personal de limpieza
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('pages.home.testimonials')


        <section class="home3-team-section-bg about-us-section">
            <div class="container">

            </div>
        </section>

    </div>
@endsection
