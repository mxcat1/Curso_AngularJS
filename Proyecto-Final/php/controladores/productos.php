<?php
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 15/10/2018
 * Time: 14:09
 */
require_once "../modelos/productos.php";

$productos= new productos();

//solo en angularjs funciona estas
//dos siguientes lineas para enviar datos
//no se usa el metodo post ni el get

$datos=json_decode(file_get_contents("php://input"));
$opcion=$datos->opcion;

switch ($opcion){
    case "mostrar_productos":

        $lista_productos=json_encode($productos->mostrar_productos());
        echo $lista_productos;

        break;
    case "nuevo_producto":

        $nombre_pro=(isset($datos->producto->nombre_pro)? $datos->producto->nombre_pro : null);
        $descripcion_pro=(isset($datos->producto->descripcion_pro)? $datos->producto->descripcion_pro : null);
        $errores=['errors'=> []];



        if ($nombre_pro == null || $descripcion_pro== null){
            http_response_code(400);
            if ($nombre_pro == null){
                array_push($errores['errors'],"El campo de nombre es obligatorio");
            }
            if ($descripcion_pro == null){
                array_push($errores['errors'],"El campo de descripcion es obligatorio");
            }
//            echo json_encode(['errors' => ["El campo de nombre es obligatorio","El campo de Descripcion es obligatorio"]]);
            echo json_encode($errores);
        }else{

            echo $productos->nuevo_producto($nombre_pro,$descripcion_pro);
        }

        break;
    case "eliminar_producto":

        $id_producto=(isset($datos->producto->id_producto) ? $datos->producto->id_producto: null);

        if ($id_producto== null){
            http_response_code(400);
            echo json_encode(["errors"=>["No se pudo eliminar el producto",$id_producto]]);
        }else{
            $productos->eliminar_producto($id_producto);
        }

        break;
    case "actualizar_producto":
        $nom_pro=(isset($datos->producto->nombre_pro) ? $datos->producto->nombre_pro:null);
        $desc_pro=(isset($datos->producto->descripcion_pro) ? $datos->producto->descripcion_pro:null);
        $id=(isset($datos->producto->id_producto) ? $datos->producto->id_producto:null);
        $errores=['errors'=>[]];

        if ($nom_pro == null || $desc_pro==null || $id==null){
            http_response_code(400);
            if ($nom_pro == null){
                array_push($errores['errors'],'El Campo de Nombre es Obligatorio');
            }
            if ($desc_pro==null){
                array_push($errores['errors'],"El campo de descripcion es obligatorio");
            }
            if ($id==null){
                array_push($errores['errors'],"No se encontro el ID del Producto seleccionado");
            }
        }else{
            $productos->actualizar_producto($nom_pro,$desc_pro,$id);
        }

        break;
}