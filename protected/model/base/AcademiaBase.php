<?php
Doo::loadCore('db/DooModel');

class AcademiaBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idacademia;

    /**
     * @var varchar Max length is 45.
     */
    public $nombre;

    /**
     * @var int Max length is 11.
     */
    public $idmaestro;

    public $_table = 'academia';
    public $_primarykey = 'idmaestro';
    public $_fields = array('idacademia','nombre','idmaestro');

    public function getVRules() {
        return array(
                'idacademia' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'nombre' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'idmaestro' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                )
            );
    }

}