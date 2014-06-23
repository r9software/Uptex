<?php
Doo::loadCore('db/DooModel');

class EstanciaBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idalumno;

    /**
     * @var int Max length is 11.
     */
    public $idmaestro;

    /**
     * @var date
     */
    public $fecha;

    /**
     * @var varchar Max length is 45.
     */
    public $empresa;

    /**
     * @var varchar Max length is 45.
     */
    public $telefono;

    /**
     * @var varchar Max length is 45.
     */
    public $responsable;

    /**
     * @var tinyint Max length is 4.
     */
    public $tipo;

    public $_table = 'estancia';
    public $_primarykey = 'idmaestro';
    public $_fields = array('idalumno','idmaestro','fecha','empresa','telefono','responsable','tipo');

    public function getVRules() {
        return array(
                'idalumno' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'idmaestro' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'fecha' => array(
                        array( 'date' ),
                        array( 'optional' ),
                ),

                'empresa' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'telefono' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'responsable' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'tipo' => array(
                        array( 'integer' ),
                        array( 'maxlength', 4 ),
                        array( 'optional' ),
                )
            );
    }

}