<?php

/**
 * MainController
 * Feel free to delete the methods and replace them with your own code.
 *
 * @author darkredz
 */
class AdministrativoController extends DooController {

    public function home() {
        //Cargamos la posible sesión existente	
        
            $this->renderc("saup/administrativo/home");
        
    }

}

?>