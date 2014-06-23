<?php
Doo::loadCore('db/DooModel');

class AlumnodocumentoBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idalumno;

    /**
     * @var int Max length is 11.
     */
    public $iddocumento;

    public $_table = 'alumnodocumento';
    public $_primarykey = 'iddocumento';
    public $_fields = array('idalumno','iddocumento');

    public function getVRules() {
        return array(
                'idalumno' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'iddocumento' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                )
            );
    }

}