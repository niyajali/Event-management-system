<!--
Page Name: Enhanced Teaching
Author: Sk Niyaj Ali
Website: http://www.skniyajali.co.in/
Contact: niyaj320@gmail.com
Facebook : https://www.facebook.com/skniyajali7/
Instagram : https://www.instagram.com/_niyajali/
Twitter : https://twitter.com/skniyajali1
Behance.net : https://www.behance.net/skniyajali/
Codepen.io : https://codepen.io/skniyajali/
Creativemarket : https://creativemarket.com/users/skniyajali
Medium : https://medium.com/@skniyajali
Portfolio : https://skniyajali.myportfolio.com/
Vimeo : https://vimeo.com/skniyajali/
Etsy : https://www.etsy.com/in-en/people/esgrwk5wckeq57ef
YouTube : https://www.youtube.com/channel/UCjUaGdLeQBLtB_2zvakJ-6A
Pinterest : https://in.pinterest.com/skniyajali/
Thumblr : https://skniyajali2.tumblr.com/
Github : https://github.com/niyaj320/
Dribbble : https://dribbble.com/skniyajali/
Flickr : https://www.flickr.com/people/skniyajali/
Figma : https://www.figma.com/@skniyajali
LinkedIn : https://www.linkedin.com/in/sk-niyaj-ali-373a94131/
Society6 : https://society6.com/skniyajali
Website : https://skniyaj.blogspot.com/?m=1
Hackaday.io : https://hackaday.io/niyaj320

License: You must have a valid license only from Sk Niyaj Ali. in order to legally use the theme for your project.
-->
<?php

require_once 'core/init.php';
require 'includes/function.php';

