<?php ?>
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
                </li>

            </ul>
        </li>
        <li>
            <a href="layout-api.html">
                <i class="glyphicon glyphicon-book"></i>
                <span>Carrera</span>
            </a>
            <ul>
                <li>
                    <a href="layout-api.html">
                        <span>Informaci&oacute;n de la carrera</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard-3.html">
                        <span>Calificaciones del semestre</span>
                    </a>
                </li>
                <li>
                    <a href="skin-black.html">
                        <span>Horario</span>
                    </a>

                </li>
                <li>
                    <a href="highlights.html">
                        <span>Evaluaci&oacute;n del maestro</span>
                    </a>
                </li>
                <li>
                    <a href="highlights.html">
                        <span>Historial</span>
                    </a>
                </li>

            </ul>
        </li>

        <li>
            <a href="index.html" target="_blank">
                <i class="glyphicon glyphicon-unchecked"></i>
                <span>Perfil Academico</span>
            </a>
            <ul>
                <li>
                    <a href="layout-api.html">
                        <span>Materias por cursar</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard-3.html">
                        <span>Materias en Curso</span>
                    </a>
                </li>



            </ul>
        </li>
        <li>
            <a href="index.html" target="_blank">
                <i class="glyphicon glyphicon-paperclip"></i>
                <span>Materia1</span>
            </a>
            <ul>
                <li>
                    <a href="layout-api.html">
                        <span>Actividades</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard-3.html">
                        <span>Evaluaciones</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard-3.html">
                        <span>Asistencias</span>
                    </a>
                </li>



            </ul>
        </li>


        <li>
            <a href="index.html" target="_blank">
                <i class="glyphicon glyphicon-lock"></i>
                <span>Control Escolar</span>
            </a>
            <ul>
                <li>
                    <a href="layout-api.html">
                        <span>Estancias</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard-3.html">
                        <span>Comprobante de estudios</span>
                    </a>
                </li>
                <li>
                    <a href="skin-black.html">
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
