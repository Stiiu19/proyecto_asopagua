<link rel="stylesheet" href="https://assets.jumpseller.com/store/verduleria-online/themes/290816/linear-icon.css?1619244409" />
<script>
    document.title = "Mis Pedidos";
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
    <div class="jumbotron jumbotron-fluid text-white" style="background-color: #006262;">
        <div class="container">
            <h3 class="text-white text-center">MIS PEDIDOS</h3>
            <p class="lead">* Nota</p>
            <p class="lead"">Para poder revisar su lista de pedidos, deberá proporcionar los datos con los que efectuó dichos pedidos. Se le pedirá que introduzca su número de cédula y su correo electrónico, por su seguridad se le pedirá que introduzca el código de uno de sus pedidos para verificar que las credenciales le pertenece.</p>
        </div>
    </div>
    <div class=" row mb-3">
            <div class="col-12">
                <form action="" class="form" method="POST" id="fListarPedidos">
                    <div class="row">
                        <div class="col-4 form-group">
                            <label for="">DNI</label>
                            <input type="text" class="form-control" id="dniPedidoList" required>
                        </div>
                        <div class="col-4 form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" id="emailPedidoList" required>
                        </div>
                        <div class="col-4 form-group">
                            <label for="">Código</label>
                            <input type="text" class="form-control" id="codigoPedidoList" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Listar pedidos</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <h2 class="block-header">Lista de pedidos</h2>
            </div>
            <div class="col-12">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>Código pedido</th>
                            <th>Total</th>
                            <th>Fecha</th>
                            <th>Comprobante</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody id="tbody-list">

                    </tbody>
                    <tfoot id="tfootListaPedidos">
                        <tr>
                            <th colspan="5">No tienes pedidos hecho</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="modalListDetallePedido" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-gradient-primary text-white">
                                <h4 class="modal-title font-weight-bold titleMOdalPedido text-center" id="exampleModalLabel">DETALLE DEL PEDIDO</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="card">
                                            <div class="card-header bg-info text-white">
                                                <h5>Pedido</h5>
                                            </div>
                                            <div class="card-body">
                                                <form action="" id="formAdjuntarComprobante" enctype="multipart/form-data">
                                                    <div class="row mb-3">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="">Código de pedido</label>
                                                            <input type="text" name="pCodigoPedido" id="pCodigoPedido" class="form-control" disabled>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="">Hora - Fecha</label>
                                                            <input type="text" name="pFechaPedido" id="pFechaPedido" class="form-control" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="">Comprobante</label>
                                                            <input type="text" class="form-control" id="pComprobantePedido" disabled id="estadoActualPedido" name="estadoActualPedido">
                                                        </div>
                                                        <div class="col-md-6" id="contentComprobante">
                                                            <label for="">Adjuntar comprobanate</label>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <input class="form-control border-0" id="msjComprobante" type="text" disabled value="No se eligió archivo">
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="custom-file">
                                                                        <div class="fileComprobante" style="visibility: hidden; width: 0.1px; height: 0.1px;">
                                                                            <input accept="images/" name="file" type="file" id="fileComprobante">
                                                                        </div>
                                                                        <label class="btn btn-primary" style="font-size:12px;" id="btnFileComprobante" for="fileComprobante">Buscar</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <table class="table table-striped">
                                                        <thead class="thead">
                                                            <tr>
                                                                <th colspan="2">Producto</th>
                                                                <th>Precio Unitario</th>
                                                                <th>Cantidad</th>
                                                                <th>Subtotal</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbodyDetallePedido">
                                                        </tbody>
                                                    </table>
                                                    <div class="form-group">
                                                        <button class="btn btn-success btnAdjuntarComprobante">Enviar Comprobante</button>
                                                        <button class="btn btn-dark float-right" id="btnCerrarModal" data-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
