<?php ?>
<div class="sidebar-menu">


    <header class="logo-env">

        <!-- logo -->
        <div class="logo">
            <a href="<?php echo Doo::conf()->APP_URL; ?>">
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
            <a href="<?php echo Doo::conf()->APP_URL; ?>">
                <i class="glyphicon glyphicon-home"></i>
                <span>Perfil</span>
            </a>
            <ul>
                <li class="active">
                    <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/informacion/">
                        <span>Informacion Personal</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/kardex/">
                        <span>Informacion Academica</span>
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/carrera">
                <i class="glyphicon glyphicon-book"></i>
                <span>Carrera</span>
            </a>
            <ul>
                <li>
                    <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/carrerainfo">
                        <span>Informaci&oacute;n de la carrera</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/calificaciones">
                        <span>Calificaciones del semestre</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/horario">
                        <span>Horario</span>
                    </a>

                </li>
                <li>
                    <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/evaluacionmaestro">
                        <span>Evaluaci&oacute;n del maestro</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/kardex">
                        <span>Historial</span>
                    </a>
                </li>

            </ul>
        </li>

        <li>
            <a href="#" target="_blank">
                <i class="glyphicon glyphicon-unchecked"></i>
                <span>Perfil Academico</span>
            </a>
            <ul>
                <li>
                    <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/materiasrestantes">
                        <span>Materias por cursar</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/materias">
                        <span>Materias en Curso</span>
                    </a>
                </li>



            </ul>
        </li>
        <li>
            <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/materias" target="_blank">
                <i class="glyphicon glyphicon-paperclip"></i>
                <span>Desarrollo de software</span>
            </a>
            <ul>
                <li>
                    <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/materias/actividades">
                        <span>Actividades</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/materias/evaluaciones">
                        <span>Evaluaciones</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/materias/asistencias">
                        <span>Asistencias</span>
                    </a>
                </li>



            </ul>
        </li>
        <li>
            <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/materias" target="_blank">
                <i class="glyphicon glyphicon-paperclip"></i>
                <span>Analisis de Algoritmos</span>
            </a>
            <ul>
                <li>
                    <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/materias/actividades">
                        <span>Actividades</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/materias/evaluaciones">
                        <span>Evaluaciones</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/materias/asistencias">
                        <span>Asistencias</span>
                    </a>
                </li>



            </ul>
        </li>

        <li>
            <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/control" target="_blank">
                <i class="glyphicon glyphicon-lock"></i>
                <span>Control Escolar</span>
            </a>
            <ul>
                <li>
                    <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/control/estancias" >
                        <span>Estancias</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/control/comprobantes" >
                        <span>Comprobante de estudios</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/control/boleta" >
                        <span>Boleta global</span>
                    </a>

                </li>
                <li>
                    <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/calendario">
                        <span>Calendario</span>
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
