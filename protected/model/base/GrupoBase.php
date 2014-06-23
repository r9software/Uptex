<?php
Doo::loadCore('db/DooModel');

class GrupoBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idgrupo;

    /**
     * @var varchar Max length is 45.
     */
    public $clave;

    /**
     * @var int Max length is 11.
     */
    public $nivel;

    /**
     * @var varchar Max length is 10.
     */
    public $turno;

    public $_table = 'grupo';
    public $_primarykey = 'idgrupo';
    public $_fields = array('idgrupo','clave','nivel','turno');

    public function getVRules() {
        return array(
                'idgrupo' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'clave' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'nivel' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'turno' => array(
                        array( 'maxlength', 10 ),
                        array( 'optional' ),
                )
            );
    }

}