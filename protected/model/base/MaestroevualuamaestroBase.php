<?php
Doo::loadCore('db/DooModel');

class MaestroevualuamaestroBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idmaestro;

    /**
     * @var int Max length is 11.
     */
    public $idmaestroevalua;

    /**
     * @var varchar Max length is 45.
     */
    public $comentario;

    /**
     * @var int Max length is 11.
     */
    public $calificacion;

    /**
     * @var int Max length is 11.
     */
    public $idperiodo;

    public $_table = 'maestroevualuamaestro';
    public $_primarykey = 'idperiodo';
    public $_fields = array('idmaestro','idmaestroevalua','comentario','calificacion','idperiodo');

    public function getVRules() {
        return array(
                'idmaestro' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'idmaestroevalua' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'comentario' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'calificacion' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
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