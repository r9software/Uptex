<?php
Doo::loadCore('db/DooModel');

class AlumnocarreraBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idalumno;

    /**
     * @var int Max length is 11.
     */
    public $idcarrera;

    public $_table = 'alumnocarrera';
    public $_primarykey = 'idcarrera';
    public $_fields = array('idalumno','idcarrera');

    public function getVRules() {
        return array(
                'idalumno' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'idcarrera' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                )
            );
    }

}