<?php

include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/headerhome.php');
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/sidebar.php');
?>

<div class="main-content">
    
    <h2>Horario de clases</h2>

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



    <br /><!-- Footer -->
    <footer class="main">


        &copy; 2014 <strong>Saup</strong>  

    </footer>	
    
</div>

<?php
//alumno
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/footerhome.php');
?>
