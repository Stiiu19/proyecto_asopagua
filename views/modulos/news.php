<link rel="stylesheet" href="https://assets.jumpseller.com/store/verduleria-online/themes/290816/linear-icon.css?1619244409" />
<style>
    .video-fluid {
        width: 100%;
        height: auto;
    }

    #video_noticia[poster] {
        width: 100%;
        height: auto;
    }
</style>
<script>
    document.title = "Noticias";
</script>

<header class="header">
    <div class="preheader">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="preheader-message">
                        Estamos en facebook como: <a href="<?php echo FACEBOOK;?>" class="text-white" target="_blank"><b>@Asopagua</b></a> ¡Síguenos!
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="logo-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 d-lg-none text-center mb-3">
                    <a href="/" title="Asopagua" class="navbar-brand">
                        <img src="<?php echo URL . VW ?>assets/images/ASOPAGUA.png" class="store-image" alt="Asopagua" />
                    </a>
                </div>
                <div class="col-2 d-lg-none">
                    <button class="btn primary mobile-menu-trigger">
                        <div class="nav-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>
                </div>
                <div class="col-lg-8 col-md-8 d-none d-lg-block">
                    <a href="" title="Asoaciación Asopagua" class="navbar-brand">
                        <span class="logo_text">Logo pendiente</span>
                    </a>
                </div>
                <div class="col-lg-4 col text-right">
                    <div class="header-cart">
                        <span class="cart-size">0</span>
                        <a id="cart-link" href="<?php URL . VW ?>cart" class="btn secondary">
                            <i class="linear-icon icon-0333-bag2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-area">
        <nav id="mobile-menu" aria-labelledby="menu-trigger" class="trsn d-lg-none">
            <ul>
                <li class=" mobile">
                    <a href="inicio" title="inicio">Inicio</a>
                </li>
                <li class=" mobile">
                    <a href="nosotros" title="nosotros">Nosotros</a>
                </li>
                <li class=" mobile">
                    <a href="catalogo-productos" title="productos">Productos</a>
                </li>
                <li class=" mobile">
                    <a href="news" title="news">Noticias</a>
                </li>
                <li class=" mobile">
                    <a href="contacto" title="contacto">Contacto</a>
                </li>
                <li class=" mobile">
                    <a href="mis_pedidos" title="contacto">Mis pedidos</a>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="navbar navbar-expand-lg">
                        <div id="main-menu" class="collapse navbar-collapse">
                            <ul class="navbar-nav mr-auto list-group-horizontal d-table">
                                <li class="nav-item d-table-cell">
                                    <a href="inicio" title="inicio" class=" trsn nav-link d-table-cell align-middle">Inicio</a>
                                </li>
                                <li class="nav-item d-table-cell">
                                    <a href="nosotros" title="nosotros" class=" trsn nav-link d-table-cell align-middle">Nosotros</a>
                                </li>
                                <li class="nav-item d-table-cell">
                                    <a href="catalogo-productos" title="productos" class=" trsn nav-link d-table-cell align-middle">Productos</a>
                                </li>
                                <li class="nav-item d-table-cell">
                                    <a href="news" title="news" class=" trsn nav-link d-table-cell align-middle">Noticias</a>
                                </li>
                                <li class="nav-item d-table-cell">
                                    <a href="contacto" title="Contacto" class=" trsn nav-link d-table-cell align-middle">Contacto</a>
                                </li>
                                <li class="nav-item d-table-cell">
                                    <a href="mis_pedidos" title="Mis pedidos" class=" trsn nav-link d-table-cell align-middle">Mis pedidos</a>
                                </li>
                            </ul>
                            <ul class="social navbar-toggler-right list-inline d-none d-xl-block">
                                <li class="list-inline-item">
                                    <a href="<?php echo FACEBOOK;?>" class="trsn" title="Ir a Facebook" target="_blank">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="<?php echo INSTAGRAM;?>" class="trsn" title="Ir a Instagram" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://api.whatsapp.com/send?phone=<?php echo PHONE;?>" class="trsn" title="WhatsApp" target="_blank">
                                        <i class="fab fa-whatsapp fa-fw"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<main class="container container-main">
    <div class="row mb-3">
        <div class="col-12 mb-3">
            <h2 class="block-header">Noticias</h2>
        </div>
        <div class="col">
            <div class="card border-0">
                <div class="card-header border-0">
                    <video class="video-fluid z-depth-1" id="video_publicitario" loop controls autoplay="true" muted>
                        <source src="<?php echo URL . VW ?>assets/videos/video_publicitario.mp4" type="video/mp4" />
                    </video>
                </div>
                <div class="card-body border-0">
                    <h5 class="card-title mb-3" style="color: #006262; text-transform: uppercase; text-align: center;">Presentación y degustación de los productos que la Asociación ASOPAGUA ofrece a sus clientes</h5>
                    <p class="text-muted" style="float: right; font-size: 14px;">Nota: Para una mejor experiencia active el audio del vídeo</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-main" id="contentNoticesEmpty">
    </div>
    <div class="notices_validation">
        <div class="row">
            <div class="col-12 mb-3">
                <h2 class="block-header">Últimas noticias</h2>
            </div>
            <div class="col-lg-8 col-md-4" id="card_notice_principal">
                <template id="template_noticia">
                    <div class="card border-0">
                        <div class="card-header border-0">
                            <video class="video-fluid z-depth-1" id="video_noticia" controls poster="" data-video="<?php echo URL . 'uploads/noticias/'; ?>">
                                <source src="" type="video/mp4" id="source_video" />
                            </video>
                        </div>
                        <div class="card-body border-0">
                            <h5 class="card-title titulo_noticia"></h5>
                            <p class="text-muted noticia_publisher"></p>
                            <p class="font-italic noticia_desarrollo"></p>
                        </div>
                    </div>
                </template>
            </div>
            <div class="modal" id="modal_video" tabindex="-1" role="dialog" aria-labelledby="Video" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body mb-0 p-0">
                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                <video class="video-fluid z-depth-1" src="" id="video_noticia_modal" controls>
                                    <source src="<?php echo URL . 'uploads/noticias/' ?>" id="video_noticia_url" type="video/mp4" />
                                </video>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <span class="mr-4">Síguenos en: </span>
                            <a href="button" class="btn-floating btn-sm btn-fb">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="button" class="btn-floating btn-sm btn-fb">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <button type="button" class="btn btn-secondary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" id="card_notice_rigºht">
                <template id="right_noticia">
                    <div class="card border-0">
                        <div class="card-header border-0">
                            <img src="" class="img-fluid img_noticia_right d-block" alt="" data-imagen="<?php echo URL . 'uploads/noticias/' ?>">
                        </div>
                        <div class="card-body border-0">
                            <h5 class="card-title title_noticia_right"></h5>
                            <p class="text-muted noticia_publisher_right"></p>
                            <p class="font-italic noticia_desarrollo_right"></p>
                            <button class="btn btn-primary btn-block btn_noticia_right" data-toggle="modal" data-target="#modal_video">Ver vídeo</button>
                        </div>
                    </div>
                </template>
            </div>
        </div>
        <div class="row" id="notices_down">
            <div class="col-12 mb-3">
                <h2 class="block-header">Más noticias</h2>
            </div>
            <template id="template_notice_down">
                <div class="col-lg-6 col-md-12 mb4">
                    <div class="card">
                        <div class="card-header">
                            <img src="" class="img-fluid img_noticia_down" alt="" data-imagen="<?php echo URL . 'uploads/noticias/' ?>">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title title_noticia_down"></h5>
                            <p class="text-muted noticia_publisher_down"></p>
                            <p class="font-italic noticia_desarrollo_down"></p>
                            <button class="btn btn-primary btn-block btn-notice-down" data-toggle="modal" data-target="#modal_video">Ver vídeo</button>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</main>

