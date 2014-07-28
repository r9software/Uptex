<?php ?>
 <div class="sidebar-menu">


                <header class="logo-env">

                    <!-- logo -->
                    <div class="logo">
                        <a href="<?php echo Doo::conf()->APP_URL; ?>maestro/home">
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
                        <a href="">
                            <i class="glyphicon glyphicon-home"></i>
                            <span>Perfil</span>
                        </a>
                        <ul>
                            <li class="active">
                                <a href="<?php echo Doo::conf()->APP_URL; ?>maestro/info">
                                    <span>Informacion Personal</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span>Informacion Academica</span>
                                </a>


                                <ul>
                                    <li>
                                        <a href="<?php echo Doo::conf()->APP_URL; ?>maestro/infoacademica">
                                            <span>Horario</span>
                                        </a>
                                    </li>




                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="glyphicon glyphicon-font"></i>
                            <span>Materias</span>
                        </a>
                        <ul>
                            <li>
                                <a href="">
                                    <span>Materia1</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?php echo Doo::conf()->APP_URL; ?>maestro/materia/planeacion">
                                            <span>Planeacion Didactica</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Doo::conf()->APP_URL; ?>maestro/materia/alumnos">
                                            <span>Alumnos Inscritos</span>
                                        </a>

                                    </li>
                                    <li>
                                        <a href="<?php echo Doo::conf()->APP_URL; ?>maestro/materia/avances">
                                            <span>Avances programaticos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Doo::conf()->APP_URL; ?>maestro/materia/asistencias">
                                            <span>Control de asistencias</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Doo::conf()->APP_URL; ?>maestro/materia/evidencias">
                                            <span>Evidencias de Evaluacion</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Doo::conf()->APP_URL; ?>maestro/materia/horario">
                                            <span>Horarios</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Doo::conf()->APP_URL; ?>maestro/materia/documentos">
                                            <span>Documentos</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="glyphicon glyphicon-briefcase"></i>
                            <span>Grupos</span>
                        </a>
                        <ul>
                            <li>
                                <a href="">
                                    <span>Grupo1</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?php echo Doo::conf()->APP_URL; ?>maestro/grupo/horarios">
                                            <span>Horarios</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Doo::conf()->APP_URL; ?>maestro/grupo/evaluaciones">
                                            <span>Registro de evaluaciones Parciales</span>
                                        </a>

                                    </li>
                                    <li>
                                        <a href="<?php echo Doo::conf()->APP_URL; ?>maestro/grupo/asistencias">
                                            <span>Control de asistencias</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Doo::conf()->APP_URL; ?>maestro/grupo/documentos">
                                            <span>Documentos</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="glyphicon glyphicon-transfer"></i>
                            <span>Retroalimentacion</span>
                        </a>
                            
                                <ul>
                                    <li>
                                        <a href="<?php echo Doo::conf()->APP_URL; ?>maestro/retroalumnos">
                                            <span>Resultados generales de Alumnos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Doo::conf()->APP_URL; ?>maestro/retroprofesores">
                                            <span>Resultados generales de otros Profesores</span>
                                        </a>

                                    </li>
                                </ul>
                            
                    </li>
                    <li>
                        <a href="">
                            <i class="glyphicon glyphicon-book"></i>
                            <span>Asesorados de estancias y estadia</span>
                        </a>
                            
                                <ul>
                                    <li>
                                        <a href="<?php echo Doo::conf()->APP_URL; ?>maestro/estancia/alumnos">
                                            <span>Informacion de los alumnos</span>
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
           