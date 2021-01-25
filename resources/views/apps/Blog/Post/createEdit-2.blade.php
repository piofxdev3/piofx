<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <meta charset="utf-8" />
    <title>Metronic | Dashboard</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{ asset('metronic_assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('metronic_assets/plugins/global/plugins.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metronic_assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metronic_assets/css/style.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{ asset('metronic_assets/media/logos/favicon.ico') }}" />
    <!-----bootstrap links--------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile bg-primary header-mobile-fixed">
        <!--begin::Logo-->
        <a href="index.html">
            <img alt="Logo" src="{{ asset('metronic_assets/media/logos/logo-letter-9.png') }}" class="max-h-30px" />
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
                <span></span>
            </button>
            <button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:metronic_assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path
                                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header flex-column header-fixed">
                    <!--begin::Top-->
                    <div class="header-top">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Left-->
                            <div class="d-none d-lg-flex align-items-center mr-3">
                                <!--begin::Logo-->
                                <a href="index.html" class="mr-20">
                                    <img alt="Logo" src="{{ asset('metronic_assets/media/logos/logo-letter-9.png') }}" class="max-h-35px" />
                                </a>
                                <!--end::Logo-->
                                <!--begin::Tab Navs(for desktop mode)-->
                                <ul class="header-tabs nav align-self-end font-size-lg" role="tablist">
                                    <!--begin::Item-->
                                    <li class="nav-item">
                                        <a href="#" class="nav-link py-4 px-6 active" data-toggle="tab"
                                            data-target="#kt_header_tab_1" role="tab">Home</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mr-3">
                                        <a href="#" class="nav-link py-4 px-6" data-toggle="tab"
                                            data-target="#kt_header_tab_2" role="tab">Reports</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mr-3">
                                        <a href="#" class="nav-link py-4 px-6" data-toggle="tab"
                                            data-target="#kt_header_tab_2" role="tab">Orders</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mr-3">
                                        <a href="#" class="nav-link py-4 px-6" data-toggle="tab"
                                            data-target="#kt_header_tab_2" role="tab">Help Ceter</a>
                                    </li>
                                    <!--end::Item-->
                                </ul>
                                <!--begin::Tab Navs-->
                            </div>
                            <!--end::Left-->
                            <!--begin::Topbar-->
                            <div class="topbar">
                                <!--begin::Search-->
                                <div class="dropdown">
                                    <!--begin::Toggle-->
                                    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                        <div class="btn btn-icon btn-hover-transparent-white btn-lg btn-dropdown mr-1">
                                            <span class="svg-icon svg-icon-xl">
                                                <!--begin::Svg Icon | path:metronic_assets/media/svg/icons/General/Search.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path
                                                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                    </div>
                                    <!--end::Toggle-->
                                    <!--begin::Dropdown-->
                                    <div
                                        class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                                        <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
                                            <!--begin:Form-->
                                            <form method="get" class="quick-search-form">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <span class="svg-icon svg-icon-lg">
                                                                <!--begin::Svg Icon | path:metronic_assets/media/svg/icons/General/Search.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                            fill="#000000" fill-rule="nonzero"
                                                                            opacity="0.3" />
                                                                        <path
                                                                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                            fill="#000000" fill-rule="nonzero" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Search..." />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i
                                                                class="quick-search-close ki ki-close icon-sm text-muted"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--end::Form-->
                                            <!--begin::Scroll-->
                                            <div class="quick-search-wrapper scroll" data-scroll="true"
                                                data-height="325" data-mobile-height="200"></div>
                                            <!--end::Scroll-->
                                        </div>
                                    </div>
                                    <!--end::Dropdown-->
                                </div>
                                <!--end::Search-->

                                <!--begin::Quick Actions-->
                                <div class="dropdown">
                                    <!--begin::Toggle-->
                                    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                        <div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1">
                                            <span class="svg-icon svg-icon-xl">
                                                <!--begin::Svg Icon | path:metronic_assets/media/svg/icons/Media/Equalizer.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <rect fill="#000000" opacity="0.3" x="13" y="4" width="3"
                                                            height="16" rx="1.5" />
                                                        <rect fill="#000000" x="8" y="9" width="3" height="11"
                                                            rx="1.5" />
                                                        <rect fill="#000000" x="18" y="11" width="3" height="9"
                                                            rx="1.5" />
                                                        <rect fill="#000000" x="3" y="13" width="3" height="7"
                                                            rx="1.5" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                    </div>
                                    <!--end::Toggle-->

                                </div>
                                <!--end::Quick Actions-->
                                <!--begin::My Cart-->
                                <div class="dropdown">
                                    <!--begin::Toggle-->
                                    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                        <div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1">
                                            <span class="svg-icon svg-icon-xl">
                                                <!--begin::Svg Icon | path:metronic_assets/media/svg/icons/Shopping/Cart3.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path
                                                            d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z"
                                                            fill="#000000" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                    </div>
                                    <!--end::Toggle-->

                                </div>
                                <!--end::My Cart-->
                                <!--begin::Quick panel-->
                                <div class="topbar-item">
                                    <div class="btn btn-icon btn-hover-transparent-white btn-lg mr-1"
                                        id="kt_quick_panel_toggle">
                                        <span class="svg-icon svg-icon-xl">
                                            <!--begin::Svg Icon | path:metronic_assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                                    <path
                                                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                        fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                </div>
                                <!--end::Quick panel-->
                                <!--begin::Chat-->
                                <div class="topbar-item mr-1">
                                    <div class="btn btn-icon btn-hover-transparent-white btn-clean btn-lg"
                                        data-toggle="modal" data-target="#kt_chat_modal">
                                        <span class="svg-icon svg-icon-xl">
                                            <!--begin::Svg Icon | path:metronic_assets/media/svg/icons/Communication/Group-chat.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                        fill="#000000" />
                                                    <path
                                                        d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                        fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                </div>
                                <!--end::Chat-->
                                <!--begin::User-->
                                <div class="topbar-item">
                                    <div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2"
                                        id="kt_quick_user_toggle">
                                        <div class="d-flex flex-column text-right pr-3">
                                            <span
                                                class="text-white opacity-50 font-weight-bold font-size-sm d-none d-md-inline">Sean</span>
                                            <span
                                                class="text-white font-weight-bolder font-size-sm d-none d-md-inline">UX
                                                Designer</span>
                                        </div>
                                        <span class="symbol symbol-35">
                                            <span
                                                class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30">S</span>
                                        </span>
                                    </div>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Topbar-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Top-->

                </div>
                <!--end::Header-->
                <!-----begin second header------->
                <div class="col-lg-12  pt-3 d-flex justify-content-end align-items-center">
                    <a class="navbar-brand font-size-h5 text-dark" href="#item-1">Save as Draft</a>
                    <button type="button" class="btn btn-outline-primary font-size-h5">Preview</button>
                    <div>
                        <div class="col-lg-12 col-md-12 ">
                            <div class="input-group date border border-primary rounded">
                                <input type="text" class="form-control" readonly="readonly" style="background: white !important;"
                                    id="kt_datepicker_3" placeholder="Schedule" />
                                <div class="input-group-append">
                                    <span class="input-group-text" style="background: white !important;">
                                        <i class="la la-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary font-size-h5">Publish Now</button>
                </div>
                <!-----end second header--------->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" style="padding: 20px 0 0 0 !important;"
                    id="kt_content">
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container-fluid">
                            <!--begin::Dashboard-->
                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-xl-9">
                                    <!--begin::Base Table Widget 3-->
                                    <div class="card card-custom gutter-b card-stretch ">
                                        <!--begin::Body-->
                                        <div class="card-body pt-2 pb-0">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <!--begin::Title-->
                                                <!--begin::Form Group-->
                                                <div class="form-group">
                                                    <label class="font-size-h2 font-weight-bolder text-dark">
                                                        Title
                                                    </label>
                                                    <input type="text"
                                                        class="form-control h-auto bg-light mb-2 py-7 px-6 border-0 rounded-lg font-size-h6"
                                                        name="title" placeholder="Title" value="" />
                                                    <input type="text"
                                                        class="form-control h-auto bg-light py-3 px-6 border-0 rounded-lg font-size-h6"
                                                        name="slug" placeholder="slug" value="" />
                                                </div>
                                                <!--end::Form Group-->
                                                <!--End::Title-->
                                                <!--begin::Forms Widget 2-->
                                                <div class="col-lg-12">
                                                    <!--begin::Card-->
                                                    <div class="card card-custom gutter-b example example-compact">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Classic Demo with images</h3>
                                                            <div class="card-toolbar">
                                                                <div class="example-tools justify-content-center">
                                                                    <span class="example-toggle" data-toggle="tooltip"
                                                                        title="View code"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <textarea name="kt-ckeditor-4" id="kt-ckeditor-3">
                                                           </textarea>
                                                            <!--begin: Code-->
                                                            <div class="example-code mt-10">
                                                                <ul
                                                                    class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" data-toggle="tab"
                                                                            href="#example_code_html3">HTML</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab"
                                                                            href="#example_code_js3">JS</a>
                                                                    </li>
                                                                </ul>
                                                                <span class="example-copy" data-toggle="tooltip"
                                                                    title="Copy code"></span>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane active" id="example_code_html3"
                                                                        role="tabpanel">
                                                                        <div class="example-highlight">
                                                                            <pre style="height:400px">
            <code class="language-html">
                                        &lt;div class="card card-custom"&gt;
                                            &lt;div class="card-header"&gt;
                                                &lt;h3 class="card-title"&gt;
                                                    Classic Demo with images
                                                &lt;/h3&gt;
                                            &lt;/div&gt;
                                            &lt;div class="card-body"&gt;
                                                &lt;textarea name="kt-ckeditor-4" id="kt-ckeditor-3"&gt;
                                                    &lt;h1&gt;Quick and simple CKEditor 5 Integration&lt;/h1&gt;
                                                    &lt;figure class="image"&gt;&lt;img src="&lt;?php echo Page::getMediaPath();?&gt;stock-600x400/img-1.jpg" alt="Metronic CKEditor Demo"/&gt;&lt;/figure&gt;
                                                    Here goes the &lt;a href="#"&gt;Minitial content of the editor&lt;/a&gt;. Lorem Ipsum is simply dummy text of the &lt;em&gt;printing and typesetting&lt;/em&gt; industry.
                                                &lt;/textarea&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                            </code>
            </pre>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="example_code_js3">
                                                                        <div class="example-highlight">
                                                                            <pre style="height:400px">
            <code class="language-js">
                                        // Class definition
            
                                        var KTCkeditor = function () {
                                            // Private functions
                                            var demos = function () {
                                                ClassicEditor
                                                    .create( document.querySelector( '#kt-ckeditor-3' ) )
                                                    .then( editor =&gt; {
                                                        console.log( editor );
                                                    } )
                                                    .catch( error =&gt; {
                                                        console.error( error );
                                                    } );
                                            }
            
                                            return {
                                                // public functions
                                                init: function() {
                                                    demos();
                                                }
                                            };
                                        }();
            
                                        // Initialization
                                        jQuery(document).ready(function() {
                                            KTCkeditor.init();
                                        });
                                        </code>
            </pre>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end: Code-->
                                                        </div>
                                                    </div>
                                                    <!--end::Card-->
                                                </div>
                                                <!--end::Forms Widget 2-->
                                            </div>
                                            <!--end::table-->
                                        </div>
                                        <!--begin::Body-->
                                    </div>
                                    <!--end::Base Table Widget 3-->
                                </div>

                                <div class="col-xl-3">
                                    <!--begin::Base Table Widget 5-->
                                    <div class="card card-custom gutter-b card-stretch">
                                        <!--begin::Body-->
                                        <!--begin::Form-->
                                        <form>
                                            <h3 class="mx-auto">Featured Images</h3>
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <div class="col-lg-12 col-md-9 col-sm-12">
                                                        <div class="dropzone dropzone-default dropzone-primary"
                                                            id="kt_dropzone_2">
                                                            <div class="dropzone-msg dz-message needsclick">
                                                                <h3 class="dropzone-msg-title">Drop
                                                                    files here or click
                                                                    to
                                                                    upload.</h3>
                                                                <span class="dropzone-msg-desc">Upload
                                                                    up to 10
                                                                    files</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mx-auto">
                                                    <button type="reset"
                                                        class="btn btn-light-primary mr-2">Submit</button>
                                                    <button type="reset" class="btn btn-primary">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--end::Form-->
                                        <div class="accordion bg-light" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button font-size-h3" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        Meta Data
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <!--begin::Form Group-->
                                                        <div class="form-group">
                                                            <input type="text"
                                                                class="form-control h-auto bg-white border border-dark mb-2 py-3 px-6 rounded-md font-size-h6"
                                                                name="title" placeholder="Title" value="" />
                                                            <input type="text"
                                                                class="form-control h-auto bg-white border border-dark py-3 px-6  rounded-md font-size-h6"
                                                                name="slug" placeholder="description" value="" />
                                                        </div>
                                                        <!--end::Form Group-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed font-size-h3"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        Categories
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <form action="/action_page.php" method="get">
                                                            <label for="browser" class="font-size-h4 ">Choose
                                                                your
                                                                Category :</label>
                                                            <input list="browsers" name="browser" id="browser"
                                                                class="border-primary">
                                                            <datalist id="browsers">
                                                                <option value="Edge">
                                                                <option value="Firefox">
                                                                <option value="Chrome">
                                                                <option value="Opera">
                                                                <option value="Safari">
                                                            </datalist>
                                                            <input type="submit"
                                                                class="font-size-h5 border bg-light-primary rounded ml-6"
                                                                value="choose">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed font-size-h3"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                        Tags
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <!------begin Tags------>
                                                        <div class="mb-7">
                                                            <div class="mb-3">
                                                                <h3>Tags</h3>
                                                            </div>
                                                            <a class="btn btn-xs btn-secondary mb-1"
                                                                href="#">Business</a>
                                                            <a class="btn btn-xs btn-secondary mb-1"
                                                                href="#">Adventure</a>
                                                            <a class="btn btn-xs btn-secondary mb-1"
                                                                href="#">Community</a>
                                                            <a class="btn btn-xs btn-secondary mb-1"
                                                                href="#">Announcements</a>
                                                            <a class="btn btn-xs btn-secondary mb-1"
                                                                href="#">Tutorials</a>
                                                            <a class="btn btn-xs btn-secondary mb-1"
                                                                href="#">Resources</a>
                                                            <a class="btn btn-xs btn-secondary mb-1"
                                                                href="#">Classic</a>
                                                            <a class="btn btn-xs btn-secondary mb-1"
                                                                href="#">Photography</a>
                                                            <a class="btn btn-xs btn-secondary mb-1"
                                                                href="#">Interview</a>
                                                        </div>
                                                        <!------end Tags-------->
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Base Table Widget 5-->
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->

            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <!--begin::Svg Icon | path:metronic_assets/media/svg/icons/Navigation/Up-2.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                    <path
                        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </div>
    <!--end::Scrolltop-->

    <script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('metronic_assets/plugins/global/plugins.bundle.js?v=7.0.5') }}"></script>
    <script src="{{ asset('metronic_assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5') }}"></script>
    <script src="{{ asset('metronic_assets/js/scripts.bundle.js?v=7.0.5') }}"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('metronic_assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.5') }}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('metronic_assets/js/pages/widgets.js?v=7.0.5') }}"></script>
    <!--end::Page Scripts-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('metronic_assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js?v=7.0.5') }}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('metronic_assets/js/pages/crud/forms/editors/ckeditor-classic.js?v=7.0.5') }}"></script>
    <!--end::Page Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('metronic_assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js?v=7.0.5') }}"></script>
    <!--end::Page Scripts-->

</body>
<!--end::Body-->

</html>