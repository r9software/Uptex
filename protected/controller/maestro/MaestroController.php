<?php

/**
 * MainController
 * Feel free to delete the methods and replace them with your own code.
 *
 * @author darkredz
 */
class MaestroController extends DooController {

    public function home() {
        //Cargamos la posible sesión existente	
       /* $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //Ya existe una sesión activa, no pediremos que se logue
            $this->renderc("saup/maestro/home");
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
        * 
        */
         $this->renderc("saup/maestro/home");
    }
    public function info() {
        //Cargamos la posible sesión existente	
       /* $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //Ya existe una sesión activa, no pediremos que se logue
            $this->renderc("saup/maestro/home");
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
        * 
        */
         $this->renderc("saup/maestro/info");
    }
    public function infoacademica() {
        //Cargamos la posible sesión existente	
       /* $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //Ya existe una sesión activa, no pediremos que se logue
            $this->renderc("saup/maestro/home");
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
        * 
        */
         $this->renderc("saup/maestro/infoacademica");
    }
    public function materiaplaneacion() {
        //Cargamos la posible sesión existente	
       /* $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //Ya existe una sesión activa, no pediremos que se logue
            $this->renderc("saup/maestro/home");
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
        * 
        */
         $this->renderc("saup/maestro/materiaplaneacion");
    }
    
    public function materiavances() {
        //Cargamos la posible sesión existente	
       /* $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //Ya existe una sesión activa, no pediremos que se logue
            $this->renderc("saup/maestro/home");
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
        * 
        */
         $this->renderc("saup/maestro/materiaavances");
    }
    public function materiaalumnos() {
        //Cargamos la posible sesión existente	
       /* $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //Ya existe una sesión activa, no pediremos que se logue
            $this->renderc("saup/maestro/home");
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
        * 
        */
         $this->renderc("saup/maestro/materiaalumnos");
    }
    public function materiaasistencias() {
        //Cargamos la posible sesión existente	
       /* $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //Ya existe una sesión activa, no pediremos que se logue
            $this->renderc("saup/maestro/home");
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
        * 
        */
         $this->renderc("saup/maestro/materiaasistencias");
    }
    public function materiahorario() {
        //Cargamos la posible sesión existente	
       /* $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //Ya existe una sesión activa, no pediremos que se logue
            $this->renderc("saup/maestro/home");
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
        * 
        */
         $this->renderc("saup/maestro/materiahorario");
    }
    public function materiaevidencias() {
        //Cargamos la posible sesión existente	
       /* $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //Ya existe una sesión activa, no pediremos que se logue
            $this->renderc("saup/maestro/home");
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
        * 
        */
         $this->renderc("saup/maestro/materiaevidencias");
    }
    public function materiadocumentos() {
        //Cargamos la posible sesión existente	
       /* $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //Ya existe una sesión activa, no pediremos que se logue
            $this->renderc("saup/maestro/home");
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
        * 
        */
         $this->renderc("saup/maestro/materiadocumentos");
    }
    public function grupodocumentos() {
        //Cargamos la posible sesión existente	
       /* $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //Ya existe una sesión activa, no pediremos que se logue
            $this->renderc("saup/maestro/home");
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
        * 
        */
         $this->renderc("saup/maestro/grupodocumentos");
    }
    public function grupoevaluaciones() {
        //Cargamos la posible sesión existente	
       /* $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //Ya existe una sesión activa, no pediremos que se logue
            $this->renderc("saup/maestro/home");
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
        * 
        */
         $this->renderc("saup/maestro/grupoevaluaciones");
    }
    public function grupohorarios() {
        //Cargamos la posible sesión existente	
       /* $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //Ya existe una sesión activa, no pediremos que se logue
            $this->renderc("saup/maestro/home");
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
        * 
        */
         $this->renderc("saup/maestro/grupohorarios");
    }
    public function grupoasistencias() {
        //Cargamos la posible sesión existente	
       /* $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //Ya existe una sesión activa, no pediremos que se logue
            $this->renderc("saup/maestro/home");
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
        * 
        */
         $this->renderc("saup/maestro/grupoasistencias");
    }
    public function retroalumnos() {
        //Cargamos la posible sesión existente	
       /* $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //Ya existe una sesión activa, no pediremos que se logue
            $this->renderc("saup/maestro/home");
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
        * 
        */
         $this->renderc("saup/maestro/retroalumnos");
    }
    public function retroprofesores() {
        //Cargamos la posible sesión existente	
       /* $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //Ya existe una sesión activa, no pediremos que se logue
            $this->renderc("saup/maestro/home");
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
        * 
        */
         $this->renderc("saup/maestro/retroprofesores");
    }
    public function estanciaalumnos() {
        //Cargamos la posible sesión existente	
       /* $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //Ya existe una sesión activa, no pediremos que se logue
            $this->renderc("saup/maestro/home");
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
        * 
        */
         $this->renderc("saup/maestro/estanciaalumnos");
    }
    public function estadia() {
        //Cargamos la posible sesión existente	
       /* $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //Ya existe una sesión activa, no pediremos que se logue
            $this->renderc("saup/maestro/home");
        } else {
            $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this->renderc("index");
        }
        * 
        */
         $this->renderc("saup/maestro/estadia");
    }
    

}

?>