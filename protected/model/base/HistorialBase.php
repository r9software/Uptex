<?php
Doo::loadCore('db/DooModel');

class HistorialBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idmateria;

    /**
     * @var int Max length is 11.
     */
    public $idgrupo;

    /**
     * @var int Max length is 11.
     */
    public $idhorario;

    /**
     * @var int Max length is 11.
     */
    public $idmaestro;

    /**
     * @var int Max length is 11.
     */
    public $idalumno;

    /**
     * @var int Max length is 11.
     */
    public $idperiodo;

    /**
     * @var int Max length is 11.
     */
    public $calificacion;

    public $_table = 'historial';
    public $_primarykey = 'idperiodo';
    public $_fields = array('idmateria','idgrupo','idhorario','idmaestro','idalumno','idperiodo','calificacion');

    public function getVRules() {
        return array(
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

                'idhorario' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

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

                'idperiodo' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'calificacion' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                )
            );
    }

}