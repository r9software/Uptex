<?php 
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/headerhome.php');
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/sidebar.php');
?>

<div class="main-content">
    <div class="row">
        <div class="col-sm-3">

            <div class="tile-title tile-blue">

                <div class="icon">
                    <i class="glyphicon glyphicon-dashboard"></i>
                </div>

                <div class="title">
                    <h3>Evaluaciones.</h3>
                    <p>No olvides entregar tus actividades a tiempo y no faltar a tus clases.</p>
                </div>
            </div>

        </div>
        <div class="col-sm-3">
            <div class="tile-stats tile-blue">
                <div class="icon"><i class="entypo-code"></i></div>
                <div class="num" data-start="0" data-end="6" data-postfix="" data-duration="1500" data-delay="0">0</div>
                <h3>Actividades</h3>
                <p>Entregadas hasta el momento 50%</p>
                 <br/>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="tile-stats tile-blue">
                <div class="icon"><i class="entypo-code"></i></div>
                <div class="num" data-start="0" data-end="4" data-postfix="" data-duration="1500" data-delay="0">0</div>
                <h3>Inasistencias</h3>
                <p>25% de faltas</p>
                 <br/>
            </div>
        </div>
        
    </div>
    <div class="row">
        <h3>Actividades de la materia</h3>
        <table class="table table-bordered datatable" id="table-1">
            <thead>
            <th>Tarea</th>
            <th>Fecha de entrega</th>
            <th>Estado</th>
            </thead>
            <tbody>
                <tr >
                    <td>Desarrollo 1</td>
                    <td>21/12/14</td>
                    <td>Entregado</td>
                    
                </tr>
                <tr >
                    <td>Programacion Actividad 1</td>
                    <td>21/12/14</td>
                    <td>Sin entregar</td>
                    
                </tr>
                <tr >
                    <td>Desarrollo 2</td>
                    <td>21/12/14</td>
                    <td>Entregado</td>
                    
                </tr>
                <tr >
                    <td>Programacion Actividad 2</td>
                    <td>21/12/14</td>
                    <td>Sin entregar</td>
                    
                </tr>
                <tr >
                    <td>Desarrollo 3</td>
                    <td>21/12/14</td>
                    <td>Entregado</td>
                    
                </tr>
                <tr >
                    <td>Programacion Actividad 3</td>
                    <td>21/12/14</td>
                    <td>Sin entregar</td>
                    
                </tr>
                

            </tbody>

        </table>
    </div>
    <div class="row">
        <h3>Asistencias de la materia</h3>
        <div class="panel panel-primary">
            
            <div class="panel-heading">
                <div class="panel-title">Semana del 21 al 25 de Julio </div>

                <div class="panel-options">
                    <a href="#" data-rel="reload"><i class="entypo-left-open">Semana anterior</i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-right-open">Semana siguiente</i></a>
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
                        <td>Redes de computadoras <br> Aula 7 <span class="color-green"><br/>Asistencia 90%</span></td>
                        <td></td>
                        <td class="center">Redes de computadoras <br> Aula 7- <span class="color-green"><br/>Asistencia 90%</span></td>
                        <td></td>
                        <td class="center">Redes de computadoras <br> Aula 7 <span class="color-green"><br/>Asistencia 90%</span></td>
                    </tr>
                    <tr >
                        <td>8-9</td>
                        <td>Programacion <br> Aula 7 <span class="color-green"><br/>Asistencia 90%</span></td>
                        <td></td>
                        <td class="center">Programacion<br> Aula 7 <span class="color-green"><br/>Asistencia 90%</span></td>
                        <td></td>
                        <td class="center">Programacion<br> Aula 7 <span class="color-green"><br/>Asistencia 90%</span></td>

                    </tr>
                    <tr >
                        <td>9-10</td>
                        <td></td>
                        <td>Analisis de algoritmos <br> Aula 7 <span class="color-green"><br/>Asistencia 90%</span></td>
                        <td class="center"></td>
                        <td>Analisis de algoritmos <br> Aula 7 <span class="color-green"><br/>Asistencia 90%</span></td>
                    </tr>
                    <tr >
                        <td>10-11</td>
                        <td></td>
                        <td>Analisis orientado a objetos <br> Aula 7<span class="color-green"><br/>Asistencia 90%</span></td>
                        <td class="center"></td>
                        <td>Analisis orientado a objetos <br> Aula 7 <span class="color-green"><br/>Asistencia 90%</span></td>
                        <td>Analisis orientado a objetos <br> Aula 7<span class="color-green"><br/>Asistencia 90%</span></td>

                    </tr>
                    <tr >
                        <td>11-12</td>
                        <td></td>
                        <td>Compiladores <br>Aula 7 <span class="color-green"><br/>Asistencia 100%</span></td>
                        <td class="center"></td>
                        <td>Compiladores<br> Aula 7<span class="color-green"><br/>Asistencia 100%</span></td>
                        <td>Compiladores <br>Aula 7<span class="color-green"><br/>Asistencia 100%</span></td>

                    </tr>

                </tbody>

            </table>
        </div>
    </div>
</div>

<?php
//maestro
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/footerhome.php');
?>
