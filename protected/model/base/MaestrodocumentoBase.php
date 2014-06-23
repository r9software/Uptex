<?php
Doo::loadCore('db/DooModel');

class MaestrodocumentoBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idmaestrodomaterigrupo;

    /**
     * @var int Max length is 11.
     */
    public $iddocumento;

    public $_table = 'maestrodocumento';
    public $_primarykey = 'iddocumento';
    public $_fields = array('idmaestrodomaterigrupo','iddocumento');

    public function getVRules() {
        return array(
                'idmaestrodomaterigrupo' => array(
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