<html lang="en"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>XtraForm - Bootstrap 3 Xtra Form</title>
    <link href="http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="XtraForm Bootstrap 3 Xtra Form">
    <meta name="keywords" content="bootstrap 3, skin,ui,kit,flat,form">
    <meta name="author" content="aydev, aymen boumayza">
    <!-- Bootstrap Styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Plugins Styles -->
    <link href="plugins/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="animate/animate.css" rel="stylesheet">
    <!-- Skin Styles -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/xtraform.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- Main Scripts-->
    <script src="plugins/jquery/jquery.js"></script>
    <script src="plugins/bootstrapValidator/bootstrapValidator.min.js"></script>
</head>

<body>
    <!-- Container -->
    <div id="form-container" class="container">
        <!-- Logo & title =========================================================== -->
        <div class="text-center demo-title bounceInDown animated">
            <h1>Duty<span>Map</span></h1>
            <p>Servicios</p>
        </div>
        <!-- //Logo & title =========================================================== -->
        <br>
        <!-- Signup form   =========================================================== -->
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-3 col-sm-12 col-sm-offset-1">
                <div class="panel panel-default flipInX animated">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">ENCUESTA</h3>
                    </div>
                    <div class="panel-body">
                        <form class="bootstrap-validator-form" novalidate="novalidate" id="defaultForm" method="post" action="">
                            <div id="name-form-group" class="form-group has-feedback">
                                <label class="fadeIn animated">Nombre</label>
                                <input data-bv-field="username" class="form-control fadeInLeftBig animated" name="username" placeholder="Nombre" type="text"><i data-bv-field="username" class="form-control-feedback" style="display: none;"></i>
                            <small class="help-block" data-bv-validator="notEmpty" style="display: none;">The username is required and can't be empty</small><small class="help-block" data-bv-validator="stringLength" style="display: none;">The username must be more than 6 and less than 30 characters long</small><small class="help-block" data-bv-validator="regexp" style="display: none;">The username can only consist of alphabetical, number, dot and underscore</small></div>
                            <div id="password-form-group" class="form-group has-feedback">
                                <label class="fadeIn animated">Password</label>
                                <input data-bv-field="password" class="form-control fadeInLeftBig animated" name="password" placeholder="Password" type="password"><i data-bv-field="password" class="form-control-feedback" style="display: none;"></i>
                            <small class="help-block" data-bv-validator="notEmpty" style="display: none;">The password is required and can't be empty</small></div>
                            <div id="keep-logged-form-group" class="form-group has-feedback fadeIn animated">
                                <div class="checkbox">
                                    <input data-bv-field="acceptTerms" name="acceptTerms" type="checkbox"><i data-bv-field="acceptTerms" class="form-control-feedback" style="display: none; top: 0px;"></i>Keep me logged in
                                </div>
                            </div>
                            <div id="submit-form-group" class="form-group bounceIn animated">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                         <!--   <div class="line line-dashed fadeInLeftBig animated"></div>
                            <a href="#" class="btn btn-facebook block m-b-10 fadeInLeft animated">
                                <i class="fa fa-facebook pull-left"></i>Sign in with Facebook
                            </a>
                            <a href="#" class="btn btn-twitter  block m-b-10 fadeInRight animated">
                                <i class="fa fa-twitter pull-left"></i>Sign in with Twitter
                            </a>
						-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- //Signup form   =========================================================== -->
    </div>
    <!-- //Container -->
    <!-- Page Footer =========================================================== -->
    <footer id="page-footer" class="text-center fadeInDown animated">
        <p>
            Built with <a href="http://getbootstrap.com/">Bootstrap 3</a>
            | Made by <a href="http://codecanyon.net/user/ay_dev">Aydev</a>
        </p>
    </footer>
    <!-- //Page Footer =========================================================== -->


</body></html>