<?php
/**
 * Define your URI routes here.
 *
 * $route[Request Method][Uri] = array( Controller class, action method, other options, etc. )
 *
 * RESTful api support, *=any request method, GET PUT POST DELETE
 * POST 	Create
 * GET      Read
 * PUT      Update, Create
 * DELETE 	Delete
 *
 * Use lowercase for Request Method
 *
 * If you have your controller file name different from its class name, eg. home.php HomeController
 * $route['*']['/'] = array('home', 'index', 'className'=>'HomeController');
 * 
 * If you need to reverse generate URL based on route ID with DooUrlBuilder in template view, please defined the id along with the routes
 * $route['*']['/'] = array('HomeController', 'index', 'id'=>'home');
 *
 * If you need dynamic routes on root domain, such as http://facebook.com/username
 * Use the key 'root':  $route['*']['root']['/:username'] = array('UserController', 'showProfile');
 *
 * If you need to catch unlimited parameters at the end of the url, eg. http://localhost/paramA/paramB/param1/param2/param.../.../..
 * Use the key 'catchall': $route['*']['catchall']['/:first'] = array('TestController', 'showAllParams');
 * 
 * If you have placed your controllers in a sub folder, eg. /protected/admin/EditStuffController.php
 * $route['*']['/'] = array('admin/EditStuffController', 'action');
 * 
 * If you want a module to be publicly accessed (without using Doo::app()->getModule() ) , use [module name] ,   eg. /protected/module/forum/PostController.php
 * $route['*']['/'] = array('[forum]PostController', 'action');
 * 
 * If you create subfolders in a module,  eg. /protected/module/forum/post/ListController.php, the module here is forum, subfolder is post
 * $route['*']['/'] = array('[forum]post/PostController', 'action');
 *
 * Aliasing give you an option to access the action method/controller through a different URL. This is useful when you need a different url than the controller class name.
 * For instance, you have a ClientController::new() . By default, you can access via http://localhost/client/new
 * 
 * $route['autoroute_alias']['/customer'] = 'ClientController';
 * $route['autoroute_alias']['/company/client'] = 'ClientController';
 * 
 * With the definition above, it allows user to access the same controller::method with the following URLs:
 * http://localhost/company/client/new
 *
 * To define alias for a Controller inside a module, you may use an array:
 * $route['autoroute_alias']['/customer'] = array('controller'=>'ClientController', 'module'=>'example');
 * $route['autoroute_alias']['/company/client'] = array('controller'=>'ClientController', 'module'=>'example');
 *
 * Auto routes can be accessed via URL pattern: http://domain.com/controller/method
 * If you have a camel case method listAllUser(), it can be accessed via http://domain.com/controller/listAllUser or http://domain.com/controller/list-all-user
 * In any case you want to control auto route to be accessed ONLY via dashed URL (list-all-user)
 *
 * $route['autoroute_force_dash'] = true;	//setting this to false or not defining it will keep auto routes accessible with the 2 URLs.
 *
 */
 
$route['*']['/'] = array('MainController', 'index');
$route['*']['/salir'] = array('MainController', 'salir');
$route['post']['/login'] = array('LoginController', 'validarLogin');
//administradores
$route['*']['/administrativo/home'] = array('administrativo/AdministrativoController', 'home');

//maestro
$route['*']['/maestro/home'] = array('maestro/MaestroController', 'home');
$route['*']['/maestro/info'] = array('maestro/MaestroController', 'info');
$route['*']['/maestro/infoacademica'] = array('maestro/MaestroController', 'infoacademica');
$route['*']['/maestro/materia/planeacion'] = array('maestro/MaestroController', 'materiaplaneacion');
$route['*']['/maestro/materia/avances'] = array('maestro/MaestroController', 'materiavances');
$route['*']['/maestro/materia/alumnos'] = array('maestro/MaestroController', 'materiaalumnos');
$route['*']['/maestro/materia/asistencias'] = array('maestro/MaestroController', 'materiaasistencias');
$route['*']['/maestro/materia/evidencias'] = array('maestro/MaestroController', 'materiaevidencias');
$route['*']['/maestro/materia/horario'] = array('maestro/MaestroController', 'materiahorario');
$route['*']['/maestro/materia/documentos'] = array('maestro/MaestroController', 'materiadocumentos');
$route['*']['/maestro/grupo/documentos'] = array('maestro/MaestroController', 'grupodocumentos');
$route['*']['/maestro/grupo/horarios'] = array('maestro/MaestroController', 'grupohorarios');
$route['*']['/maestro/grupo/asistencias'] = array('maestro/MaestroController', 'grupoasistencias');
$route['*']['/maestro/grupo/evaluaciones'] = array('maestro/MaestroController', 'grupoevaluaciones');
$route['*']['/maestro/retroalumnos'] = array('maestro/MaestroController', 'retroalumnos');
$route['*']['/maestro/retroprofesores'] = array('maestro/MaestroController', 'retroprofesores');
$route['*']['/maestro/estancia/alumnos'] = array('maestro/MaestroController', 'estanciaalumnos');
$route['*']['/maestro/estancia/estadia'] = array('maestro/MaestroController', 'estadia');

