<?php
Doo::loadCore('db/DooModel');

class UsuarioBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idusuario;

    /**
     * @var varchar Max length is 45.
     */
    public $usuario;

    /**
     * @var varchar Max length is 45.
     */
    public $password;

    /**
     * @var varchar Max length is 45.
     */
    public $correo;

    /**
     * @var varchar Max length is 45.
     */
    public $telefono;

    /**
     * @var varchar Max length is 150.
     */
    public $foto;

    public $_table = 'usuario';
    public $_primarykey = 'idusuario';
    public $_fields = array('idusuario','usuario','password','correo','telefono','foto');

    public function getVRules() {
        return array(
                'idusuario' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'usuario' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'password' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'correo' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'telefono' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'foto' => array(
                        array( 'maxlength', 150 ),
                        array( 'optional' ),
                )
            );
    }

}