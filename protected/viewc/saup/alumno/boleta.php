<?php

include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/headerhome.php');
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/sidebar.php');
?>

<div class="main-content">
    <div class="row">
        <div class="col-sm-6">

            <div class="tile-title tile-black">

                <div class="icon">
                    <i class="glyphicon glyphicon-user"></i>
                </div>

                <div class="title">
                    <h3>Boleta Global.</h3>
                    <p>Esta informacion es confidencial.</p>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1>Solicita tu boleta global</h1>
            <div class="panel panel-primary">

                <div class="panel-body">
                    <br />
                    <input type="submit" value="Solicitar">
                    


                </div>
            </div>
        </div>
    </div>
</div>

<?php
//alumno
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/footerhome.php');
?>
