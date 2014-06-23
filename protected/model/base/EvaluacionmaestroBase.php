<?php
Doo::loadCore('db/DooModel');

class EvaluacionmaestroBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idmaestro;

    /**
     * @var int Max length is 11.
     */
    public $idalumno;

    /**
     * @var varchar Max length is 500.
     */
    public $comentario;

    /**
     * @var int Max length is 11.
     */
    public $calificacion;

    /**
     * @var varchar Max length is 45.
     */
    public $evaluacionmaestrocol;

    /**
     * @var int Max length is 11.
     */
    public $idmateria;

    /**
     * @var int Max length is 11.
     */
    public $idperiodo;

    public $_table = 'evaluacionmaestro';
    public $_primarykey = 'idperiodo';
    public $_fields = array('idmaestro','idalumno','comentario','calificacion','evaluacionmaestrocol','idmateria','idperiodo');

    public function getVRules() {
        return array(
                'idmaestro' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'idalumno' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'comentario' => array(
                        array( 'maxlength', 500 ),
                        array( 'optional' ),
                ),

                'calificacion' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'evaluacionmaestrocol' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'idmateria' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'idperiodo' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                )
            );
    }

}