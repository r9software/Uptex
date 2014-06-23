<?php
Doo::loadCore('db/DooModel');

class MaestroacademiaBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idmaestro;

    /**
     * @var int Max length is 11.
     */
    public $idacademia;

    public $_table = 'maestroacademia';
    public $_primarykey = 'idacademia';
    public $_fields = array('idmaestro','idacademia');

    public function getVRules() {
        return array(
                'idmaestro' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'idacademia' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                )
            );
    }

}