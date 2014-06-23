<?php
Doo::loadCore('db/DooModel');

class ExcepcionpagoBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idexcepcion;

    /**
     * @var int Max length is 11.
     */
    public $idconcepto;

    /**
     * @var date
     */
    public $fechapago;

    /**
     * @var int Max length is 11.
     */
    public $idadministrativo;

    /**
     * @var int Max length is 11.
     */
    public $idautorizacion;

    /**
     * @var date
     */
    public $fechadesolicitud;

    /**
     * @var int Max length is 11.
     */
    public $idalumno;

    /**
     * @var int Max length is 11.
     */
    public $idperiodo;

    /**
     * @var double
     */
    public $descuentoaplicado;

    public $_table = 'excepcionpago';
    public $_primarykey = 'idperiodo';
    public $_fields = array('idexcepcion','idconcepto','fechapago','idadministrativo','idautorizacion','fechadesolicitud','idalumno','idperiodo','descuentoaplicado');

    public function getVRules() {
        return array(
                'idexcepcion' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'idconcepto' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'fechapago' => array(
                        array( 'date' ),
                        array( 'optional' ),
                ),

                'idadministrativo' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'idautorizacion' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'fechadesolicitud' => array(
                        array( 'date' ),
                        array( 'optional' ),
                ),

                'idalumno' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'idperiodo' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'descuentoaplicado' => array(
                        array( 'float' ),
                        array( 'optional' ),
                )
            );
    }

}