<script>
    $(document).ready(function() {
        $('.mobile-menu-trigger').click(function() {
            $('#mobile-menu').toggle();
            $('.mobile-menu-trigger .nav-icon').toggleClass('open');
        });
        $(".btnAdjuntarComprobante").attr("disabled", true);
        if ($("#fListarPedidos")) {
            let totalPago = 0.0;
            let idCliente = '';
            let idPedido = '';
            const tbodyList = $("#tbody-list");

            function printDataPedidosClientes(dataPedido) {
                let insertData = '';
                for (let item of dataPedido) {
                    insertData += `
                                <tr>
                                    <td>${item.codigo}</td>
                                    <td>$ ${item.total}</td>
                                    <td>${item.fecha_creacion}</td>
                                    <th>${(item.path_comprobante == "Sin adjuntar") ? "Sin adjuntar" : "Adjunto"}</th>
                                    <td>
                                        <button type='button' id='${item.id}' class='btn btn-warning btnListDetallePedido' style="width:70px;" data-toggle='modal' data-target='#modalListDetallePedido'>
                                            <i class='fas fa-edit'></i>
                                        </button>
                                    </td>
                                </tr>
                            `;
                }
                tbodyList.html(insertData);
                $(".btnListDetallePedido").on("click", function(e) {
                    idPedido = e.target.id;
                    setPedidoInformacion(dataPedido, idPedido);
                    $.ajax({
                        type: "POST",
                        url: "ajax/pedidos.php",
                        data: {
                            "getDetallePedido": idPedido
                        },
                        success: function(response) {
                            let dataTablePedido = JSON.parse(response);
                            printTableDetallePedido(dataTablePedido);
                        }
                    });

                })

                function setPedidoInformacion(dataPedido, id) {
                    let newPedidoFilter = dataPedido.filter(item => item.id == id);
                    $("#pCodigoPedido").val(newPedidoFilter[0]["codigo"]);
                    $("#pFechaPedido").val(newPedidoFilter[0]["fecha_creacion"]);
                    if (newPedidoFilter[0]["path_comprobante"] != "Sin adjuntar") {
                        $("#pComprobantePedido").val("Adjunto");
                        $("#contentComprobante").hide();
                        $(".btnAdjuntarComprobante").hide();
                    } else {
                        $("#pComprobantePedido").val("Sin adjuntar");
                    }
                    totalPago = Number(newPedidoFilter[0]["total"]);
                }

                function printTableDetallePedido(data) {
                    let insertDetallePedido = '';
                    for (const item of data) {
                        insertDetallePedido += `<tr>
                        <td colspan='2'>${item.nombre_producto}</td>
                        <td>$ ${item.precio}</td>
                        <td>${item.cantidad}</td>
                        <td>$ ${(item.precio * item.cantidad).toFixed(2)}</td>
                        </tr>`;
                    }
                    $("#tbodyDetallePedido").html(insertDetallePedido);
                    printFooter();
                }

                function printFooter() {
                    let tbody = document.getElementById('tbodyDetallePedido');
                    let insertFooter = `<tr class="bg-dark text-white">
                    <th colspan="4">Total</th>
                    <th colspan="1">$ ${totalPago.toFixed(2)}</th> 
                    </tr>`;

                    tbody.innerHTML += insertFooter;
                }

                $("#fileComprobante").on("change", function(e) {
                    $("#msjComprobante").val("Archivo adjunto");
                    $(".btnAdjuntarComprobante").attr("disabled", false);
                })
            }
            $("#fListarPedidos").on("submit", function(e) {
                e.preventDefault();
                let formData = new FormData();
                formData.append("listPedidoDNI", $("#dniPedidoList").val());
                formData.append("listPedidoEmail", $("#emailPedidoList").val());
                formData.append("listPedidoCodigo", $("#codigoPedidoList").val().trim());

                $.ajax({
                    type: "POST",
                    url: "ajax/pedidos.php",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        let dataPedido = JSON.parse(response);
                        let keys = Object.keys(dataPedido);
                        if (keys[0] == "existCliente") {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'error',
                                title: "Datos incorrectos: " + "No existe el cliente",
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK',
                            })
                        } else if (keys[0] == "existPedido") {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'error',
                                title: "Datos incorrectos: " + "Código de pedido incorrecto",
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK',
                            })

                        } else {
                            $("#tfootListaPedidos").hide();
                            $("#codigoPedidoList").attr("disabled", true);
                        }
                        idCliente = dataPedido[0]["id_cliente"];
                        printDataPedidosClientes(dataPedido);
                    }
                });
            })
            $("#formAdjuntarComprobante").on("submit", function(e) {
                e.preventDefault();
                let formData = new FormData();
                formData.append("idComprobantePedido", idPedido);
                formData.append("fileComprobante", $("#fileComprobante")[0].files[0]);
                $.ajax({
                    type: "POST",
                    url: "ajax/pedidos.php",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        let dataResponse = JSON.parse(response);
                        if (dataResponse.verificado == true) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: "Se ha adjuntado el comprobante",
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    getPedidosCliente(idCliente);
                                    $("#btnCerrarModal").trigger("click");
                                }
                            })
                        }
                    }
                });

                function getPedidosCliente(id_Cliente) {
                    let formData = new FormData();
                    formData.append("id_cliente", id_Cliente);
                    $.ajax({
                        type: "POST",
                        url: "ajax/pedidos.php",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            let dataResponse = JSON.parse(response);
                            idCliente = dataResponse[0]["id_cliente"];
                            printDataPedidosClientes(dataResponse);
                        }
                    });
                }
            })
        }
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