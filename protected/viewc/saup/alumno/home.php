<?php
$alumno = new Alumno();
$usuario = new Usuario();
//echo "<pre>";
//print_r($alumno=$this->data['usuario'][0]);
//echo "</pre>";
$usuario = $this->data['usuario'][0];
$alumno = $this->data['usuario'][0]->Alumno[0];

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
                        <img src="<?php echo Doo::conf()->APP_URL; ?>global/images/avatar/<?php echo $usuario->foto; ?>" alt="" class="img-circle" width="120" />
                        <?php echo $alumno->nombre; ?>
                    </a>

                </li>

            </ul>



        </div>


        <!-- Raw Links -->


    </div>

    <hr />


    <div class="row">
        <div class="col-sm-3">
            <div class="tile-stats tile-blue">
                <div class="icon"><i class="entypo-code"></i></div>
                <div class="num" data-start="0" data-end="9" data-postfix="" data-duration="1500" data-delay="0">0</div>
                <h3>Promedio General</h3>
                <p>Materias cursadas al momento: 10</p>
            </div>
        </div>
        <div class="col-sm-3">

            <div class="tile-stats tile-red">
                <div class="icon"><i class="entypo-users"></i></div>
                <div class="num" data-start="0" data-end="<?php echo $this->data['inasistencias']; ?>" data-postfix="" data-duration="1500" data-delay="0">0</div>
                <h3>Inasistencias</h3>
                <p>Porcentaje de inasistencias <?php echo $this->data['porcentajeinasistencias']; ?></p>
            </div>



        </div>

        <div class="col-sm-3">
            <div class="tile-stats tile-black">
                <div class="icon"><i class="entypo-bookmarks"></i></div>
                <div class="num" data-start="0" data-end="9" data-postfix="" data-duration="1500" data-delay="0">0</div>
                <h3>Tareas para esta semana</h3>
                <p>Materias con tareas para esta semana: 3</p>
            </div>
        </div>
        <?php if (isset($this->data['fecha'])) { ?>
            <div class="col-sm-3">

                <div class="tile-stats tile-green">
                    <div class="icon"><i class="entypo-check"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo count($this->data['fecha'][0]); ?>" data-postfix="" data-duration="1500" data-delay="600">0</div>

                    <h3>Fechas importantes</h3>
                    <p><a href="<?php echo Doo::conf()->APP_URL; ?>alumno/calendario"><span> Ir al calendario.</span></a></p>
                </div>

            </div>
        <?php } ?>

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
//alumno
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/footerhome.php');
?>
