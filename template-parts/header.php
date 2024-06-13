<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#be0b01">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <title><?= (isset($meta_title)) ? $meta_title : 'MNA Maquila - Confiabilidad y Excelencia en maquila'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    
    <link href=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css " rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.all.min.js "></script>
    <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.min.css " rel="stylesheet">
    
    <!-- Incluye jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Incluye jQuery Validate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>

    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/main.js"></script>
</head>
<body>
<header class="">
    <div class="container container--info">
        <div class="d-flex">
            <p class="pe-4 mb-0 paragraph-6 poppins-light">
                <svg xmlns="http://www.w3.org/2000/svg" width="18.667" height="10" viewBox="0 0 18.667 14"
                     style="margin-right: 0.3125rem !important;">
                    <path id="Trazado_76" data-name="Trazado 76"
                          d="M1.75,64A1.75,1.75,0,0,0,.7,67.15L8.633,73.1a1.17,1.17,0,0,0,1.4,0l7.933-5.95A1.75,1.75,0,0,0,16.917,64ZM0,68.083v7.583A2.335,2.335,0,0,0,2.333,78h14a2.335,2.335,0,0,0,2.333-2.333V68.083l-7.933,5.95a2.33,2.33,0,0,1-2.8,0Z"
                          transform="translate(0 -64)" fill="#be1407"/>
                </svg>
                <a class="nav-link-default" href="mailto:info@mnamaquila.com">info@mnamaquila.com</a>
            </p>
            <p class="mb-0 paragraph-6 poppins-light">
                <svg xmlns="http://www.w3.org/2000/svg" width="12.031" height="14" viewBox="0 0 12.031 16"
                     style="margin-right: 0.3125rem !important;">
                    <path id="Trazado_77" data-name="Trazado 77"
                          d="M6.758,15.64c1.607-2.011,5.273-6.887,5.273-9.625A6.016,6.016,0,0,0,0,6.016c0,2.738,3.666,7.613,5.273,9.625A.947.947,0,0,0,6.758,15.64ZM6.016,4.01A2.005,2.005,0,1,1,4.01,6.016,2.005,2.005,0,0,1,6.016,4.01Z"
                          fill="#be1407"/>
                </svg>
                <a class="nav-link-default" href="https://maps.app.goo.gl/gu3GnUz18FVE7nwy9" target="_blank">Havre 3020, Narvarte, CP 64830. Monterrey N.L.</a>
            </p>
        </div>

        <div class="d-flex">
            <a class="nav-link-default" href="#">
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="13.673" height="16" viewBox="0 0 13.673 24">
                    <path id="Trazado_79" data-name="Trazado 79"
                          d="M17.094,14.03V24h5.438V14.03h4.055l.844-4.584h-4.9V7.823c0-2.423.952-3.352,3.408-3.352.764,0,1.378.019,1.734.056V.37A16.817,16.817,0,0,0,24.416,0C19.4,0,17.094,2.367,17.094,7.472V9.445H14V14.03Z"
                          transform="translate(-14)" fill="#be1407"/>

                </svg>
            </a>

            <a class="nav-link-default" href="https://www.instagram.com/maquilamna/" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="24.005" height="16" viewBox="0 0 24.005 24">
                    <path id="Trazado_80" data-name="Trazado 80"
                          d="M11.93,37.672a6.153,6.153,0,1,0,6.153,6.153A6.144,6.144,0,0,0,11.93,37.672Zm0,10.154a4,4,0,1,1,4-4,4.008,4.008,0,0,1-4,4Zm7.84-10.405a1.435,1.435,0,1,1-1.435-1.435A1.432,1.432,0,0,1,19.771,37.42Zm4.075,1.457a7.1,7.1,0,0,0-1.939-5.029,7.149,7.149,0,0,0-5.029-1.939c-1.981-.112-7.921-.112-9.9,0a7.139,7.139,0,0,0-5.029,1.933A7.126,7.126,0,0,0,.009,38.871c-.112,1.981-.112,7.921,0,9.9A7.1,7.1,0,0,0,1.948,53.8a7.158,7.158,0,0,0,5.029,1.939c1.981.112,7.921.112,9.9,0A7.1,7.1,0,0,0,21.907,53.8a7.149,7.149,0,0,0,1.939-5.029c.112-1.981.112-7.915,0-9.9ZM21.286,50.9A4.05,4.05,0,0,1,19,53.181c-1.58.627-5.329.482-7.074.482s-5.5.139-7.074-.482A4.05,4.05,0,0,1,2.575,50.9c-.627-1.58-.482-5.329-.482-7.074s-.139-5.5.482-7.074a4.05,4.05,0,0,1,2.281-2.281c1.58-.627,5.329-.482,7.074-.482s5.5-.139,7.074.482a4.05,4.05,0,0,1,2.281,2.281c.627,1.58.482,5.329.482,7.074S21.913,49.325,21.286,50.9Z"
                          transform="translate(0.075 -31.825)" fill="#be1407"/>
                </svg>
            </a>

        </div>

    </div>
    <nav class="navbar navbar-expand-lg bg-red p-0 m-0">
        <div class="container d-flex align-items-center">
            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="/">
                    <img class="d-inline-block align-top" src="../images/logo-mna-maq.png" width="120" height="auto">
                </a>
                <div class="d-flex flex-column text-light border-left d-inline-block d-none d-sm-block">
                    <p class="p-0 m-0 poppins-light" style="font-size: 12px; margin-bottom: 4px !important;">Atención al
                        cliente</p>
                    <p class="poppins-semibold m-0"><a class="nav-link-default" href="tel:8123585074">(812)-358-5074</a></p>
                </div>
            </div>
            <div class="d-flex d-none d-sm-block">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link poppins-medium" aria-current="page" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link poppins-medium" href="#propuesta-de-valor">Propuesta de valor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link poppins-medium" href="#productos">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link poppins-medium m-0" href="#contactanos">Contáctanos</a>
                    </li>
                </ul>
            </div>
            <div class="d-block d-sm-none">
                <svg id="burger" xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="#FFF"
                     class="bi bi-list open-main-nav" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg>
            </div>
        </div>
    </nav>
    <nav class="mobile-nav d-block d-sm-none" id="mobile-nav">
        <div class="d-flex top-actions">
            <div class="me-auto">
                <img src="../images/logo-mna-maq-rojo.png" width="100" height="auto" style="background-color: var(--red)">
            </div>

            <svg id="close-navbar" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512" fill="#9A9A9A">
                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
            </svg>
        </div>

        <ul>
            <li>
                <a href="#servicios" class="">Servicios</a>
            </li>
            <li>
                <a href="#propuesta-de-valor" class="">Propuesta de valor</a>
            </li>
            <li>
                <a href="#productos-mobile" class="">Productos</a>
            </li>
            <li>
                <a href="#contactanos" class="">Contáctanos</a>
            </li>

        </ul>

        <div class="d-flex bottom-actions">
            <div class="social-container">
                <div class="mail">
                    <a href="#" class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="21.063" viewBox="0 0 12 21.063">
                            <path id="Trazado_79" data-name="Trazado 79"
                                  d="M16.715,12.313v8.75h4.772v-8.75h3.558l.74-4.023h-4.3V6.866c0-2.127.835-2.941,2.991-2.941.671,0,1.209.016,1.522.049V.325A14.759,14.759,0,0,0,23.141,0c-4.4,0-6.426,2.077-6.426,6.557V8.289H14v4.023Z"
                                  transform="translate(-14)" fill="#fff"/>
                        </svg>

                    </a>
                </div>

                <div class="phone">
                    <a href="https://www.instagram.com/maquilamna/" class="icon bubble__animation"  target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21.005" height="21" viewBox="0 0 21.005 21">
                            <path id="Trazado_80" data-name="Trazado 80"
                                  d="M10.43,36.941a5.384,5.384,0,1,0,5.384,5.384A5.376,5.376,0,0,0,10.43,36.941Zm0,8.885a3.5,3.5,0,1,1,3.5-3.5,3.507,3.507,0,0,1-3.5,3.5Zm6.86-9.1a1.256,1.256,0,1,1-1.256-1.256A1.253,1.253,0,0,1,17.29,36.721ZM20.856,38a6.215,6.215,0,0,0-1.7-4.4,6.256,6.256,0,0,0-4.4-1.7c-1.734-.1-6.93-.1-8.664,0A6.247,6.247,0,0,0,1.7,33.59a6.235,6.235,0,0,0-1.7,4.4c-.1,1.734-.1,6.93,0,8.664a6.215,6.215,0,0,0,1.7,4.4,6.264,6.264,0,0,0,4.4,1.7c1.734.1,6.93.1,8.664,0a6.215,6.215,0,0,0,4.4-1.7,6.256,6.256,0,0,0,1.7-4.4c.1-1.734.1-6.926,0-8.66Zm-2.24,10.52a3.544,3.544,0,0,1-2,2c-1.382.548-4.663.422-6.19.422s-4.812.122-6.19-.422a3.544,3.544,0,0,1-2-2c-.548-1.382-.422-4.663-.422-6.19s-.122-4.812.422-6.19a3.544,3.544,0,0,1,2-2c1.382-.548,4.663-.422,6.19-.422s4.812-.122,6.19.422a3.544,3.544,0,0,1,2,2c.548,1.382.422,4.662.422,6.19S19.164,47.137,18.616,48.515Z"
                                  transform="translate(0.075 -31.825)" fill="#fff"/>
                        </svg>

                    </a>
                </div>
            </div>
        </div>
        <div class="mobile-footer d-flex flex-column d-inline-block">
            <p class="poppins-light">Atención al cliente</p>
            <p class="poppins-semibold" style="font-size:8px;"><a class="nav-link-default" style="padding: 0;" href="tel:8123585074">(812)-358-5074</a></p>
            <p class="poppins-semibold" style="font-size:8px;"><a class="nav-link-default" style="padding: 0;" href="mailto:info@mnamaquila.com">info@mnamaquila.com</a></p>
            <p class="poppins-medium" style="font-size:8px;"><a class="nav-link-default" href="#">Havre 3020, Narvarte, CP 64830. Monterrey N.L.</a></p>
        </div>
    </nav>
</header>