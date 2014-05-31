<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="UPTex Admin Panel" />
	<meta name="author" content=""/>
	
	<title><?php echo Doo::conf()->NOMBRE; ?>  Login</title>
	

        <link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/css/neon-core.css">
	<link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/css/neon-theme.css">
	<link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/css/neon-forms.css">
	<link rel="stylesheet" href="<?php echo Doo::conf()->APP_URL; ?>global/css/custom.css">

	<script src="<?php echo Doo::conf()->APP_URL; ?>global/js/jquery-1.11.0.min.js"></script>

	<!--[if lt IE 9]><script src="<?php echo Doo::conf()->APP_URL; ?>global/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body login-page is-lockscreen login-form-fall boxed-layout" data-url="http://neon.dev">

<div class="login-container">
	
	<div class="login-header">
		
		<div class="login-content">
			
			<a href="#" class="logo">
				<img src="<?php echo Doo::conf()->APP_URL; ?>global/images/logo@2x.png" alt="" width="200" />
			</a>
			
			<p class="description">Empieza a usar el sistema iniciando sesi&oacute;n</p>
			
			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>0%</h3>
				<span>Empezando.../span>
			</div>
		</div>
		
	</div>
	
	<div class="login-form">
		
		<div class="login-content">
			
			<form method="post" role="form" id="form_lockscreen">
				
				<div class="form-group lockscreen-input">
					
					<div class="lockscreen-thumb">
						<img src="<?php echo Doo::conf()->APP_URL; ?>global/images/lockscreen-user.png" class="img-circle" />
						
						<div class="lockscreen-progress-indicator">0%</div>
					</div>
					
					<div class="lockscreen-details">
                                            <h4>Inicia Sesi&oacute;n</h4>
						<span data-login-text="logging in...">Desconectado</span>
					</div>
					
				</div>
				
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
						
						<input type="text" class="form-control" name="user" id="username" placeholder="Usuario" autocomplete="off" />
					</div>
					
				</div>
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Contrase&ntilde;a" autocomplete="off" />
					</div>
				
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login">
						<i class="entypo-login"></i>
						Iniciar
					</button>
				</div>
				
				<!-- Implemented in v1.1.4 -->				
                                <!-- 
                                <div class="form-group">
					<em>- or -</em>
				</div>
				
				<div class="form-group">
				
					<button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left facebook-button">
						Login with Facebook
						<i class="entypo-facebook"></i>
					</button>
					
				</div>
				
				
				
				You can also use other social network buttons 
				<div class="form-group">
				
					<button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left twitter-button">
						Login with Twitter
						<i class="entypo-twitter"></i>
					</button>
					
				</div>
				
				<div class="form-group">
				
					<button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left google-button">
						Login with Google+
						<i class="entypo-gplus"></i>
					</button>
					
				</div>
			</form>
			
			-->
			<div class="login-bottom-links">
				
				
			</div>
			
		</div>
		
	</div>
	
</div>


	<!-- Bottom Scripts -->
	<script src="<?php echo Doo::conf()->APP_URL; ?>global/js/gsap/main-gsap.js"></script>
	<script src="<?php echo Doo::conf()->APP_URL; ?>global/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo Doo::conf()->APP_URL; ?>global/js/bootstrap.js"></script>
	<script src="<?php echo Doo::conf()->APP_URL; ?>global/js/joinable.js"></script>
	<script src="<?php echo Doo::conf()->APP_URL; ?>global/js/resizeable.js"></script>
	<script src="<?php echo Doo::conf()->APP_URL; ?>global/js/neon-api.js"></script>
	<script src="<?php echo Doo::conf()->APP_URL; ?>global/js/jquery.validate.min.js"></script>
	<script src="<?php echo Doo::conf()->APP_URL; ?>global/js/neon-login.js"></script>
	<script src="<?php echo Doo::conf()->APP_URL; ?>global/js/neon-custom.js"></script>
	<script src="<?php echo Doo::conf()->APP_URL; ?>global/js/neon-demo.js"></script>

</body>
</html>