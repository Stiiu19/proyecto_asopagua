<?php
require 'conexion.php';
date_default_timezone_set("America/Guayaquil");
class ModelClientes{
    public static function mdlGetClientes()
    {
        try {
            $query = Conexion::conectar()->prepare("SELECT * FROM clientes");
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
        }
    }
    public static function mdlVerificateEmail($email){
        try{
            $query = Conexion::conectar()->prepare("SELECT * FROM clientes WHERE email=:email");
            $query->execute(["email" => $email]);
            return ($query->rowCount() > 0)  ? true : false;
        }catch(PDOException $e){
            return false;
        }
    }
    public static function mdlVerificateDNI($dni){
        try{
            $query = Conexion::conectar()->prepare("SELECT * FROM clientes WHERE dni=:dni");
            $query->execute(["dni" => $dni]);
            return ($query->rowCount() > 0)  ? true : false;
        }catch(PDOException $e){
            return false;
        }
    }
    public static function mdlGetDataCliente($idCliente){
        try{
            $query = Conexion::conectar()->prepare("SELECT * FROM clientes WHERE id=:idCliente");
            $query->execute(["idCliente" => $idCliente]);
            return $query->fetch();
        }catch(PDOException $e){

        }
    }
    public static function mdlAgregarCliente($datos){
        try{
            $query = Conexion::conectar()->prepare("INSERT INTO clientes VALUES(0,:dni,:nombre,:apellido,:telefono,:celular,:email,:provincia,:canton,:parroquia,:direccion)");
            $query->execute([
                "dni" => $datos["regDNICliente"],
                "nombre" => $datos["regNombreCliente"],
                "apellido" => $datos["regApellidoCliente"],
                "telefono" => $datos["regTelefonoCliente"],
                "celular" => $datos["regCelularCliente"],
                "email" => $datos["regEmailCliente"],
                "provincia" => $datos["regProvinciaCliente"],
                "canton" => $datos["regCantonCliente"],
                "parroquia" => $datos["regParroquiaCliente"],
                "direccion" => $datos["regDireccionCliente"]
            ]);
            return ($query->rowCount() > 0) ? true : false;
        }catch(PDOException $e){
            return false;
        }
    }
    public static function mdlDeleteCliente($idCliente){
        try{
            $action =  ModelClientes::mdlDeletePedidosCliente($idCliente);
            if($action == true){
                $query = Conexion::conectar()->prepare("DELETE FROM clientes WHERE id=:idCliente");
                $query->execute(["idCliente" => $idCliente]);
                return ($query->rowCount()  > 0) ? true : false;
            }else{
                return "hola";
            }
        }catch(PDOException $e){
            return "hola: " . $e->getMessage();
        }
    }
    public static function mdlDeletePedidosCliente($idCliente){
        try{
            $query = Conexion::conectar()->prepare("SELECT id FROM pedidos WHERE id_cliente=:idCliente");
            $query->execute(["idCliente" => $idCliente]);
            $action =  ModelClientes::mdlDeleteDetallePedidoCliente($query->fetchAll());
            if($action == true){
                $queryDeletePedidos = Conexion::conectar()->prepare("DELETE FROM pedidos WHERE id_cliente=:idCliente");
                $queryDeletePedidos->execute(["idCliente" => $idCliente]);
                if($queryDeletePedidos->rowCount() > 0){
                    return true;
                }else{
                    return false;
                }
            }
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
    public static function mdlDeleteDetallePedidoCliente($lista_pedidos){
        $bandera = false;
        for($i = 0; $i < count($lista_pedidos); $i++){
            $id = $lista_pedidos[$i]["id"];
            try{
                $query = Conexion::conectar()->prepare("DELETE FROM detalle_pedido WHERE id_pedido=:idPedido");
                $query->execute(["idPedido" => $id]);
                $bandera = true;
            }catch(PDOException $e){
                $bandera = false;
            }
        }
        return $bandera;
    }
    public static function mdlEditarCliente($datos){
        try{
            $query = Conexion::conectar()->prepare("UPDATE clientes set dni=:dni,nombre=:nombre,apellido=:apellido,telefono=:telefono,celular=:celular,email=:email,provincia=:provincia,canton=:canton,parroquia=:parroquia,direccion=:direccion WHERE id=:idCliente");
            $query->execute([
                "dni" => $datos["regDNICliente"],
                "nombre" => $datos["regNombreCliente"],
                "apellido" => $datos["regApellidoCliente"],
                "telefono" => $datos["regTelefonoCliente"],
                "celular" => $datos["regCelularCliente"],
                "email" => $datos["regEmailCliente"],
                "provincia" => $datos["regProvinciaCliente"],
                "canton" => $datos["regCantonCliente"],
                "parroquia" => $datos["regParroquiaCliente"],
                "direccion" => $datos["regDireccionCliente"],
                "idCliente" => $datos["idCliente"]
            ]);
            return ($query->rowCount() > 0) ? true : false;
        }catch(PDOException $e){
            return false;
        }
    }
    public static function mdlAgregarClienteCart($datos){
        try{
            $query = Conexion::conectar()->prepare("INSERT INTO clientes VALUES(0,:dni,:nombre,:apellido,:telefono,:celular,:email,:provincia,:canton,:parroquia,:direccion)");
            $query->execute([
                "dni" => $datos["regDNICliente"],
                "nombre" => $datos["regNombreCliente"],
                "apellido" => $datos["regApellidoCliente"],
                "telefono" => $datos["regTelefonoCliente"],
                "celular" => $datos["regCelularCliente"],
                "email" => $datos["regEmailCliente"],
                "provincia" => $datos["regProvinciaCliente"],
                "canton" => $datos["regCantonCliente"],
                "parroquia" => $datos["regParroquiaCliente"],
                "direccion" => $datos["regDireccionCliente"]
            ]);
            if($query->rowCount() > 0){
                $query2 = Conexion::conectar()->prepare("SELECT * FROM clientes ORDER BY id DESC LIMIT 1");
                $query2->execute();
                if($query2->rowCount() > 0){
                    return $query2->fetch();
                }else{
                    return [];
                }
            }else{
                return [];
            }
        }catch(PDOException $e){
            return [];
        }
    }
    public static function mdlVerificateCliente($dniVerificate,$emailVerificate){
        try{
            $query = Conexion::conectar()->prepare("SELECT * FROM clientes WHERE dni=:dniCliente AND email=:emailCliente");
            $query->execute(["dniCliente" => $dniVerificate, "emailCliente" => $emailVerificate]);
            return ($query->rowCount()> 0) ? $query->fetchAll() : [];
        }catch(PDOException $e){

        }
    }
}