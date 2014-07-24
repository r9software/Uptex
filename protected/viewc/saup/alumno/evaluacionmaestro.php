<?php
//alumno
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/headerhome.php');
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/sidebar.php');
?>


<div class="main-content">
    <div class="row">
        <div class="col-sm-6">

            <div class="tile-title tile-red">

                <div class="icon">
                    <i class="glyphicon glyphicon-lock"></i>
                </div>

                <div class="title">
                    <h3>La informacion esta protegida.</h3>
                    <p>Esta informacion es confidencial, se discreto al escribir.</p>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1>Evaluacion de Profesores</h1>
            <div class="panel panel-primary">

                <div class="panel-body">
                    <br />

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nombre del profesor</label>

                        <div class="col-sm-5">

                            <select name="test" class="select2" data-allow-clear="true" data-placeholder="Selecciona un profesor">
                                <option></option>
                                <optgroup label="Tus Materias">
                                    <option value="1" selected="">Marco Antonio Abarca Rodriguez</option>
                                    <option value="2">Patricio Valbuena Vi&ntilde;eda</option>
                                    <option value="3">Maria Martinez Gutierrez</option>

                                </optgroup>
                            </select>

                        </div>

                    </div>


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
                            <input class="knob" data-min="0" data-max="10" data-width="145" data-height="145" data-thickness=".25" data-fgColor="#f7d227" data-bgColor="#ebebeb" value="8" data-readOnly="true">
                        </div>


                    </div>

                </div>

            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">
                    <div class="panel-title">
                        Tu evaluacion
                    </div>
                </div>

                <div class="panel-body">

                    <div class="row">

                        <div class="col-md-12 col-md-push-1">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="col-md-3 control-label">&iquest;Tu calificacion?</label>

                                        <input type="number" class="form-control" id="field-1" placeholder="Calificacion">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="col-md-3 control-label">&iquest;Recomendarias a este profesor?</label>



                                        <div class="checkbox checkbox-replace">
                                            <input type="checkbox" name="recomendacion" id="chk-1" checked>
                                            <label>Si</label>
                                        </div>

                                        <div class="checkbox checkbox-replace">
                                            <input type="checkbox" name="recomendacion"  id="chk-2">
                                            <label>No</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="field-ta" class="col-md-3 control-label">Tus comentarios</label>

                                        <div class="col-md-6">
                                            <textarea class="form-control" id="field-ta" placeholder="Comentarios aqui, no se aceptan groserias, o mensajes insultantes."></textarea>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                        </div>


                    </div>

                </div>

            </div>

        </div>
    </div><!-- Footer -->

</div>

<?php
//alumno
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/footerhome.php');
?>
