<?php
Doo::loadCore('db/DooModel');

class AcademiacarreraBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idacademia;

    /**
     * @var int Max length is 11.
     */
    public $idcarrera;

    public $_table = 'academiacarrera';
    public $_primarykey = 'idcarrera';
    public $_fields = array('idacademia','idcarrera');

    public function getVRules() {
        return array(
                'idacademia' => array(
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