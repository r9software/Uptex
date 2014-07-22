<?php
//alumno
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/headerhome.php');
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/sidebar.php');
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
                            <span><a href="#">3er cuatrimestre</a></span>
                        </div>
                    </li>

                    <li>
                        <div class="profile-stat">
                            <h3>10</h3>
                            <span><a href="#">Materias cursadas</a></span>
                        </div>
                    </li>

                    <li>
                        <div class="profile-stat">
                            <h3>45</h3>
                            <span><a href="#">Materias sin cursar</a></span>
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
                                <i class="entypo-suitcase"></i>
                                 No trabaja
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
            <div class="profile-stories">

                


                <article class="story">

                    <aside class="user-thumb">
                        <a href="#">
                            <img src="<?php echo Doo::conf()->APP_URL; ?>global/images/avatar/r9software2806.jpg" alt="" height="50px" class="img-circle" />
                        </a>
                    </aside>

                    <div class="story-content">

                        <!-- story header -->
                        <header>

                            <div class="publisher">
                                <a href="#">Rodolfo Abarca</a> esta en clase de  <a href="#">Redes de computadoras</a>
                                <em>hace 20 minutos</em>
                            </div>

                            <div class="story-type">
                                <i class="entypo-location"></i>
                            </div>

                        </header>

                        <div class="story-main-content">

                            <div id="sample-checkin" class="map-checkin" style="height: 180px; width: 100%;"></div>

                        </div>

                        <!-- story like and comment link -->
                        <footer>
                            <a href="#">
                                <i class="entypo-heart"></i>
                                Like
                            </a>

                            <a href="#">
                                <i class="entypo-comment"></i>
                                Comment
                            </a>
                        </footer>

                        <hr />
                    </div>

                </article><article class="story">

                    <aside class="user-thumb">
                        <a href="#">
                            <img src="<?php echo Doo::conf()->APP_URL; ?>global/images/thumb-2.png" alt="" class="img-circle" />
                        </a>
                    </aside>

                    <div class="story-content">

                        <!-- story header -->
                        <header>

                            <div class="publisher">
                                <a href="#">Virginia Lacey</a> subio 4 fotos a su album <a href="#">Tareas</a>
                                <em>2 days ago</em>
                            </div>

                            <div class="story-type">
                                <i class="entypo-location"></i>
                            </div>

                        </header>

                        <div class="story-main-content">

                            <div class="row">
                                <div class="col-sm-5">
                                    <a href="#">
                                        <img src="<?php echo Doo::conf()->APP_URL; ?>global/images/timeline-image-1.png" class="img-responsive img-rounded full-width" />
                                    </a>
                                </div>

                                <div class="col-sm-3">
                                    <a href="#">
                                        <img src="<?php echo Doo::conf()->APP_URL; ?>global/images/timeline-image-2.png" class="img-responsive img-rounded full-width" />
                                    </a>
                                </div>

                                <div class="col-sm-4">

                                    <a href="#">
                                        <img src="<?php echo Doo::conf()->APP_URL; ?>global/images/timeline-image-3.png" class="img-responsive img-rounded full-width margin-bottom" />
                                    </a>

                                    <a href="#">
                                        <img src="<?php echo Doo::conf()->APP_URL; ?>global/images/timeline-image-4.png" class="img-responsive img-rounded full-width" />
                                    </a>
                                </div>
                            </div>


                        </div>

                        <!-- story like and comment link -->
                        <footer>
                            <a href="#">
                                <i class="entypo-heart"></i>
                                Like <span>(25)</span>
                            </a>

                            <a href="#">
                                <i class="entypo-comment"></i>
                                Comment <span>(13)</span>
                            </a>
                        </footer>

                    </div>

                </article>



            </div>

        </section>
    </div>

    <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        function initialize()
        {
            var $ = jQuery,
                    map_canvas = $("#sample-checkin");

            var location = new google.maps.LatLng(36.738888, -119.783013),
                    map = new google.maps.Map(map_canvas[0], {
                        center: location,
                        zoom: 14,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        scrollwheel: false
                    });

            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script><!-- Footer -->
    <footer class="main">


        &copy; 2014 <strong>UPTex</strong> 

    </footer>	</div>


<?php
//alumno
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/footerhome.php');
?>
