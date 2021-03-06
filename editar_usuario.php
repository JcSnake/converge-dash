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
                            <h2>Editar Usuario</h2>
                        </div>
                        <!-- Contenido -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="panel h100p">
                                    <div class="panel-body ">
                                        <div class="panel-content image-box">
                                            <img src="assets/images/logo.png" alt="" class="meta-image img-circle" width="70%">
                                            <h3 class="meta-heading font-bold">Master Admin</h3>
                                            <h6 class="meta-subheading">correo@converge360.com</h6>
                                            <h4 class="meta-subheading mrg10T">ID  893864</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <div class="panel h100p">
                                    <div class="panel-body">
                                        <form class="form-horizontal">
                                            <div class="row mrg20B">
                                                <div class="col-sm-12">
                                                    <h4 class="bg_grisl pad10A">Editar informaci??n de usuario</h4>
                                                </div>
                                            </div>
                                            <div class="form-group pad5L pad5R">
                                                <div class="col-sm-6 mrg10B">
                                                    <label>Nombre</label>
                                                    <input type="text" class="form-control" id="" placeholder="Nombre">
                                                </div>
                                            </div>
                                            <div class="form-group pad5L pad5R">
                                                <div class="col-sm-6 mrg10B input-group">
                                                    <label>Correo electr??nico</label>
                                                    <input type="text" class="form-control" placeholder="Correo electr??nico">
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="row mrg20B">
                                                <div class="col-sm-12">
                                                    <p>Contrase??a: <span class="font-size-18">????????????????????</span> <a href="#!" class="mrg10L font-blue" data-toggle="modal" data-target="#forgotPass">??Deseas cambiar la contrase??a?</a></p>
                                                </div>
                                            </div>
                                            <div class="row mrg20B">
                                                <div class="col-sm-12">
                                                    <h4 class="bg_grisl pad10A">Visibilidad de datos</h4>
                                                </div>
                                            </div>
                                            <div class="form-group pad5L pad5R">
                                                <div class="col-sm-3 mrg10B">
                                                    <label class="col-sm-7 text-left">InveC</label>
                                                    <div class="col-sm-5">
                                                        <input type="checkbox" class="input-switch-alt">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mrg10B">
                                                    <label class="col-sm-7 text-left">Sesiones</label>
                                                    <div class="col-sm-5">
                                                        <input type="checkbox" class="input-switch-alt">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mrg10B">
                                                    <label class="col-sm-7 text-left">CPS</label>
                                                    <div class="col-sm-5">
                                                        <input type="checkbox" class="input-switch-alt">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mrg10B">
                                                    <label class="col-sm-7 text-left">CPL</label>
                                                    <div class="col-sm-5">
                                                        <input type="checkbox" class="input-switch-alt">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mrg10B">
                                                    <label class="col-sm-7 text-left">Leads</label>
                                                    <div class="col-sm-5">
                                                        <input type="checkbox" class="input-switch-alt">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mrg10B">
                                                    <label class="col-sm-7 text-left">Ventas</label>
                                                    <div class="col-sm-5">
                                                        <input type="checkbox" class="input-switch-alt">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mrg10B">
                                                    <label class="col-sm-7 text-left">CPA</label>
                                                    <div class="col-sm-5">
                                                        <input type="checkbox" class="input-switch-alt">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mrg10B">
                                                    <label class="col-sm-7 text-left">Costo total</label>
                                                    <div class="col-sm-5">
                                                        <input type="checkbox" class="input-switch-alt">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mrg10B">
                                                    <label class="col-sm-7 text-left">Utilidad</label>
                                                    <div class="col-sm-5">
                                                        <input type="checkbox" class="input-switch-alt">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group pad5L pad5R">
                                                <div class="col-sm-6 mrg10B">
                                                    <label>Agregar campa??as</label>
                                                    <input type="text" name="" placeholder="Agregar campa??as" class="form-control autocomplete-input">
                                                    <p class="font-size-12">Si este campo se deja en blanco  tendr?? acceso a todas las campa??as</p>
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
                    <p class="text-center legales mt-5">Converge 360 2020 | T??rminos y condiciones</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="mssUserNot" tabindex="-1" role="modal" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h3 class=" font-bold mrg15B">Usuario notificado</h3>
                    <p class="mrg15B f-light font-size-14">Se ha enviado una notificaci??n al correo usurio@converge360.com Con la informaci??n de acceso </p>
                    <a class="btn btn-primary bg_blue btn-modal font-white" data-dismiss="modal">Aceptar</a>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('template/modals.php')?>
</body>
</html>
<!-- jQueryUI Autocomplete -->

<script type="text/javascript" src="assets/widgets/autocomplete/autocomplete.js"></script>
<script type="text/javascript" src="assets/widgets/autocomplete/menu.js"></script>
<script type="text/javascript" src="assets/widgets/autocomplete/autocomplete-demo.js"></script>
<?php include_once('template/footer.php') ?>