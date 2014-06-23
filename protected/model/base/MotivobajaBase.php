<?php
Doo::loadCore('db/DooModel');

class MotivobajaBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idmotivobaja;

    /**
     * @var int Max length is 11.
     */
    public $idalumno;

    /**
     * @var varchar Max length is 500.
     */
    public $motivo;

    /**
     * @var int Max length is 11.
     */
    public $idautorizacion;

    /**
     * @var int Max length is 11.
     */
    public $idadministracion;

    /**
     * @var varchar Max length is 500.
     */
    public $fecha;

    public $_table = 'motivobaja';
    public $_primarykey = 'idadministracion';
    public $_fields = array('idmotivobaja','idalumno','motivo','idautorizacion','idadministracion','fecha');

    public function getVRules() {
        return array(
                'idmotivobaja' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'idalumno' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'motivo' => array(
                        array( 'maxlength', 500 ),
                        array( 'optional' ),
                ),

                'idautorizacion' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'idadministracion' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'fecha' => array(
                        array( 'maxlength', 500 ),
                        array( 'optional' ),
                )
            );
    }

}