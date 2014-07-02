<?php
//maestro
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Neon Admin Panel" />
        <meta name="author" content="" />

        <title><?php echo Doo::conf()->NOMBRE; ?>  Home</title>


        <link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
        <link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/css/font-icons/entypo/css/entypo.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
        <link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/css/neon-core.css">
        <link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/css/neon-theme.css">
        <link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/css/neon-forms.css">
        <link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/css/custom.css">

        <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/jquery-1.11.0.min.js"></script>

        <!--[if lt IE 9]><script src="<?php echo Doo::conf()->APP_URL; ?>global/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>
    <body class="page-body  page-fade boxed-layout" data-url="http://neon.dev">

        <div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	

            <div class="sidebar-menu">


                <header class="logo-env">

                    <!-- logo -->
                    <div class="logo">
                        <a href="index.html">
                            <img src="<?php echo Doo::conf()->APP_URL; ?>global/images/logo@2x.png" width="120" alt="" />
                        </a>
                    </div>

                    <!-- logo collapse icon -->

                    <div class="sidebar-collapse">
                        <a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                            <i class="entypo-menu"></i>
                        </a>
                    </div>



                    <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                    <div class="sidebar-mobile-menu visible-xs">
                        <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                            <i class="entypo-menu"></i>
                        </a>
                    </div>

                </header>






                <ul id="main-menu" class="">
                    <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                    <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
                    <!-- Search Bar -->

                    <li class="active opened active">
                        <a href="index.html">
                            <i class="glyphicon glyphicon-home"></i>
                            <span>Perfil</span>
                        </a>
                        <ul>
                            <li class="active">
                                <a href="index.html">
                                    <span>Informacion Personal</span>
                                </a>
                            </li>
                            <li>
                                <a href="dashboard-2.html">
                                    <span>Informacion Academica</span>
                                </a>


                                <ul>
                                    <li>
                                        <a href="layout-api.html">
                                            <span>Horario</span>
                                        </a>
                                    </li>




                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="layout-api.html">
                            <i class="glyphicon glyphicon-font"></i>
                            <span>Materias</span>
                        </a>
                        <ul>
                            <li>
                                <a href="layout-api.html">
                                    <span>Materia1</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="dashboard-3.html">
                                            <span>Planeacion Didactica</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="skin-black.html">
                                            <span>Alumnos Inscritos</span>
                                        </a>

                                    </li>
                                    <li>
                                        <a href="highlights.html">
                                            <span>Avances programaticos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="highlights.html">
                                            <span>Control de asistencias</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="highlights.html">
                                            <span>Evidencias de Evaluacion</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="highlights.html">
                                            <span>Horarios</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="highlights.html">
                                            <span>Documentos</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="layout-api.html">
                            <i class="glyphicon glyphicon-briefcase"></i>
                            <span>Grupos</span>
                        </a>
                        <ul>
                            <li>
                                <a href="layout-api.html">
                                    <span>Grupo1</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="dashboard-3.html">
                                            <span>Horarios</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="skin-black.html">
                                            <span>Registro de evaluaciones Parciales</span>
                                        </a>

                                    </li>
                                    <li>
                                        <a href="highlights.html">
                                            <span>Control de asistencias</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="highlights.html">
                                            <span>Documentos</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="layout-api.html">
                            <i class="glyphicon glyphicon-transfer"></i>
                            <span>Retroalimentacion</span>
                        </a>
                            
                                <ul>
                                    <li>
                                        <a href="dashboard-3.html">
                                            <span>Resultados generales de Alumnos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="skin-black.html">
                                            <span>Resultados generales de otros Profesores</span>
                                        </a>

                                    </li>
                                </ul>
                            
                    </li>
                    <li>
                        <a href="layout-api.html">
                            <i class="glyphicon glyphicon-book"></i>
                            <span>Asesorados de estancias y estadia</span>
                        </a>
                            
                                <ul>
                                    <li>
                                        <a href="dashboard-3.html">
                                            <span>Informacion de los alumnos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="skin-black.html">
                                            <span>Estancias y Estadia</span>
                                        </a>

                                    </li>
                                </ul>
                            
                    </li>
                    
                    
                    <li>
                        <a href="<?php echo Doo::conf()->APP_URL; ?>salir">
                            <i class="glyphicon glyphicon-log-out"></i>
                            <span>Salir</span>
                        </a>

                    </li>
                </ul>

            </div>	
            <div class="main-content">

                <?php
                ?>
                <div class="row">

                    <!-- Profile Info and Notifications -->
                    <div class="col-md-6 col-sm-8 clearfix">

                        <ul class="user-info pull-left pull-none-xsm">

                            <!-- Profile Info -->
                            <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo Doo::conf()->APP_URL; ?>global/images/avatar/<?php //echo $maestro->foto;    ?>" alt="" class="img-circle" width="120" />
                                    <?php // echo $maestro->nombre; ?>
                                </a>

                            </li>

                        </ul>



                    </div>


                    <!-- Raw Links -->


                </div>

                <hr />


                <div class="row">
                    <div class="col-sm-3">

                        <div class="tile-stats tile-red">
                            <div class="icon"><i class="entypo-users"></i></div>
                            <div class="num" data-start="0" data-end="83" data-postfix="" data-duration="1500" data-delay="0">0</div>

                            <h3>Registered users</h3>
                            <p>so far in our blog, and our website.</p>
                        </div>

                    </div>

                    <div class="col-sm-3">

                        <div class="tile-stats tile-green">
                            <div class="icon"><i class="entypo-chart-bar"></i></div>
                            <div class="num" data-start="0" data-end="135" data-postfix="" data-duration="1500" data-delay="600">0</div>

                            <h3>Daily Visitors</h3>
                            <p>this is the average value.</p>
                        </div>

                    </div>

                    <div class="col-sm-3">

                        <div class="tile-stats tile-aqua">
                            <div class="icon"><i class="entypo-mail"></i></div>
                            <div class="num" data-start="0" data-end="23" data-postfix="" data-duration="1500" data-delay="1200">0</div>

                            <h3>New Messages</h3>
                            <p>messages per day.</p>
                        </div>

                    </div>

                    <div class="col-sm-3">

                        <div class="tile-stats tile-blue">
                            <div class="icon"><i class="entypo-rss"></i></div>
                            <div class="num" data-start="0" data-end="52" data-postfix="" data-duration="1500" data-delay="1800">0</div>

                            <h3>Subscribers</h3>
                            <p>on our site right now.</p>
                        </div>

                    </div>
                </div>

                <br />


                <br />

                <div class="row">



                    <div class="col-sm-12">

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="panel-title">Horario</div>

                                <div class="panel-options">
                                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                                </div>
                            </div>

                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Maestro</th>
                                        <th>Materia</th>
                                        <th>otro dato</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Art Ramadani</td>
                                        <td>CEO</td>
                                        <td class="text-center"><span class="inlinebar">4,3,5,4,5,6</span></td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Filan Fisteku</td>
                                        <td>Member</td>
                                        <td class="text-center"><span class="inlinebar-2">1,3,4,5,3,5</span></td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Arlind Nushi</td>
                                        <td>Co-founder</td>
                                        <td class="text-center"><span class="inlinebar-3">5,3,2,5,4,5</span></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

                <br />

                <!-- Footer -->
                <footer class="main">


                    &copy; 2014 <strong>Uptex</strong></a>

                </footer>	</div>







            <link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/js/jvectormap/jquery-jvectormap-1.2.2.css">
            <link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/js/rickshaw/rickshaw.min.css">

            <!-- Bottom Scripts -->
            <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/gsap/main-gsap.js"></script>
            <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
            <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/bootstrap.js"></script>
            <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/joinable.js"></script>
            <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/resizeable.js"></script>
            <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/neon-api.js"></script>
            <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
            <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
            <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/jquery.sparkline.min.js"></script>
            <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/rickshaw/vendor/d3.v3.js"></script>
            <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/rickshaw/rickshaw.min.js"></script>
            <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/raphael-min.js"></script>
            <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/morris.min.js"></script>
            <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/toastr.js"></script>
            <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/neon-chat.js"></script>
            <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/neon-custom.js"></script>
            <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/neon-demo.js"></script>

    </body>
</html>
