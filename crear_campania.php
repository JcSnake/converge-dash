<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once('template/head.php') ?>
    <link rel="apple-touch-icon" sizes="57x57" href="./assets/images/favicon2/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./assets/images/favicon2/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/images/favicon2/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/images/favicon2/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./assets/images/favicon2/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/images/favicon2/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./assets/images/favicon2/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/images/favicon2/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon2/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./assets/images/favicon2/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon2/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/images/favicon2/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon2/favicon-16x16.png">
    <link rel="manifest" href="./assets/images/favicon2/manifest.json">
</head>
<body id="Salamander">
    <?php include_once('template/header.php') ?>
    <?php include_once('template/sidebar.php') ?>
    <div id="sb-site">
        <div id="page-wrapper">
            <div id="page-content-wrapper">
                <div id="page-content">
                    <div class="container mrg25B">
                        <div id="page-title">
                            <h2>Crear nueva campaña</h2>
                        </div>
                        <!-- Contenido -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel">
                                    <div class="panel-body">
                                        <form class="form-horizontal">
                                            <div class="row mrg20B">
                                                <div class="col-sm-12">
                                                    <h4>Datos de nueva campaña</h4>
                                                </div>
                                            </div>
                                            <div class="form-group pad5L pad5R">
                                                <div class="col-sm-6 mrg10B">
                                                    <label>Nombre</label>
                                                    <input type="text" class="form-control" id="" placeholder="Nombre">
                                                </div>
                                                <div class="col-sm-6 mrg10B input-group">
                                                    <label>Base de Datos</label>
                                                    <input type="text" name="" placeholder="Base de datos" class="form-control autocomplete-input">
                                                </div>
                                            </div>
                                            <div class="form-group pad5L pad5R">
                                                <div class="col-sm-6 mrg10B">
                                                    <label>Cliente</label>
                                                    <select name="" class="form-control h35">
                                                        <option selected disabled>Cliente</option>
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                        <option>Option 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mrg20B">
                                                <div class="col-sm-12">
                                                    <h4>Definir fechas de campaña</h4>
                                                </div>
                                            </div>
                                            <div class="form-group pad5L pad5R">
                                                <div class="col-sm-5 mrg10B">
                                                    <div class="input-prepend input-group">
                                                        <label>Rango</label>
                                                        <span class="add-on input-group-addon">
                                                            <i class="glyph-icon icon-calendar"></i>
                                                        </span>
                                                        <input type="text" name="daterangepicker-example" id="daterangepicker-example" class="form-control" value="03/18/2013 - 03/23/2013">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mrg20B">
                                                <div class="col-sm-12">
                                                    <h4>Configurar métricas</h4>
                                                </div>
                                            </div>
                                            <div class="form-group pad5L pad5R">
                                                <div class="col-sm-2 mrg10B">
                                                    <label>InveIR</label>
                                                    <input type="text" class="form-control" id="" placeholder="InveIR">
                                                </div>
                                                <div class="col-sm-2 mrg10B">
                                                    <label>InveIE</label>
                                                    <input type="text" class="form-control" id="" placeholder="InveIE">
                                                </div>
                                                <div class="col-sm-2 mrg10B">
                                                    <label>InverCR</label>
                                                    <input type="text" class="form-control" id="" placeholder="InverCR">
                                                </div>
                                                <div class="col-sm-2 mrg10B">
                                                    <label>InverCE</label>
                                                    <input type="text" class="form-control" id="" placeholder="InverCE">
                                                </div>
                                                <div class="col-sm-2 mrg10B">
                                                    <label>Sesiones</label>
                                                    <input type="text" class="form-control" id="" placeholder="Sesiones">
                                                </div>
                                            </div>
                                            <div class="form-group pad5L pad5R">
                                                <div class="col-sm-12 mrg10B text-right">
                                                    <button class="btn btn-alt btn-hover btn-default mrg15R"><span>Cancelar</span><i class="glyph-icon icon-close"></i></button>
                                                    <a class="btn btn-alt btn-hover btn-success font-white" data-toggle="modal" data-target="#mssUserNot"><span>Guardar</span> <i class="glyph-icon icon-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin Contenido -->
                    </div>
                    <p class="text-center legales">Converge 360 2020 | <a href="terminos_condiciones.php">Términos y condiciones</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="mssUserNot" tabindex="-1" role="modal" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h3 class=" font-bold mrg15B">Usuario notificado</h3>
                    <p class="mrg15B f-light font-size-14">Se ha enviado una notificación al correo usurio@converge360.com Con la información de acceso </p>
                    <a class="btn btn-primary bg_blue btn-modal font-white" data-dismiss="modal">Aceptar</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<!-- jQueryUI Autocomplete -->

<script type="text/javascript" src="assets/widgets/autocomplete/autocomplete.js"></script>
<script type="text/javascript" src="assets/widgets/autocomplete/menu.js"></script>
<script type="text/javascript" src="assets/widgets/autocomplete/autocomplete-demo.js"></script>
<!-- Bootstrap Daterangepicker -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/daterangepicker/daterangepicker.css">-->
<script type="text/javascript" src="assets/widgets/daterangepicker/moment.js"></script>
<script type="text/javascript" src="assets/widgets/daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="assets/widgets/daterangepicker/daterangepicker-demo.js"></script>
<?php include_once('template/footer.php') ?>