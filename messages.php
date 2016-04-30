
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
        <img src="imagenes/Logo-DutyMap-Original.png" witdh="20%" height="20%" />
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
                    <div class="cold-md-1" style="height: 93px;">
                        <form method="post" action="index.php">
                            <div class="row">
                                <div class="col-sm-12 text-center" style="padding-top: 4%;">
                                    <?php
                                        $error = $_GET['error'];

                                        if($error == 1 ){
                                    ?>
                                    <label>El correo electronico ingresado ya existe. Por favor ingrese otro.</label></br>
                                    <input type="submit" value="Volver" />
                                    <?php
                                        }
                                    ?>
                                    <?php
                                        $error = $_GET['error'];

                                        if($error == 2 ){
                                    ?>
                                    <label>El registro fue realizado con exito. Muchas gracias.</label>
                                    <?php
                                        }
                                    ?>
                                    <?php
                                        $error = $_GET['error'];

                                        if($error != 1 && $error != 2){
                                    ?>
                                    <label>Error</label>
                                    <?php
                                        }
                                    ?>
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

</body></html>