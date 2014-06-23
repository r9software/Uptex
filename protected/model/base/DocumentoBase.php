<?php
Doo::loadCore('db/DooModel');

class DocumentoBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $iddocumento;

    /**
     * @var varchar Max length is 45.
     */
    public $nombre;

    public $_table = 'documento';
    public $_primarykey = 'iddocumento';
    public $_fields = array('iddocumento','nombre');

    public function getVRules() {
        return array(
                'iddocumento' => array(
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