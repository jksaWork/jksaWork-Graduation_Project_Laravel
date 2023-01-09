<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>Aqari | عقاري </title>
    <meta charset="utf-8">
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free.">
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme">
    <meta property="og:url" content="https://keenthemes.com/metronic">
    <meta property="og:site_name" content="Aqari | عقاري">
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8">
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico">
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css">
    <!--end::Global Stylesheets Bundle-->
    <style class="fslightbox-styles">
        .fslightbox-absoluted {
            position: absolute;
            top: 0;
            left: 0
        }

        .fslightbox-fade-in {
            animation: fslightbox-fade-in .25s cubic-bezier(0, 0, .7, 1)
        }

        .fslightbox-fade-out {
            animation: fslightbox-fade-out .25s ease
        }

        .fslightbox-fade-in-strong {
            animation: fslightbox-fade-in-strong .25s cubic-bezier(0, 0, .7, 1)
        }

        .fslightbox-fade-out-strong {
            animation: fslightbox-fade-out-strong .25s ease
        }

        @keyframes fslightbox-fade-in {
            from {
                opacity: .65
            }

            to {
                opacity: 1
            }
        }

        @keyframes fslightbox-fade-out {
            from {
                opacity: .35
            }

            to {
                opacity: 0
            }
        }

        @keyframes fslightbox-fade-in-strong {
            from {
                opacity: .3
            }

            to {
                opacity: 1
            }
        }

        @keyframes fslightbox-fade-out-strong {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        .fslightbox-cursor-grabbing {
            cursor: grabbing
        }

        .fslightbox-full-dimension {
            width: 100%;
            height: 100%
        }

        .fslightbox-open {
            overflow: hidden;
            height: 100%
        }

        .fslightbox-flex-centered {
            display: flex;
            justify-content: center;
            align-items: center
        }

        .fslightbox-opacity-0 {
            opacity: 0 !important
        }

        .fslightbox-opacity-1 {
            opacity: 1 !important
        }

        .fslightbox-scrollbarfix {
            padding-right: 17px
        }

        .fslightbox-transform-transition {
            transition: transform .3s
        }

        .fslightbox-container {
            font-family: Arial, sans-serif;
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(rgba(30, 30, 30, .9), #000 1810%);
            z-index: 1000000000;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent
        }

        .fslightbox-container * {
            box-sizing: border-box
        }

        .fslightbox-svg-path {
            transition: fill .15s ease;
            fill: #ddd
        }

        .fslightbox-nav {
            height: 45px;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0
        }

        .fslightbox-slide-number-container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            height: 100%;
            font-size: 15px;
            color: #d7d7d7;
            z-index: 0;
            max-width: 55px;
            text-align: left
        }

        .fslightbox-slide-number-container .fslightbox-flex-centered {
            height: 100%
        }

        .fslightbox-slash {
            display: block;
            margin: 0 5px;
            width: 1px;
            height: 12px;
            transform: rotate(15deg);
            background: #fff
        }

        .fslightbox-toolbar {
            position: absolute;
            z-index: 3;
            right: 0;
            top: 0;
            height: 100%;
            display: flex;
            background: rgba(35, 35, 35, .65)
        }

        .fslightbox-toolbar-button {
            height: 100%;
            width: 45px;
            cursor: pointer
        }

        .fslightbox-toolbar-button:hover .fslightbox-svg-path {
            fill: #fff
        }

        .fslightbox-slide-btn-container {
            display: flex;
            align-items: center;
            padding: 12px 12px 12px 6px;
            position: absolute;
            top: 50%;
            cursor: pointer;
            z-index: 3;
            transform: translateY(-50%)
        }

        @media (min-width:476px) {
            .fslightbox-slide-btn-container {
                padding: 22px 22px 22px 6px
            }
        }

        @media (min-width:768px) {
            .fslightbox-slide-btn-container {
                padding: 30px 30px 30px 6px
            }
        }

        .fslightbox-slide-btn-container:hover .fslightbox-svg-path {
            fill: #f1f1f1
        }

        .fslightbox-slide-btn {
            padding: 9px;
            font-size: 26px;
            background: rgba(35, 35, 35, .65)
        }

        @media (min-width:768px) {
            .fslightbox-slide-btn {
                padding: 10px
            }
        }

        @media (min-width:1600px) {
            .fslightbox-slide-btn {
                padding: 11px
            }
        }

        .fslightbox-slide-btn-container-previous {
            left: 0
        }

        @media (max-width:475.99px) {
            .fslightbox-slide-btn-container-previous {
                padding-left: 3px
            }
        }

        .fslightbox-slide-btn-container-next {
            right: 0;
            padding-left: 12px;
            padding-right: 3px
        }

        @media (min-width:476px) {
            .fslightbox-slide-btn-container-next {
                padding-left: 22px
            }
        }

        @media (min-width:768px) {
            .fslightbox-slide-btn-container-next {
                padding-left: 30px
            }
        }

        @media (min-width:476px) {
            .fslightbox-slide-btn-container-next {
                padding-right: 6px
            }
        }

        .fslightbox-down-event-detector {
            position: absolute;
            z-index: 1
        }

        .fslightbox-slide-swiping-hoverer {
            z-index: 4
        }

        .fslightbox-invalid-file-wrapper {
            font-size: 22px;
            color: #eaebeb;
            margin: auto
        }

        .fslightbox-video {
            object-fit: cover
        }

        .fslightbox-youtube-iframe {
            border: 0
        }

        .fslightbox-loader {
            display: block;
            margin: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 67px;
            height: 67px
        }

        .fslightbox-loader div {
            box-sizing: border-box;
            display: block;
            position: absolute;
            width: 54px;
            height: 54px;
            margin: 6px;
            border: 5px solid;
            border-color: #999 transparent transparent transparent;
            border-radius: 50%;
            animation: fslightbox-loader 1.2s cubic-bezier(.5, 0, .5, 1) infinite
        }

        .fslightbox-loader div:nth-child(1) {
            animation-delay: -.45s
        }

        .fslightbox-loader div:nth-child(2) {
            animation-delay: -.3s
        }

        .fslightbox-loader div:nth-child(3) {
            animation-delay: -.15s
        }

        @keyframes fslightbox-loader {
            0% {
                transform: rotate(0)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        .fslightbox-source {
            position: relative;
            z-index: 2;
            opacity: 0
        }
    </style>
    <style></style>
    <style></style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200"
    class="bg-white position-relative">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Header Section-->
        <div class="mb-0" id="home">
            <!--begin::Wrapper-->
            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg"
                style="background-image: url(assets/media/svg/illustrations/landing.svg)">
                <!--begin::Header-->
                <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
                    data-kt-sticky-offset="{default: '200px', lg: '300px'}" style="animation-duration: 0.3s;">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center justify-content-between">
                            <!--begin::Logo-->
                            <div class="d-flex align-items-center flex-equal">
                                <!--begin::Mobile menu toggle-->
                                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                                    id="kt_landing_menu_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                    <span class="svg-icon svg-icon-2hx">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                fill="black"></path>
                                            <path opacity="0.3"
                                                d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--end::Mobile menu toggle-->
                                <!--begin::Logo image-->
                                <a href="../../demo1/dist/landing.html">
                                    <img alt="Logo" src="assets/media/logos/logo-landing.svg"
                                        class="logo-default h-25px h-lg-30px">
                                    <img alt="Logo" src="assets/media/logos/logo-landing-dark.svg"
                                        class="logo-sticky h-20px h-lg-25px">
                                </a>
                                <!--end::Logo image-->
                            </div>
                            <!--end::Logo-->
                            <!--begin::Menu wrapper-->
                            <div class="d-lg-block" id="kt_header_nav_wrapper">
                                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true"
                                    data-kt-drawer-name="landing-menu"
                                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                    data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                                    data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                                    data-kt-swapper-mode="prepend"
                                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                    <!--begin::Menu-->
                                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold"
                                        id="kt_landing_menu">
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6 active" href="#kt_body"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">الريئسية</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#how-it-works"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">كيف يعمل
                                                التطبيق</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#achievements"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">الإنجازات</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#team"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">الفريق</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">

                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->

                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Menu wrapper-->
                            <!--begin::Toolbar-->
                            <div class="flex-equal text-end ms-1">
                                <a href="../../demo1/dist/authentication/flows/basic/sign-in.html"
                                    class="btn btn-success">تسجيل الدخول</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Landing hero-->
                <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
                    <!--begin::Heading-->
                    <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                        <!--begin::Title-->
                        <h1 class="text-white lh-base fw-bolder fs-2x fs-lg-3x mb-15">إذا كنت تبحث عن عقار للإستثمار

                            <br>فإن
                            <span
                                style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
                                <span id="kt_landing_hero_text">تطبيق عقاري هو خيارك الأول</span>
                            </span>
                        </h1>
                        <!--end::Title-->
                        <!--begin::Action-->
                        <a href="../../demo1/dist/index.html" class="btn btn-primary">جرب تطبيق عقاري</a>
                        <!--end::Action-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Clients-->
                    <div class="d-flex flex-center flex-wrap position-relative px-5">
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title=""
                            data-bs-original-title="Fujifilm">
                            <img src="assets/media/svg/brand-logos/fujifilm.svg" class="mh-30px mh-lg-40px"
                                alt="">
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title=""
                            data-bs-original-title="Vodafone">
                            <img src="assets/media/svg/brand-logos/vodafone.svg" class="mh-30px mh-lg-40px"
                                alt="">
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title=""
                            data-bs-original-title="KPMG International">
                            <img src="assets/media/svg/brand-logos/kpmg.svg" class="mh-30px mh-lg-40px"
                                alt="">
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title=""
                            data-bs-original-title="Nasa">
                            <img src="assets/media/svg/brand-logos/nasa.svg" class="mh-30px mh-lg-40px"
                                alt="">
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title=""
                            data-bs-original-title="Aspnetzero">
                            <img src="assets/media/svg/brand-logos/aspnetzero.svg" class="mh-30px mh-lg-40px"
                                alt="">
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title=""
                            data-bs-original-title="AON - Empower Results">
                            <img src="assets/media/svg/brand-logos/aon.svg" class="mh-30px mh-lg-40px"
                                alt="">
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title=""
                            data-bs-original-title="Hewlett-Packard">
                            <img src="assets/media/svg/brand-logos/hp-3.svg" class="mh-30px mh-lg-40px"
                                alt="">
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title=""
                            data-bs-original-title="Truman">
                            <img src="assets/media/svg/brand-logos/truman.svg" class="mh-30px mh-lg-40px"
                                alt="">
                        </div>
                        <!--end::Client-->
                    </div>
                    <!--end::Clients-->
                </div>
                <!--end::Landing hero-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Curve bottom-->
            <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
                <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve bottom-->
        </div>
        <!--end::Header Section-->
        <!--begin::How It Works Section-->
        <div class="mb-n10 mb-lg-n20 z-index-2">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                <div class="text-center mb-17">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-dark mb-5" id="how-it-works"
                        data-kt-scroll-offset="{default: 100, lg: 150}">طريقة عمل التطبيق</h3>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="fs-5 text-muted fw-bold">Save thousands to millions of bucks by using single tool
                        <br>for different amazing and great useful admin
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Heading-->
                <!--begin::Row-->
                <div class="row w-100 gy-10 mb-md-20">
                    <!--begin::Col-->
                    <div class="col-md-4 px-5">
                        <!--begin::Story-->
                        <div class="text-center mb-10 mb-md-0">
                            <!--begin::Illustration-->
                            <img src="assets/media/illustrations/sketchy-1/2.png" class="mh-125px mb-9"
                                alt="">
                            <!--end::Illustration-->
                            <!--begin::Heading-->
                            <div class="d-flex flex-center mb-5">
                                <!--begin::Badge-->
                                <span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">1</span>
                                <!--end::Badge-->
                                <!--begin::Title-->
                                <div class="fs-5 fs-lg-3 fw-bolder text-dark">قم بتنزيل تبطبيق عقاري</div>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Description-->
                            <div class="fw-bold fs-6 fs-lg-4 text-muted">عقاري يقوم بتسهيل
                                <br>عملية البحث عن العقار المناسب لك
                                <br>و يوفر لك الوقت و الجهد
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Story-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 px-5">
                        <!--begin::Story-->
                        <div class="text-center mb-10 mb-md-0">
                            <!--begin::Illustration-->
                            <img src="assets/media/illustrations/sketchy-1/8.png" class="mh-125px mb-9"
                                alt="">
                            <!--end::Illustration-->
                            <!--begin::Heading-->
                            <div class="d-flex flex-center mb-5">
                                <!--begin::Badge-->
                                <span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">2</span>
                                <!--end::Badge-->
                                <!--begin::Title-->
                                <div class="fs-5 fs-lg-3 fw-bolder text-dark">أنشيئ حسابك</div>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Description-->
                            <div class="fw-bold fs-6 fs-lg-4 text-muted">Save thousands to millions of bucks
                                <br>by using single tool for different
                                <br>amazing and great
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Story-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 px-5">
                        <!--begin::Story-->
                        <div class="text-center mb-10 mb-md-0">
                            <!--begin::Illustration-->
                            <img src="assets/media/illustrations/sketchy-1/12.png" class="mh-125px mb-9"
                                alt="">
                            <!--end::Illustration-->
                            <!--begin::Heading-->
                            <div class="d-flex flex-center mb-5">
                                <!--begin::Badge-->
                                <span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">3</span>
                                <!--end::Badge-->
                                <!--begin::Title-->
                                <div class="fs-5 fs-lg-3 fw-bolder text-dark">أستمتع بخدماتنا</div>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Description-->
                            <div class="fw-bold fs-6 fs-lg-4 text-muted">Save thousands to millions of bucks
                                <br>by using single tool for different
                                <br>amazing and great
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Story-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Product slider-->

                <!--end::Product slider-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::How It Works Section-->
        <!--begin::Statistics Section-->
        <div class="mt-sm-n10">
            <!--begin::Curve top-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve top-->
            <!--begin::Wrapper-->
            <div class="pb-15 pt-18 landing-dark-bg">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Heading-->
                    <div class="text-center mt-15 mb-18" id="achievements"
                        data-kt-scroll-offset="{default: 100, lg: 150}">
                        <!--begin::Title-->
                        <h3 class="fs-2hx text-white fw-bolder mb-5">We Make Things Better</h3>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="fs-5 text-gray-700 fw-bold">Save thousands to millions of bucks by using single
                            tool
                            <br>for different amazing and great useful admin
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Statistics-->
                    <div class="d-flex flex-center">
                        <!--begin::Items-->
                        <div class="d-flex flex-wrap flex-center justify-content-lg-between mb-15 mx-auto w-xl-900px">
                            <!--begin::Item-->
                            <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain"
                                style="background-image: url('assets/media/svg/misc/octagon.svg')">
                                <!--begin::Symbol-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                <span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect x="2" y="2" width="9" height="9"
                                            rx="2" fill="black"></rect>
                                        <rect opacity="0.3" x="13" y="2" width="9"
                                            height="9" rx="2" fill="black"></rect>
                                        <rect opacity="0.3" x="13" y="13" width="9"
                                            height="9" rx="2" fill="black"></rect>
                                        <rect opacity="0.3" x="2" y="13" width="9"
                                            height="9" rx="2" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Symbol-->
                                <!--begin::Info-->
                                <div class="mb-0">
                                    <!--begin::Value-->
                                    <div class="fs-lg-2hx fs-2x fw-bolder text-white d-flex flex-center">
                                        <div class="min-w-70px counted" data-kt-countup="true"
                                            data-kt-countup-value="700" data-kt-countup-suffix="+">700+</div>
                                    </div>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <span class="text-gray-600 fw-bold fs-5 lh-0">Known Companies</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain"
                                style="background-image: url('assets/media/svg/misc/octagon.svg')">
                                <!--begin::Symbol-->
                                <!--begin::Svg Icon | path: icons/duotune/graphs/gra008.svg-->
                                <span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M13 10.9128V3.01281C13 2.41281 13.5 1.91281 14.1 2.01281C16.1 2.21281 17.9 3.11284 19.3 4.61284C20.7 6.01284 21.6 7.91285 21.9 9.81285C22 10.4129 21.5 10.9128 20.9 10.9128H13Z"
                                            fill="black"></path>
                                        <path opacity="0.3"
                                            d="M13 12.9128V20.8129C13 21.4129 13.5 21.9129 14.1 21.8129C16.1 21.6129 17.9 20.7128 19.3 19.2128C20.7 17.8128 21.6 15.9128 21.9 14.0128C22 13.4128 21.5 12.9128 20.9 12.9128H13Z"
                                            fill="black"></path>
                                        <path opacity="0.3"
                                            d="M11 19.8129C11 20.4129 10.5 20.9129 9.89999 20.8129C5.49999 20.2129 2 16.5128 2 11.9128C2 7.31283 5.39999 3.51281 9.89999 3.01281C10.5 2.91281 11 3.41281 11 4.01281V19.8129Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Symbol-->
                                <!--begin::Info-->
                                <div class="mb-0">
                                    <!--begin::Value-->
                                    <div class="fs-lg-2hx fs-2x fw-bolder text-white d-flex flex-center">
                                        <div class="min-w-70px counted" data-kt-countup="true"
                                            data-kt-countup-value="80" data-kt-countup-suffix="K+">80K+</div>
                                    </div>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <span class="text-gray-600 fw-bold fs-5 lh-0">Statistic Reports</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain"
                                style="background-image: url('assets/media/svg/misc/octagon.svg')">
                                <!--begin::Symbol-->
                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                <span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                            fill="black"></path>
                                        <path opacity="0.3"
                                            d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                            fill="black"></path>
                                        <path opacity="0.3"
                                            d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Symbol-->
                                <!--begin::Info-->
                                <div class="mb-0">
                                    <!--begin::Value-->
                                    <div class="fs-lg-2hx fs-2x fw-bolder text-white d-flex flex-center">
                                        <div class="min-w-70px counted" data-kt-countup="true"
                                            data-kt-countup-value="35" data-kt-countup-suffix="M+">35M+</div>
                                    </div>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <span class="text-gray-600 fw-bold fs-5 lh-0">Secure Payments</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Items-->
                    </div>
                    <!--end::Statistics-->
                    <!--begin::Testimonial-->
                    <div class="fs-2 fw-bold text-muted text-center mb-3">
                        <span class="fs-1 lh-1 text-gray-700">“</span>When you care about your topic, you’ll write
                        about it in a
                        <br>
                        <span class="text-gray-700 me-1">more powerful</span>, emotionally expressive way
                        <span class="fs-1 lh-1 text-gray-700">“</span>
                    </div>
                    <!--end::Testimonial-->
                    <!--begin::Author-->
                    <div class="fs-2 fw-bold text-muted text-center">
                        <a href="../../demo1/dist/account/security.html" class="link-primary fs-4 fw-bolder">Marcus
                            Levy,</a>
                        <span class="fs-4 fw-bolder text-gray-600">KeenThemes CEO</span>
                    </div>
                    <!--end::Author-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Curve bottom-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve bottom-->
        </div>
        <!--end::Statistics Section-->
        <!--begin::Team Section-->
        <div class="py-10 py-lg-20">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                <div class="text-center mb-12">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-dark mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">
                        Our Great Team</h3>
                    <!--end::Title-->
                    <!--begin::Sub-title-->
                    <div class="fs-5 text-muted fw-bold">It’s no doubt that when a development takes longer to
                        complete, additional costs to
                        <br>integrate and test each extra feature creeps up and haunts most of us.
                    </div>
                    <!--end::Sub-title=-->
                </div>
                <!--end::Heading-->
                <!--begin::Slider-->
                <div class="tns tns-default tns-initiazlied">
                    <!--begin::Wrapper-->
                    <div class="tns-outer" id="tns2-ow">
                        <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide
                            <span class="current">4 to 6</span> of 7
                        </div>
                        <div id="tns2-mw" class="tns-ovh">
                            <div class="tns-inner" id="tns2-iw">
                                <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false"
                                    data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000"
                                    data-tns-controls="true" data-tns-nav="false" data-tns-items="1"
                                    data-tns-center="false" data-tns-dots="false"
                                    data-tns-prev-button="#kt_team_slider_prev"
                                    data-tns-next-button="#kt_team_slider_next"
                                    data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}"
                                    class="  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                    id="tns2"
                                    style="transform: translate3d(-20%, 0px, 0px); transition-duration: 0s;">
                                    <div class="text-center tns-item tns-slide-cloned" aria-hidden="true"
                                        tabindex="-1">
                                        <!--begin::Photo-->
                                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                            style="background-image:url('assets/media/avatars/150-5.jpg')"></div>
                                        <!--end::Photo-->
                                        <!--begin::Person-->
                                        <div class="mb-0">
                                            <!--begin::Name-->
                                            <a href="#" class="text-dark fw-bolder text-hover-primary fs-3">Anne
                                                Clarc</a>
                                            <!--end::Name-->
                                            <!--begin::Position-->
                                            <div class="text-muted fs-6 fw-bold mt-1">Project Manager</div>
                                            <!--begin::Position-->
                                        </div>
                                        <!--end::Person-->
                                    </div>
                                    <div class="text-center tns-item tns-slide-cloned" aria-hidden="true"
                                        tabindex="-1">
                                        <!--begin::Photo-->
                                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                            style="background-image:url('assets/media/avatars/150-6.jpg')"></div>
                                        <!--end::Photo-->
                                        <!--begin::Person-->
                                        <div class="mb-0">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary fs-3">Ricky Hunt</a>
                                            <!--end::Name-->
                                            <!--begin::Position-->
                                            <div class="text-muted fs-6 fw-bold mt-1">Art Director</div>
                                            <!--begin::Position-->
                                        </div>
                                        <!--end::Person-->
                                    </div>
                                    <div class="text-center tns-item tns-slide-cloned" aria-hidden="true"
                                        tabindex="-1">
                                        <!--begin::Photo-->
                                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                            style="background-image:url('assets/media/avatars/150-7.jpg')"></div>
                                        <!--end::Photo-->
                                        <!--begin::Person-->
                                        <div class="mb-0">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary fs-3">Alice Wayde</a>
                                            <!--end::Name-->
                                            <!--begin::Position-->
                                            <div class="text-muted fs-6 fw-bold mt-1">Marketing Manager</div>
                                            <!--begin::Position-->
                                        </div>
                                        <!--end::Person-->
                                    </div>
                                    <div class="text-center tns-item tns-slide-cloned tns-slide-active">
                                        <!--begin::Photo-->
                                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                            style="background-image:url('assets/media/avatars/150-8.jpg')"></div>
                                        <!--end::Photo-->
                                        <!--begin::Person-->
                                        <div class="mb-0">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary fs-3">Carles Puyol</a>
                                            <!--end::Name-->
                                            <!--begin::Position-->
                                            <div class="text-muted fs-6 fw-bold mt-1">QA Managers</div>
                                            <!--begin::Position-->
                                        </div>
                                        <!--end::Person-->
                                    </div>
                                    <!--begin::Item-->
                                    <div class="text-center tns-item tns-slide-active" id="tns2-item0">
                                        <!--begin::Photo-->
                                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                            style="background-image:url('assets/media/avatars/150-2.jpg')"></div>
                                        <!--end::Photo-->
                                        <!--begin::Person-->
                                        <div class="mb-0">
                                            <!--begin::Name-->
                                            <a href="#" class="text-dark fw-bolder text-hover-primary fs-3">Paul
                                                Miles</a>
                                            <!--end::Name-->
                                            <!--begin::Position-->
                                            <div class="text-muted fs-6 fw-bold mt-1">Development Lead</div>
                                            <!--begin::Position-->
                                        </div>
                                        <!--end::Person-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="text-center tns-item tns-slide-active" id="tns2-item1">
                                        <!--begin::Photo-->
                                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                            style="background-image:url('assets/media/avatars/150-3.jpg')"></div>
                                        <!--end::Photo-->
                                        <!--begin::Person-->
                                        <div class="mb-0">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary fs-3">Melisa Marcus</a>
                                            <!--end::Name-->
                                            <!--begin::Position-->
                                            <div class="text-muted fs-6 fw-bold mt-1">Creative Director</div>
                                            <!--begin::Position-->
                                        </div>
                                        <!--end::Person-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="text-center tns-item" id="tns2-item2" aria-hidden="true"
                                        tabindex="-1">
                                        <!--begin::Photo-->
                                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                            style="background-image:url('assets/media/avatars/150-4.jpg')"></div>
                                        <!--end::Photo-->
                                        <!--begin::Person-->
                                        <div class="mb-0">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary fs-3">David Nilson</a>
                                            <!--end::Name-->
                                            <!--begin::Position-->
                                            <div class="text-muted fs-6 fw-bold mt-1">Python Expert</div>
                                            <!--begin::Position-->
                                        </div>
                                        <!--end::Person-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="text-center tns-item" id="tns2-item3" aria-hidden="true"
                                        tabindex="-1">
                                        <!--begin::Photo-->
                                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                            style="background-image:url('assets/media/avatars/150-5.jpg')"></div>
                                        <!--end::Photo-->
                                        <!--begin::Person-->
                                        <div class="mb-0">
                                            <!--begin::Name-->
                                            <a href="#" class="text-dark fw-bolder text-hover-primary fs-3">Anne
                                                Clarc</a>
                                            <!--end::Name-->
                                            <!--begin::Position-->
                                            <div class="text-muted fs-6 fw-bold mt-1">Project Manager</div>
                                            <!--begin::Position-->
                                        </div>
                                        <!--end::Person-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="text-center tns-item" id="tns2-item4" aria-hidden="true"
                                        tabindex="-1">
                                        <!--begin::Photo-->
                                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                            style="background-image:url('assets/media/avatars/150-6.jpg')"></div>
                                        <!--end::Photo-->
                                        <!--begin::Person-->
                                        <div class="mb-0">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary fs-3">Ricky Hunt</a>
                                            <!--end::Name-->
                                            <!--begin::Position-->
                                            <div class="text-muted fs-6 fw-bold mt-1">Art Director</div>
                                            <!--begin::Position-->
                                        </div>
                                        <!--end::Person-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="text-center tns-item" id="tns2-item5" aria-hidden="true"
                                        tabindex="-1">
                                        <!--begin::Photo-->
                                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                            style="background-image:url('assets/media/avatars/150-7.jpg')"></div>
                                        <!--end::Photo-->
                                        <!--begin::Person-->
                                        <div class="mb-0">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary fs-3">Alice Wayde</a>
                                            <!--end::Name-->
                                            <!--begin::Position-->
                                            <div class="text-muted fs-6 fw-bold mt-1">Marketing Manager</div>
                                            <!--begin::Position-->
                                        </div>
                                        <!--end::Person-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="text-center tns-item" id="tns2-item6" aria-hidden="true"
                                        tabindex="-1">
                                        <!--begin::Photo-->
                                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                            style="background-image:url('assets/media/avatars/150-8.jpg')"></div>
                                        <!--end::Photo-->
                                        <!--begin::Person-->
                                        <div class="mb-0">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary fs-3">Carles Puyol</a>
                                            <!--end::Name-->
                                            <!--begin::Position-->
                                            <div class="text-muted fs-6 fw-bold mt-1">QA Managers</div>
                                            <!--begin::Position-->
                                        </div>
                                        <!--end::Person-->
                                    </div>
                                    <!--end::Item-->
                                    <div class="text-center tns-item tns-slide-cloned" aria-hidden="true"
                                        tabindex="-1">
                                        <!--begin::Photo-->
                                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                            style="background-image:url('assets/media/avatars/150-2.jpg')"></div>
                                        <!--end::Photo-->
                                        <!--begin::Person-->
                                        <div class="mb-0">
                                            <!--begin::Name-->
                                            <a href="#" class="text-dark fw-bolder text-hover-primary fs-3">Paul
                                                Miles</a>
                                            <!--end::Name-->
                                            <!--begin::Position-->
                                            <div class="text-muted fs-6 fw-bold mt-1">Development Lead</div>
                                            <!--begin::Position-->
                                        </div>
                                        <!--end::Person-->
                                    </div>
                                    <div class="text-center tns-item tns-slide-cloned" aria-hidden="true"
                                        tabindex="-1">
                                        <!--begin::Photo-->
                                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                            style="background-image:url('assets/media/avatars/150-3.jpg')"></div>
                                        <!--end::Photo-->
                                        <!--begin::Person-->
                                        <div class="mb-0">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary fs-3">Melisa Marcus</a>
                                            <!--end::Name-->
                                            <!--begin::Position-->
                                            <div class="text-muted fs-6 fw-bold mt-1">Creative Director</div>
                                            <!--begin::Position-->
                                        </div>
                                        <!--end::Person-->
                                    </div>
                                    <div class="text-center tns-item tns-slide-cloned" aria-hidden="true"
                                        tabindex="-1">
                                        <!--begin::Photo-->
                                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                            style="background-image:url('assets/media/avatars/150-4.jpg')"></div>
                                        <!--end::Photo-->
                                        <!--begin::Person-->
                                        <div class="mb-0">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary fs-3">David Nilson</a>
                                            <!--end::Name-->
                                            <!--begin::Position-->
                                            <div class="text-muted fs-6 fw-bold mt-1">Python Expert</div>
                                            <!--begin::Position-->
                                        </div>
                                        <!--end::Person-->
                                    </div>
                                    <div class="text-center tns-item tns-slide-cloned" aria-hidden="true"
                                        tabindex="-1">
                                        <!--begin::Photo-->
                                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                            style="background-image:url('assets/media/avatars/150-5.jpg')"></div>
                                        <!--end::Photo-->
                                        <!--begin::Person-->
                                        <div class="mb-0">
                                            <!--begin::Name-->
                                            <a href="#" class="text-dark fw-bolder text-hover-primary fs-3">Anne
                                                Clarc</a>
                                            <!--end::Name-->
                                            <!--begin::Position-->
                                            <div class="text-muted fs-6 fw-bold mt-1">Project Manager</div>
                                            <!--begin::Position-->
                                        </div>
                                        <!--end::Person-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Button-->
                    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev"
                        aria-controls="tns2" tabindex="-1" data-controls="prev">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                        <span class="svg-icon svg-icon-3x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z"
                                    fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next"
                        aria-controls="tns2" tabindex="-1" data-controls="next">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                        <span class="svg-icon svg-icon-3x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                    fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Slider-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Team Section-->
        <!--begin::Projects Section-->

        <!--end::Projects Section-->
        <!--begin::Pricing Section-->

        <!--end::Pricing Section-->
        <!--begin::Testimonials Section-->
        <div class="mt-20 mb-n20 position-relative z-index-2">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                <div class="text-center mb-17">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-dark mb-5" id="clients" data-kt-scroll-offset="{default: 125, lg: 150}">
                        What Our Clients Say</h3>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="fs-5 text-muted fw-bold">Save thousands to millions of bucks by using single tool
                        <br>for different amazing and great useful admin
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Row-->
                <div class="row g-lg-10 mb-10 mb-lg-20">
                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <!--begin::Testimonial-->
                        <div
                            class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                            <!--begin::Wrapper-->
                            <div class="mb-7">
                                <!--begin::Rating-->
                                <div class="rating mb-6">
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                </div>
                                <!--end::Rating-->
                                <!--begin::Title-->
                                <div class="fs-2 fw-bolder text-dark mb-3">This is by far the cleanest template
                                    <br>and the most well structured
                                </div>
                                <!--end::Title-->
                                <!--begin::Feedback-->
                                <div class="text-gray-500 fw-bold fs-4">The most well thought out design theme I have
                                    ever used. The codes are up to tandard. The css styles are very clean. In fact the
                                    cleanest and the most up to standard I have ever seen.</div>
                                <!--end::Feedback-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Author-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-circle symbol-50px me-5">
                                    <img src="assets/media/avatars/150-2.jpg" class="" alt="">
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Paul
                                        Miles</a>
                                    <span class="text-muted d-block fw-bold">Development Lead</span>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::Author-->
                        </div>
                        <!--end::Testimonial-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <!--begin::Testimonial-->
                        <div
                            class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                            <!--begin::Wrapper-->
                            <div class="mb-7">
                                <!--begin::Rating-->
                                <div class="rating mb-6">
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                </div>
                                <!--end::Rating-->
                                <!--begin::Title-->
                                <div class="fs-2 fw-bolder text-dark mb-3">This is by far the cleanest template
                                    <br>and the most well structured
                                </div>
                                <!--end::Title-->
                                <!--begin::Feedback-->
                                <div class="text-gray-500 fw-bold fs-4">The most well thought out design theme I have
                                    ever used. The codes are up to tandard. The css styles are very clean. In fact the
                                    cleanest and the most up to standard I have ever seen.</div>
                                <!--end::Feedback-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Author-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-circle symbol-50px me-5">
                                    <img src="assets/media/avatars/150-3.jpg" class="" alt="">
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Janya
                                        Clebert</a>
                                    <span class="text-muted d-block fw-bold">Development Lead</span>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::Author-->
                        </div>
                        <!--end::Testimonial-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <!--begin::Testimonial-->
                        <div
                            class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                            <!--begin::Wrapper-->
                            <div class="mb-7">
                                <!--begin::Rating-->
                                <div class="rating mb-6">
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                </div>
                                <!--end::Rating-->
                                <!--begin::Title-->
                                <div class="fs-2 fw-bolder text-dark mb-3">This is by far the cleanest template
                                    <br>and the most well structured
                                </div>
                                <!--end::Title-->
                                <!--begin::Feedback-->
                                <div class="text-gray-500 fw-bold fs-4">The most well thought out design theme I have
                                    ever used. The codes are up to tandard. The css styles are very clean. In fact the
                                    cleanest and the most up to standard I have ever seen.</div>
                                <!--end::Feedback-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Author-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-circle symbol-50px me-5">
                                    <img src="assets/media/avatars/150-18.jpg" class="" alt="">
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Steave
                                        Brown</a>
                                    <span class="text-muted d-block fw-bold">Development Lead</span>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::Author-->
                        </div>
                        <!--end::Testimonial-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Highlight-->
                <div class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-8 p-lg-12 mb-n5 mb-lg-n13"
                    style="background: linear-gradient(90deg, #20AA3E 0%, #03A588 100%);">
                    <!--begin::Content-->
                    <div class="my-2 me-5">
                        <!--begin::Title-->
                        <div class="fs-1 fs-lg-2qx fw-bolder text-white mb-2"> With Metronic Today,
                            <span class="fw-normal">Speed Up Development!</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="fs-6 fs-lg-5 text-white fw-bold opacity-75">Join over 100,000 Professionals
                            Community to Stay Ahead</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Link-->
                    <a href="https://1.envato.market/EA4JP"
                        class="btn btn-lg btn-outline border-2 btn-outline-white flex-shrink-0 my-2">Purchase on
                        Themeforest</a>
                    <!--end::Link-->
                </div>
                <!--end::Highlight-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Testimonials Section-->
        <!--begin::Footer Section-->
        <div class="mb-0">
            <!--begin::Curve top-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve top-->
            <!--begin::Wrapper-->
            <div class="landing-dark-bg pt-20">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Row-->
                    <div class="row py-10 py-lg-20">
                        <!--begin::Col-->
                        <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                            <!--begin::Block-->
                            <div class="rounded landing-dark-border p-9 mb-10">
                                <!--begin::Title-->
                                <h2 class="text-white">Would you need a Custom License?</h2>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <span class="fw-normal fs-4 text-gray-700">Email us to
                                    <a href="https://keenthemes.com/support"
                                        class="text-white opacity-50 text-hover-primary">support@keenthemes.com</a></span>
                                <!--end::Text-->
                            </div>
                            <!--end::Block-->
                            <!--begin::Block-->
                            <div class="rounded landing-dark-border p-9">
                                <!--begin::Title-->
                                <h2 class="text-white">How About a Custom Project?</h2>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <span class="fw-normal fs-4 text-gray-700">Use Our Custom Development Service.
                                    <a href="../../demo1/dist/pages/profile/overview.html"
                                        class="text-white opacity-50 text-hover-primary">Click to Get a
                                        Quote</a></span>
                                <!--end::Text-->
                            </div>
                            <!--end::Block-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6 ps-lg-16">
                            <!--begin::Navs-->
                            <div class="d-flex justify-content-center">
                                <!--begin::Links-->
                                <div class="d-flex fw-bold flex-column me-20">
                                    <!--begin::Subtitle-->
                                    <h4 class="fw-bolder text-gray-400 mb-6">More for Metronic</h4>
                                    <!--end::Subtitle-->
                                    <!--begin::Link-->
                                    <a href="#"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">FAQ</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">Documentaions</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Video
                                        Tuts</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">Changelog</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#"
                                        class="text-white opacity-50 text-hover-primary fs-5">Tutorials</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Links-->
                                <!--begin::Links-->
                                <div class="d-flex fw-bold flex-column ms-lg-20">
                                    <!--begin::Subtitle-->
                                    <h4 class="fw-bolder text-gray-400 mb-6">Stay Connected</h4>
                                    <!--end::Subtitle-->
                                    <!--begin::Link-->
                                    <a href="#" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2"
                                            alt="">
                                        <span
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/github.svg" class="h-20px me-2"
                                            alt="">
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2"
                                            alt="">
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg"
                                            class="h-20px me-2" alt="">
                                        <span
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">Dribbble</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2"
                                            alt="">
                                        <span
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
                                    </a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Links-->
                            </div>
                            <!--end::Navs-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
                <!--begin::Separator-->
                <div class="landing-dark-separator"></div>
                <!--end::Separator-->
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                        <!--begin::Copyright-->
                        <div class="d-flex align-items-center order-2 order-md-1">
                            <!--begin::Logo-->
                            <a href="../../demo1/dist/landing.html">
                                <img alt="Logo" src="assets/media/logos/logo-landing.svg"
                                    class="h-15px h-md-20px">
                            </a>
                            <!--end::Logo image-->
                            <!--begin::Logo image-->
                            <span class="mx-5 fs-6 fw-bold text-gray-600 pt-1" href="https://keenthemes.com">© 2021
                                Keenthemes Inc.</span>
                            <!--end::Logo image-->
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-bold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
                            <li class="menu-item">
                                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item mx-5">
                                <a href="https://keenthemes.com/support" target="_blank"
                                    class="menu-link px-2">Support</a>
                            </li>
                            <li class="menu-item">
                                <a href="" target="_blank" class="menu-link px-2">Purchase</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Footer Section-->
        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
            <span class="svg-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <rect opacity="0.5" x="13" y="6" width="13" height="2"
                        rx="1" transform="rotate(90 13 6)" fill="black"></rect>
                    <path
                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                        fill="black"></path>
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Scrolltop-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
    <script src="assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="assets/js/custom/landing.js"></script>
    <script src="assets/js/custom/pages/pricing/general.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->


    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>
</body>
<!--end::Body-->

</html>
