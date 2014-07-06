<?php

/**
 * MainController
 * Feel free to delete the methods and replace them with your own code.
 *
 * @author darkredz
 */
/* Fechas
 * 1 para reinscripcion
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
class AlumnoController extends DooController {
    public function index(){
        $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //Ya existe una sesión activa, no pediremos que se logue
            if ($session->get('idadministrativos') != null) {

                header('location:' . Doo::conf()->APP_URL . 'administrativo/home');
            } else if ($session->get('idmaestro') != null) {
                header('location:' . Doo::conf()->APP_URL . 'maestro/home');
            } else if ($session->get('idalumno') != null) {
                header('location:' . Doo::conf()->APP_URL . 'alumno/home');
            } else {
                $session->destroy();
                //No existe sesíon, el usuair deberá loguearse 
                $this->renderc("index");
            }
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
    }

    public function home() {
        //Cargamos la posible sesión existente	
        $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //informacion del alumno
            Doo::loadModel('Usuario');
            Doo::loadModel('Alumno');
            Doo::loadModel('Alumnocarrera');
            Doo::loadModel('Estancia');
            //cargamos el periodo activo;
            Doo::loadModel('Periodo');
            Doo::loadModel('Fecha');
            Doo::loadModel('Asistencias');
            //cargamos la informacion del alumno por usuario
            $usuario = new Usuario();
            $usuario->idusuario = $session->get('idusuario');
            $usuario = $this->db()->relate($usuario, 'Alumno');
            //informacion del alumno para carrera
            $alumno = new Alumno();
            $alumno->idusuario = $session->get('idusuario');
            $alumno = $alumno->find(array('limit' => 1));
            /* echo "<pre>";
              print_r($alumno);
              echo "</pre>"; */
            //cargamos su carrera
            $alumnocarrera = new Alumnocarrera();
            $alumnocarrera->idalumno = $alumno->idalumno;
            $alumnocarrera = $alumnocarrera->find(array('limit' => 1));
            /* echo "<pre>";
              print_r($alumnocarrera);
              echo "</pre>"; */
            //cargamos el periodo actual
            $periodo = new Periodo();
            $periodo->active = 1;
            $periodoactual = new Periodo();
            $periodoactual = $periodo->find(array('limit' => 1));

            $fechasporperiodo = new Fecha();
            $fechasporperiodo->idcarrera = $alumnocarrera->idcarrera;
            //cargamos las fechas por periodo para la carrera
            $fechasporperiodo = $this->db()->relate($periodo, $fechasporperiodo, array("asc" => "tipodefecha", "where" => " fechaini >= CURDATE() AND fechaini <= DATE_ADD(CURDATE(), INTERVAL 15 DAY)"));
            $fecha= array();
            foreach ($fechasporperiodo as $fechayperiodo) {
                foreach ($fechayperiodo as $key => $fechaconperiodo) {
                        if(strcmp($key,"Fecha")==0){
                            array_push($fecha, $fechaconperiodo);
                        }
                }
            }
            if(!empty($fecha)){
            $this->data["fecha"] = $fecha;
            }
            //informacion general de fechas 
            $this->data["usuario"] = $usuario;
            //documentos de profesores, o para alumnos
            //horario
            //grupos
            //materias
            //estancias
            $estancia = new Estancia();
            $estancia->idalumno = $alumno->idalumno;
            $estancia = $estancia->find(array('limit' => 1));
            //evaluaciondelprofesor
            /* echo "<pre>";
              print_r($estancia);
              echo "</pre>"; */
            $asistencias = new Asistencias();
            $asistencias->idperiodo = $periodoactual->idperiodo;
            $asistencias->idalumno = $alumno->idalumno;
            $inasistencias = new Asistencias();
            $inasistencias->idperiodo = $periodoactual->idperiodo;
            $inasistencias->idalumno = $alumno->idalumno;
            $inasistencias->asistencia = 0;
            $valorasistencias = $asistencias->count();
            $valorinasistencias = $inasistencias->count();
            $valor = ($valorinasistencias) / $valorasistencias;
            $valor = ($valor * 100) . "%";
            /* echo "<pre>";
              print_r(" ".($valor*100)."%");
              echo "</pre>"; */
            $this->data["inasistencias"] = $valorinasistencias;
            $this->data["porcentajeinasistencias"] = $valor;



            //asistencias del semestre
            //carrera
            //Ya existe una sesión activa, no pediremos que se logue
            $this->renderc("saup/alumno/home", $this->data);
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
    }
    public function calendario() {
        //Cargamos la posible sesión existente	
        $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //informacion del alumno
            Doo::loadModel('Usuario');
            Doo::loadModel('Alumno');
            Doo::loadModel('Alumnocarrera');
            //cargamos el periodo activo;
            Doo::loadModel('Periodo');
            Doo::loadModel('Fecha');
            //cargamos la informacion del alumno por usuario
            $usuario = new Usuario();
            $usuario->idusuario = $session->get('idusuario');
            $usuario = $this->db()->relate($usuario, 'Alumno');
            //informacion del alumno para carrera
            $alumno = new Alumno();
            $alumno->idusuario = $session->get('idusuario');
            $alumno = $alumno->find(array('limit' => 1));
            /* echo "<pre>";
              print_r($alumno);
              echo "</pre>"; */
            //cargamos su carrera
            $alumnocarrera = new Alumnocarrera();
            $alumnocarrera->idalumno = $alumno->idalumno;
            $alumnocarrera = $alumnocarrera->find(array('limit' => 1));
            /* echo "<pre>";
              print_r($alumnocarrera);
              echo "</pre>"; */
            //cargamos el periodo actual
            $periodo = new Periodo();
            $periodo->active = 1;
            $periodoactual = new Periodo();
            $periodoactual = $periodo->find(array('limit' => 1));

            $fechasporperiodo = new Fecha();
            $fechasporperiodo->idcarrera = $alumnocarrera->idcarrera;
            //cargamos las fechas por periodo para la carrera
            $fechasporperiodo = $this->db()->relate($periodo, $fechasporperiodo);
            $fecha= array();
            foreach ($fechasporperiodo as $fechayperiodo) {
                foreach ($fechayperiodo as $key => $fechaconperiodo) {
                        if(strcmp($key,"Fecha")==0){
                            array_push($fecha, $fechaconperiodo);
                        }
                }
            }
            if(!empty($fecha)){
            $this->data["fecha"] = $fecha;
            }
            //informacion general de fechas 
            $this->data["usuario"] = $usuario;
            
            $this->renderc("saup/alumno/calendario", $this->data);
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
    }

}

?>