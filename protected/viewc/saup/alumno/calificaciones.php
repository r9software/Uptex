<?php

include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/headerhome.php');
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/sidebar.php');
?>


<div class="main-content">
    
    <h2>Historial</h2>

    <br />

    <table class="table table-bordered datatable" id="table-1">
        <thead>
            <th>Materia</th>
                <th>Cuatrimestre</th>
                <th>Inasistencias</th>
                <th>Calificacion</th>
        </thead>
        <tbody>
            <tr >
                <td>Redes de computadoras</td>
                <td>2</td>
                <td>3</td>
                <td class="center">10</td>
            </tr>
            <tr >
                <td>Programacion</td>
                <td>2</td>
                <td>3</td>
                <td class="center">10</td>
            </tr>
            <tr >
                <td>Analisis de algoritmos</td>
                <td>2</td>
                <td>3</td>
                <td class="center">10</td>
            </tr>
            <tr >
                <td>Analisis orientado a objetos</td>
                <td>2</td>
                <td>3</td>
                <td class="center">10</td>
            </tr>
            <tr >
                <td>Lenguaje y comunicacion</td>
                <td>2</td>
                <td>3</td>
                <td class="center">10</td>
            </tr>
            
        </tbody>
        
    </table>



    <br /><!-- Footer -->
    <footer class="main">


        &copy; 2014 <strong>Saup</strong>  

    </footer>	
    
</div>


<?php
//alumno
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/footerhome.php');
?>
