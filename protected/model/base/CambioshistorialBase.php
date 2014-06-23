<?php
Doo::loadCore('db/DooModel');

class CambioshistorialBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idcambioshistorial;

    /**
     * @var int Max length is 11.
     */
    public $idadministrativo;

    /**
     * @var varchar Max length is 45.
     */
    public $nombre;

    /**
     * @var varchar Max length is 500.
     */
    public $descripcion;

    /**
     * @var varchar Max length is 45.
     */
    public $valoranterior;

    /**
     * @var varchar Max length is 45.
     */
    public $valornuevo;

    /**
     * @var varchar Max length is 45.
     */
    public $fecha;

    /**
     * @var varchar Max length is 45.
     */
    public $columna;

    /**
     * @var int Max length is 11.
     */
    public $idaprobacion;

    /**
     * @var varchar Max length is 100.
     */
    public $urloficio;

    public $_table = 'cambioshistorial';
    public $_primarykey = 'idaprobacion';
    public $_fields = array('idcambioshistorial','idadministrativo','nombre','descripcion','valoranterior','valornuevo','fecha','columna','idaprobacion','urloficio');

    public function getVRules() {
        return array(
                'idcambioshistorial' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'idadministrativo' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'nombre' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'descripcion' => array(
                        array( 'maxlength', 500 ),
                        array( 'optional' ),
                ),

                'valoranterior' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'valornuevo' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'fecha' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'columna' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'idaprobacion' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'urloficio' => array(
                        array( 'maxlength', 100 ),
                        array( 'optional' ),
                )
            );
    }

}