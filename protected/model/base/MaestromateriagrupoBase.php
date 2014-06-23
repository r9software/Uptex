<?php
Doo::loadCore('db/DooModel');

class MaestromateriagrupoBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idmaestro;

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
    public $idperiodo;

    /**
     * @var int Max length is 11.
     */
    public $idmaestromateriagrupo;

    public $_table = 'maestromateriagrupo';
    public $_primarykey = 'idmaestromateriagrupo';
    public $_fields = array('idmaestro','idmateria','idgrupo','idperiodo','idmaestromateriagrupo');

    public function getVRules() {
        return array(
                'idmaestro' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

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

                'idperiodo' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'idmaestromateriagrupo' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                )
            );
    }

}