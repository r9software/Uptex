<?php

/**
 * MainController
 * Feel free to delete the methods and replace them with your own code.
 *
 * @author darkredz
 */
 /*Fechas
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

    public function home() {
        //Cargamos la posible sesión existente	
        $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //informacion del alumno
            Doo::loadModel('Usuario');
            Doo::loadModel('Alumno');
            //cargamos el periodo activo;
            Doo::loadModel('Periodo');
            Doo::loadModel('Fecha');
            $usuario= new Usuario();
            $usuario->idusuario=$session->get('idusuario');
            $usuario = $this->db()->relate($usuario,'Alumno');
            $periodoactual= new Periodo();
            $periodoactual->active=1;
            $periodoactual=$this->db()->relate($periodoactual,'Fecha');
            echo "<pre>";
            print_r($periodoactual);
            echo "</pre>";
            //informacion general de fechas 
            $this->data["usuario"]=$usuario;
            //documentos de profesores, o para alumnos
            //horario
            //grupos
            //materias
            //estancias
            //evaluaciondelprofesor
            //asistencias del semestre
            //carrera
            //Ya existe una sesión activa, no pediremos que se logue
            $this->renderc("saup/alumno/home",$this->data);
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
    }

}

?>