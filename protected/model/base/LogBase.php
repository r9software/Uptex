<?php
Doo::loadCore('db/DooModel');

class LogBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idlog;

    /**
     * @var varchar Max length is 45.
     */
    public $nombre;

    /**
     * @var varchar Max length is 45.
     */
    public $descripcion;

    /**
     * @var varchar Max length is 45.
     */
    public $valor;

    /**
     * @var varchar Max length is 45.
     */
    public $fecha;

    /**
     * @var int Max length is 11.
     */
    public $idusuario;

    /**
     * @var varchar Max length is 45.
     */
    public $ip;

    public $_table = 'log';
    public $_primarykey = 'idusuario';
    public $_fields = array('idlog','nombre','descripcion','valor','fecha','idusuario','ip');

    public function getVRules() {
        return array(
                'idlog' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'nombre' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'descripcion' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'valor' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'fecha' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'idusuario' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'ip' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                )
            );
    }

}