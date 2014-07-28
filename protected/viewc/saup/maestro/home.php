<?php 
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/headerhome.php');
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/sidebar.php');?>
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
                            <div class="num" data-start="0" data-end="25" data-postfix="" data-duration="1500" data-delay="0">0</div>

                            <h3>Clases por semana</h3>
                            <p>Tienes que dar 4 clases hoy</p>
                        </div>

                    </div>

                    <div class="col-sm-3">

                        <div class="tile-stats tile-green">
                            <div class="icon"><i class="entypo-chart-bar"></i></div>
                            <div class="num" data-start="0" data-end="45" data-postfix="" data-duration="1500" data-delay="600">0</div>

                            <h3>Tareas Entregadas</h3>
                            <p>El 70% de tus alumnos han entregado su tarea</p>
                        </div>

                    </div>

                    <div class="col-sm-3">

                        <div class="tile-stats tile-aqua">
                            <div class="icon"><i class="entypo-mail"></i></div>
                            <div class="num" data-start="0" data-end="23" data-postfix="" data-duration="1500" data-delay="1200">0</div>

                            <h3>Inasistencias</h3>
                            <p>5% de inasistencias en este mes.</p>
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

    <br />

    <table class="table table-bordered datatable" id="table-1">
        <thead>
            <th>Materia</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miercoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
        </thead>
        <tbody>
            <tr >
                <td>7-8</td>
                <td>Redes de computadoras <br> Aula 7</td>
                <td></td>
                <td class="center">Redes de computadoras <br> Aula 7</td>
                <td></td>
                <td class="center">Redes de computadoras <br> Aula 7</td>
            </tr>
            <tr >
                <td>8-9</td>
                <td>Programacion <br> Aula 7</td>
                <td></td>
                <td class="center">Programacion<br> Aula 7</td>
                <td></td>
                <td class="center">Programacion<br> Aula 7</td>
                
            </tr>
            <tr >
               <td>9-10</td>
                <td></td>
                <td>Analisis de algoritmos <br> Aula 7</td>
                <td class="center"></td>
                <td>Analisis de algoritmos <br> Aula 7</td>
            </tr>
            <tr >
               <td>10-11</td>
                <td></td>
                <td>Analisis orientado a objetos <br> Aula 7</td>
                <td class="center"></td>
                <td>Analisis orientado a objetos <br> Aula 7</td>
                <td>Analisis orientado a objetos <br> Aula 7</td>
                
            </tr>
            <tr >
                <td>11-12</td>
                <td></td>
                <td>Compiladores <br> Aula 7</td>
                <td class="center"></td>
                <td>Compiladores<br> Aula 7</td>
                <td>Compiladores <br> Aula 7</td>
                
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

<?php
//maestro
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/footerhome.php');
?>
