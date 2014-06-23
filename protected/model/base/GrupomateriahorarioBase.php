<?php
Doo::loadCore('db/DooModel');

class GrupomateriahorarioBase extends DooModel{

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

    public $_table = 'grupomateriahorario';
    public $_primarykey = 'idhorario';
    public $_fields = array('idmateria','idgrupo','idhorario');

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
                )
            );
    }

}