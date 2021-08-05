<?php
require '../models/pedidos.model.php';
require '../models/reportes.php';
class Reportes
{
    public function sendReporteEmail($detalle)
    {
        $dPedidos = ModelPedidos::mdlGetDetallePedido($detalle["id"]);
        $mailto = $detalle["email"];
        $nombre = $detalle["nombre"];
        $apellido = $detalle["apellido"];
        $codigo = $detalle["codigo"];
        $mailSubject = "Detalle del Pedido: " . $codigo;
        $total = 0.00;
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers .= 'From: crisrodam1996@gmail.com' . "\r\n" .
            'Reply-To: crisrodam1996@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        // Additional headers
        $message = "
            <html>
                <head>
                    <title>Detalle del pedido</title>
                </head>
                <body>
                <h1>Te saludamos, " . $nombre . " " . $apellido . "</h1>
                <p>Su pedido con código <strong>" . $codigo  ."</strong> se ha procesado correctamente</p>
                <h3>A continuación mostraremos los detalles del pedido</h3>
                <table border='1' style='text-align: center;'>
                <thead>
                    <tr>
                        <th style='padding: 5px 10px;'> Producto </th>
                        <th style='padding: 5px 10px;'> Cantidad </th>
                        <th style='padding: 5px 10px;'> Precio </th>
                        <th style='padding: 5px 10px;'> Subtotal </th>
                    </tr>
                </thead>
                <tbody>
                ";
        for ($i = 0; $i < count($dPedidos); $i++) {
            $message .=  "
                            <tr>
                                <td>" . $dPedidos[$i]["nombre_producto"] . "</td>
                                <td>" . $dPedidos[$i]["cantidad"] . "</td>
                                <td> $ " . $dPedidos[$i]["precio"] . "</td>
                                <td> $ " . number_format((float)($dPedidos[$i]["precio"] *  $dPedidos[$i]["cantidad"]),2) . "</td>
                            </tr>
                            ";
                            $total = $total + ($dPedidos[$i]["precio"] * $dPedidos[$i]["cantidad"]);
        }
        $message .= "<tr>
        <td colspan='3'><strong>Total</strong></td>
        <td>$ " . number_format((float)($total),2) . "</td>
        </tr>
        </tbody>
        </table>
        <br>
        <br>
        <strong>Recuerda que:</strong>
        <p>Si tienes dudas nos puedes contactar en ###########</p>
        <br>
        <strong>Te saluda cordialmente,</strong>
        <p>Asociación ASOPAGUA</p>
        </body>
        </html>";

        // Mail it
        mail($mailto, $mailSubject, $message, $headers);
        echo json_encode($dPedidos);
    }
    public static function generateReporteUsuario($data)
    {
        $arrayData = array();
        for($i = 0; $i < count($data); $i++){
            array_push($arrayData,["dni" => $data[$i]["dni"] , "nombre" => $data[$i]["nombre"],
            "apellido" => $data[$i]["apellido"], "telefono" => $data[$i]["telefono"], "celular" => $data[$i]["celular"],
            "email" => $data[$i]["email"], "rol" => $data[$i]["rol"], "registrado_por" => $data[$i]["registrado_por"], "fecha_registro" => $data[$i]["fecha_creacion"]]);
        }
        $salida = "";
        $salida .= '<table>
    <thead>
        <tr>
            <th  colspan="9" style="background-color: #337ab7; color: white; height:45px;">' . utf8_decode("Reporte de Usuarios") . '</th>
        </tr>
        <tr>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">DNI</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Nombre</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Apellido</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">'. utf8_decode("Teléfono") .'</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Celular</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Email</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Rol</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Registrado por</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Registrado el</th>
        </tr>
    </thead>
    <tbody>
    ';
    for($i= 0; $i < count($arrayData); $i++){
        $salida .= "<tr style='text-align:center; height: 40px;'>
        <td>" . $arrayData[$i]["dni"] ."</td>
        <td>" . utf8_decode($arrayData[$i]["nombre"]) ."</td>
        <td>" . utf8_decode($arrayData[$i]["apellido"]) ."</td>
        <td>" . $arrayData[$i]["telefono"] ."</td>
        <td>" . $arrayData[$i]["celular"] ."</td>
        <td>" . $arrayData[$i]["email"] ."</td>
        <td>" . $arrayData[$i]["rol"] ."</td>
        <td>" . $arrayData[$i]["registrado_por"] ."</td>
        <td>" . $arrayData[$i]["fecha_registro"] ."</td>";
    }
        $salida .= "</tbody></table>";
        header("Content-type: application/xls; charset=UTF-8");
        header("Content-Disposition: attachment; filename=reporte_administracion_" . time() . ".xls");
        echo $salida;
    }
    public static function generateReporteProductos($data){
        $arrayData = array();
        for($i = 0; $i < count($data); $i++){
            array_push($arrayData,["codigo" => $data[$i]["codigo"] , "nombre" => $data[$i]["nombre"],
            "descripcion" => $data[$i]["descripcion"], "stock" => $data[$i]["stock"], "precio_publico" => $data[$i]["precio_publico"],
            "precio_mayorista" => $data[$i]["precio_mayorista"], "d_precio_mayorista" => $data[$i]["d_precio_mayorista"], "precio_minorista" => $data[$i]["precio_minorista"], "d_precio_minorista" => $data[$i]["d_precio_minorista"], "fecha_add" => $data[$i]["fecha_add"]]);
        }
        $salida = "";
        $salida .= '<table>
    <thead>
        <tr>
            <th  colspan="10" style="background-color: #337ab7; color: white; height:45px;">' . utf8_decode("Reporte de Productos") . '</th>
        </tr>
        <tr>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">' .utf8_decode("Código") .'</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Nombre</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">'.utf8_decode("Descripción").'</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Stock</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Precio</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Al por mayor</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Detalle</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Al por menor</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Detalle</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Agregado el</th>
        </tr>
    </thead>
    <tbody>
    ';
    for($i= 0; $i < count($arrayData); $i++){
        $salida .= "<tr style='text-align:center; height: 40px;'>
        <td>" . $arrayData[$i]["codigo"] ."</td>
        <td>" . $arrayData[$i]["nombre"] ."</td>
        <td>" . utf8_decode($arrayData[$i]["descripcion"]) ."</td>
        <td>" . $arrayData[$i]["stock"] ."</td>
        <td>" . $arrayData[$i]["precio_publico"] ."</td>
        <td>" . $arrayData[$i]["precio_mayorista"] ."</td>
        <td>" . $arrayData[$i]["d_precio_mayorista"] ."</td>
        <td>" . $arrayData[$i]["precio_minorista"] ."</td>
        <td>" . $arrayData[$i]["d_precio_minorista"] ."</td>
        <td>" . $arrayData[$i]["fecha_add"] ."</td>";
    }
        $salida .= "</tbody></table>";
        header("Content-type: application/xls; charset=UTF-8");
        header("Content-Disposition: attachment; filename=reporte_administracion_productos" . time() . ".xls");
        echo $salida;
    }
    public static function generateReporteCategorias($data){
        $arrayData = array();
        for($i = 0; $i < count($data); $i++){
            array_push($arrayData,["id" => $data[$i]["id"] , "categoria" => $data[$i]["categoria"]]);
        }
        $salida = "";
        $salida .= '<table>
    <thead>
        <tr>
            <th  colspan="2" style="background-color: #337ab7; color: white; height:45px;">' . utf8_decode("Reporte de Categorías") . '</th>
        </tr>
        <tr>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">ID</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">'.utf8_decode("Categoría").'</th>
        </tr>
    </thead>
    <tbody>
    ';
    for($i= 0; $i < count($arrayData); $i++){
        $salida .= "<tr style='text-align:center; height: 40px;'>
        <td>" . $arrayData[$i]["id"] ."</td>
        <td>" . utf8_decode($arrayData[$i]["categoria"]) ."</td>";
    }
        $salida .= "</tbody></table>";
        header("Content-type: application/xls; charset=UTF-8");
        header("Content-Disposition: attachment; filename=reporte_administracion_categorias.xls");
        echo $salida;
    }
    public static function generateReporteClientes($data){
        $arrayData = array();
        for($i = 0; $i < count($data); $i++){
            array_push($arrayData,["dni" => $data[$i]["dni"] , "nombre" => $data[$i]["nombre"],
        "apellido" => $data[$i]["apellido"], "telefono" => $data[$i]["telefono"], "celular" => $data[$i]["celular"], "email" => $data[$i]["email"], "provincia" => $data[$i]["provincia"], "canton" => $data[$i]["canton"], "parroquia" => $data[$i]["parroquia"], "direccion" => $data[$i]["direccion"]]);
        }
        $salida = "";
        $salida .= '<table>
    <thead>
        <tr>
            <th  colspan="10" style="background-color: #337ab7; color: white; height:45px;">' . utf8_decode("Reporte de Clientes") . '</th>
        </tr>
        <tr>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">DNI</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Nombre</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Apellido</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">'.utf8_decode("Teléfono").'</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Celular</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Email</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Provincia</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">' . utf8_decode("Cantón") . '</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Parroquia</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">' . utf8_decode("Dirección") . '</th>
        </tr>
    </thead>
    <tbody>
    ';
    for($i= 0; $i < count($arrayData); $i++){
        $salida .= "<tr style='text-align:center; height: 40px;'>
        <td>" . $arrayData[$i]["dni"] ."</td>
        <td>" . utf8_decode($arrayData[$i]["nombre"]) ."</td>
        <td>" . utf8_decode($arrayData[$i]["apellido"]) ."</td>
        <td>" . $arrayData[$i]["telefono"] ."</td>
        <td>" . $arrayData[$i]["celular"] ."</td>
        <td>" . $arrayData[$i]["email"] ."</td>
        <td>" . utf8_decode($arrayData[$i]["provincia"]) ."</td>
        <td>" . utf8_decode($arrayData[$i]["canton"]) ."</td>
        <td>" . utf8_decode($arrayData[$i]["parroquia"]) ."</td>
        <td>" . utf8_decode($arrayData[$i]["direccion"]) ."</td>";
    }
        $salida .= "</tbody></table>";
        header("Content-type: application/xls; charset=UTF-8");
        header("Content-Disposition: attachment; filename=reporte_administracion_clientes.xls");
        echo $salida;   
    }
    public static function generateReportePedidos($data){
        $arrayData = array();
        for($i = 0; $i < count($data); $i++){
            array_push($arrayData,["codigo" => $data[$i]["codigo"] , "id_cliente" => $data[$i]["id_cliente"],
        "total" => $data[$i]["total"], "fecha_creacion" => $data[$i]["fecha_creacion"], "estado" => $data[$i]["estado"]]);
        }
        $salida = "";
        $salida .= '<table>
    <thead>
        <tr>
            <th  colspan="5" style="background-color: #337ab7; color: white; height:45px;">' . utf8_decode("Reporte de Pedidos") . '</th>
        </tr>
        <tr>
        <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">' . utf8_decode("Código") . '</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Cliente(ID)</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Total</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Fecha</th>
            <th style="background-color: #337ab7; color: white; width: 400px; height:45px;">Estado</th>
        </tr>
    </thead>
    <tbody>
    ';
    for($i= 0; $i < count($arrayData); $i++){
        $salida .= "<tr style='text-align:center; height: 40px;'>
        <td>" . $arrayData[$i]["codigo"] ."</td>
        <td>" . $arrayData[$i]["id_cliente"] ."</td>
        <td>" . $arrayData[$i]["total"] ."</td>
        <td>" . $arrayData[$i]["fecha_creacion"] ."</td>
        <td>" . $arrayData[$i]["estado"] ."</td>";
    }
        $salida .= "</tbody></table>";
        header("Content-type: application/xls; charset=UTF-8");
        header("Content-Disposition: attachment; filename=reporte_administracion_pedidos.xls");
        echo $salida;  
    }
}
if (isset($_POST["detalles"])) {
    $sendEmail = new Reportes();
    $sendEmail->sendReporteEmail($_POST["detalles"]);
}
if(isset($_GET["reporte"])){
    $reporte_de = $_GET["reporte"];
    $getInformation = ModelReportes::getInformation($reporte_de);
    if($reporte_de == "usuarios"){
        Reportes::generateReporteUsuario($getInformation);
    }
    if($reporte_de == "productos"){
        Reportes::generateReporteProductos($getInformation);
    }
    if($reporte_de == "categorias"){
        Reportes::generateReporteCategorias($getInformation);
    }
    if($reporte_de == "clientes"){
        Reportes::generateReporteClientes($getInformation);
    }
    if($reporte_de == "pedidos"){
        Reportes::generateReportePedidos($getInformation);
    }
}
