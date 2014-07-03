<?php
Doo::loadCore('db/DooModel');

class AsistenciasBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idalumno;

    /**
     * @var int Max length is 11.
     */
    public $idmaestro;

    /**
     * @var int Max length is 11.
     */
    public $idmateria;

    /**
     * @var int Max length is 11.
     */
    public $idgrupo;

    /**
     * @var date
     */
    public $fecha;

    /**
     * @var tinyint Max length is 4.
     */
    public $asistencia;

    /**
     * @var int Max length is 11.
     */
    public $idperiodo;

    public $_table = 'asistencias';
    public $_primarykey = 'idperiodo';
    public $_fields = array('idalumno','idmaestro','idmateria','idgrupo','fecha','asistencia','idperiodo');
   
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

                'idmateria' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'idgrupo' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'fecha' => array(
                        array( 'date' ),
                        array( 'notnull' ),
                ),

                'asistencia' => array(
                        array( 'integer' ),
                        array( 'maxlength', 4 ),
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