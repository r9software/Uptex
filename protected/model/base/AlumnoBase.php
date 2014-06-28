<?php
Doo::loadCore('db/DooModel');

class AlumnoBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $idalumno;

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
    public $municipio;

    /**
     * @var varchar Max length is 200.
     */
    public $estado;

    /**
     * @var varchar Max length is 45.
     */
    public $matricula;

    /**
     * @var tinyint Max length is 4.
     */
    public $status;

    /**
     * @var int Max length is 11.
     */
    public $idusuario;

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
    public $estadocivil;

    /**
     * @var varchar Max length is 200.
     */
    public $datoslaborales;

    /**
     * @var varchar Max length is 45.
     */
    public $secundaria;

    /**
     * @var varchar Max length is 45.
     */
    public $preparatoria;

    /**
     * @var int Max length is 45.
     */
    public $genero;

    /**
     * @var varchar Max length is 45.
     */
    public $groposanguineo;

    /**
     * @var varchar Max length is 45.
     */
    public $capacidadesdiferentes;

    /**
     * @var varchar Max length is 200.
     */
    public $rehabilitacion;

    /**
     * @var int Max length is 11.
     */
    public $edad;

    /**
     * @var varchar Max length is 45.
     */
    public $curp;

    public $_table = 'alumno';
    public $_primarykey = 'idusuario';
    public $_fields = array('idalumno','nombre','direccion','municipio','estado','matricula','status','idusuario','telefono','email','estadocivil','datoslaborales','secundaria','preparatoria','genero','groposanguineo','capacidadesdiferentes','rehabilitacion','edad','curp');

    public function getVRules() {
        return array(
                'idalumno' => array(
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

                'municipio' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'estado' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'matricula' => array(
                        array( 'maxlength', 45 ),
                        array( 'notnull' ),
                ),

                'status' => array(
                        array( 'integer' ),
                        array( 'maxlength', 4 ),
                        array( 'optional' ),
                ),

                'idusuario' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'telefono' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'email' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'estadocivil' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'datoslaborales' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'secundaria' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'preparatoria' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'genero' => array(
                        array( 'integer' ),
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'groposanguineo' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'capacidadesdiferentes' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'rehabilitacion' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'edad' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'curp' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                )
            );
    }

}