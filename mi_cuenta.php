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
                            <h2>Mi cuenta</h2>
                        </div>
                        <!-- Contenido -->
                        <div class="row h70vh">
                            <div class="col-md-3">
                                <div class="panel h100p">
                                    <div class="panel-body ">
                                        <div class="panel-content">
                                            <img src="assets/images/logo.png" alt="" width="100%" class="meta-image img-circle w-50">
                                            <h3 class="meta-heading font-bold">Master Admin</h3>
                                            <span>correo@converge360.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="panel h100p">
                                    <div class="panel-body">
                                        <table class="table font-black">
                                            <thead >
                                                <tr >
                                                    <th colspan="2" class="bg_grisl border-c0">Información general de la cuenta</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="font-bold">Usuario:</td>
                                                    <td>Master admin</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-bold">Correo:</td>
                                                    <td>correo@converge360.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-bold">Contraseña:</td>
                                                    <td><span class="font-size-18">··········</span> <a href="#!" class="mrg10L font-blue" data-toggle="modal" data-target="#forgotPass">¿Deseas cambiar la contraseña?</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin Contenido -->
                    </div>
                    <p class="text-center legales mt-5">Converge 360 2020 | Términos y condiciones</p>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('template/modals.php')?>
    <?php include_once('template/footer.php') ?>
</body>
</html>