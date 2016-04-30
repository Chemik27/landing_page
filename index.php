
<html lang="en"><head>
    <link rel="shortcut icon" type="image/png" href="imagenes/iconoDuty.png"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Duty Map | Home</title>
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
    <script src="plugins/jquery/jquery-2.2.3.min.js"></script>
    <script src="plugins/bootstrapValidator/bootstrapValidator.min.js"></script>
</head>

<body>   
    <!-- Container -->
    <div id="form-container" class="container">
        <!-- Logo & title =========================================================== -->
        <div class="text-center demo-title bounceInDown animated">
        <img src="imagenes/Logo-DutyMap-Original.png" witdh="30%" height="30%" />
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
                        <form class="bootstrap-validator-form" novalidate="novalidate" id="defaultForm" method="post" action="controller.php">
                            <div class="row">
                                <div class="col-sm-6">DutyMap es una aplicacion ....</div>
                                <div class="col-sm-6">
                                    <div id="name-form-group" class="form-group has-feedback">
                                        <label class="fadeIn animated cold-md-6">Nombre</label>
                                        <input data-bv-field="nombre" class="form-control fadeInLeftBig animated cold-md-6" name="nombre" id="nombre" type="text"><i data-bv-field="username" class="form-control-feedback" style="display: none;"></i>
                                    </div>
                                    <div id="apellido-form-group" class="form-group has-feedback">
                                        <label class="fadeIn animated">Apellido</label>
                                        <input data-bv-field="apellido" class="form-control fadeInLeftBig animated" name="apellido" id="apellido"  type="text"><i data-bv-field="apellido" class="form-control-feedback" style="display: none;"></i>
                                    </div>
                                    <div id="telefono-form-group" class="form-group has-feedback">
                                        <label class="fadeIn animated">Telefono</label>
                                        <input data-bv-field="telefono" class="form-control fadeInLeftBig animated" name="telefono" id="telefono" type="text"><i data-bv-field="telefono" class="form-control-feedback" style="display: none;"></i>
                                    </div>
                                    <div id="correoElectronico-form-group" class="form-group has-feedback">
                                        <label class="fadeIn animated">Correo Electronico</label>
                                        <input data-bv-field="correoElectronico" class="form-control fadeInLeftBig animated" name="correoElectronico" id="correoElectronico" type="text"><i data-bv-field="correoElectronico" class="form-control-feedback" style="display: none;"></i>
                                    </div>
                                    <div id="servicios-form-group" class="form-group has-feedback">
                                        <label class="fadeIn animated">Servicios</label>
                                        <select class=" form-control fadeInLeftBig animated" id="servicios" name="servicios" onchange="servicioOnChange();">
                                            <option value="">-</option>
                                            <option disabled="true" style="background-color: #0B243B;">HOGAR</option>
                                            <option>Gasista</option>
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
                                    </div>
                                    <div id="servicio-form-group" class="form-group has-feedback" style="display: none;">
                                        <label class="fadeIn animated">Servicio</label>
                                        <input data-bv-field="servicio" class="form-control fadeInLeftBig animated" name="servicio" id="servicio" type="text"><i data-bv-field="servicio"  class="form-control-feedback" style="display: none;"></i>
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
                                </div>
                            </div>
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
       
    </footer>
    <!-- //Page Footer =========================================================== -->
<script>
        $(document).ready(function () {
            //Validacion al elegir OTRO como Servicio
            servicioOnChange = function(){
                var servicio = $('#servicios').val();

                if(servicio == 'OTRO')
                    $('#servicio-form-group').show();
                else
                    $('#servicio-form-group').hide();

            }
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
            var validator = $('#defaultForm').bootstrapValidator({
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
                                message: 'El apellido es requerido'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z]*$/,
                                message: 'Solo se admiten letras'
                            }
                        }
                    },
                    telefono: {
                        message: 'El telefono es invalido',
                        validators: {
                            notEmpty: {
                                message: 'El telefono es requerido'
                            },
                            regexp: {
                                regexp: /^[15][0-9]{9}$/,
                                message: 'Celular mal ingresado, debe comenzar con 15xxxxxxxx'
                            }
                        }
                    },
                    correoElectronico: {
                        message: 'El email es invalido',
                        validators: {
                            notEmpty: {
                                message: 'El email es requerido'
                            },
                            emailAddress: {
                                message: 'El email ingresado es incorrecto'
                            }
                        }
                    },
                    servicios: {
                        validators: {
                            notEmpty: {
                                message: 'Seleccione un servicio'
                            }
                        }
                    },
                    servicio: {
                    message: 'El servicio es invalido',
                        validators: {
                            notEmpty: {
                                message: 'El servicio es requerido'
                            }
                        }
                    }    

                }
            });
        }); //end document ready
    </script>+
    -

</body></html>