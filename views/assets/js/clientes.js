$(document).ready(function () {
    document.title = "Clientes";
    $().ready(() => {
        if ($("#formCliente")) {
            $("#formCliente").on("change", function(e) {
                let id = e.target.id;
                if (e.target.value.length > 0) {
                    if (id == "regEmailCliente") {
                        $.ajax({
                            type: "POST",
                            url: "ajax/clientes.php",
                            data: {
                                emailCliente: e.target.value
                            },
                            success: function(response) {
                                let resClientes = JSON.parse(response);
                                Swal.fire({
                                    title: "Verificando email",
                                    html: "Esperando a que el sistema verifique su email. Esto puede tardar un momento",
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
                                    if (resClientes.verificado == false) {
                                        $("#selectProvincia").attr("disabled", false);
                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Esta email ya existe',
                                            text: 'Ingrese un email diferente'
                                        })
                                        $("#btnEditAdd").attr("disabled", true);
                                    }
                                })
                            }
                        });
                    } else if (id == "regDNICliente") {
                        $.ajax({
                            type: "POST",
                            url: "ajax/clientes.php",
                            data: {
                                dniCliente: e.target.value
                            },
                            success: function(response) {
                                let resClientes = JSON.parse(response);
                                Swal.fire({
                                    title: "Verificando DNI",
                                    html: "Esperando a que el sistema verifique el DNI. Esto puede tardar un momento",
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
                                    if (resClientes.verificado == false) {
                                        $("#btnEditAdd").removeAttr("disabled");
                                        $("#regTelefonoCliente").focus();
                                        $("#regEmailCliente").attr("disabled", false);
                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Esta DNI ya existe',
                                            text: 'Ingrese un email diferente'
                                        })
                                        $("#btnEditAdd").attr("disabled", true);
                                    }
                                })
                            }
                        });
                    }
                }
            })
            $(".btnNuevoCliente").on("click", () => {
                reset();
            })
            $("#formCliente").on("submit", function(e) {
                e.preventDefault();
                let formData = new FormData();
                formData.append("accion", ($("#btnEditAdd").html() == "Editar") ? "Editar" : "Agregar");
                formData.append("regNombreCliente", $("#regNombreCliente").val());
                formData.append("regApellidoCliente", $("#regApellidoCliente").val());
                formData.append("regDNICliente", $("#regDNICliente").val());
                formData.append("regTelefonoCliente", $("#regTelefonoCliente").val());
                formData.append("regCelularCliente", $("#regCelularCliente").val());
                formData.append("regEmailCliente", $("#regEmailCliente").val());
                formData.append("regProvinciaCliente", $("#selectProvincia").val());
                formData.append("regCantonCliente", $("#selectCanton").val());
                formData.append("regParroquiaCliente", $("#selectParroquia").val());
                formData.append("regDireccionCliente", $("#regDireccionCliente").val());
                if ($("#btnEditAdd").html() == "Editar") {
                    formData.append("editIdCliente", $(".idCliente").val());
                }
                $.ajax({
                    type: "POST",
                    url: "ajax/clientes.php",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        let status = JSON.parse(response);
                        let mensaje = (formData.get("accion") == "Editar") ? "Cliente editado correctamente" : "Cliente agregado correctamente";
                        if (status.verificado) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: mensaje,
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "clientes";
                                }
                            })
                        } else {
                            Swal.fire(
                                'No se ha realizado ningun cambio',
                                'Se actualizará la página',
                                'warning'
                            ).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "clientes";
                                }
                            })
                        }
                    }
                });
            })
            $("#dataTableClientes").on("click", "button.btnAction", function() {
                $(".titleModalCliente").html("INFORMACIÓN DEL CLIENTE");
                let idEditCliente = $(this).attr("idCliente");
                $(".btnEditAdd").attr("disabled", false);
                $(".btnEditAdd").html("Editar");
                let infoData = {
                    idEditCliente
                };
                $.ajax({
                    type: "POST",
                    url: 'ajax/clientes.php',
                    data: infoData,
                    success: function(response) {
                        let data = JSON.parse(response)
                        $(".idCliente").val(data.id);
                        $("#regNombreCliente").val(data.nombre);
                        $("#regApellidoCliente").val(data.apellido);
                        $("#regDNICliente").val(data.dni);
                        $("#regTelefonoCliente").val(data.telefono);
                        $("#regCelularCliente").val(data.celular);
                        $("#regEmailCliente").val(data.email);
                        $("#regDireccionCliente").val(data.direccion);
                        $(`#selectProvincia`).val(data.provincia)
                        $(`#selectCanton`).val(data.canton)
                        $(`#selectParroquia`).val(data.parroquia)
                        $(".btnEditAdd").html("Editar");
                        $(".btnEliminar").show();
                        $(".btnEliminar").attr("id", idEditCliente);
                    }
                })
            })
            $("#formCliente").on("click", "button.btnEliminar", function () {
                    Swal.fire({
                        title: '¿Estás seguro de eliminar a este cliente?',
                        text: "¡Esta acción no se puede revertir, se eliminará el cliente seleccionado!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si, eliminarlo!',
                        cancelButtonText: "Cancelar",
                    }).then((result) => {
                        let idEliminarCliente = $(".idCliente").val();
                        console.log(idEliminarCliente);
                        let infoDelete = {
                            idEliminarCliente
                        }
                        if (result.isConfirmed) {
                            $.ajax({
                                type: "POST",
                                url: 'ajax/clientes.php',
                                data: infoDelete,
                                success: function (response) {
                                    console.log(response)
                                    if (response) {
                                        Swal.fire(
                                            'Eliminado',
                                            'EL cliente ha sido eliminado.',
                                            'success'
                                        ).then((result) => {
                                            if (result.isConfirmed) {
                                                window.location.href = "clientes";
                                            }
                                        })
                                    }
                                }
                            })
                        }
                    })
                })
            function reset() {
                $("#regNombreCliente").val("");
                $("#regApellidoCliente").val("");
                $("#regTelefonoCliente").val("");
                $("#regDNICliente").val("");
                $("#regCelularCliente").val("");
                $("#regEmailCliente").val("");
                $("regEmailCliente").attr("disabled", true);
                $(".btnEliminar").hide();
                $(".btnEditAdd").html("Agregar");
                $(".titleModalCliente").html("NUEVO CLIENTE");
                $("#selectProvincia").attr("disabled", true);
                $("#regDireccionCliente").val("");
            }
        }
    })
});