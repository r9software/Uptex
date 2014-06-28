<?php
Doo::loadCore('db/DooModel');

class FechaBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idfechas;

    /**
     * @var date
     */
    public $fecha;

    /**
     * @var varchar Max length is 200.
     */
    public $descripcion;

    /**
     * @var int Max length is 11.
     */
    public $idperiodo;

    public $_table = 'fecha';
    public $_primarykey = 'idfechas';
    public $_fields = array('idfechas','fecha','descripcion','idperiodo');

    public function getVRules() {
        return array(
                'idfechas' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'fecha' => array(
                        array( 'date' ),
                        array( 'optional' ),
                ),

                'descripcion' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'idperiodo' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                )
            );
    }

}