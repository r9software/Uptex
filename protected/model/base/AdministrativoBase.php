<?php
Doo::loadCore('db/DooModel');

class AdministrativoBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idadministrativos;

    /**
     * @var varchar Max length is 200.
     */
    public $nombre;

    /**
     * @var varchar Max length is 200.
     */
    public $direccion;

    /**
     * @var varchar Max length is 200.
     */
    public $estado;

    /**
     * @var varchar Max length is 200.
     */
    public $municipio;

    /**
     * @var int Max length is 11.
     */
    public $idusuario;

    /**
     * @var int Max length is 11.
     */
    public $idperfil;

    public $_table = 'administrativo';
    public $_primarykey = 'idperfil';
    public $_fields = array('idadministrativos','nombre','direccion','estado','municipio','idusuario','idperfil');

    public function getVRules() {
        return array(
                'idadministrativos' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'nombre' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'direccion' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'estado' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'municipio' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'idusuario' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'idperfil' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                )
            );
    }

}