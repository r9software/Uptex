<?php
Doo::loadCore('db/DooModel');

class MateriaBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idmateria;

    /**
     * @var varchar Max length is 45.
     */
    public $nombre;

    /**
     * @var text
     */
    public $descripcion;

    /**
     * @var int Max length is 11.
     */
    public $idcarrera;

    public $_table = 'materia';
    public $_primarykey = 'idcarrera';
    public $_fields = array('idmateria','nombre','descripcion','idcarrera');

    public function getVRules() {
        return array(
                'idmateria' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'nombre' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'descripcion' => array(
                        array( 'optional' ),
                ),

                'idcarrera' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                )
            );
    }

}