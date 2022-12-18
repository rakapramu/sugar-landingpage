<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Turn your ideas to live web experiences, About Us, 01, 02, 03, Semarang, Jawa Tengah">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('front') }}/nicepage.css" media="screen">
    <link rel="stylesheet" href="{{ asset('front') }}/Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('front') }}/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('front') }}/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.1.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">







    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
</head>

<body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-xl-mode" data-lang="en">
    <header class="u-clearfix u-header u-sticky u-sticky-7dbe u-header" id="sec-084b">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <a href="https://nicepage.com" class="u-image u-logo u-image-1">
                <img src="{{ asset('front') }}/images/default-logo.png" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                    <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                        href="#">
                        <svg class="u-svg-link" viewBox="0 0 24 24">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px"
                            y="0px" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <rect y="1" width="16" height="2"></rect>
                                <rect y="7" width="16" height="2"></rect>
                                <rect y="13" width="16" height="2"></rect>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="u-nav-container">
                    <ul class="u-nav u-unstyled u-nav-1">
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="Home.html" style="padding: 10px 20px;">Home</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="About.html" style="padding: 10px 20px;">About</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="Contact.html" style="padding: 10px 20px;">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html">Home</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html">About</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="Contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>
    <section class="u-align-center u-clearfix u-section-1" id="carousel_91cd">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout" style="">
                    <div class="u-layout-row" style="">
                        <div
                            class="u-align-left u-container-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-size-xs-60 u-white u-layout-cell-1">
                            <div
                                class="u-container-layout u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1">
                                <h1 class="u-align-left u-custom-font u-font-ubuntu u-text u-text-1">
                                    {{ $data[0]->title }}
                                </h1>
                                <p class="u-align-left u-custom-font u-font-ubuntu u-text u-text-2">
                                    {{ $data[0]->content }}
                                </p>
                                <a href="https://nicepage.com/html-website-builder"
                                    class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-hover-palette-4-base u-palette-3-base u-radius-50 u-btn-2"><span
                                        class="u-icon"><svg class="u-svg-content" viewBox="0 0 513.64 513.64"
                                            x="0px" y="0px" style="width: 1em; height: 1em;">
                                            <path
                                                d="M499.66,376.96l-71.68-71.68c-25.6-25.6-69.12-15.359-79.36,17.92c-7.68,23.041-33.28,35.841-56.32,30.72 c-51.2-12.8-120.32-79.36-133.12-133.12c-7.68-23.041,7.68-48.641,30.72-56.32c33.28-10.24,43.52-53.76,17.92-79.36l-71.68-71.68 c-20.48-17.92-51.2-17.92-69.12,0l-48.64,48.64c-48.64,51.2,5.12,186.88,125.44,307.2c120.32,120.32,256,176.641,307.2,125.44 l48.64-48.64C517.581,425.6,517.581,394.88,499.66,376.96z">
                                            </path>
                                        </svg><img></span>&nbsp;Call now
                                </a>
                            </div>
                        </div>
                        <div class="u-align-center u-container-align-center-lg u-container-align-center-md u-container-align-center-xl u-container-style u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-white u-layout-cell-2"
                            src="">
                            <div class="u-container-layout u-valign-bottom-sm u-valign-middle-lg u-valign-middle-xl u-container-layout-2"
                                src="">
                                <div
                                    class="u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-expanded-width-xs u-gradient u-group u-radius-50 u-shape-round u-group-1">
                                    <div
                                        class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-container-layout-3">
                                        <img class="u-expanded-width-md u-hover-feature u-image u-image-default u-image-1"
                                            src="{{ asset('front') }}/images/portrait-successful-man-having-stubble-posing-with-broad-smile-keeping-arms-folded.png"
                                            alt="" data-image-width="679" data-image-height="1000"
                                            data-animation-name="customAnimationIn" data-animation-duration="1000"
                                            data-animation-direction="" data-animation-out="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About --}}
    <section class="u-align-center u-clearfix u-section-2" id="carousel_44fc">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
                <div class="u-gutter-0 u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <h2 class="u-custom-font u-font-montserrat u-text u-text-1">About Us</h2>
                                <p class="u-custom-font u-font-montserrat u-text u-text-2">
                                    {!! $data[0]->about !!}
                                    <br>
                                    <br>
                                    <span style="font-weight: 700;"> Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore.</span>
                                </p>
                                <a href="https://nicepage.app"
                                    class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-hover-palette-4-base u-palette-3-base u-radius-50 u-btn-2"><span
                                        class="u-icon"><svg class="u-svg-content" viewBox="0 0 513.64 513.64"
                                            x="0px" y="0px" style="width: 1em; height: 1em;">
                                            <path
                                                d="M499.66,376.96l-71.68-71.68c-25.6-25.6-69.12-15.359-79.36,17.92c-7.68,23.041-33.28,35.841-56.32,30.72 c-51.2-12.8-120.32-79.36-133.12-133.12c-7.68-23.041,7.68-48.641,30.72-56.32c33.28-10.24,43.52-53.76,17.92-79.36l-71.68-71.68 c-20.48-17.92-51.2-17.92-69.12,0l-48.64,48.64c-48.64,51.2,5.12,186.88,125.44,307.2c120.32,120.32,256,176.641,307.2,125.44 l48.64-48.64C517.581,425.6,517.581,394.88,499.66,376.96z">
                                            </path>
                                        </svg><img></span>&nbsp;Call now
                                </a>
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-2">
                                <img class="u-image u-image-default u-image-1"
                                    src="{{ asset('front') }}/images/portrait-successful-man-having-stubble-posing-with-broad-smile-keeping-arms-folded.png"
                                    alt="" data-image-width="679" data-image-height="1000"
                                    data-animation-name="fadeIn" data-animation-duration="1000"
                                    data-animation-direction="" data-animation-delay="0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- manfaat --}}
            <h1 class="u-text u-text-default u-title u-text-4">Manfaat</h1>
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div
                        class="u-align-left u-container-style u-custom-item u-list-item u-repeater-item u-shape-rectangle">
                        @foreach ($bahan as $item)
                            <div class="u-container-layout u-similar-container u-container-layout-3">
                                <h2
                                    class="u-custom-font u-font-montserrat u-text u-text-default u-text-palette-2-base u-text-5">
                                    {{ $loop->iteration }}</h2>
                                <h5 class="u-custom-font u-font-montserrat u-text u-text-6">{{ $item->bahan_bakuu }}
                                </h5>
                                <p class="u-text u-text-7"> Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut
                                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Manfaat Section --}}
    <section class="u-align-center u-clearfix u-section-3" id="sec-ad86">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-default u-text-1">Sample Headline</h1>
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                            <div class="u-container-layout u-valign-bottom-xs u-container-layout-1">
                                <img class="u-expanded-height-lg u-expanded-height-md u-expanded-height-sm u-expanded-height-xl u-image u-image-default u-image-1"
                                    src="{{ asset('front') }}/images/portrait-successful-man-having-stubble-posing-with-broad-smile-keeping-arms-folded.png"
                                    alt="" data-image-width="679" data-image-height="1000"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"
                                    data-animation-direction="X">
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                            <div
                                class="u-container-layout u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-container-layout-2">
                                <div class="u-list u-list-1">
                                    <div class="u-repeater u-repeater-1">
                                        <div class="u-container-style u-list-item u-repeater-item">
                                            <div class="u-container-layout u-similar-container u-container-layout-3">
                                                <span class="u-icon u-icon-circle u-text-palette-1-base u-icon-1"><svg
                                                        class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                        viewBox="0 0 515.556 515.556" style="">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#svg-425d"></use>
                                                    </svg><svg class="u-svg-content" viewBox="0 0 515.556 515.556"
                                                        id="svg-425d">
                                                        <path
                                                            d="m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z">
                                                        </path>
                                                    </svg>


                                                </span>
                                                <p class="u-text u-text-default u-text-2">Sample text. Click to select
                                                    the text box.&nbsp;</p>
                                            </div>
                                        </div>
                                        <div class="u-container-style u-list-item u-repeater-item">
                                            <div class="u-container-layout u-similar-container u-container-layout-4">
                                                <span class="u-icon u-icon-circle u-text-palette-1-base u-icon-2"><svg
                                                        class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                        viewBox="0 0 515.556 515.556" style="">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#svg-fafe"></use>
                                                    </svg><svg class="u-svg-content" viewBox="0 0 515.556 515.556"
                                                        id="svg-fafe">
                                                        <path
                                                            d="m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z">
                                                        </path>
                                                    </svg>


                                                </span>
                                                <p class="u-text u-text-default u-text-3">Sample text. Click to select
                                                    the text box.&nbsp;</p>
                                            </div>
                                        </div>
                                        <div class="u-container-style u-list-item u-repeater-item">
                                            <div class="u-container-layout u-similar-container u-container-layout-5">
                                                <span class="u-icon u-icon-circle u-text-palette-1-base u-icon-3"><svg
                                                        class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                        viewBox="0 0 515.556 515.556" style="">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#svg-53ec"></use>
                                                    </svg><svg class="u-svg-content" viewBox="0 0 515.556 515.556"
                                                        id="svg-53ec">
                                                        <path
                                                            d="m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z">
                                                        </path>
                                                    </svg>


                                                </span>
                                                <p class="u-text u-text-default u-text-4">Sample text. Click to select
                                                    the text box. . </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://nicepage.com/web-design"
                                    class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-hover-palette-4-base u-palette-3-base u-radius-50 u-btn-1"><span
                                        class="u-icon"><svg class="u-svg-content" viewBox="0 0 513.64 513.64"
                                            x="0px" y="0px" style="width: 1em; height: 1em;">
                                            <path
                                                d="M499.66,376.96l-71.68-71.68c-25.6-25.6-69.12-15.359-79.36,17.92c-7.68,23.041-33.28,35.841-56.32,30.72 c-51.2-12.8-120.32-79.36-133.12-133.12c-7.68-23.041,7.68-48.641,30.72-56.32c33.28-10.24,43.52-53.76,17.92-79.36l-71.68-71.68 c-20.48-17.92-51.2-17.92-69.12,0l-48.64,48.64c-48.64,51.2,5.12,186.88,125.44,307.2c120.32,120.32,256,176.641,307.2,125.44 l48.64-48.64C517.581,425.6,517.581,394.88,499.66,376.96z">
                                            </path>
                                        </svg><img></span>&nbsp;Call now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-palette-3-base u-section-4"
        id="carousel_ddd6">
        <div class="u-expanded-width u-shape u-shape-rectangle u-white u-shape-1"></div>
        <div
            class="u-align-center u-container-align-center-lg u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-container-style u-group u-shape-rectangle u-group-1">
            <div
                class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs">
                <h2 class="u-align-center u-text u-text-body-color u-text-1"> Our products</h2>
            </div>
        </div>
        <div class="u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
            <div class="u-gallery-inner u-gallery-inner-1">
                <div class="u-effect-fade u-effect-hover-zoom u-gallery-item u-shape-rectangle">
                    <div class="u-back-slide" data-image-width="600" data-image-height="750">
                        <img class="u-back-image u-expanded" src="{{ asset('front') }}/images/rre.jpg">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-1">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                </div>
                <div class="u-effect-fade u-effect-hover-zoom u-gallery-item u-shape-rectangle" data-image-width="600"
                    data-image-height="750">
                    <div class="u-back-slide" data-image-width="700" data-image-height="700">
                        <img class="u-back-image u-expanded" src="{{ asset('front') }}/images/j.jpg">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-2">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                </div>
                <div class="u-effect-fade u-effect-hover-zoom u-gallery-item u-shape-rectangle">
                    <div class="u-back-slide" data-image-width="700" data-image-height="700">
                        <img class="u-back-image u-expanded" src="{{ asset('front') }}/images/trrt.jpg">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-3">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                </div>
                <div class="u-effect-fade u-effect-hover-zoom u-gallery-item u-shape-rectangle">
                    <div class="u-back-slide" data-image-width="700" data-image-height="700">
                        <img class="u-back-image u-expanded" src="{{ asset('front') }}/images/gh.jpg">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-4">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                </div>
                <div class="u-effect-fade u-effect-hover-zoom u-gallery-item u-shape-rectangle">
                    <div class="u-back-slide" data-image-width="700" data-image-height="700">
                        <img class="u-back-image u-expanded" src="{{ asset('front') }}/images/ghghe4.jpg">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-5">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                </div>
                <div class="u-effect-fade u-effect-hover-zoom u-gallery-item u-shape-rectangle">
                    <div class="u-back-slide" data-image-width="700" data-image-height="700">
                        <img class="u-back-image u-expanded" src="{{ asset('front') }}/images/1.jpg">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-6">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                </div>
                <div class="u-effect-fade u-effect-hover-zoom u-gallery-item u-shape-rectangle">
                    <div class="u-back-slide" data-image-width="1920" data-image-height="1080">
                        <img class="u-back-image u-expanded"
                            src="{{ asset('front') }}/images/medium-shot-person-holding-bread.jpg">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-7">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                </div>
                <div class="u-effect-fade u-effect-hover-zoom u-gallery-item u-shape-rectangle">
                    <div class="u-back-slide" data-image-width="626" data-image-height="417">
                        <img class="u-back-image u-expanded"
                            src="{{ asset('front') }}/images/rustic-bread-wood-table-dark-wooden-background_155003-1681.jpg">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-8">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                </div>
                <div class="u-effect-fade u-effect-hover-zoom u-gallery-item u-shape-rectangle">
                    <div class="u-back-slide" data-image-width="1380" data-image-height="920">
                        <img class="u-back-image u-expanded"
                            src="{{ asset('front') }}/images/b1182e8f-cee4-f571-00ff-b553b7f96898.jpg">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-9">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Owner --}}
    <section class="u-align-center u-clearfix u-white u-section-5" id="sec-2612">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div id="carousel-5989" data-interval="3000" data-u-ride="carousel"
                class="u-carousel u-expanded-width-sm u-expanded-width-xs u-slider u-slider-1">
                <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
                    <li data-u-target="#carousel-5989" class="u-active u-grey-30 u-shape-circle" data-u-slide-to="0"
                        style="width: 10px; height: 10px;"></li>
                    <li data-u-target="#carousel-5989" class="u-grey-30 u-shape-circle" data-u-slide-to="1"
                        style="width: 10px; height: 10px;"></li>
                </ol>
                <div class="u-carousel-inner" role="listbox">
                    <div class="u-active u-align-center u-carousel-item u-container-style u-slide">
                        <div class="u-container-layout u-valign-top u-container-layout-1">
                            <div alt="" class="u-image u-image-circle u-image-1" data-image-width="1280"
                                data-image-height="716">
                            </div>
                            <p class="u-large-text u-text u-text-variant u-text-1">"Lorem ipsum dolor sit amet,
                                consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."</p>
                            <h4 class="u-text u-text-default u-text-2">Connor Quinn<br>
                            </h4>
                            <h6 class="u-text u-text-default u-text-3">President, CEO</h6>
                        </div>
                    </div>
                    <div class="u-align-center u-carousel-item u-container-style u-slide">
                        <div class="u-container-layout u-valign-top u-container-layout-2">
                            <div alt="" class="u-image u-image-circle u-image-2" data-image-width="1280"
                                data-image-height="716">
                            </div>
                            <p class="u-large-text u-text u-text-variant u-text-4">"Lorem ipsum dolor sit amet,
                                consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."</p>
                            <h4 class="u-text u-text-default u-text-5"> Jack Alvarez<br>
                            </h4>
                            <h6 class="u-text u-text-default u-text-6">Sales Manager</h6>
                        </div>
                    </div>
                </div>
                <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-hidden-md u-hidden-xs u-spacing-10 u-text-body-color u-carousel-control-1"
                    href="#carousel-5989" role="button" data-u-slide="prev">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 451.847 451.847">
                            <path
                                d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                            </path>
                        </svg>
                    </span>
                    <span class="sr-only">
                        <svg viewBox="0 0 451.847 451.847">
                            <path
                                d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                            </path>
                        </svg>
                    </span>
                </a>
                <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-hidden-md u-hidden-xs u-spacing-10 u-text-body-color u-carousel-control-2"
                    href="#carousel-5989" role="button" data-u-slide="next">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 451.846 451.847">
                            <path
                                d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                            </path>
                        </svg>
                    </span>
                    <span class="sr-only">
                        <svg viewBox="0 0 451.846 451.847">
                            <path
                                d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                            </path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <style data-mode="XXL">
            @media (max-width: 0px) {
                .u-section-5 {
                    background-image: none;
                }

                .u-section-5 .u-sheet-1 {
                    min-height: 579px;
                }

                .u-section-5 .u-slider-1 {
                    min-height: 480px;
                    width: 763px;
                    margin-top: 50px;
                    margin-bottom: 50px;
                    margin-left: auto;
                    margin-right: auto;
                }

                .u-section-5 .u-carousel-indicators-1 {
                    position: absolute;
                    bottom: 10px;
                    width: auto;
                    height: auto;
                }

                .u-section-5 .u-container-layout-1 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                    padding-left: 80px;
                    padding-right: 80px;
                }

                .u-section-5 .u-image-1 {
                    width: 83px;
                    height: 83px;
                    background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJtYW4iIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAyNTYgMjU2IiBzdHlsZT0id2lkdGg6IDI1NnB4OyBoZWlnaHQ6IDI1NnB4OyI+CjxyZWN0IGZpbGw9IiNDNkQ4RTEiIHdpZHRoPSIyNTYiIGhlaWdodD0iMjU2Ii8+CjxwYXRoIGZpbGw9IiM3Rjk2QTYiIGQ9Ik0xNzIuNiw5My40YzExLjYtNDQuNy0xMS4yLTQ4LjYtMTEuNy00OC4xYy0yMi40LTMxLjMtOTAuMy0xNi44LTc3LjQsNDguMWMtMTMuMy0yLjQtMS44LDMxLjYsMy43LDMyLjEKCWMwLDAsMCwwLDAsMGMwLjIsMCwwLjMsMCwwLjUtMC4xYzE0LjQsNDkuNyw2Mi43LDUwLjIsODAuNywwQzE3Mi4zLDEyNy4zLDE4Ni41LDkzLjMsMTcyLjYsOTMuNHoiLz4KPHBhdGggZmlsbD0iIzdGOTZBNiIgZD0iTTIwNS40LDE3Ny45Yy0yNC02LjEtNDMuNS0xOS44LTQzLjUtMTkuOGwtMjAuNiw2NC44bC04LTIyLjhjMTkuNy0yNy41LTMwLjMtMjcuNS0xMC42LDBsLTgsMjIuOEw5NCwxNTguMQoJYzAsMC0xOS41LDEzLjctNDMuNSwxOS44QzMyLjcsMTgyLjUsMzAsMjU2LDMwLDI1NmgxOTZDMjI2LDI1NiwyMjMuMywxODIuNSwyMDUuNCwxNzcuOXoiLz4KPC9zdmc+Cg==");
                    background-position: 50% 50%;
                    margin-top: 0;
                    margin-bottom: 0;
                    margin-left: auto;
                    margin-right: auto;
                }

                .u-section-5 .u-text-1 {
                    margin-top: 20px;
                    margin-left: 0;
                    margin-right: 0;
                    margin-bottom: 0;
                    font-size: 1.25rem;
                }

                .u-section-5 .u-text-2 {
                    font-weight: 700;
                    margin-top: 35px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-bottom: 0;
                }

                .u-section-5 .u-text-3 {
                    font-size: 1rem;
                    font-weight: 400;
                    margin-top: 15px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-bottom: 0;
                }

                .u-section-5 .u-container-layout-2 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                    padding-left: 80px;
                    padding-right: 80px;
                }

                .u-section-5 .u-image-2 {
                    width: 83px;
                    height: 83px;
                    background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJtYW4iIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAyNTYgMjU2IiBzdHlsZT0id2lkdGg6IDI1NnB4OyBoZWlnaHQ6IDI1NnB4OyI+CjxyZWN0IGZpbGw9IiNDNkQ4RTEiIHdpZHRoPSIyNTYiIGhlaWdodD0iMjU2Ii8+CjxwYXRoIGZpbGw9IiM3Rjk2QTYiIGQ9Ik0xNzIuNiw5My40YzExLjYtNDQuNy0xMS4yLTQ4LjYtMTEuNy00OC4xYy0yMi40LTMxLjMtOTAuMy0xNi44LTc3LjQsNDguMWMtMTMuMy0yLjQtMS44LDMxLjYsMy43LDMyLjEKCWMwLDAsMCwwLDAsMGMwLjIsMCwwLjMsMCwwLjUtMC4xYzE0LjQsNDkuNyw2Mi43LDUwLjIsODAuNywwQzE3Mi4zLDEyNy4zLDE4Ni41LDkzLjMsMTcyLjYsOTMuNHoiLz4KPHBhdGggZmlsbD0iIzdGOTZBNiIgZD0iTTIwNS40LDE3Ny45Yy0yNC02LjEtNDMuNS0xOS44LTQzLjUtMTkuOGwtMjAuNiw2NC44bC04LTIyLjhjMTkuNy0yNy41LTMwLjMtMjcuNS0xMC42LDBsLTgsMjIuOEw5NCwxNTguMQoJYzAsMC0xOS41LDEzLjctNDMuNSwxOS44QzMyLjcsMTgyLjUsMzAsMjU2LDMwLDI1NmgxOTZDMjI2LDI1NiwyMjMuMywxODIuNSwyMDUuNCwxNzcuOXoiLz4KPC9zdmc+Cg==");
                    background-position: 50% 50%;
                    margin-top: 0;
                    margin-bottom: 0;
                    margin-left: auto;
                    margin-right: auto;
                }

                .u-section-5 .u-text-4 {
                    margin-top: 20px;
                    margin-left: 0;
                    margin-right: 0;
                    margin-bottom: 0;
                    font-size: 1.25rem;
                }

                .u-section-5 .u-text-5 {
                    font-weight: 700;
                    margin-top: 35px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-bottom: 0;
                }

                .u-section-5 .u-text-6 {
                    font-size: 1rem;
                    font-weight: 400;
                    margin-top: 15px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-bottom: 0;
                }

                .u-section-5 .u-carousel-control-1 {
                    width: 43px;
                    height: 43px;
                    background-image: none;
                }

                .u-section-5 .u-carousel-control-2 {
                    width: 43px;
                    height: 43px;
                    background-image: none;
                    left: auto;
                    position: absolute;
                    right: 0;
                }
            }
        </style>
    </section>

    {{-- Location --}}
    <section class="u-clearfix u-grey-5 u-section-6" id="sec-05a5">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <h2 class="u-text u-text-1">Semarang, Jawa Tengah</h2>
                                <p class="u-text u-text-2">Kauman 123</p>
                                <p class="u-text u-text-3">1 212-736-3100</p>
                                <p class="u-text u-text-4">
                                    <a href="mailto:contacts@esbnyc.com">contacts@esbnyc.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-2">
                                <div class="u-expanded u-grey-10 u-map">
                                    <div class="embed-responsive">
                                        <iframe class="embed-responsive-item"
                                            src="//maps.google.com/maps?output=embed&amp;q=Manhattan&amp;t=m"
                                            data-map="JTdCJTIyYWRkcmVzcyUyMiUzQSUyMk1hbmhhdHRhbiUyMiUyQyUyMnpvb20lMjIlM0FudWxsJTJDJTIydHlwZUlkJTIyJTNBJTIycm9hZCUyMiUyQyUyMmxhbmclMjIlM0FudWxsJTJDJTIyYXBpS2V5JTIyJTNBbnVsbCUyQyUyMm1hcmtlcnMlMjIlM0ElNUIlNUQlN0Q="></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="u-clearfix u-footer u-grey-80" id="sec-601a">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
                <div class="u-gutter-0 u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-align-center-sm u-align-center-xs u-align-left-md u-align-left-xl u-container-style u-layout-cell u-left-cell u-size-20 u-size-30-md u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <!--position-->
                                <div data-position="" class="u-position">
                                    <!--block-->
                                    <div class="u-block">
                                        <div class="u-block-container u-clearfix">
                                            <!--block_header-->
                                            <h5 class="u-block-header u-text">
                                                <!--block_header_content-->Alamat
                                                <!--/block_header_content-->
                                            </h5>
                                            <!--/block_header-->
                                            <!--block_content-->
                                            <div class="u-block-content u-text">
                                                <!--block_content_content--> Block content. Lorem ipsum dolor
                                                sit amet, consectetur adipiscing elit nullam nunc justo sagittis
                                                suscipit ultrices.
                                                <!--/block_content_content-->
                                            </div>
                                            <!--/block_content-->
                                        </div>
                                    </div>
                                    <!--/block-->
                                </div>
                                <!--/position-->
                            </div>
                        </div>
                        <div
                            class="u-align-center-sm u-align-right-md u-container-style u-layout-cell u-size-20 u-size-30-md u-layout-cell-2">
                            <div class="u-container-layout u-valign-middle u-container-layout-2">
                                <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="80"
                                    data-image-height="40">
                                    <img src="{{ asset('front') }}/images/default-logo.png"
                                        class="u-logo-image u-logo-image-1">
                                </a>
                            </div>
                        </div>
                        <div
                            class="u-align-center-sm u-align-center-xs u-align-left-md u-align-right-lg u-align-right-xl u-container-style u-layout-cell u-right-cell u-size-20 u-size-30-md u-layout-cell-3">
                            <div class="u-container-layout u-valign-middle u-container-layout-3">
                                <div class="u-social-icons u-spacing-10 u-social-icons-1">
                                    <a class="u-social-url" title="facebook" target="_blank" href=""><span
                                            class="u-icon u-social-facebook u-social-icon u-icon-1"><svg
                                                class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                viewBox="0 0 112 112" style="">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#svg-7bc3"></use>
                                            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0"
                                                y="0" id="svg-7bc3">
                                                <circle fill="currentColor" cx="56.1" cy="56.1"
                                                    r="55"></circle>
                                                <path fill="#FFFFFF"
                                                    d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z">
                                                </path>
                                            </svg></span>
                                    </a>
                                    <a class="u-social-url" title="twitter" target="_blank" href=""><span
                                            class="u-icon u-social-icon u-social-twitter u-icon-2"><svg
                                                class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                viewBox="0 0 112 112" style="">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#svg-adbd"></use>
                                            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0"
                                                y="0" id="svg-adbd">
                                                <circle fill="currentColor" class="st0" cx="56.1"
                                                    cy="56.1" r="55"></circle>
                                                <path fill="#FFFFFF"
                                                    d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z">
                                                </path>
                                            </svg></span>
                                    </a>
                                    <a class="u-social-url" title="instagram" target="_blank" href=""><span
                                            class="u-icon u-social-icon u-social-instagram u-icon-3"><svg
                                                class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                viewBox="0 0 112 112" style="">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#svg-f20a"></use>
                                            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0"
                                                y="0" id="svg-f20a">
                                                <circle fill="currentColor" cx="56.1" cy="56.1"
                                                    r="55"></circle>
                                                <path fill="#FFFFFF"
                                                    d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z">
                                                </path>
                                                <path fill="#FFFFFF"
                                                    d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z">
                                                </path>
                                                <path fill="#FFFFFF"
                                                    d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z">
                                                </path>
                                            </svg></span>
                                    </a>
                                    <a class="u-social-url" title="linkedin" target="_blank" href=""><span
                                            class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg
                                                class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                viewBox="0 0 112 112" style="">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#svg-8164"></use>
                                            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0"
                                                y="0" id="svg-8164">
                                                <circle fill="currentColor" cx="56.1" cy="56.1"
                                                    r="55"></circle>
                                                <path fill="#FFFFFF"
                                                    d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z">
                                                </path>
                                            </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
