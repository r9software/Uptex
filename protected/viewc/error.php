<?php ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Neon Admin Panel" />
        <meta name="author" content="" />

        <title><?php echo Doo::conf()->NOMBRE; ?>  Home</title>


        <link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
        <link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/css/font-icons/entypo/css/entypo.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
        <link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/css/neon-core.css">
        <link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/css/neon-theme.css">
         <link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/css/custom.css">

        <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/jquery-1.11.0.min.js"></script>

        <!--[if lt IE 9]><script src="<?php echo Doo::conf()->APP_URL; ?>global/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>
    <body class="page-body  page-fade boxed-layout" data-url="http://neon.dev">

        <div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
            <div class="main-content" style="min-height: 1701px;">
                <div class="page-error-404">


                    <div class="error-symbol">
                        <i class="entypo-attention"></i>
                    </div>

                    <div class="error-text">
                        <h2>404</h2>
                        <p>&iexcl;P&aacute;gina no encontrada!</p>
                        <a href="<?php echo Doo::conf()->APP_URL; ?>">Volver</a>
                    </div>

                    <hr>

                   
                </div>
            </div>
        </div>

        <link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/js/jvectormap/jquery-jvectormap-1.2.2.css">
        <link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/js/rickshaw/rickshaw.min.css">

        <!-- Bottom Scripts -->
        <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/gsap/main-gsap.js"></script>
        <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
        <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/bootstrap.js"></script>
        <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/joinable.js"></script>
        <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/resizeable.js"></script>
        <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/neon-api.js"></script>
        <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
        <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/jquery.sparkline.min.js"></script>
        <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/rickshaw/vendor/d3.v3.js"></script>
        <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/rickshaw/rickshaw.min.js"></script>
        <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/raphael-min.js"></script>
        <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/morris.min.js"></script>
        <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/toastr.js"></script>
        <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/neon-chat.js"></script>
        <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/neon-custom.js"></script>
        <script src="<?php echo Doo::conf()->APP_URL; ?>global/js/neon-demo.js"></script>

    </body>
</html>