/*
if (!Session::exists('et_admin')) {
   
    if (!$et_username = Input::get('et_admin')) {
        //Redirect::to('../index.php');
        $user = new User($et_username);
        $data = $user->data();
    } else {
        $user = new User($et_username);

        if (!$user->exists()) {
            //Redirect::to(404);
            $data = $user->data();
        } else {
            $data = $user->data();

?>
*/
?>
<?php
if (!$ett_hash = Input::get('ett_teacher_hash')) {
    //Redirect::to('../index.php');
} else {
    $ett_teacher = new Teacher($ett_hash);

    if (!$ett_teacher->exists()) {
        Redirect::to('../index.php');
    } else {
        $data = $ett_teacher->data();

?>

        <!DOCTYPE html>

        <html lang="en">
        <!--begin::Head-->

        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

        <head>
            <!-- Google Tag Manager -->
            <script>
                (function(w, d, s, l, i) {
                    w[l] = w[l] || [];
                    w[l].push({
                        'gtm.start': new Date().getTime(),
                        event: 'gtm.js'
                    });
                    var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s),
                        dl = l != 'dataLayer' ? '&l=' + l : '';
                    j.async = true;
                    j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                    f.parentNode.insertBefore(j, f);
                })(window, document, 'script', 'dataLayer', 'GTM-P5GRGMQ');
            </script>
            <!-- End Google Tag Manager -->
            <meta charset="utf-8" />
            <title>Teacher Profile| Enhanced Teaching</title>
            <meta name="description" content="View all Teachers" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="robots" content="noindex, nofollow">
            <link rel="canonical" href="#" />
            <!--begin::Fonts-->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
            <!--end::Fonts-->
            <!--begin::Page Vendors Styles(used by this page)-->
            <link href="../../theme/plugins/custom/datatables/datatables.bundlec7e5.css?v=7.1.2" rel="stylesheet" type="text/css">
            <link href="../../theme/plugins/custom/fullcalendar/fullcalendar.bundlec7e5.css?v=7.1.1" rel="stylesheet" type="text/css" />
            <!--end::Page Vendors Styles-->
            <!--begin::Global Theme Styles(used by all pages)-->
            <link href="../../theme/plugins/global/plugins.bundlec7e5.css?v=7.1.1" rel="stylesheet" type="text/css" />
            <link href="../../theme/plugins/custom/prismjs/prismjs.bundlec7e5.css?v=7.1.1" rel="stylesheet" type="text/css" />
            <link href="../../theme/css/style.bundlec7e5.css?v=7.1.1" rel="stylesheet" type="text/css" />
            <!--end::Global Theme Styles-->
            <!--begin::Layout Themes(used by all pages)-->
            <!--end::Layout Themes-->
            <link rel="shortcut icon" href="../../theme/media/logos/favicon.ico" />
            <!--begin::Page Custom Styles(used by this page)-->
            <link href="../../theme/css/pages/wizard/wizard-4c7e5.css?v=7.1.1" rel="stylesheet" type="text/css" />
            <!--end::Page Custom Styles-->

        </head>
        <!--end::Head-->
        <!--begin::Body-->

        <body id="kt_body" class="header-fixed header-mobile-fixed page-loading sidebar-enabled">
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P5GRGMQ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
            <!--begin::Main-->
            <?php require('../aside.php'); ?>
            <!--begin::Wrapper-->
            <div class="d-flex flex-column-fluid flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header header-fixed">
                    <!--begin::Header Wrapper-->
                    <div class="header-wrapper rounded-top-xl d-flex flex-grow-1 align-items-center">
                        <!--begin::Container-->
                        <div class="container-fluid d-flex align-items-center justify-content-end justify-content-lg-between flex-wrap">
                            <!--begin::Menu Wrapper-->
                            <div class="header-menu-wrapper header-menu-wrapper-left py-lg-5" id="kt_header_menu_wrapper">
                                <!--begin::Menu-->
                                <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                                    <!--begin::Nav-->
                                    <ul class="menu-nav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="../index.php" class="menu-link">
                                                <span class="menu-text">Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="menu-item menu-item-active menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                                            <a href="javascript:;" class="menu-link menu-toggle">
                                                <span class="menu-text">Teacher</span>
                                                <span class="menu-desc"></span>
                                                <i class="menu-arrow"></i>
                                            </a>
                                            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                                                <ul class="menu-subnav">
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="index.php" class="menu-link">
                                                            <span class="svg-icon menu-icon svg-icon-primary svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                                                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <span class="menu-text">Dashboard</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item menu-item-active" aria-haspopup="true">
                                                        <a href="ett_add.php" class="menu-link">
                                                            <span class="svg-icon menu-icon svg-icon-primary svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <span class="menu-text">Add Teacher</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="ett_edit.php" class="menu-link">
                                                            <span class="svg-icon menu-icon svg-icon-primary svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) " />
                                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <span class="menu-text">Update Teacher</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="ett_view.php" class="menu-link">
                                                            <span class="svg-icon menu-icon svg-icon-primary svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path d="M10,4 L21,4 C21.5522847,4 22,4.44771525 22,5 L22,7 C22,7.55228475 21.5522847,8 21,8 L10,8 C9.44771525,8 9,7.55228475 9,7 L9,5 C9,4.44771525 9.44771525,4 10,4 Z M10,10 L21,10 C21.5522847,10 22,10.4477153 22,11 L22,13 C22,13.5522847 21.5522847,14 21,14 L10,14 C9.44771525,14 9,13.5522847 9,13 L9,11 C9,10.4477153 9.44771525,10 10,10 Z M10,16 L21,16 C21.5522847,16 22,16.4477153 22,17 L22,19 C22,19.5522847 21.5522847,20 21,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,17 C9,16.4477153 9.44771525,16 10,16 Z" fill="#000000" />
                                                                        <rect fill="#000000" opacity="0.3" x="2" y="4" width="5" height="16" rx="1" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon--></span>
                                                            <span class="menu-text">View Teacher</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                                            <a href="javascript:;" class="menu-link menu-toggle">
                                                <span class="menu-text">Student</span>
                                                <span class="menu-desc"></span>
                                                <i class="menu-arrow"></i>
                                            </a>
                                            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                                                <ul class="menu-subnav">
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="../et_student/index.php" class="menu-link">
                                                            <span class="svg-icon menu-icon svg-icon-primary svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                                                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <span class="menu-text">Dashboard</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="../et_student/ets_add.php" class="menu-link">
                                                            <span class="svg-icon menu-icon svg-icon-primary svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <span class="menu-text">Add Student</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="../et_student/ets_edit.php" class="menu-link">
                                                            <span class="svg-icon menu-icon svg-icon-primary svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) " />
                                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <span class="menu-text">Update Student</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="../et_student/ets_view.php" class="menu-link">
                                                            <span class="svg-icon menu-icon svg-icon-primary svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path d="M10,4 L21,4 C21.5522847,4 22,4.44771525 22,5 L22,7 C22,7.55228475 21.5522847,8 21,8 L10,8 C9.44771525,8 9,7.55228475 9,7 L9,5 C9,4.44771525 9.44771525,4 10,4 Z M10,10 L21,10 C21.5522847,10 22,10.4477153 22,11 L22,13 C22,13.5522847 21.5522847,14 21,14 L10,14 C9.44771525,14 9,13.5522847 9,13 L9,11 C9,10.4477153 9.44771525,10 10,10 Z M10,16 L21,16 C21.5522847,16 22,16.4477153 22,17 L22,19 C22,19.5522847 21.5522847,20 21,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,17 C9,16.4477153 9.44771525,16 10,16 Z" fill="#000000" />
                                                                        <rect fill="#000000" opacity="0.3" x="2" y="4" width="5" height="16" rx="1" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon--></span>
                                                            <span class="menu-text">View Student</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                    <!--end::Nav-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Menu Wrapper-->
                            <!--begin::Toolbar-->
                            <div class="d-flex">
                                <!--begin::Desktop Search-->
                                <div class="quick-search quick-search-inline flex-grow-1" id="kt_quick_search_inline">
                                    <!--begin::Form-->
                                    <form method="get" class="quick-search-form">
                                        <div class="input-group rounded bg-light">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <span class="svg-icon svg-icon-lg">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo6/dist/assets/media/svg/icons/General/Search.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control h-40px" placeholder="Search..." />
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                    <!--end::Form-->
                                    <!--begin::Search Toggle-->
                                    <div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,1px"></div>
                                    <!--end::Search Toggle-->
                                    <!--begin::Dropdown-->
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-anim-up">
                                        <div class="quick-search-wrapper scroll" data-scroll="true" data-height="350" data-mobile-height="200"></div>
                                    </div>
                                    <!--end::Dropdown-->
                                </div>
                                <!--end::Desktop Search-->
                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                    <a href="#" class="btn btn-icon btn-light-info ml-3 h-40px w-40px flex-shrink-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="svg-icon svg-icon-lg">
                                            <!--begin::Svg Icon | path:/metronic/theme/html/demo6/dist/assets/media/svg/icons/Media/Equalizer.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
                                                    <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                                                    <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                                                    <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover py-5">
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-drop"></i>
                                                    </span>
                                                    <span class="navi-text">New Group</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-list-3"></i>
                                                    </span>
                                                    <span class="navi-text">Contacts</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="navi-text">Groups</span>
                                                    <span class="navi-link-badge">
                                                        <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-bell-2"></i>
                                                    </span>
                                                    <span class="navi-text">Calls</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-gear"></i>
                                                    </span>
                                                    <span class="navi-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="navi-separator my-3"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-magnifier-tool"></i>
                                                    </span>
                                                    <span class="navi-text">Help</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-bell-2"></i>
                                                    </span>
                                                    <span class="navi-text">Privacy</span>
                                                    <span class="navi-link-badge">
                                                        <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->
                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="More links" data-placement="left">
                                    <a href="#" class="btn btn-icon btn-light-danger ml-3 h-40px w-40px flex-shrink-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="svg-icon svg-icon-lg">
                                            <!--begin::Svg Icon | path:/metronic/theme/html/demo6/dist/assets/media/svg/icons/Layout/Layout-vertical.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <rect fill="#000000" x="5" y="4" width="6" height="16" rx="1.5" />
                                                    <rect fill="#000000" opacity="0.3" x="13" y="4" width="6" height="16" rx="1.5" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer py-4">
                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header Wrapper-->
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
                    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
                        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center flex-wrap mr-1">
                                <!--begin::Mobile Toggle-->
                                <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
                                    <span></span>
                                </button>
                                <!--end::Mobile Toggle-->
                                <!--begin::Page Heading-->
                                <div class="d-flex align-items-baseline flex-wrap mr-5">
                                    <!--begin::Page Title-->
                                    <h5 class="text-dark font-weight-bold my-1 mr-5">Enhanced Teaching</h5>
                                    <!--end::Page Title-->
                                    <!--begin::Breadcrumb-->
                                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                        <li class="breadcrumb-item">
                                            <a href="#" class="text-muted">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#" class="text-muted">Teacher</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#" class="text-muted">Profile</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#" class="text-muted">Account Settings</a>
                                        </li>
                                    </ul>
                                    <!--end::Breadcrumb-->
                                </div>
                                <!--end::Page Heading-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Toolbar-->
                            <div class="d-flex align-items-center">
                                <!--begin::Actions-->
                                <a href="#" class="btn btn-light-primary font-weight-bolder btn-sm">Actions</a>
                                <!--end::Actions-->
                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                    <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="svg-icon svg-icon-success svg-icon-2x">
                                            <!--begin::Svg Icon | path:/metronic/theme/html/demo6/dist/assets/media/svg/icons/Files/File-plus.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 m-0">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer py-4">
                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                    </div>
                    <!--end::Subheader-->
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container-fluid">
                            <!--begin::Profile Email Settings-->
                            <div class="d-flex flex-row">
                                <!--begin::Aside-->
                                <div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
                                    <!--begin::Profile Card-->
                                    <div class="card card-custom card-stretch" id="profile_div">
                                        <!--begin::Body-->
                                        <div class="card-body pt-4">
                                            <!--begin::Toolbar-->
                                            <div class="d-flex justify-content-end">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover py-5">
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-drop"></i>
                                                                    </span>
                                                                    <span class="navi-text">New
                                                                        Group</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-list-3"></i>
                                                                    </span>
                                                                    <span class="navi-text">Contacts</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-rocket-1"></i>
                                                                    </span>
                                                                    <span class="navi-text">Groups</span>
                                                                    <span class="navi-link-badge">
                                                                        <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-bell-2"></i>
                                                                    </span>
                                                                    <span class="navi-text">Calls</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-gear"></i>
                                                                    </span>
                                                                    <span class="navi-text">Settings</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator my-3">
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-magnifier-tool"></i>
                                                                    </span>
                                                                    <span class="navi-text">Help</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-bell-2"></i>
                                                                    </span>
                                                                    <span class="navi-text">Privacy</span>
                                                                    <span class="navi-link-badge">
                                                                        <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Toolbar-->
                                            <!--begin::User-->
                                            <div class="d-flex align-items-center">
                                                <?php if ($ett_teacher->data()->ett_image) { ?>
                                                    <div class="symbol mr-5 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                                        <div class="symbol symbol-60">
                                                            <img src="data:image/png;base64,<?php echo base64_encode($ett_teacher->data()->ett_image); ?>" alt="<?php echo escape(convert_string('decrypt', $ett_teacher->data()->ett_name)); ?> image">
                                                        </div>
                                                        <i class="symbol-badge bg-success"></i>
                                                    </div>
                                                <?php
                                                } else {
                                                ?>
                                                    <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                                        <div class=" symbol-label font-size-auto">
                                                            
                                                        </div>
                                                        <i class="symbol-badge bg-success"></i>
                                                    </div>
                                                <?php } ?>
                                                <div>
                                                    <a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary"><?php echo escape(convert_string('decrypt', $ett_teacher->data()->ett_name)); ?></a>
                                                    <div class="text-muted">
                                                        *Application Developer
                                                    </div>
                                                    <div class="mt-2">
                                                        <a href="#" class="btn btn-sm btn-primary font-weight-bold mr-2 py-2 px-3 px-xxl-5 my-1">Chat</a>
                                                        <a href="#" class="btn btn-sm btn-success font-weight-bold py-2 px-3 px-xxl-5 my-1">Follow</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Contact-->
                                            <div class="py-9">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="font-weight-bold mr-2">Email:</span>
                                                    <a href="#" class="text-muted text-hover-primary"><?php echo escape(convert_string('decrypt', $ett_teacher->data()->ett_email)); ?></a>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="font-weight-bold mr-2">Phone:</span>
                                                    <span class="text-muted"><?php echo escape(convert_string('decrypt', $ett_teacher->data()->ett_phone)); ?></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="font-weight-bold mr-2">Location:</span>
                                                    <span class="text-muted">*Location</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="font-weight-bold mr-2">Joined
                                                        at:</span>
                                                    <span class="text-muted"><?php echo escape($ett_teacher->data()->ett_joined_at); ?></span>
                                                </div>
                                            </div>
                                            <!--end::Contact-->
                                            <!--begin::Nav-->
                                            <div class="navi navi-bold navi-hover navi-active navi-link-rounded">
                                                <div class="navi-item mb-2">
                                                    <a href="index.php?ett_teacher_hash=<?php echo escape($ett_teacher->data()->ett_hash); ?>&ett_admin=admin" class="navi-link py-4 ">
                                                        <span class="navi-icon mr-2">
                                                            <span class="svg-icon">
                                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo6/dist/assets/media/svg/icons/Design/Layers.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                                                        <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </span>
                                                        <span class="navi-text font-size-lg">Profile
                                                            Overview</span>
                                                    </a>
                                                </div>
                                                <div class="navi-item mb-2">
                                                    <a href="ett_personal-information.php?ett_teacher_hash=<?php echo escape($ett_teacher->data()->ett_hash); ?>&ett_admin=admin" class="navi-link py-4">
                                                        <span class="navi-icon mr-2">
                                                            <span class="svg-icon">
                                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo6/dist/assets/media/svg/icons/General/User.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </span>
                                                        <span class="navi-text font-size-lg">Personal
                                                            Information</span>
                                                    </a>
                                                </div>
                                                <div class="navi-item mb-2">
                                                    <a href="ett_account-information.php?ett_teacher_hash=<?php echo escape($ett_teacher->data()->ett_hash); ?>&ett_admin=admin" class="navi-link py-4">
                                                        <span class="navi-icon mr-2">
                                                            <span class="svg-icon">
                                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo6/dist/assets/media/svg/icons/Code/Compiling.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
                                                                        <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </span>
                                                        <span class="navi-text font-size-lg">Account
                                                            Information</span>
                                                    </a>
                                                </div>
                                                <div class="navi-item mb-2">
                                                    <a href="ett_account-settings.php?ett_teacher_hash=<?php echo escape($ett_teacher->data()->ett_hash); ?>&ett_admin=admin" class="navi-link py-4 active">
                                                        <span class="navi-icon mr-2">
                                                            <span class="svg-icon">
                                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo6/dist/assets/media/svg/icons/Communication/Mail-opened.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3" />
                                                                        <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </span>
                                                        <span class="navi-text font-size-lg">Account
                                                            settings</span>
                                                    </a>
                                                </div>
                                                <div class="navi-item mb-2">
                                                    <a href="ett_teacher-courses.php?ett_teacher_hash=<?php echo escape($ett_teacher->data()->ett_hash); ?>&ett_admin=admin" class="navi-link py-4" data-toggle="tooltip" title="Create Courses..." data-placement="right">
                                                        <span class="navi-icon mr-2">
                                                            <span class="svg-icon">
                                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo6/dist/assets/media/svg/icons/Layout/Layout-top-panel-6.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <rect fill="#000000" x="2" y="5" width="19" height="4" rx="1" />
                                                                        <rect fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </span>
                                                        <span class="navi-text font-size-lg">Teacher Courses</span>
                                                    </a>
                                                </div>
                                                <div class="navi-item mb-2">
                                                    <a href="ett_teacher-category.php?ett_teacher_hash=<?php echo escape($ett_teacher->data()->ett_hash); ?>&ett_admin=admin" class="navi-link py-4" data-toggle="tooltip" title="Coming soon..." data-placement="right">
                                                        <span class="navi-icon mr-2">
                                                            <span class="svg-icon">
                                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo6/dist/assets/media/svg/icons/Files/File.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                        <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1" />
                                                                        <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </span>
                                                        <span class="navi-text font-size-lg">Category</span>
                                                        <span class="navi-label">
                                                            <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="navi-item mb-2">
                                                    <a href="ett_teacher-student.php?ett_teacher_hash=<?php echo escape($ett_teacher->data()->ett_hash); ?>&ett_admin=admin" class="navi-link py-4" data-toggle="tooltip" title="Coming soon..." data-placement="right">
                                                        <span class="navi-icon mr-2">
                                                            <span class="svg-icon">
                                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo6/dist/assets/media/svg/icons/Text/Article.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
                                                                        <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </span>
                                                        <span class="navi-text">Student</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--end::Nav-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Profile Card-->
                                </div>
                                <!--end::Aside-->
                                <!--begin::Content-->
                                <div class="flex-row-fluid ml-lg-6">
                                    <!--begin::Card-->
                                    <div class="card card-custom">
                                        <!--begin::Header-->
                                        <div class="card-header py-3">
                                            <div class="card-title align-items-start flex-column">
                                                <h3 class="card-label font-weight-bolder text-dark">Account Settings</h3>
                                                <span class="text-muted font-weight-bold font-size-sm mt-1">Change teacher account settings</span>
                                            </div>
                                            <div class="card-toolbar">
                                                <button type="reset" class="btn btn-success mr-2">Save Changes</button>
                                                <button type="reset" class="btn btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Form-->
                                        <form class="form">
                                            <div class="card-body">
                                                <div class="row">
                                                    <label class="col-xl-3"></label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <h5 class="font-weight-bold mb-6">Setup Email Notification:</h5>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">Email Notification</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <span class="switch switch-sm">
                                                            <label>
                                                                <input type="checkbox" checked="checked" name="email_notification_1" />
                                                                <span></span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">Send Copy To Personal Email</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <span class="switch switch-sm">
                                                            <label>
                                                                <input type="checkbox" name="email_notification_2" />
                                                                <span></span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="separator separator-dashed my-10"></div>
                                                <div class="row">
                                                    <label class="col-xl-3"></label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <h5 class="font-weight-bold mb-6">Activity Related Emails:</h5>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">When To Email</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="checkbox-list">
                                                            <label class="checkbox">
                                                                <input type="checkbox" />
                                                                <span></span>You have new notifications</label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" />
                                                                <span></span>You're sent a direct message</label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" checked="checked" />
                                                                <span></span>Someone adds you as a connection</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">When To Escalate Emails</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="checkbox-list">
                                                            <label class="checkbox checkbox-primary">
                                                                <input type="checkbox" />
                                                                <span></span>Upon new order</label>
                                                            <label class="checkbox checkbox-primary">
                                                                <input type="checkbox" />
                                                                <span></span>New membership approval</label>
                                                            <label class="checkbox checkbox-primary">
                                                                <input type="checkbox" checked="checked" />
                                                                <span></span>Member registration</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="separator separator-dashed my-10"></div>
                                                <div class="row">
                                                    <label class="col-xl-3"></label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <h5 class="font-weight-bold mb-6">Updates From Keenthemes:</h5>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">Email You With</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="checkbox-list">
                                                            <label class="checkbox">
                                                                <input type="checkbox" />
                                                                <span></span>News about Keenthemes products and feature updates</label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" />
                                                                <span></span>Tips on getting more out of Keen</label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" checked="checked" />
                                                                <span></span>Things you missed since you last logged into Keen</label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" checked="checked" />
                                                                <span></span>News about Metronic on partner products and other services</label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" checked="checked" />
                                                                <span></span>Tips on Metronic business products</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Profile Email Settings-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->
                <?php require('footer.php'); ?>
                <script src="../../theme/js/pages/widgetsc7e5.js?v=7.1.1"></script>
                <script src="../../theme/js/pages/custom/profile/profilec7e5.js?v=7.1.1"></script>

        </body>
        <!--end::Body-->


        </html>

<?php
    }
}
/*
        }
    }
} else {
    Redirect::to('../../../index.php');
}
*/
?>