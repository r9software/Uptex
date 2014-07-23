<?php
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/headerhome.php');
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/sidebar.php');
?>

<div class="main-content">
    <div class="row">
        <div class="col-md-12">
        <h1>Ingeniera en Sistemas Computacionales</h1>
        </div>
    </div>
    <br />


    <br />
    <div class="row">
        <div class="col-md-12">

            <div class="tabs-vertical-env">

                <ul class="nav tabs-vertical"><!-- available classes "right-aligned" -->
                    <li class="active"><a href="#v2-home" data-toggle="tab">Objetivo</a></li>
                    <li><a href="#v2-profile" data-toggle="tab">Becas</a></li>
                    <li><a href="#v2-messages" data-toggle="tab">Movilidad</a></li>
                    <li><a href="#v2-settings" data-toggle="tab">Servicio Social</a></li>
                </ul>

                <div class="tab-content">
                        <div class="tab-pane active" id="v2-home">
                            <p>Formar Ingenieros en Sistemas Computacionales que cuenten con una s&oacute;lida formaci&oacute;n integral que les permita proponer, analizar, dise&ntilde;ar, desarrollar, implementar, gestionar y administrar sistemas computacionales usando tecnolog&iacute;as de vanguardia y aplicando metodolog&iacute;as, normas y est&aacute;ndares nacionales e internacionales de calidad, con el prop&oacute;sito de crear, mejorar y sistematizar procesos administrativos e industriales en el &aacute;rea computacional. Integrar y administrar equipos de trabajo inter y multidisciplinarios, as&iacute; como multiculturales, con actitud de liderazgo, &eacute;tica y responsabilidad. Actualiz&aacute;ndose permanentemente para responder a las necesidades de la sociedad y al desarrollo sustentable de la naci&oacute;n. </p>				
                        </div>
                        <div class="tab-pane" id="v2-profile">
                            <p>El objetivo es fijar est&iacute;mulos dirigidos a su comunidad estudiantil, por medio de apoyos que contribuyan a reducir la deserci&oacute;n escolar y el incremento de la eficiencia terminal, para lograr la excelencia acad&eacute;mica. </p>
                        </div>
                        <div class="tab-pane" id="v2-messages">
                            <p>El programa de movilidad estudiantil permite a los estudiantes fortalecer su nivel acad&eacute;mico propiciando su participaci&oacute;n en actividades de integraci&oacute;n e intercambio de conocimientos mediante semestres  acad&eacute;micos, estancias de investigaci&oacute;n, entre otros eventos, permitiendo el enriquecimiento de su experiencia formativa de manera vivencial,  fomentando el conocimiento e intercambio de ideas y formas de aprendizaje, aunado a la generaci&oacute;n de redes del conocimiento. </p>
                        </div>
                        <div class="tab-pane" id="v2-settings">
                            <p>Es un requisito indispensable para el proceso de titulaci&oacute;n profesional. Se cubre al realizar actividades relacionadas con los conocimientos adquiridos en las aulas, talleres y laboratorios, por lo tanto, se considera como una retribuci&oacute;n que hace el egresado a la sociedad que le dio la oportunidad de obtener una profesi&oacute;n. </p>
                        </div>
                </div>

            </div>

        </div>
    </div>
    <br />


    <br />
    <div class="row">
        <div class="col-md-12">
            <h3>Mapa curricular</h3>
            <img src="<?php echo Doo::conf()->APP_URL; ?>global/images/mapa.png" alt="" width="100%" />

        </div>
    </div>
    


</div>


<?php
//alumno
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/footerhome.php');
?>
