<link rel="stylesheet" href="https://assets.jumpseller.com/store/verduleria-online/themes/290816/linear-icon.css?1619244409" />
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
<div class="container container-main">
    <div class="row d-flex justify-content-center align-items-center"">
        <div class="col-md-10" id="targetDescriptionPedido">
            <div class="card">
                <div class="card-header" style="background-color: #003333;">
                    <h2 class="text-white text-center">Gracias por preferirnos</h2>
                </div>
                <div class="card-body text-center">
                    <h4>Su código de pedido es: </h4>
                    <strong id="nameCode" style="font-size: 40px;"></strong>
                    <p style="font-size: 20px!important;">Su pedido se ha procesado con éxito. A continuación se enviará un correo electrónico a <strong id="emailAddress"></strong> con el detalle de su pedido. Deberá completar el proceso de pago y de aviso en un periodo de # dias, caso contrario su pedido será cancelado y eliminado de nuestro sistema.</p>
                    <p style="font-size: 20px!important;">El total de su pedido es</p>
                    <strong id="totalPedido" style="font-size: 25px;"></strong>

                    <div class="form-group mt-3">
                        <button class="btn" id="btnRegresar"style="background-color: #003333;">Regresar a la tienda</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
<script>    
    $().ready(function(){
        $("#targetDescriptionPedido").hide();
        if(localStorage.getItem("detalle_cliente_pedido")){
            $("#targetDescriptionPedido").show();
            let detalles = JSON.parse(localStorage.getItem("detalle_cliente_pedido"));
            console.log(detalles);  
            $("#nameCode").html(detalles.codigo)
            $("#emailAddress").html(detalles.email)
            $("#totalPedido").html("$ " + detalles.total);
            $.ajax({
                type: "POST",
                url: "ajax/reportes.php",
                data: {
                    detalles
                },
                success: function (response) {
                    localStorage.removeItem("detalle_cliente_pedido");
                }
            });
        }else{
            window.location.href = "inicio";
        }
        
        $("#btnRegresar").on("click",function(){
            window.location.href = "inicio";

        })
    })
</script>
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
<link rel="stylesheet" href="<?php echo URL.VW . 'assets/css/estilos_generales.css'?>">