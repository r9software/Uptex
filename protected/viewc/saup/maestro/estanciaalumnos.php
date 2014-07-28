<?php 
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/headerhome.php');
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/sidebar.php');
?>

<div class="main-content">
    <div class="row">
        <div class="col-sm-6">

            <div class="tile-title tile-red">

                <div class="icon">
                    <i class="glyphicon glyphicon-home"></i>
                </div>

                <div class="title">
                    <h3>Estancias.</h3>
                    <p>Esta informacion es confidencial.</p>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Carta de asignacion de tutor</h3>
            <div class="panel panel-primary">

                <div class="panel-body">
                   <table class="table table-bordered datatable" id="table-1">
        <thead>
            <th>Nombre</th>
                <th>Estado</th>
               
                
        </thead>
        <tbody>
            <tr >
                <td>Francisco Gonzales Riviera</td>
                <td>Aprobada</td>
                
            </tr>
            <tr >
                <td>Francisco Gonzales Romero</td>
                <td>En revision</td>
                
                
            </tr>
            <tr >
               <td>Roberto Alvarez Riviera</td>
               
               <td>Aprobada</td> 
            </tr>
            <tr >
               <td>Javier Rodriguez </td>
                <td>Aprobada</td>
               
                
                
            </tr>
            <tr >
                <td>Saul Hernandez</td>
                <td>En revision</td>
                
                
                
            </tr>
            
        </tbody>
        
    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Estancia</h3>
            <div class="panel panel-primary">

                <div class="panel-body">
                    <br />
                    <h3>Saul Hernandez</h3>
                    <h4>Estado: Aprobada</h4>
                    <p>Empresa: Pemex
                        <br>
                    Telefono: 55555555</p>


                </div>
            </div>
        </div>
    </div>
</div>

<?php
//maestro
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/footerhome.php');
?>
