<?php 
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/headerhome.php');
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/sidebar.php');
?>

<div class="main-content">
     <div class="row">
        <div class="col-sm-6">

            <div class="tile-title tile-black">

                <div class="icon">
                    <i class="glyphicon glyphicon-comment"></i>
                </div>

                <div class="title">
                    <h3>El 20% de los profesores te recomendarian </h3>
                    <p>Esta informacion es confidencial.</p>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">
                    <div class="panel-title">
                        Evaluacion promedio
                    </div>
                </div>

                <div class="panel-body">

                    <div class="row">

                        <div class="col-md-4 col-md-push-1">
                            <input class="knob" data-min="0" data-max="10" data-width="145" data-height="145" data-thickness=".25" data-fgColor="#f7d227" data-bgColor="#ebebeb" value="6" data-readOnly="true">
                        </div>


                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<?php
//maestro
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/maestro/elementos/footerhome.php');
?>
