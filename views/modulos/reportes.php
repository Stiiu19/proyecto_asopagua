<div class="row p-2">
    <div class="col-md-10 mx-auto">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="text-center">Reportes de administración</h3>
            </div>
            <div class="card-body">

                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Usuarios</td>
                            <td>
                                <a class="btn btn-success btnGenerateReport" href="ajax/reportes.php?reporte=usuarios">
                                    <i class="fa fa-file-pdf"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Productos</td>
                            <td>
                            <a class="btn btn-success btnGenerateReport" href="ajax/reportes.php?reporte=productos">
                                    <i class="fa fa-file-pdf"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Categorías</td>
                            <td>
                            <a class="btn btn-success btnGenerateReport" href="ajax/reportes.php?reporte=categorias">
                                    <i class="fa fa-file-pdf"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Clientes</td>
                            <td>
                            <a class="btn btn-success btnGenerateReport" href="ajax/reportes.php?reporte=clientes">
                                    <i class="fa fa-file-pdf"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Todos los pedidos</td>
                            <td>
                            <a class="btn btn-success btnGenerateReport" href="ajax/reportes.php?reporte=pedidos">
                                    <i class="fa fa-file-pdf"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(".btnGenerateReport").on("click",function(e){
            $.ajax({
                type: "POST",
                url: "views/modulos/reportes.php",
                data: {
                    "generateReporte": "ey"
                },
                success: function (response) {
                    console.log(response);
                }
            });   
        })
    });
</script>
<?php
class GenerateRepore{
    public static function generarReporte(){
        echo "Hola";
    }
}
if(isset($_POST["generateReporte"])){
    $generarReporte = new GenerateRepore();
    $generarReporte::generarReporte();
}
?>