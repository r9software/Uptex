<?php
/**
 * ErrorController
 * Feel free to change this and customize your own error message
 *
 * @author darkredz
 */
class ErrorController extends DooController{

    public function index(){
       
        $this->renderc("error");
    }
	

}
?>