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
                            <h2>Crear nuevo Admin</h2>
                        </div>
                        <!-- Contenido -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel">
                                    <div class="panel-body">
                                        <form class="form-horizontal">
                                            <div class="row mrg20B">
                                                <div class="col-sm-12">
                                                    <h4 class="bg_grisl pad10A">Información general</h4>
                                                </div>
                                            </div>
                                            <div class="form-group pad5L pad5R">
                                                <div class="col-sm-6 mrg10B">
                                                    <label>Nombre</label>
                                                    <input type="text" class="form-control" id="" placeholder="Nombre">
                                                </div>
                                                <div class="col-sm-6 mrg10B input-group">
                                                    <label>Correo electrónico</label>
                                                    <div class="input-group group-mail">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mrg20B">
                                                <div class="col-sm-12">
                                                    <h4 class="bg_grisl pad10A">Permisos</h4>
                                                </div>
                                            </div>
                                            <div class="form-group pad5L pad5R">
                                                <div class="col-sm-3 mrg10B">
                                                    <label class="col-sm-6 text-left">Usuarios</label>
                                                    <div class="col-sm-6">
                                                        <input type="checkbox" class="input-switch-alt">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mrg10B">
                                                    <label class="col-sm-6 text-left">Vista usuario</label>
                                                    <div class="col-sm-6">
                                                        <input type="checkbox" class="input-switch-alt">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mrg10B">
                                                    <label class="col-sm-6 text-left">Clientes</label>
                                                    <div class="col-sm-6">
                                                        <input type="checkbox" class="input-switch-alt">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mrg10B">
                                                    <label class="col-sm-6 text-left">Ventas</label>
                                                    <div class="col-sm-6">
                                                        <input type="checkbox" class="input-switch-alt">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mrg10B">
                                                    <label class="col-sm-6 text-left">Inversión en medios</label>
                                                    <div class="col-sm-6">
                                                        <input type="checkbox" class="input-switch-alt">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group pad5L pad5R">
                                                <div class="col-sm-6 mrg10B">
                                                    <label class="col-sm-12">Agregar campaña</label>
                                                    <input type="text" name="" placeholder="Agregar campañas" class="form-control " data-role="tagsinput">
                                                    <p class="font-size-12">Si este campo se deja en blanco  tendrá acceso a todas las campañas</p>
                                                </div>
                                            </div>
                                            <div class="row mrg20B">
                                                <div class="col-sm-12">
                                                    <h4 class="bg_grisl pad10A">Contraseña</h4>
                                                </div>
                                            </div>
                                            <div class="form-group pad5L pad5R">
                                                <div class="col-sm-12 mrg10B">
                                                    <p class="font-size-12">La contraseña debe contener al menos 6 caracteres.</p>
                                                </div>
                                                <div class="col-sm-6 mrg10B">
                                                    <label>Contraseña</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="" placeholder="Contraseña">
                                                        <span class="input-group-addon hand">
                                                            <i class="glyph-icon icon-eye"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mrg10B">
                                                    <label>Confirmar contraseña</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="" placeholder="Confirmar contraseña">
                                                        <span class="input-group-addon hand">
                                                            <i class="glyph-icon icon-eye"></i>
                                                        </span>
                                                    </div>
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
                    <p class="mrg15B f-light font-size-14">Se ha enviado una notificación al correo usuario@converge360.com Con la información de acceso </p>
                    <a class="btn btn-primary bg_blue btn-modal font-white" data-dismiss="modal">Aceptar</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script type="text/javascript" src="assets/tags/bootstrap-tagsinput.min.js"></script>
<script src="assets/tags/app_bs2.js"></script>
<script src="assets/tags/app.js"></script>
<?php include_once('template/footer.php') ?>