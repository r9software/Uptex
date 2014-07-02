<?php
/**
 * MainController
 * Feel free to delete the methods and replace them with your own code.
 *
 * @author darkredz
 */
class LoginController extends DooController{

    public function index(){
	    $session = Doo::session(Doo::conf()->NOMBRE, "usuario");
        if ($session->get('idusuario') != null) {
            //Ya existe una sesión activa, no pediremos que se logue
            header('location:' . Doo::conf()->APP_URL . 'saup/home');
        } else {
           $session->destroy();
            //No existe sesíon, el usuair deberá loguearse 
            $this-> renderc("saup/home");
        }
    }
    public function validarLogin(){
	Doo::loadModel('Usuario');
        Doo::loadModel('Administrativo');
        Doo::loadModel('Alumno');
        Doo::loadModel('Maestro');
        
        Doo::loadClass('token');

        //Creamos la sesión
        $session = Doo::session(Doo::conf()->NOMBRE, "usuario");

        $usr = $_POST['usuario'];
        $pass = md5($_POST['password']);

        $usuario = new Usuario();
        $administrativo= new Administrativo();
        $maestro= new Maestro();
        $alumno= new Alumno();
        $usuario->usuario = $usr;
        $usuario->password = $pass;
        //Buscamos al usuario en la base de datos

        $usuario = $this->db()->find($usuario, array('limit' => 1));
        if (isset($usuario->idusuario)) {
            $session->idusuario = $usuario->idusuario;
            //Creamos un token para validar la autenticidad del usuario. Este token es el MD5 de la IP y nombre HOST del usuario.
            $session->TKN = new token();
            //validamos que sea administrativo, maestro o alumno
            $administrativo->idusuario=$usuario->idusuario;
            $administrativo = $this->db()->find($administrativo, array('limit' => 1));
            $maestro->idusuario=$usuario->idusuario;
            $maestro = $this->db()->find($maestro, array('limit' => 1));
            $alumno->idusuario=$usuario->idusuario;
            $alumno = $this->db()->find($alumno, array('limit' => 1));
            
            if (isset($administrativo->idadministrativos)) {
                $session->idadministrativos = $administrativo->idadministrativos;
                header('location:' . Doo::conf()->APP_URL . 'administrativo/home');
                
            }
            if(isset($maestro->idmaestro)) {
                $session->idmaestro = $maestro->idmaestro;
                header('location:' . Doo::conf()->APP_URL . 'maestro/home');
                
            }
            if(isset($alumno->idalumno)) {
                $session->idalumno = $alumno->idalumno;
                header('location:' . Doo::conf()->APP_URL . 'alumno/home');
            }
             header('location:' . Doo::conf()->APP_URL . '?error=sinperfil');
            
        } else {
            //No existe el usuario, destruimos la sesión
            $session->destroy();
            header('location:' . Doo::conf()->APP_URL . '?error=login');
        }
    }
   

}
?>