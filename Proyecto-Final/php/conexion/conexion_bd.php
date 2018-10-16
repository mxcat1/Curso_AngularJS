<?php
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 15/10/2018
 * Time: 14:09
 */

require_once "config.php";

class conexion_bd{

    protected $conedb;

    /**
     * conexion_bd constructor.
     */
    public function __construct(){
        $this->conedb = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAMEDB);
        if ($this->conedb->errno){
            echo "ERROR EN LA CONEXXION ". $this->conedb->error;
        }
        $this->conedb->query("SET NAMES 'utf8'");
        $this->conedb->set_charset(DB_STRUTF);

    }
}