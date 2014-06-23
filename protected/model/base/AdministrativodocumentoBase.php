<?php
Doo::loadCore('db/DooModel');

class AdministrativodocumentoBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idadministrativo;

    /**
     * @var int Max length is 11.
     */
    public $iddocumento;

    public $_table = 'administrativodocumento';
    public $_primarykey = 'iddocumento';
    public $_fields = array('idadministrativo','iddocumento');

    public function getVRules() {
        return array(
                'idadministrativo' => array(
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