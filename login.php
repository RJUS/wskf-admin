<!DOCTYPE html>
<html lang="es">

    <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="WSKF Venezuela">
    
    <title>WSKF - Administrador</title>
    
    <!-- Bootstrap -->
    <link href="bs/css/bootstrap.min.css" rel="stylesheet">
    <!-- Login CSS -->
    <link href="css/login.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    
    <!-- Solo para realizar debug | útil en desarrollo -->
    
    <!--[if lt IE 9]>
    	<script src="bs/assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    </head>

    <body>
    
        <div class="container">
        
        	<div class="inicio-sesion">        	
                
                <h1 style="text-align: center">
                    <img id="login-logo" src="img/wskf-logo.png" width="150">
                </h1>
                
                <form role="form">
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" id="usuario">
                    </div>
                    <div class="form-group">
                        <label for="clave">Contraseña</label>
                        <input type="password" class="form-control" id="clave">
                    </div>
                    <div class="form-group">
                        <p class="help-block"><a href="#">¿Olvidó su contraseña?</a></p>
                    </div>
                    <button type="submit" class="btn btn-default">Iniciar sesión</button>
                </form>
            
            </div>
            
        </div> <!-- fin | class="container" -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="bs/js/bootstrap.min.js"></script>
        <script src="bs/assets/js/docs.min.js"></script>

	</body>
    
</html>
