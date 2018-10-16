<?php
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 03/10/2018
 * Time: 21:25
 */
//
//$lista= array(
//    array(
//        "dato1"=>"Juan",
//        "dato2"=>"Jose"),
//    array(
//        "dato1"=>"Pedro",
//        "dato2"=>"Mauricio"
//    )
//
//);

$con = new mysqli("localhost","root","XXmxcatXX","bdferreteria");
$con->set_charset("utf8");
$con->query("SET NAMES 'utf8'");

$sql= $con->query("Select Codigo_Producto,Descripcion_Producto from productos limit 0,100");

while ($res=$sql->fetch_assoc()){
    $lista[]=$res;
}
//
//foreach ($lista as $datos){
//    echo "- ".$datos["Codigo_Producto"]." - ".$datos["Descripcion_Producto"];
//
//}

//var_dump(json_encode($lista));

$lista1 = json_encode($lista);
echo $lista1;
//print (json_encode($lista));