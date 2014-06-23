<?php
class SeguridadController{
	
	public static function validaSesion(){
		Doo::loadClass('token');
		$session = Doo::session(Doo::conf()->NOMBRE,"usuario");
		if($session -> get('idusuario')==null || $session -> get('TKN')==null ){//Verificamos que este logueado
			$session -> destroy(); //No esta logueado, denegamos el acceso
			return FALSE;
		}else if(!( $session -> get('TKN') -> validaToken($session -> get('idusuario') ) )){
			$session -> destroy(); //No paso la autenticación, posible intento de hackeo
			return FALSE;
		}else{
			return TRUE;
		}
	}
	
	
	public static function getUsuario(){
		Doo::loadModel('Usuario');
		$session = Doo::session(Doo::conf()->NOMBRE,"usuario");
		$usuario = new Usuario();
		$usuario->idusuario = $session -> get('idusuario');
		$usuario = Doo::db()->find($usuario,array('limit' => 1));
		return $usuario;
	}
	
	public static function getPermisos($perfil){
		Doo::loadModel('Perfil');
		$session = Doo::session(Doo::conf()->NOMBRE,"usuario");
		$permisos = new Perfil(); 
		$permisos->idperfil = $perfil;
		$permisos = Doo::db()->find($permisos,array('limit' => 1));
		return $permisos; 
	}
}
?>