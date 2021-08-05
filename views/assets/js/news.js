$(document).ready(function(e) {
    const plantilla_noticia = document.getElementById('template_noticia').content;
    const noticia_derecha = document.getElementById('right_noticia').content;
    const noticia_down = document.getElementById('template_notice_down').content;
    const card_noticia_principal = document.getElementById('card_notice_principal');
    const card_noticia_right = document.getElementById('card_notice_right');
    const card_notice_down = document.getElementById('notices_down');
    const fragment = document.createDocumentFragment();
    const fragment_right = document.createDocumentFragment();
    const fragment_down = document.createDocumentFragment();

    $.ajax({
        type: "POST",
        url: "ajax/noticias.php",
        data: {
            "getAllNoticias": ""
        },
        success: function(response) {
            let arr_noticia = JSON.parse(response);
            if (arr_noticia.length == 0) {
                printEmptyNotices();
            } else {
                printNoticiaPrincipal(arr_noticia);
            }
        }
    })

    function printEmptyNotices() {
        $("#contentNotices").hide();
        let printData = `<div class="row">
    <div class="col-md-10 mx-auto">
        <div class="card">
            <div class="card-header bg-notice text-center p-4">
                <h3 class="text-white">¡Actualmente, no existen noticias publicadas..!</h3>
            </div>
            <div class="card-body">
                <h4>Estamos trabajando para brindarte información actualizada sobre nuestros productos y servicios. En esta sección podras encontrarte con noticias relacionadas con las ASOCIACIÓN ASOPAGUA.</br></br>
                
                Te mantendremos informado sobre el lanzamiento de nuevos productos, inclusión de nuevos distribuidores, actualización de los precios de nuestros productos, así como el trabajo que realiza nuestra Asociación para y con la comunidad.</h4>
            </div>
        </div>
    </div>
    </div>`;
        $("#contentNoticesEmpty").html(printData);
        $(".notices_validation").hide();
    }

    function printNoticiaPrincipal(arr_notice) {
        let arr_noticia = arr_notice[0];
        let data_video = plantilla_noticia.querySelector("#video_noticia").getAttribute("data-video");
        plantilla_noticia.querySelector("#video_noticia").setAttribute("poster", data_video + arr_noticia.imagen);
        plantilla_noticia.querySelector("#source_video").setAttribute("src", data_video + arr_noticia.video);
        plantilla_noticia.querySelector(".titulo_noticia").textContent = arr_noticia.titulo;
        plantilla_noticia.querySelector(".noticia_publisher").textContent = arr_noticia.publicador;
        plantilla_noticia.querySelector(".noticia_desarrollo").textContent = arr_noticia.desarrollo;
        const clone = plantilla_noticia.cloneNode(true);
        fragment.appendChild(clone);
        card_noticia_principal.appendChild(fragment);

        printNoticesRight(arr_notice);
    }

    function printNoticesRight(arr_noticia) {
        if (arr_noticia.length > 1) {
            let data_url_imagen = noticia_derecha.querySelector(".img_noticia_right").getAttribute("data-imagen");
            for (let i = 1; i < arr_noticia.length; i++) {
                if (i < 3) {
                    noticia_derecha.querySelector(".img_noticia_right").setAttribute("src", data_url_imagen + arr_noticia[i]["imagen"]);
                    noticia_derecha.querySelector(".title_noticia_right").textContent = arr_noticia[i].titulo;
                    noticia_derecha.querySelector(".noticia_publisher_right").textContent = arr_noticia[i].publicador;
                    noticia_derecha.querySelector(".noticia_desarrollo_right").textContent = arr_noticia[i].desarrollo;
                    noticia_derecha.querySelector(".btn_noticia_right").setAttribute("data-video-name", arr_noticia[i].video);
                    const clone = noticia_derecha.cloneNode(true);
                    fragment_right.appendChild(clone);
                } else {
                    printNoticesDown(arr_noticia);
                    break;
                }
            }
            card_noticia_right.appendChild(fragment_right);
            $(".btn_noticia_right").on("click", function(e) {
                let name_video = e.target.getAttribute("data-video-name");
                let src_video = $("#video_noticia_url").attr("src");
                $("#video_noticia_modal").attr("src", src_video + name_video);
            })
        }
    }

    function printNoticesDown(arr_notice) {
        let data_imagen = noticia_down.querySelector(".img_noticia_down").getAttribute("data-imagen");
        for (let i = 0; i < arr_notice.length; i++) {
            noticia_down.querySelector(".img_noticia_down").setAttribute("src", data_imagen + arr_notice[i].imagen);
            noticia_down.querySelector(".title_noticia_down").textContent = arr_notice[i].titulo
            noticia_down.querySelector(".noticia_publisher_down").textContent = arr_notice[i].publicador
            noticia_down.querySelector(".noticia_desarrollo_down").textContent = arr_notice[i].desarrollo
            noticia_down.querySelector(".btn-notice-down").setAttribute("data-video-name", arr_notice[i].video);
            const clone = noticia_down.cloneNode(true);
            fragment_down.appendChild(clone);
        }
        card_notice_down.appendChild(fragment_down);
        $(".btn-notice-down").on("click", function(e) {
            let name_video = e.target.getAttribute("data-video-name");
            let src_video = $("#video_noticia_url").attr("src");
            $("#video_noticia_modal").attr("src", src_video + name_video);
        })
    }
    $('.mobile-menu-trigger').click(function() {
        $('#mobile-menu').toggle();
        $('.mobile-menu-trigger .nav-icon').toggleClass('open');
    });
})