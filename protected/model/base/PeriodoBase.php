<?php
Doo::loadCore('db/DooModel');

class PeriodoBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idperiodo;

    /**
     * @var varchar Max length is 45.
     */
    public $nombre;

    public $_table = 'periodo';
    public $_primarykey = 'idperiodo';
    public $_fields = array('idperiodo','nombre');

    public function getVRules() {
        return array(
                'idperiodo' => array(
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