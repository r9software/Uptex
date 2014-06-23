<?php
Doo::loadCore('db/DooModel');

class HorarioBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idhorario;

    /**
     * @var varchar Max length is 45.
     */
    public $dia;

    /**
     * @var varchar Max length is 45.
     */
    public $hora;

    public $_table = 'horario';
    public $_primarykey = 'idhorario';
    public $_fields = array('idhorario','dia','hora');

    public function getVRules() {
        return array(
                'idhorario' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'dia' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'hora' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                )
            );
    }

}