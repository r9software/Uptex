<?php
Doo::loadCore('db/DooModel');

class ReciboBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idrecibo;

    /**
     * @var varchar Max length is 45.
     */
    public $codigo;

    /**
     * @var int Max length is 11.
     */
    public $idconcepto;

    /**
     * @var varchar Max length is 45.
     */
    public $referencia;

    /**
     * @var int Max length is 11.
     */
    public $idadministrativo;

    /**
     * @var double
     */
    public $costo;

    /**
     * @var int Max length is 11.
     */
    public $idalumno;

    /**
     * @var int Max length is 11.
     */
    public $idperiodo;

    /**
     * @var date
     */
    public $fecha;

    /**
     * @var double
     */
    public $descuentoaplicado;

    public $_table = 'recibo';
    public $_primarykey = 'idperiodo';
    public $_fields = array('idrecibo','codigo','idconcepto','referencia','idadministrativo','costo','idalumno','idperiodo','fecha','descuentoaplicado');

    public function getVRules() {
        return array(
                'idrecibo' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'codigo' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'idconcepto' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'referencia' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'idadministrativo' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'costo' => array(
                        array( 'float' ),
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

                'fecha' => array(
                        array( 'date' ),
                        array( 'optional' ),
                ),

                'descuentoaplicado' => array(
                        array( 'float' ),
                        array( 'optional' ),
                )
            );
    }

}