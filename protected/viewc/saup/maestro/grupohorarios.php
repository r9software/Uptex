<?php 
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/headerhome.php');
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/sidebar.php');
?>

<div class="main-content">
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
</div>

<?php
//maestro
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/footerhome.php');
?>