<div class="my-5 mt-3">
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4" style="background-color:rgb(0, 98, 98)">
            <!-- Left -->
            <div class="me-5">
                <span>Contáctanos desde nuestras cuentas oficiales:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="<?php echo FACEBOOK;?>" target="__blank" class="text-white me-4 mr-3">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="<?php echo INSTAGRAM;?>" class="text-white me-4 mr-3" title="Ir a Instagram" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://api.whatsapp.com/send?phone=<?php echo PHONE;?>" class="text-white me-4 mr-3" title="Ir a Whatsapp" target="_blank">
                    <i class="fab fa-whatsapp fa-fw"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold c-white">Nuestra Asociación</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: rgb(0, 98, 98); height: 2px" />
                        <p class="font-italic c-white">
                            "Nuestra asociación tiene garantía de calidad e higiene de todos los productos lácteos"
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold c-white">Productos</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: rgb(0, 98, 98); height: 2px" />
                        <p>
                            <a href="catalogo-productos" class="text-white">Leche Cruda</a>
                        </p>
                        <p>
                            <a href="catalogo-productos" class="text-white">Yogurt</a>
                        </p>
                        <p>
                            <a href="catalogo-productos" class="text-white">Queso</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold c-white">Secciones</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: rgb(0, 98, 98); height: 2px" />
                        <p>
                            <a href="nosotros" class="text-white">¿Quiénes Somos?</a>
                        </p>
                        <p>
                            <a href="catalogo-productos" class="text-white">Productos</a>
                        </p>
                        <p>
                            <a href="news" class="text-white">Noticias</a>
                        </p>
                        <p>
                            <a href="contacto" class="text-white">Contacto</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold c-white">Contacto</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: rgb(0, 98, 98); height: 2px" />
                        <p class="text-white"><i class="fas fa-home mr-3"></i> Parroquia Guasaganda La Maná, Cotopaxi, Ecuador</p>
                        <p class="text-white text-center" >
                            <a href="mailto:<?php echo DIR_EMAIL;?>?subject=Contacto ASOPAGUA" class="text-white">
                                <i class="fas fa-envelope mr-3"></i>
                                Enviar mensaje
                            </a>
                        </p>
                        <p class="text-white"><i class="fas fa-phone mr-3"></i> + <?php echo PHONE;?></p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="text-white">ASOPAGUA OFICIAL</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</div>

<style>
    #notice-welcome {
        font-weight: bold;
    }

    #modalNoticiaTitle {
        color: white;
        text-transform: uppercase;
        text-align: center;
    }

    .c-white {
        color: white;
    }

    .img-notice {
        width: 250px;
        height: 250px;
    }

    .continueReading {
        cursor: pointer;
    }

    .btn-notice {
        background-color: rgb(0, 98, 98);
        font-size: 14px;
        display: block;
        width: 100%;
    }

    .jumbotron {
        background-image: url("<?php echo URL . VW ?>assets/images/hero.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        height: 400px;
    }

    .bg-notice {
        background-color: rgb(0, 98, 98);
    }

    .card-body h4 {
        color: black;
        text-align: justify;
    }
</style>
<script src="//ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script type="text/javascript">
    WebFont.load({
        google: {
            families: ["Source Sans Pro:300,400,500,600,700,800", "Open Sans:300,400,500,600,700,800",
                "Source Sans Pro:300,400,500,600,700,800"
            ]
        }
    });
</script>
<link rel="stylesheet" href="<?php echo URL.VW . 'assets/css/estilos_generales.css'?>">
<script src="<?php echo URL . VW; ?>assets/js/news.js"></script>
</body>