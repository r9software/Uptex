<?php 
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/headerhome.php');
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/sidebar.php');
?>

<div class="main-content">
    <div class="row">
        <div class="col-sm-6">

            <div class="tile-title tile-black">

                <div class="icon">
                    <i class="glyphicon glyphicon-upload"></i>
                </div>

                <div class="title">
                    <h3>Avances.</h3>
                    <p>Esta informacion es confidencial.</p>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Subir</h3>
            <div class="panel panel-primary">

                <div class="panel-body">
                    <br />
                    <h4>Subir informacion</h4>
                    <input type="submit" value="Solicitar">
                    


                </div>
            </div>
        </div>
    </div>
</div>

<?php
//maestro
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/footerhome.php');
?>
