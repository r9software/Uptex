<?php
/**
 * MainController
 * Feel free to delete the methods and replace them with your own code.
 *
 * @author darkredz
 */
class MainController extends DooController{

    public function index(){
		$this-> renderc("index");
    }
     public function home(){
		$this-> renderc("saup/home");
    }
    
     public function green(){
		$this-> renderc("saup/green");
    }
      public function yellow(){
		$this-> renderc("saup/yellow");
    }
     public function blue(){
		$this-> renderc("saup/blue");
    }
    
     public function black(){
		$this-> renderc("saup/black");
    }
    
     public function purple(){
		$this-> renderc("saup/purple");
    }
    
     public function red(){
		$this-> renderc("saup/red");
    }
    
     public function cafe(){
		$this-> renderc("saup/cafe");
    }
    
     public function white(){
		$this-> renderc("saup/white");
    }
	
	
	
	public function allurl(){	
		Doo::loadCore('app/DooSiteMagic');
		DooSiteMagic::showAllUrl();	
	}
	
    public function debug(){
		Doo::loadCore('app/DooSiteMagic');
		DooSiteMagic::showDebug($this->params['filename']);
    }
	
	public function gen_sitemap_controller(){
		//This will replace the routes.conf.php file
		Doo::loadCore('app/DooSiteMagic');
		DooSiteMagic::buildSitemap(true);		
		DooSiteMagic::buildSite();
	}
	
	public function gen_sitemap(){
		//This will write a new file,  routes2.conf.php file
		Doo::loadCore('app/DooSiteMagic');
		DooSiteMagic::buildSitemap();		
	}
	
	public function gen_site(){
		Doo::loadCore('app/DooSiteMagic');
		DooSiteMagic::buildSite();
	}
	
    public function gen_model(){
        Doo::loadCore('db/DooModelGen');
        DooModelGen::genMySQL();
    }

}
?>