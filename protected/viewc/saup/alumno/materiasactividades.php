<?php
//alumno
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/headerhome.php');
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/sidebar.php');
?>


<div class="main-content">
    <div class="row">
        <div class="col-sm-3">

            <div class="tile-title tile-blue">

                <div class="icon">
                    <i class="glyphicon glyphicon-upload"></i>
                </div>

                <div class="title">
                    <h3>Actividades.</h3>
                    <p>No olvides entregar tus actividades a tiempo.</p>
                </div>
            </div>

        </div>
        <div class="col-sm-3">
            <div class="tile-stats tile-blue">
                <div class="icon"><i class="entypo-code"></i></div>
                <div class="num" data-start="0" data-end="6" data-postfix="" data-duration="1500" data-delay="0">0</div>
                <h3>Actividades</h3>
                <p>Entregadas hasta el momento 50%</p>
            </div>
        </div>

    </div>
    <div class="row">
        <table class="table table-bordered datatable" id="table-1">
            <thead>
            <th>Tarea</th>
            <th>Fecha de entrega</th>
            <th>Estado</th>
            <th>Subir</th>
            </thead>
            <tbody>
                <tr >
                    <td>Desarrollo 1</td>
                    <td>21/12/14</td>
                    <td>Entregado</td>
                    <td class="center"><button class="btn-file">Enviar</button></td>
                </tr>
                <tr >
                    <td>Programacion Actividad 1</td>
                    <td>21/12/14</td>
                    <td>Sin entregar</td>
                    <td class="center"><button class="btn-file">Enviar</button></td>
                </tr>
                <tr >
                    <td>Desarrollo 2</td>
                    <td>21/12/14</td>
                    <td>Entregado</td>
                    <td class="center"><button class="btn-file">Enviar</button></td>
                </tr>
                <tr >
                    <td>Programacion Actividad 2</td>
                    <td>21/12/14</td>
                    <td>Sin entregar</td>
                    <td class="center"><button class="btn-file">Enviar</button></td>
                </tr>
                <tr >
                    <td>Desarrollo 3</td>
                    <td>21/12/14</td>
                    <td>Entregado</td>
                    <td class="center"><button class="btn-file">Enviar</button></td>
                </tr>
                <tr >
                    <td>Programacion Actividad 3</td>
                    <td>21/12/14</td>
                    <td>Sin entregar</td>
                    <td class="center"><button class="btn-file">Enviar</button></td>
                </tr>
                

            </tbody>

        </table>
    </div>
</div>


<?php
//alumno
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/footerhome.php');
?>
