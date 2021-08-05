$(document).ready(function() {
    let cart = (localStorage.getItem('cart_user')) ? JSON.parse(localStorage.getItem('cart_user')) : {};
    let nCantidad = Object.values(cart).reduce((acc, {
        cantidad
    }) => acc + Number(cantidad), 0);
    $('.cart-size').text(parseInt($('.cart-size').text()) + parseInt(nCantidad));
    const cardLeche = document.getElementById('cards-leches');
    const cardYogurt = document.getElementById('cards-yogurt');
    const cardQueso = document.getElementById('cards-quesos');
    const templateProduct = document.getElementById('products-template').content;
    const fragmentLeche = document.createDocumentFragment();
    const fragmentYogurt = document.createDocumentFragment();
    const fragmentQueso = document.createDocumentFragment();
    $.ajax({
        type: "POST",
        url: "ajax/productos.php",
        data: {
            "getProductosAll": ""
        },
        success: function(response) {
            let jsoParse = JSON.parse(response);
            localStorage.setItem("lista_productos", JSON.stringify(jsoParse));
            let leches = jsoParse.filter(element => element.categoria == "Leche Cruda");
            let yogures = jsoParse.filter(element => element.categoria == "Yogurt");
            let quesos = jsoParse.filter(element => element.categoria == "Quesos");
            leches.forEach(element => {
                templateProduct.querySelector('.card-title').textContent = element.nombre;
                templateProduct.querySelector('.card-subtitle').textContent = element.descripcion;
                templateProduct.querySelector('.d_mayor').textContent = element.d_precio_mayorista + " : ";
                templateProduct.querySelector('.price-mayor').textContent = '$ ' + element.precio_mayorista;
                if (element.d_precio_minorista == '') {
                    templateProduct.querySelector('.d_menor').textContent = "Al por menor" + " : ";
                    templateProduct.querySelector('.price-menor').textContent = '$ ' + element.precio_publico;
                } else {
                    templateProduct.querySelector('.d_menor').textContent = element.d_precio_minorista + " : ";
                    templateProduct.querySelector('.price-menor').textContent = '$ ' + element.precio_minorista;
                }
                templateProduct.querySelector('.d_publico').textContent = "Precio normal: ";
                templateProduct.querySelector('.price-publico').textContent = '$ ' + element.precio_publico;
                templateProduct.querySelector('.btnAddCart').setAttribute('id-producto', element.id);
                templateProduct.querySelector('.btnAddCart').setAttribute('producto-unidad', "LT");
                templateProduct.querySelector(".inputQty").setAttribute("product-id",element.id);
                const clone = templateProduct.cloneNode(true);
                fragmentLeche.appendChild(clone);
            });
            cardLeche.appendChild(fragmentLeche);
            yogures.forEach(element => {
                templateProduct.querySelector('.card-title').textContent = element.nombre;
                templateProduct.querySelector('.card-subtitle').textContent = element.descripcion;
                templateProduct.querySelector('.d_mayor').textContent = element.d_precio_mayorista + " : ";
                templateProduct.querySelector('.price-mayor').textContent = '$ ' + element.precio_mayorista;
                if (element.d_precio_minorista == '') {
                    templateProduct.querySelector('.d_menor').textContent = "Al por menor" + " : ";
                    templateProduct.querySelector('.price-menor').textContent = '$ ' + element.precio_publico;
                } else {
                    templateProduct.querySelector('.d_menor').textContent = element.d_precio_minorista;
                    templateProduct.querySelector('.price-menor').textContent = '$ ' + element.precio_minorista;
                }
                templateProduct.querySelector('.d_publico').textContent = "Precio normal: ";
                templateProduct.querySelector('.price-publico').textContent = '$ ' + element.precio_publico;
                templateProduct.querySelector('.btnAddCart').setAttribute('id-producto', element.id);
                templateProduct.querySelector('.btnAddCart').setAttribute('producto-unidad', "U");
                templateProduct.querySelector(".inputQty").setAttribute("product-id",element.id);
                const clone = templateProduct.cloneNode(true);

                fragmentYogurt.appendChild(clone);
            });
            cardYogurt.appendChild(fragmentYogurt);

            quesos.forEach(element => {
                templateProduct.querySelector('.card-title').textContent = element.nombre;
                templateProduct.querySelector('.card-subtitle').textContent = element.descripcion;
                templateProduct.querySelector('.d_mayor').textContent = element.d_precio_mayorista + " : ";
                templateProduct.querySelector('.price-mayor').textContent = '$ ' + element.precio_mayorista;
                if (element.d_precio_minorista == '') {
                    templateProduct.querySelector('.d_menor').textContent = "Al por menor" + " : ";
                    templateProduct.querySelector('.price-menor').textContent = '$ ' + element.precio_publico;
                } else {
                    templateProduct.querySelector('.d_menor').textContent = element.d_precio_minorista;
                    templateProduct.querySelector('.price-menor').textContent = '$ ' + element.precio_minorista;
                }
                templateProduct.querySelector('.d_publico').textContent = "Precio normal: ";
                templateProduct.querySelector('.price-publico').textContent = '$ ' + element.precio_publico;
                templateProduct.querySelector('.btnAddCart').setAttribute('id-producto', element.id);
                templateProduct.querySelector('.btnAddCart').setAttribute('producto-unidad', "LB");
                templateProduct.querySelector(".inputQty").setAttribute("product-id",element.id);

                const clone = templateProduct.cloneNode(true);

                fragmentQueso.appendChild(clone);
            });
            cardQueso.appendChild(fragmentQueso);
            $(".btnAddCart").on("click",function(e){
                let lista_productos = JSON.parse(localStorage.getItem("lista_productos"));
                let producto_unidad = e.target.getAttribute("producto-unidad");
                let id_producto = this.getAttribute("id-producto");
                let parentProducto = e.target.parentNode.parentNode;
                let qty = parentProducto.childNodes[7].childNodes[3].childNodes[1].value;
                let producto_seleccionado = lista_productos.filter(producto => producto.id == id_producto)[0];
                let presentacion =  "";
                let nombre_descripcion =  "";
                if(producto_unidad == "U"){
                    let descripcion = producto_seleccionado.descripcion.split(" ");
                    presentacion = descripcion[1];
                    nombre_descripcion = producto_seleccionado.nombre + ' - ' + presentacion;
                
                }else if(producto_unidad == "LB"){
                    let descripcion = producto_seleccionado.descripcion.split(" ");
                    presentacion = descripcion[1];
                    nombre_descripcion = producto_seleccionado.descripcion;
                }else{
                    nombre_descripcion = producto_seleccionado.descripcion;
                }

                // let d_precio_m = producto_seleccionado.d_precio_mayorista.split(producto_unidad);
                // let d_precio_min = producto_seleccionado.d_precio_minorista.split(producto_unidad);
                addToCart(producto_seleccionado.codigo,
                    nombre_descripcion,
                    qty,
                    producto_seleccionado.precio_publico,
                    producto_seleccionado.precio_mayorista,
                    producto_seleccionado.d_precio_mayorista,
                    producto_seleccionado.precio_minorista,
                    producto_seleccionado.d_precio_minorista,
                    producto_unidad,
                    presentacion);

            })
            $(".btnUp").on("click",function(e){
                upOrDown("up",e);
            })
            $(".btnDown").on("click",function(e){
                upOrDown("down",e);
            })
            function upOrDown(upOrDown,e){
                let divInputQty = e.target.parentNode.parentNode.parentNode.childNodes[3].childNodes[1];
                if(upOrDown == "up"){
                    let qtyInput = Number(divInputQty.value);
                    qtyInput++;
                    divInputQty.value = qtyInput; 
                }else if(upOrDown == "down"){
                    let qtyInput = Number(divInputQty.value);
                    qtyInput--;
                    if(qtyInput > 0){
                        divInputQty.value = qtyInput; 
                    }
                }
            }
            function addToCart(codigo_producto, descripcion, cantidad, precio_publico, precio_mayorista, d_mayorista, precio_minorista, d_minorista,unidad,presentacion){
                console.log(codigo_producto,descripcion,cantidad,precio_publico,precio_mayorista,d_mayorista,precio_minorista,d_minorista);
                let shoppingCartMessage = 'Ir al Carro de pedidos.';
                let singleProductMessage = 'Ha sido añadido al carro de pedidos.';
                let multiProductMessage = 'Han sido añadidos al carro de pedidos.';

                let producto = {
                    codigo_producto,
                    nombre: descripcion,
                    cantidad,
                    precio_publico,
                    precio_mayorista,
                    d_mayorista,
                    precio_minorista,
                    d_minorista,
                    unidad,
                    presentacion
                }
                let mensaje = `${cantidad} ${descripcion}. ${(cantidad == 1) ? singleProductMessage : multiProductMessage}`;
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: mensaje,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK',
                })


                if (cart.hasOwnProperty(producto.codigo_producto) && cantidad == 1) {
                    producto.cantidad = Number(cart[producto.codigo_producto].cantidad) + 1;
                } else if (cart.hasOwnProperty(producto.codigo_producto) && cantidad > 1) {
                    producto.cantidad = Number(cart[producto.codigo_producto].cantidad) + Number(cantidad);
                }
                $('.cart-size').text(parseInt($('.cart-size').text()) + parseInt(cantidad));
                cart[producto.codigo_producto] = {
                    ...producto
                };
    
                localStorage.setItem('cart_user', JSON.stringify(cart));

            }
            // jsoParse.forEach(element => {
            //     templateProduct.querySelector('.card-title').textContent = element.nombre;
            //    const clone = templateProduct.cloneNode(true);

            //    fragment.appendChild(clone);
            // });
            // cardLeche.appendChild(fragment);
        }
    })
})