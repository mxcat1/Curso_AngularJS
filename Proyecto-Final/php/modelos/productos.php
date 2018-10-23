<?php
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 15/10/2018
 * Time: 14:09
 */

require_once "../conexion/conexion_bd.php";

class productos extends conexion_bd {

    private $nombre;

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }
    private $descripcion;

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    /**
     * productos constructor.
     * @param $nombre
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function mostrar_productos(){
        $sql="SELECT * FROM productos";
        $consulta=$this->conedb->prepare($sql);
        $consulta->execute();
        $resultado=$consulta->get_result();
        $lista=array();

        while ($fila=$resultado->fetch_assoc()){
            $lista[]=$fila;
        }
        return $lista;

    }
    public function nuevo_producto($nombre,$descripcion){
        $sql="INSERT INTO tienda_proyecto.productos(nombre_pro, descripcion_pro) VALUES (?,?)";
        $consulta=$this->conedb->prepare($sql);
        $consulta->bind_param("ss",$nombre,$descripcion);
        $consulta->execute();
        return json_encode(['producto' => [
            'id_producto'=>$this->conedb->insert_id,
            'nombre_pro'=>$nombre,
            'descripcion_pro'=>$descripcion
        ]]);
    }
    public function eliminar_producto($id_producto){
        $sql="DELETE FROM tienda_proyecto.productos WHERE id_producto=?";
        $consulta=$this->conedb->prepare($sql);
        $consulta->bind_param("i",$id_producto);
        $consulta->execute();
    }
    public function actualizar_producto($nom_pro,$desc_pro,$id){
        $sql="UPDATE productos set nombre_pro = ?, descripcion_pro=? where id_producto=?";
        $consulta=$this->conedb->prepare($sql);
        $consulta->bind_param('ssi',$nom_pro,$desc_pro,$id);
        $consulta->execute();
    }


}