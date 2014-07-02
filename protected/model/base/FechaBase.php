<?php

Doo::loadCore('db/DooModel');

class FechaBase extends DooModel {

    /**
     * @var int Max length is 11.
     */
    public $idfechas;

    /**
     * @var date
     */
    public $fechaini;
    public $fechafin;

    /**
     * @var varchar Max length is 200.
     */
    public $descripcion;

    /**
     * @var int Max length is 11.
     */
    public $idperiodo;
    public $tipodefecha;
    /* 1 para reinscripcion
     * 2 periodo vacacional
     * 3 suspension de labores
     * 4 inicio de cuatrimestre
     * 5 Semana de baja de materias
     * 6  1evaluacion docente
     * 7  2evaluacion docente
     * 8 recuperacion de unidades
     * 9 entrega de actas finales
     * 10 cierre de cuatrimestre
     * 0 cualquier otra fecha de recordatorio
     * */
    public $_table = 'fecha';
    public $_primarykey = 'idfechas';
    public $_fields = array('idfechas', 'fechaini', 'fechafin', 'descripcion', 'idperiodo', 'tipodefecha');

    public function getVRules() {
        return array(
            'idfechas' => array(
                array('integer'),
                array('maxlength', 11),
                array('optional'),
            ),
            'fechaini' => array(
                array('date'),
                array('optional'),
            ), 'fechafin' => array(
                array('date'),
                array('optional'),
            ),
            'descripcion' => array(
                array('maxlength', 200),
                array('optional'),
            ),
            'idperiodo' => array(
                array('integer'),
                array('maxlength', 11),
                array('notnull'),
            )
        );
    }

}
