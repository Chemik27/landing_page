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
        <img src="logo-ubicacion.png" witdh="20%" height="20%" />
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
                    <div class="panel-body cold-md-1">
                        <form class="bootstrap-validator-form" novalidate="novalidate" id="defaultForm" method="post" action="">
                            <div id="name-form-group" class="form-group has-feedback">
                                <label class="fadeIn animated cold-md-6">Nombre</label>
                                <input data-bv-field="username" class="form-control fadeInLeftBig animated cold-md-6" name="username" placeholder="Nombre" type="text"><i data-bv-field="username" class="form-control-feedback" style="display: none;"></i>
                            <small class="help-block col-md-6" data-bv-validator="notEmpty" style="display: none;">El nombre es requerido</small>
                            <small class="help-block col-md-6" data-bv-validator="regexp" style="display: none;">The username can only consist of alphabetical, number, dot and underscore</small>
                            </div>
                            <div id="password-form-group" class="form-group has-feedback">
                                <label class="fadeIn animated">Apellido</label>
                                <input data-bv-field="password" class="form-control fadeInLeftBig animated" name="password" placeholder="Apellido" type="password"><i data-bv-field="password" class="form-control-feedback" style="display: none;"></i>
                            <small class="help-block" data-bv-validator="notEmpty" style="display: none;">The password is required and can't be empty</small>
                            </div>
                            <div id="password-form-group" class="form-group has-feedback">
                                <label class="fadeIn animated">Telefono</label>
                                <input data-bv-field="password" class="form-control fadeInLeftBig animated" name="password" placeholder="Telefono" type="password"><i data-bv-field="password" class="form-control-feedback" style="display: none;"></i>
                            <small class="help-block" data-bv-validator="notEmpty" style="display: none;">The password is required and can't be empty</small>
                            </div>
                            <div id="password-form-group" class="form-group has-feedback">
                                <label class="fadeIn animated">Correo Electronico</label>
                                <input data-bv-field="password" class="form-control fadeInLeftBig animated" name="password" placeholder="Correo Electonico" type="password"><i data-bv-field="password" class="form-control-feedback" style="display: none;"></i>
                            <small class="help-block" data-bv-validator="notEmpty" style="display: none;">The password is required and can't be empty</small>
                            </div>
                            <div id="password-form-group" class="form-group has-feedback">
                                <label class="fadeIn animated">Servicios</label>
                                <select class=" form-control fadeInLeftBig animated">
                                    <option>-</option>
                                    <option disabled="true" style="background-color: #0B243B;">HOGAR</option>
                                    <option>Plomero</option>
                                    <option>Electricista</option>
                                    <option>Instalacion/Reparacion Aire Acondicionado</option>
                                    <option>Techista</option>
                                    <option>Construccion</option>
                                    <option disabled="true" style="background-color: #0B243B;">EDUCACION</option>
                                    <option>Apoyo Escolar</option>
                                    <option>Apoyo Universitario</option>
                                    <option disabled="true" style="background-color: #0B243B;">SALUD</option>
                                    <option>Kinesiologos</option>
                                    <option>Dermatologa</option>
                                    <option disabled="true" style="background-color: #0B243B;">BELLEZA</option>
                                    <option>Revendora Cosmeticos</option>
                                    <option>Tratamientos</option>
                                    <option disabled="true" style="background-color: #0B243B;">OTRO</option>
                                    <option id="otro">OTRO</option>
                                </select>
                            <small class="help-block" data-bv-validator="notEmpty" style="display: none;">The password is required and can't be empty</small>
                            </div>
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
<script>
        $(document).ready(function () {
            //Put animation end trigger on global variable to be used bellow on each animation end callback 
            var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            //Get actual browser used to disable animation if is Internet Explorer
            var ua = window.navigator.userAgent
            var msie = ua.indexOf ( "MSIE " )
            // If Internet Explorer, disable animation
            if(msie > 0){
                $(".hidden").removeClass('hidden');
            }
            else
            {
            //Animation Script
            $('.demo-title').one(animationEnd,
                function () {
                    $(".panel").removeClass('hidden');
                    $(".panel").addClass('flipInX animated').one(animationEnd,
                        function () {
                            $("#name-form-group").removeClass('hidden');
                            $("#name-form-group label").addClass('fadeIn animated')
                            $("#name-form-group input").addClass('fadeInLeftBig animated').one(animationEnd,
                                function () {
                                    $("#password-form-group").removeClass('hidden');
                                    $("#password-form-group label").addClass('fadeIn animated')
                                    $("#password-form-group input").addClass('fadeInLeftBig animated').one(animationEnd,
                                        function () {
                                            $("#keep-logged-form-group").removeClass('hidden');
                                            $("#keep-logged-form-group").addClass('fadeIn animated').one(animationEnd,
                                                function () {
                                                    $("#submit-form-group").removeClass('hidden');
                                                    $("#submit-form-group").addClass('bounceIn animated').one(animationEnd,
                                                        function () {
                                                            $(".line").removeClass('hidden');
                                                            $(".line").addClass('fadeInLeftBig animated');


                                                            $(".btn-facebook").removeClass('hidden');
                                                            $(".btn-facebook").addClass('fadeInLeft animated');

                                                            $(".btn-twitter").removeClass('hidden');
                                                            $(".btn-twitter").addClass('fadeInRight animated');

                                                            $(".btn-google-plus").removeClass('hidden');
                                                            $(".btn-google-plus").addClass('fadeInDown animated').one(animationEnd,
                                                                function () {
                                                                    $("#have-account-text").removeClass('hidden');
                                                                    $("#have-account-text").addClass('fadeIn animated').one(animationEnd,
                                                                        function () {
                                                                            $("#btn-signup").removeClass('hidden');
                                                                            $("#btn-signup").addClass('bounce animated');
                                                                        });
                                                                });

                                                        });
                                                });

                                        });
                                });
                        });
                    $("#page-footer").removeClass('hidden');
                    $("#page-footer").addClass('fadeInDown animated');
                }
            );
            }
            //Form validation
            $('#defaultForm').bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    nombre: {
                        message: 'El nombre es invalido',
                        validators: {
                            notEmpty: {
                                message: 'El nombre es requerido'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z]*$/,
                                message: 'Solo se admiten letras'
                            }
                        }
                    },
                    apellido: {
                        message: 'El apellido es invalido',
                        validators: {
                            notEmpty: {
                                message: 'El nombre es requerido'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z]*$/,
                                message: 'Solo se admiten letras'
                            }
                        }
                    }
                }
            });
        }); //end document ready
    </script>

</body></html>