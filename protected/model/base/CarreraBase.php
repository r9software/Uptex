<?php
Doo::loadCore('db/DooModel');

class CarreraBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idcarrera;

    /**
     * @var varchar Max length is 45.
     */
    public $nombre;

    public $_table = 'carrera';
    public $_primarykey = 'idcarrera';
    public $_fields = array('idcarrera','nombre');

    public function getVRules() {
        return array(
                'idcarrera' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'nombre' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                )
            );
    }

}