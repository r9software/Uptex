<?php 
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/headerhome.php');
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/sidebar.php');
?>

<div class="main-content">
     <div class="row">

        <!-- Profile Info and Notifications -->
        <div class="col-md-6 col-sm-8 clearfix">

            <ul class="user-info pull-left pull-none-xsm">

                <!-- Profile Info -->
                <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo Doo::conf()->APP_URL; ?>global/images/avatar/r9software2806.jpg" alt="" class="img-circle" width="44" />
                        Rodolfo Abarca
                    </a>

                    <ul class="dropdown-menu">

                        <!-- Reverse Caret -->
                        <li class="caret"></li>

                        <!-- Profile sub-links -->
                        <li>
                            <a href="#">
                                <i class="entypo-user"></i>
                                Modificar perfil
                            </a>
                        </li>


                        <li>
                            <a href="<?php echo Doo::conf()->APP_URL; ?>alumno/calendario">
                                <i class="entypo-calendar"></i>
                                Calendario
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>

        </div>


        
    </div>

    <hr />
    <div class="profile-env">

        <header class="row">

            <div class="col-sm-2">

                <a href="#" class="profile-picture">
                    <img src="<?php echo Doo::conf()->APP_URL; ?>global/images/avatar/r9software2806.jpg" class="img-responsive img-circle" />
                </a>

            </div>

            <div class="col-sm-7">

                <ul class="profile-info-sections">
                    <li>
                        <div class="profile-name">
                            <strong>
                                <a href="#">Rodolfo Abarca</a>
                                <a href="#" class="user-status is-online tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="Online"></a>
                                <!-- User statuses available classes "is-online", "is-offline", "is-idle", "is-busy" -->						</strong>
                            <span><a href="#">Maestro en ciencias de la computacion</a></span>
                        </div>
                    </li>

                    <li>
                        <div class="profile-stat">
                            <h3>25</h3>
                            <span><a href="#">Clases por semana</a></span>
                        </div>
                    </li>

                    
                </ul>

            </div>

            <div class="col-sm-3">

                <div class="profile-buttons">
                   

                    <a href="#" class="btn btn-default">
                        <i class="entypo-mail"></i>
                    </a>
                </div>
            </div>

        </header>

        <section class="profile-info-tabs">

            <div class="row">

                <div class="col-sm-offset-2 col-sm-10">

                    <ul class="user-details">
                        <li>
                            <a href="#">
                                <i class="entypo-location"></i>
                                Texcoco
                            </a>
                        </li>

                       

                        <li>
                            <a href="#">
                                <i class="entypo-calendar"></i>
                                7 Agosto
                            </a>
                        </li>
                    </ul>


                    <!-- tabs for the profile links -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#profile-info">Perfil</a></li>
                        <li><a href="#biography">Datos generales</a></li>
                        <li><a href="#profile-edit">Editar perfil</a></li>
                    </ul>

                </div>

            </div>

        </section>


        <section class="profile-feed">

            <!-- profile post form -->
            <form class="profile-post-form" method="post">

                <textarea class="form-control autogrow" placeholder="Comparte algo..."></textarea>

                <div class="form-options">

                    <div class="post-type">

                        <a href="#" class="tooltip-primary" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Upload a Picture">
                            <i class="entypo-camera"></i>
                        </a>

                        <a href="#" class="tooltip-primary" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Attach a file">
                            <i class="entypo-attach"></i>
                        </a>

                        <a href="#" class="tooltip-primary" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check-in">
                            <i class="entypo-location"></i>
                        </a>
                    </div>

                    <div class="post-submit">
                        <button type="button" class="btn btn-primary">Publicar estado</button>
                    </div>

                </div>
            </form>

            <!-- profile stories -->
            

        </section>
</div>

<?php
//maestro
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/footerhome.php');
?>
