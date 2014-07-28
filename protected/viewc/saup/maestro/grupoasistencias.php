<?php 
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/headerhome.php');
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/sidebar.php');
?>

<div class="main-content">
 <div class="row">
        <div class="col-md-12">
            <h1>Alumnos </h1>
            <div class="panel panel-primary">

                <div class="panel-body">
                    <br />

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Grupo</label>

                        <div class="col-sm-5">

                            <select name="test" class="select2" data-allow-clear="true" data-placeholder="Selecciona un profesor">
                                <option></option>
                                <optgroup label="Tus Materias">
                                    <option value="1" selected="">Aula 7</option>
                                    <option value="2">Aula 8</option>
                                    <option value="3">Aula 9</option>

                                </optgroup>
                            </select>

                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Fecha</label>

                        <div class="col-sm-5">

                            <select name="test" class="select2" data-allow-clear="true" data-placeholder="Selecciona un profesor">
                                <option></option>
                                <optgroup label="Tus Materias">
                                    <option value="1" selected="">21/06/2014</option>
                                    <option value="2">20/06/2014</option>
                                    <option value="3">19/06/2014</option>

                                </optgroup>
                            </select>

                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

    <br />

    <table class="table table-bordered datatable" id="table-1">
        <thead>
            <th>Nombre</th>
                <th>Materia</th>
                <th>Asistencia</th>
                
        </thead>
        <tbody>
            <tr >
                <td>Francisco Gonzales Riviera</td>
                <td>Redes de computadoras <br> Aula 7</td>
                <td><input type="checkbox"></td>
                
            </tr>
            <tr >
                <td>Francisco Gonzales Romero</td>
                <td>Programacion <br> Aula 7</td>
                <td><input type="checkbox"></td>
                
                
            </tr>
            <tr >
               <td>Roberto Alvarez Riviera</td>
               <td>Analisis de algoritmos <br> Aula 7</td>
               <td><input type="checkbox"></td> 
            </tr>
            <tr >
               <td>Javier Rodriguez </td>
                <td>Analisis orientado a objetos <br> Aula 7</td>
                <td><input type="checkbox"></td>
               
                
                
            </tr>
            <tr >
                <td>Saul Hernandez</td>
                <td>Compiladores <br> Aula 7</td>
                <td><input type="checkbox"></td>
                
                
                
            </tr>
            
        </tbody>
        
    </table>
</div>

<?php
//maestro
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/footerhome.php');
?>