//alumnos
$route['*']['/alumno/home'] = array('alumno/AlumnoController', 'home');
$route['*']['/alumno/informacion'] = array('alumno/AlumnoController', 'informacion');
$route['*']['/alumno/kardex'] = array('alumno/AlumnoController', 'kardex');
$route['*']['/alumno/carrera'] = array('alumno/AlumnoController', 'carrera');
$route['*']['/alumno/carrerainfo'] = array('alumno/AlumnoController', 'carrerainfo');
$route['*']['/alumno/calificaciones'] = array('alumno/AlumnoController', 'calificaciones');
$route['*']['/alumno/horario'] = array('alumno/AlumnoController', 'horario');
$route['*']['/alumno/evaluacionmaestro'] = array('alumno/AlumnoController', 'evaluacionmaestro');
$route['*']['/alumno/materiasrestantes'] = array('alumno/AlumnoController', 'materiasrestantes');
$route['*']['/alumno/materias'] = array('alumno/AlumnoController', 'materias');
$route['*']['/alumno/materias/actividades'] = array('alumno/AlumnoController', 'materiasactividades');
$route['*']['/alumno/materias/evaluaciones'] = array('alumno/AlumnoController', 'materiasevaluaciones');
$route['*']['/alumno/materias/asistencias'] = array('alumno/AlumnoController', 'materiasasistencias');
$route['*']['/alumno/control'] = array('alumno/AlumnoController', 'control');
$route['*']['/alumno/control/estancias'] = array('alumno/AlumnoController', 'estancias');
$route['*']['/alumno/control/comprobantes'] = array('alumno/AlumnoController', 'comprobantes');
$route['*']['/alumno/control/boleta'] = array('alumno/AlumnoController', 'boleta');
$route['*']['/alumno/calendario'] = array('alumno/AlumnoController', 'calendario');
/*apiCalendario no se uso
$route['get']['/api/calendario'] = array('api/ApiController', 'calendario');
*/
$route['*']['/green'] = array('MainController', 'green');
$route['*']['/yellow'] = array('MainController', 'yellow');
$route['*']['/black'] = array('MainController', 'black');
$route['*']['/white'] = array('MainController', 'white');
$route['*']['/cafe'] = array('MainController', 'cafe');
$route['*']['/purple'] = array('MainController', 'purple');
$route['*']['/red'] = array('MainController', 'red');
$route['*']['/error'] = array('ErrorController', 'index');


//---------- Delete if not needed ------------
$admin = array('admin'=>'1234');

//view the logs and profiles XML, filename = db.profile, log, trace.log, profile
$route['*']['/debug/:filename'] = array('MainController', 'debug', 'authName'=>'DooPHP Admin', 'auth'=>$admin, 'authFail'=>'Unauthorized!');

//show all urls in app
$route['*']['/allurl'] = array('MainController', 'allurl', 'authName'=>'DooPHP Admin', 'auth'=>$admin, 'authFail'=>'Unauthorized!');

//generate routes file. This replace the current routes.conf.php. Use with the sitemap tool.
$route['post']['/gen_sitemap'] = array('MainController', 'gen_sitemap', 'authName'=>'DooPHP Admin', 'auth'=>$admin, 'authFail'=>'Unauthorized!');

//generate routes & controllers. Use with the sitemap tool.
$route['post']['/gen_sitemap_controller'] = array('MainController', 'gen_sitemap_controller', 'authName'=>'DooPHP Admin', 'auth'=>$admin, 'authFail'=>'Unauthorized!');

//generate Controllers automatically
$route['*']['/gen_site'] = array('MainController', 'gen_site', 'authName'=>'DooPHP Admin', 'auth'=>$admin, 'authFail'=>'Unauthorized!');

//generate Models automatically
$route['*']['/gen_model'] = array('MainController', 'gen_model', 'authName'=>'DooPHP Admin', 'auth'=>$admin, 'authFail'=>'Unauthorized!');


?>