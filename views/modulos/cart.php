    <style>
        * {
            margin: 0;
            padding: 0
        }

        h2 {
            color: #2F8D46;
        }

        #form {
            text-align: center;
            position: relative;
        }

        #form fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            margin: 0;
            position: relative
        }

        .finish {
            text-align: center
        }

        #form fieldset:not(:first-of-type) {
            display: none
        }

        #form .previous-step,
        .next-step {
            width: 100px;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            float: right
        }

        .form,
        .previous-step {
            background: #616161;
        }

        .form,
        .next-step {
            background: #2F8D46;
        }

        #form .previous-step:hover,
        #form .previous-step:focus {
            background-color: #000000
        }

        #form .next-step:hover,
        #form .next-step:focus {
            background-color: #2F8D46
        }

        .text {
            color: #2F8D46;
            font-weight: normal
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey
        }


        #progressbar .active {
            color: #2F8D46
        }

        #progressbar li {
            list-style-type: none;
            font-size: 15px;
            width: 25%;
            float: left;
            position: relative;
            font-weight: 400;
        }

        #progressbar #step1:before {
            content: "1";
        }

        #progressbar #step2:before {
            content: "2";
        }

        #progressbar #step3:before {
            content: "3";
        }

        #progressbar #step4:before {
            content: "4";
        }

        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px;
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1;
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #2F8D46;
        }

        .steps {
            z-index: 10 !important;
            color: grey;
        }
    </style>
    <header class="header">
        <div class="preheader">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="preheader-message">
                            Estamos en facebook como: <a href="https://www.facebook.com/asopagua.asopagua.75" class="text-white" target="_blank"><b>@Asopagua</b></a> ¡Síguenos!
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo-area">
            <div class="align-items-center">
                <div class="col-12 d-lg-none text-center">
                    <a href="/" title="Despacho Pistacho" class="navbar-brand">
                        <img src="ASOPAGUA.png" class="store-image" alt="Despacho Pistacho" />
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
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-4 d-none d-lg-block">
                            <a href="" title="Despacho Pistacho" class="navbar-brand">
                                <!-- <img src="bg_small.png" class="store-image" style="max-width: 50%;" alt="Despacho Pistacho" /> -->
                                <span class="logo_text">Logo pendiente</span>
                            </a>
                        </div>
                        <div class="col-md-8 cartValido">
                            <div>
                                <form id="form">
                                    <ul id="progressbar">
                                        <li class="active steps" id="step1">
                                            <strong>Carro</strong>
                                        </li>
                                        <li id="step2" class="steps"><strong>Proceso de pago</strong></li>
                                        <li id="step3" class="steps"><strong>Revisión</strong></li>
                                        <li id="step4" class="steps"><strong>Éxito</strong></li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container container-main mt-0 cartValido">
        <div class="row">
            <div class="col-lg-8" id="divAllDetalles">
                <div class="col divCarrito">
                    <div>
                        <h2 class="block-header">Carrito de pedidos</h2>
                    </div>
                    <div class="col">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Precio final</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="tbody">

                            </tbody>
                        </table>
                    </div>
                </div>
                <form class="col infoUser" id="clienteForm">
                    <div class="col">
                        <h2 class="block-header">Información del cliente</h2>
                    </div>
                    <div class="col">
                        <div>
                            <span class="text-secondary">* Si eres un cliente recurrente, puedes ingresar tu DNI y tu email y tu información se cargará automáticamente</span>
                        </div>
                        <div action="">
                            <div class="form-group my-3 form-check">
                                <input type="checkbox" class="form-check-input" id="checkInformacionCliente" disabled>
                                <label class="form-check-label" for="checkInformacionCliente">Editar Información</label>
                            </div>
                            <div class="row">
                                <input type="hidden" id="clienteRegistrado">
                                <div class="col-md-6 form-group">
                                    <label for="">DNI</label>
                                    <input type="number" id="dniCliente" class="form-control">
                                </div>
                                <div class="col-md 6 form-group">
                                    <label for="">Email</label>
                                    <input type="email" id="emailCliente" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" id="btnVerificarInformacion" class="btn btn-primary">Verificar</button>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="">Nombre</label>
                                    <input type="text" name="nombreClientePedido" id="nombreClientePedido" class="form-control">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Apellido</label>
                                    <input type="text" name="apellidoClientePedido" id="apellidoClientePedido" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="">Teléfono</label>
                                    <input type="number" name="telefonoClientePedido" id="telefonoClientePedido" class="form-control">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Celular</label>
                                    <input type="number" name="celularClientePedido" id="celularClientePedido" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h2 class="block-header">Información de envío</h2>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Provincia</label>
                            <input type="text" name="provinciaClientePedido" id="provinciaClientePedido" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Cantón</label>
                            <input type="text" name="cantonClientePedido" id="cantonClientePedido" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Parroquia</label>
                            <input type="text" name="parroquiaClientePedido" id="parroquiaClientePedido" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Dirección</label>
                            <textarea class="form-control" name="direccionClientePedido" id="direccionClientePedido"></textarea>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <button class="btn btn-primary btnProcesarPedido">Procesar pedido</button>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-md-4 order-md-2 mb-4 divResumenPago">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-success">Resumen del pedido</span>
                    <span class="badge badge-secondary badge-pill total_products">0</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Subtotal</h6>
                            <small class="text-muted">Precio sin IVA</small>
                        </div>
                        <span class="text-muted txtSubtotal">$0.00</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Envío</h6>
                            <small class="text-muted">Costo de envío</small>
                        </div>
                        <span class="text-muted">$0.00</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0 text-success">TOTAL</h6>
                        </div>
                        <span class="text-success txtTotal">$0.00</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <button class="btn btn-primary btn-block btnCompletar">Confirmar pedido</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <button class="btn btn-danger btn-block btnVaciarCarrito">Vaciar carrito</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container container-main cartInvalido" style="height: 500px">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card text-center border-0">
                    <div class="card-header border-0 bg-white">
                        <img class="img-responsive" style="width:50%;" src="<?php echo URL . VW; ?>assets/images/carritoVacio.png" alt="">
                    </div>
                    <div class="card-body border-0">
                        <h5>Su carro de pedidos actualmente esta vacío</h5>
                        <a href="catalogo-productos" class="text-primary">Agregar productos</a>
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
        $(document).ready(function() {
            document.title = 'Carrito de pedidos';
            $(".cartInvalido").hide();
            $(".cartValido").hide();
            $(".infoUser").hide();
            let carrito = {};
            let nCantidad = 0;
            let subotal = 0;
            let costo_envio = 0;
            let total = 0;
            let precio_cobrar = 0.00;
            let smtps = ["gmail.com", "hotmail.com", "outlook.com"];
            if (localStorage.getItem('cart_user')) {
                $(".cartValido").show();
                carrito = JSON.parse(localStorage.getItem('cart_user'));
                createNewCar();
            } else {
                $(".cartInvalido").show();
            }

            function createNewCar() {
                let dataOficial = [];
                let cart_oficial = {
                    "codigo_producto": "",
                };
                let insertData = ``;
                Object.values(carrito).forEach(items => {
                    cart_oficial["codigo_producto"] = items.codigo_producto;
                    cart_oficial["nombre"] = items.nombre;
                    cart_oficial["cantidad"] = items.cantidad;
                    console.log(items.unidad);
                    if (items.unidad == "LT") {
                        if (items.cantidad >= 1) {
                            if (items.nombre == "Leche sin enfriar") {
                                cart_oficial["precio"] = Number("0.47").toFixed(2)
                            } else {
                                cart_oficial["precio"] = Number("0.52").toFixed(2)
                            }
                        }
                    } else if (items.unidad == "U") {
                        if (items.presentacion == "1L") {
                            if (items.cantidad >= 1 && items.cantidad < 5) {
                                cart_oficial["precio"] = Number("1.60").toFixed(2);
                            } else if (items.cantidad >= 5 && items.cantidad < 12) {
                                cart_oficial["precio"] = Number("1.50").toFixed(2);
                            } else {
                                cart_oficial["precio"] = Number("1.40").toFixed(2);
                            }
                        } else if (items.presentacion == "2L" || items.presentacion == undefined) {
                            if (items.cantidad >= 1 && items.cantidad < 5) {
                                cart_oficial["precio"] = Number("2.60").toFixed(2);
                            } else if (items.cantidad >= 5 && items.cantidad < 12) {
                                cart_oficial["precio"] = Number("2.40").toFixed(2);
                            } else {
                                cart_oficial["precio"] = Number("2.30").toFixed(2);
                            }
                        } else if (items.presentacion == "200ml") {
                            if (items.cantidad >= 1 && items.cantidad < 5) {
                                cart_oficial["precio"] = Number("0.50").toFixed(2);
                            } else if (items.cantidad >= 5 && items.cantidad < 12) {
                                cart_oficial["precio"] = Number("0.45").toFixed(2);
                            } else {
                                cart_oficial["precio"] = Number("0.40").toFixed(2);
                            }
                        }
                    } else if (items.unidad == "LB") {
                        if (items.presentacion == "fresco") {
                            if (items.cantidad >= 11 && items.cantidad < 100) {
                                cart_oficial["precio"] = Number("2.35").toFixed(2);
                            } else if (items.cantidad >= 100) {
                                cart_oficial["precio"] = Number("2.25").toFixed(2);
                            } else {
                                cart_oficial["precio"] = Number("2.50").toFixed(2);
                            }
                        } else if (items.presentacion == "criollo") {
                            if (items.cantidad >= 11 && items.cantidad < 100) {
                                cart_oficial["precio"] = Number("1.75").toFixed(2);
                            } else if (items.cantidad >= 100) {
                                cart_oficial["precio"] = Number("1.65").toFixed(2);
                            } else {
                                cart_oficial["precio"] = Number("1.80").toFixed(2);
                            }
                        } else if (items.presentacion == "redondo") {
                            if (items.cantidad >= 11 && items.cantidad < 100) {
                                cart_oficial["precio"] = Number("1.90").toFixed(2);
                            } else if (items.cantidad >= 100) {
                                cart_oficial["precio"] = Number("1.80").toFixed(2);
                            } else {
                                cart_oficial["precio"] = Number("2.00").toFixed(2);
                            }
                        }
                    }

                    cart_oficial["subtotal"] = Number(items.cantidad * cart_oficial["precio"]).toFixed(2);
                    dataOficial.push(cart_oficial);
                    cart_oficial = {};
                })
                localStorage.setItem("cart_oficial", JSON.stringify(dataOficial));
                let carritoOficial = JSON.parse(localStorage.getItem("cart_oficial"));
                printCarrito(carritoOficial);

            }

            function printCarrito(carritoOficial) {
                let insertData = ``;
                Object.values(carritoOficial).forEach(items => {
                    insertData += `<tr>
                    <td>${items.nombre}</td>
                    <td>$ ${items.precio}</td>
                    <td>${items.cantidad}</td>
                    <td>$ ${items.subtotal}</td>
                    </tr>`;
                })
                $("#tbody").html(insertData);
                printResumen(carritoOficial);

            }

            function printResumen(carritoOficial) {
                nCantidad = Object.values(carritoOficial).reduce((acc, {
                    cantidad
                }) => acc + Number(cantidad), 0);
                subotal = Object.values(carritoOficial).reduce((acc, {
                    subtotal
                }) => acc + Number(subtotal), 0);
                total = (subotal + costo_envio);
                $(".total_products").html(nCantidad);
                $(".txtSubtotal").html("$ " + subotal.toFixed(2));
                $(".txtTotal").html("$ " + total.toFixed(2));
            }
            $(".back").click(function() {
                window.location.href = "inicio#productosDestacados";
            })
            let currentGfgStep, nextGfgStep, previousG
            let fgStep;
            let opacity;
            let current = 1;
            let steps = 4;
            // setProgressBar(current);
            $(".btnCompletar").click(function() {
                current++;
                let id = "step" + current;
                $(`#${id}`).addClass('active');
                $(".divCarrito").fadeOut(1000);
                $(".infoUser").fadeIn(1000);
                $(".divResumenPago").fadeOut(1000);
                $("#divAllDetalles").removeClass('col-lg-8');
                $("#divAllDetalles").addClass('col-12');
            })
            $(".btnProcesarPedido").click(function(e) {
                current++;
                let id = "step" + current;
                $(`#${id}`).addClass('active');
                e.preventDefault();
                let formData = new FormData();
                formData.append("regClienteCart", "");
                formData.append("regNombreClienteCart", $("#nombreClientePedido").val());
                formData.append("regApellidoClienteCart", $("#apellidoClientePedido").val());
                formData.append("regDNIClienteCart", $("#dniCliente").val());
                formData.append("regTelefonoClienteCart", $("#telefonoClientePedido").val());
                formData.append("regCelularClienteCart", $("#celularClientePedido").val());
                formData.append("regEmailClienteCart", $("#emailCliente").val());
                formData.append("regProvinciaClienteCart", $("#provinciaClientePedido").val());
                formData.append("regCantonClienteCart", $("#cantonClientePedido").val());
                formData.append("regParroquiaClienteCart", $("#parroquiaClientePedido").val());
                formData.append("regDireccionClienteCart", $("#direccionClientePedido").val());
                let detallePedido = JSON.parse(localStorage.getItem("cart_oficial"));
                let totalPago = $(".txtTotal").html();
                if ($("#clienteRegistrado").val() != '') {
                    if (localStorage.getItem("change_info_envio") == "YES") {
                        console.log($("#clienteRegistrado").val());
                        formData.append("editIdClienteCart", $("#clienteRegistrado").val());
                        formData.append("accionCart", "Editar");
                        $.ajax({
                            type: "POST",
                            url: "ajax/clientes.php",
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                let status = JSON.parse(response);
                                if (status.verificado) {
                                    return;
                                }
                            }
                        });
                    }
                    let clienteReg = $("#clienteRegistrado").val();
                    console.log(clienteReg);
                    let detalle_pedido = JSON.parse(localStorage.getItem('cart_oficial'));
                    let totalPago = $(".txtTotal").html();
                    $.ajax({
                        type: "POST",
                        url: "ajax/pedidos.php",
                        data: {
                            "nuevo_pedido": "Yes",
                            clienteReg,
                            detalle_pedido,
                            totalPago

                        },
                        success: function(response) {
                            console.log(response);
                            let dataResponse = JSON.parse(response);
                            Swal.fire({
                                position: 'top-end',
                                title: "Procesando pedido",
                                html: "Estamos procesando su pedido. Esto puede tardar un momento",
                                timer: 1000,
                                timerProgressBar: true,
                                didOpen: () => {
                                    Swal.showLoading()
                                    timeInterval = setInterval(() => {
                                        const content = Swal.getHtmlContainer()
                                        if (content) {
                                            const b = content.querySelector('b');
                                            if (b) {
                                                b.textContent = Swal.getTimerLeft()
                                            }
                                        }
                                    }, 100)
                                },
                                willClose: () => {
                                    clearInterval(timeInterval)
                                }
                            }).then(() => {
                                if (dataResponse) {
                                    localStorage.setItem('detalle_cliente_pedido', JSON.stringify(dataResponse));
                                    localStorage.removeItem("cart_user");
                                    localStorage.removeItem("cart_oficial");
                                    window.location.href = "confirmacion";
                                }
                            })
                        }
                    });
                } else {
                    $.ajax({
                        type: "POST",
                        url: "ajax/clientes.php",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            let responseJson = JSON.parse(response);
                            if (responseJson) {
                                let idCliente = responseJson["id"];
                                let detalle_pedido = JSON.parse(localStorage.getItem('cart_oficial'));
                                let totalPago = $(".txtTotal").html();
                                $.ajax({
                                    type: "POST",
                                    url: "ajax/pedidos.php",
                                    data: {
                                        "nuevo_pedido": "Yes",
                                        clienteReg: idCliente,
                                        detalle_pedido,
                                        totalPago

                                    },
                                    success: function(response) {
                                        console.log(response);
                                        let dataResponse = JSON.parse(response);
                                        Swal.fire({
                                            position: 'top-end',
                                            title: "Procesando pedido",
                                            html: "Estamos procesando su pedido. Esto puede tardar un momento",
                                            timer: 1000,
                                            timerProgressBar: true,
                                            didOpen: () => {
                                                Swal.showLoading()
                                                timeInterval = setInterval(() => {
                                                    const content = Swal.getHtmlContainer()
                                                    if (content) {
                                                        const b = content.querySelector('b');
                                                        if (b) {
                                                            b.textContent = Swal.getTimerLeft()
                                                        }
                                                    }
                                                }, 100)
                                            },
                                            willClose: () => {
                                                clearInterval(timeInterval)
                                            }
                                        }).then(() => {
                                            if (dataResponse) {
                                                localStorage.setItem('detalle_cliente_pedido', JSON.stringify(dataResponse));
                                                localStorage.removeItem("cart_user");
                                                localStorage.removeItem("cart_oficial");
                                                window.location.href = "confirmacion";

                                            }
                                        })
                                    }
                                });

                            }
                        }
                    });
                    // sendProcessPedido(null, detallePedido, totalPago, formData);
                }
            })

            $(".btnVaciarCarrito").click(function() {
                Swal.fire({
                    title: '¿Quieres vaciar tu carrito de pedidos?',
                    text: "Perderás todos los productos seleccionados",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Sí!',
                    cancelButtonText: '¡No!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        localStorage.removeItem('cart_user');
                        localStorage.removeItem('cart_oficial');
                        localStorage.removeItem('change_info_envio');

                        Swal.fire(
                            'Carrito vacío!',
                            'Su carrito de pedidos esta vacío',
                            'success'
                        ).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "cart";
                            }
                        })
                    }
                })
            })
            // $(".next-step").click(function() {
            //     currentGfgStep = $(this).parent();
            //     nextGfgStep = $(this).parent().next();

            //     $("#progressbar li").eq($("fieldset")
            //         .index(nextGfgStep)).addClass("active");

            //     nextGfgStep.show();
            //     currentGfgStep.animate({
            //         opacity: 0
            //     }, {
            //         step: function(now) {
            //             opacity = 1 - now;

            //             currentGfgStep.css({
            //                 'display': 'none',
            //                 'position': 'relative'
            //             });
            //             nextGfgStep.css({
            //                 'opacity': opacity
            //             });
            //         },
            //         duration: 500
            //     });
            //     setProgressBar(++current);
            // });

            // $(".previous-step").click(function() {

            //     currentGfgStep = $(this).parent();
            //     previousGfgStep = $(this).parent().prev();

            //     $("#progressbar li").eq($("fieldset")
            //         .index(currentGfgStep)).removeClass("active");

            //     previousGfgStep.show();

            //     currentGfgStep.animate({
            //         opacity: 0
            //     }, {
            //         step: function(now) {
            //             opacity = 1 - now;
            //             currentGfgStep.css({
            //                 'display': 'none',
            //                 'position': 'relative'
            //             });
            //             previousGfgStep.css({
            //                 'opacity': opacity
            //             });
            //         },
            //         duration: 500
            //     });
            //     setProgressBar(--current);
            // });

            // function setProgressBar(currentStep) {
            //     var percent = parseFloat(100 / steps) * current;
            //     percent = percent.toFixed();
            //     $(".progress-bar")
            //         .css("width", percent + "%")
            // }

            // Capturar información de los formularios
            $("#btnVerificarInformacion").on("click", function() {
                if ($("#dniCliente").val() == '' || $("#emailCliente").val() == '') {
                    alert("Necesitas ingresar todos los campos");
                } else {
                    let cedula = $("#dniCliente").val();
                    let responseDni = verificateDni(cedula);
                    let responseEmail = validarEmail($("#emailCliente").val());
                    console.log(responseDni, responseEmail);
                    if (responseDni == true && responseEmail == true) {
                        nextProcess(cedula, $("#emailCliente").val());
                    } else if (responseDni == false && responseEmail == true) {
                        $("#dniCliente").focus();
                        Swal.fire({
                            icon: 'error',
                            title: 'El número de DNI ingresado no es válido',
                            text: 'Ingrese un número de cédula diferente'
                        })
                    } else if (responseDni == true && responseEmail == false) {
                        $("#emailCliente").focus();
                        Swal.fire({
                            icon: 'error',
                            title: 'La dirección de correo ingresada no es válida',
                            text: 'Ingrese una dirección de correo diferente'
                        })

                    } else {
                        $("#dniCliente").focus();
                        Swal.fire({
                            icon: 'error',
                            title: 'Los datos ingresados no son correcots',
                            text: "Verifique sus datos e ingrese datos vàlidos"
                        })

                    }
                }
            })
            $("#telefonoClientePedido").blur(function(e) {
                let telefono = e.target.value;
                if (telefono.length != 10) {
                    $("#telefonoClientePedido").focus();
                    Swal.fire({
                        icon: 'error',
                        title: 'La cantidad de números es incorreca',
                        text: "Recuerde que un número de teléfono esta compuesto por 10 números"

                    })
                }
            })
            $("#celularClientePedido").blur(function(e) {
                let celular = e.target.value;
                if (celular.length != 10) {
                    $("#celularClientePedido").focus();
                    Swal.fire({
                        icon: 'error',
                        title: 'La cantidad de números es incorreca',
                        text: "Recuerde que un número de celular esta compuesto por 10 números"

                    })
                }
            })
            $("#checkInformacionCliente").on("change", function() {
                Swal.fire({
                    title: '¿Realmente desea cambiar su información previamente almacenada?',
                    text: "¡Recuerde que su información es confidencial y nos permitirá comunicarnos con UD!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, cambiar!',
                    cancelButtonText: "No",
                }).then((result) => {
                    if (result.isConfirmed) {
                        localStorage.setItem('change_info_envio', "YES");
                        contactInfoDisabled(false);
                        $(this).attr("disabled", true);
                    } else {
                        localStorage.setItem('change_info_envio', "NO");
                        $("#checkInformacionCliente").prop("checked", false);
                    }
                })
            })

            function contactInfoDisabled(valor) {
                // Info-Contacto inputs
                if (localStorage.getItem('change_info_envio') == "NO") {
                    $("#dniCliente").attr("disabled", valor);
                    $("#emailCliente").attr("disabled", valor);
                    $("#nombreClientePedido").attr("disabled", valor);
                    $("#apellidoClientePedido").attr("disabled", valor);

                }
                $("#telefonoClientePedido").attr("disabled", valor);
                $("#celularClientePedido").attr("disabled", valor);

                //info-Envio inputs
                $("#provinciaClientePedido").attr("disabled", valor);
                $("#cantonClientePedido").attr("disabled", valor);
                $("#parroquiaClientePedido").attr("disabled", valor);
                $("#direccionClientePedido").attr("disabled", valor);

            }

            function nextProcess(dni, email) {
                $.ajax({
                    type: "POST",
                    url: "ajax/clientes.php",
                    data: {
                        "verifiyDNI": dni,
                        "verifyEmail": email
                    },
                    success: function(response) {
                        let resJson = JSON.parse(response);
                        Swal.fire({
                            position: "top-end",
                            title: "Verificando su información",
                            html: "Esperando a que el sistema verifique los datos. Esto puede tardar un momento",
                            timer: 1000,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading()
                                timeInterval = setInterval(() => {
                                    const content = Swal.getHtmlContainer()
                                    if (content) {
                                        const b = content.querySelector('b');
                                        if (b) {
                                            b.textContent = Swal.getTimerLeft()
                                        }
                                    }
                                }, 100)
                            },
                            willClose: () => {
                                clearInterval(timeInterval)
                            }
                        }).then(() => {
                            if (resJson.length > 0) {
                                Swal.fire({
                                    position: "top-end",
                                    title: "Hola, " + resJson[0].nombre + ' ' + resJson[0].apellido,
                                    html: "Gracias por realizar un pedido nuevo y confiar en nosotros",
                                    timer: 2000,
                                    didOpen: () => {
                                        Swal.showLoading()
                                        timeInterval = setInterval(() => {
                                            const content = Swal.getHtmlContainer()
                                            if (content) {
                                                const b = content.querySelector('b');
                                                if (b) {
                                                    b.textContent = Swal.getTimerLeft()
                                                }
                                            }
                                        }, 100)
                                    },
                                    willClose: () => {
                                        clearInterval(timeInterval)
                                    }
                                }).then(() => {
                                    printDataCliente(resJson[0]);
                                    $("#checkInformacionCliente").attr("disabled", false);
                                    localStorage.setItem('change_info_envio', "NO");
                                    contactInfoDisabled(true);

                                })
                            } else {
                                localStorage.setItem('change_info_envio', "NO");
                                Swal.fire({
                                    position: "top-end",
                                    title: "Hola, Bienvenido",
                                    html: "Este es el sitema de pedidos de Asopagua, complete su información de contacto",
                                    timer: 2000,
                                    didOpen: () => {
                                        Swal.showLoading()
                                        timeInterval = setInterval(() => {
                                            const content = Swal.getHtmlContainer()
                                            if (content) {
                                                const b = content.querySelector('b');
                                                if (b) {
                                                    b.textContent = Swal.getTimerLeft()
                                                }
                                            }
                                        }, 100)
                                    },
                                    willClose: () => {
                                        clearInterval(timeInterval)
                                    }
                                })
                            }
                            // if (resJson.verificado == false) {
                            //     console.log(resJson.data);
                            // } else {
                            //     Swal.fire({
                            //         icon: 'error',
                            //         title: 'Esta dirección de correo no está disponible!',
                            //         text: 'Ingrese una dirección de correo diferente'
                            //     })
                            //     // addDisabled();
                            // }
                        })
                    }
                });
            }

            function verificateDni(cedula) {
                let resulVerificate = false;
                if (cedula.length == 10) {
                    let digito_region = cedula.substring(0, 2);
                    if (digito_region >= 1 && digito_region <= 24) {
                        let ultimo_digito = cedula.substring(9, 10);
                        let result_impares = 0;
                        let sum_pares = 0;
                        for (let i = 0; i < cedula.length - 1; i++) {
                            if (i % 2 != 0) {
                                sum_pares += parseInt(cedula[i]);
                            } else {
                                let result = parseInt(cedula[i] * 2);
                                if (result > 9) {
                                    result_impares += (result - 9);
                                } else {
                                    result_impares += result;
                                }
                            }
                        }
                        let sum_total = sum_pares + result_impares;
                        let mod = (sum_total % 10);
                        if (10 - mod == ultimo_digito) {
                            resulVerificate = true;
                        }
                    } else {
                        resulVerificate = false;
                    }
                } else {
                    resulVerificate = false;
                }
                return resulVerificate;
            }

            function validarEmail(email) {
                let servidores = ["gmail.com", "hotmail.com", "outlook.com"];
                let arrCorreo = email.split('@');
                return servidores.includes(arrCorreo[1]);
                //Mail incorrecto
            }

            function printDataCliente(data) {
                $("#nombreClientePedido").val(data.nombre);
                $("#apellidoClientePedido").val(data.apellido);
                $("#telefonoClientePedido").val(data.telefono);
                $("#celularClientePedido").val(data.celular);
                $("#provinciaClientePedido").val(data.provincia);
                $("#cantonClientePedido").val(data.canton);
                $("#parroquiaClientePedido").val(data.parroquia);
                $("#direccionClientePedido").val(data.direccion);
                $("#clienteRegistrado").val(data.id);
            }
        });
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