<?php
Doo::loadCore('db/DooModel');

class ConceptoBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idconcepto;

    /**
     * @var varchar Max length is 45.
     */
    public $descripcion;

    /**
     * @var double
     */
    public $costo;

    /**
     * @var varchar Max length is 45.
     */
    public $nombre;

    public $_table = 'concepto';
    public $_primarykey = 'idconcepto';
    public $_fields = array('idconcepto','descripcion','costo','nombre');

    public function getVRules() {
        return array(
                'idconcepto' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'descripcion' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'costo' => array(
                        array( 'float' ),
                        array( 'optional' ),
                ),

                'nombre' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                )
            );
    }

}