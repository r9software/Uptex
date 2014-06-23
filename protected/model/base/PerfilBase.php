<?php
Doo::loadCore('db/DooModel');

class PerfilBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idperfil;

    /**
     * @var varchar Max length is 200.
     */
    public $nombre;

    /**
     * @var varchar Max length is 200.
     */
    public $descripcion;

    /**
     * @var int Max length is 11.
     */
    public $nivel;

    public $_table = 'perfil';
    public $_primarykey = 'idperfil';
    public $_fields = array('idperfil','nombre','descripcion','nivel');

    public function getVRules() {
        return array(
                'idperfil' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'nombre' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'descripcion' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'nivel' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                )
            );
    }

}