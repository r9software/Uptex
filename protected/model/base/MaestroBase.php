<?php
Doo::loadCore('db/DooModel');

class MaestroBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idmaestro;

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
    public $titulo;

    /**
     * @var varchar Max length is 200.
     */
    public $estado;

    /**
     * @var int Max length is 11.
     */
    public $idusuario;

    /**
     * @var varchar Max length is 45.
     */
    public $genero;

    /**
     * @var varchar Max length is 45.
     */
    public $telefono;

    /**
     * @var varchar Max length is 45.
     */
    public $email;

    /**
     * @var varchar Max length is 45.
     */
    public $licenciatura;

    /**
     * @var varchar Max length is 45.
     */
    public $maestria;

    /**
     * @var float
     */
    public $evaluaciones;

    /**
     * @var varchar Max length is 200.
     */
    public $comentarios;

    /**
     * @var varchar Max length is 45.
     */
    public $categoria;

    /**
     * @var varchar Max length is 45.
     */
    public $maestrocol;

    public $_table = 'maestro';
    public $_primarykey = 'idusuario';
    public $_fields = array('idmaestro','nombre','direccion','titulo','estado','idusuario','genero','telefono','email','licenciatura','maestria','evaluaciones','comentarios','categoria','maestrocol');

    public function getVRules() {
        return array(
                'idmaestro' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'nombre' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'direccion' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'titulo' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'estado' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'idusuario' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'genero' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'telefono' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'email' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'licenciatura' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'maestria' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'evaluaciones' => array(
                        array( 'float' ),
                        array( 'optional' ),
                ),

                'comentarios' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'categoria' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'maestrocol' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                )
            );
    }

}