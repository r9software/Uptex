<?php

/**
 * MainController
 * Feel free to delete the methods and replace them with your own code.
 *
 * @author darkredz
 */
class AlumnoController extends DooController {

    public function home() {
        //Cargamos la posible sesión existente	
        $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //informacion del alumno
            Doo::loadModel('Usuario');
            Doo::loadModel('Alumno');
            $usuario= new Usuario();
            $usuario->idusuario=$session->get('idusuario');
            $usuario = $this->db()->relate($usuario,'Alumno');
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