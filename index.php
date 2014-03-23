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
    <!-- Dashboard CSS -->
    <link href="css/dashboard.css" rel="stylesheet">
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
    
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        
            <div class="container-fluid">
            
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="home-button" class="navbar-brand" href="#">WSKF Venezuela</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Usuario</a></li>
                        <li><a href="#">Ajustes</a></li>
                        <li><a href="#">Desconectar</a></li>
                    </ul>
                </div>
                
            </div>
            
        </div> <!-- fin | class="navbar navbar-inverse navbar-fixed-top" -->
    
        <div class="container-fluid">
        
            <div class="row">
            
                <div class="col-xs-5 col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li class="active"><a href="#">Overview</a></li>
                        <li><a href="#">Reports</a></li>
                        <li><a href="#">Analytics</a></li>
                        <li><a href="#">Export</a></li>
                    </ul>
                    <ul class="nav nav-sidebar">
                        <li><a href="">Nav item</a></li>
                        <li><a href="">Nav item again</a></li>
                        <li><a href="">One more nav</a></li>
                        <li><a href="">Another nav item</a></li>
                        <li><a href="">More navigation</a></li>
                    </ul>
                    <ul class="nav nav-sidebar">
                        <li><a href="">Nav item again</a></li>
                        <li><a href="">One more nav</a></li>
                        <li><a href="">Another nav item</a></li>
                    </ul>
                </div> <!-- fin | class="col-xs-5 col-sm-3 col-md-2 sidebar" -->
            
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                
                    <h1 class="page-header">Dashboard</h1>
                
                    <div class="row placeholders">
                    
                        <div class="col-xs-6 col-sm-3 placeholder">
                            <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
                            <h4>Label</h4>
                            <span class="text-muted">Something else</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder">
                            <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
                            <h4>Label</h4>
                            <span class="text-muted">Something else</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder">
                            <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
                            <h4>Label</h4>
                            <span class="text-muted">Something else</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder">
                            <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
                            <h4>Label</h4>
                            <span class="text-muted">Something else</span>
                        </div>
                        
                    </div> <!-- fin | class="row placeholders" -->
    
                    <h2 class="sub-header">Section title</h2>
                    
                    <div class="table-responsive">
                    
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Header</th>
                                    <th>Header</th>
                                    <th>Header</th>
                                    <th>Header</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1,001</td>
                                    <td>Lorem</td>
                                    <td>ipsum</td>
                                    <td>dolor</td>
                                    <td>sit</td>
                                </tr>
                                <tr>
                                    <td>1,002</td>
                                    <td>amet</td>
                                    <td>consectetur</td>
                                    <td>adipiscing</td>
                                    <td>elit</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>Integer</td>
                                    <td>nec</td>
                                    <td>odio</td>
                                    <td>Praesent</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>libero</td>
                                    <td>Sed</td>
                                    <td>cursus</td>
                                    <td>ante</td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div> <!-- fin | class="table-responsive" -->
                
                </div> <!-- fin | class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" -->
            
            </div> <!-- fin | class="row" -->
            
        </div> <!-- fin | class="container-fluid" -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="bs/js/bootstrap.min.js"></script>
        <script src="bs/assets/js/docs.min.js"></script>
        <!-- Menú desplegable -->
        <!--<script type="text/javascript">
            
            var sidebar = 1;
            
            $(document).ready(function() {
                $('#home-button').click(function() {
                    if( sidebar == 1 ) {
                        $('.sidebar').animate({
                            opacity: 0,
                            left: '-=100',
                        }, 200, function() {
                            /* Animación finalizada */
                            sidebar = 0;
                            $('.sidebar').css('display', 'none');
                        });
                    }
                    if( sidebar == 0 ) {
                        $('.sidebar').css('display', 'block');
                        $('.sidebar').animate({
                            opacity: 1,
                            left: '+=100',
                        }, 200, function() {
                            /* Animación finalizada */
                            sidebar = 1;
                        });
                    }
                });
            });
        </script>-->

	</body>
</html>
