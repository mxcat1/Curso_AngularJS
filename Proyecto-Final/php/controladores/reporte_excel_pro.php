<?php
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 22/10/2018
 * Time: 22:31
 */
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte_Productos.xls");
require_once "../modelos/productos.php";

$productos= new productos();

$l_pro=$productos->mostrar_productos();

$html_texto="<style>
                table, th, td {
                    border: 1px solid black;
                }
                th{
                    background: #5fcbc4;
                }
             </style>
             <h2>PRODUCTOS</h2>
                <table>
                        <tr>
                            <th>ID PRODUCTO</th>
                            <th>NOMBRE PRODUCTO</th>
                            <th>DESCRIPCION</th>
                        </tr>";
foreach ($l_pro as $elem){
    $html_texto.="<tr>
                      <td>".$elem['id_producto']."</td>
                      <td>".$elem['nombre_pro']."</td>
                      <td>".$elem['descripcion_pro']."</td>
                  </tr>";
}

$html_texto.="</table>";
echo $html_texto;