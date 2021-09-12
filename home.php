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
                            <h2>DMP Dashboard</h2>
                        </div>
                        <!-- Contenido -->
                        <div class="example-box-wrapper">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <form class="form-horizontal">
                                                <div class="row mrg0B">
                                                    <div class="col-md-4 offset-md-8">
                                                        <div class="input-prepend input-group">
                                                            <label>Rango</label>
                                                            <span class="add-on input-group-addon">
                                                                <i class="glyph-icon icon-calendar"></i>
                                                            </span>
                                                            <input type="text" name="rango1" id="rango1" class="form-control" value="03/18/2013 - 03/23/2013">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="tile-box bg-red">
                                        <div class="tile-header text-center">
                                            Clientes
                                        </div>
                                        <div class="tile-content-wrapper">
                                            <div class="tile-content text-center">
                                                <p>22</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="tile-box bg-green">
                                        <div class="tile-header text-center">
                                            Campañas activas
                                        </div>
                                        <div class="tile-content-wrapper">
                                            <div class="tile-content text-center">
                                                <p>100</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="tile-box bg-blue">
                                        <div class="tile-header text-center">
                                            Micrositios
                                        </div>
                                        <div class="tile-content-wrapper">
                                            <div class="tile-content text-center">
                                                <p>200</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="tile-box bg-orange">
                                        <div class="tile-header text-center">
                                            Bases de datos
                                        </div>
                                        <div class="tile-content-wrapper">
                                            <div class="tile-content text-center">
                                                <p>300</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="content-box">
                                    <div class="content-box-wrapper">
                                        <canvas id="line-chart" width="800" height="300"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="tile-box bg-green">
                                    <div class="tile-header text-center">
                                        Sesiones
                                    </div>
                                    <div class="tile-content-wrapper">
                                        <div class="tile-content text-center">
                                            <p>100</p>
                                            <p class="font-size-11">+ 7.6% nuevas campañas en el último mes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="tile-box bg-red">
                                    <div class="tile-header text-center">
                                        Clic
                                    </div>
                                    <div class="tile-content-wrapper">
                                        <div class="tile-content text-center">
                                            <p>22</p>
                                            <p class="font-size-11">+ 7.6% nuevas clientes en el último mes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="tile-box bg-orange">
                                    <div class="tile-header text-center">
                                        Llamadas
                                    </div>
                                    <div class="tile-content-wrapper">
                                        <div class="tile-content text-center">
                                            <p>300</p>
                                            <p class="font-size-11">+ 7.6% nuevas bases de datos en el último mes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="tile-box bg-blue">
                                    <div class="tile-header text-center">
                                        Leads
                                    </div>
                                    <div class="tile-content-wrapper">
                                        <div class="tile-content text-center">
                                            <p>200</p>
                                            <p class="font-size-11">+ 7.6% nuevos micrositios en el último mes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="content-box">
                                    <div class="content-box-wrapper">
                                        <canvas id="line-chart-2" width="800" height="300"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="tile-box bg-green">
                                    <div class="tile-header text-center">
                                        Facturación Cliente
                                    </div>
                                    <div class="tile-content-wrapper">
                                        <div class="tile-content text-center">
                                            <p>100</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="tile-box bg-blue">
                                    <div class="tile-header text-center">
                                        Inversión Medios
                                    </div>
                                    <div class="tile-content-wrapper">
                                        <div class="tile-content text-center">
                                            <p>50</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="tile-box bg-orange">
                                    <div class="tile-header text-center">
                                        Utilidad
                                    </div>
                                    <div class="tile-content-wrapper">
                                        <div class="tile-content text-center">
                                            <p>50</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-content ">
                                    <div class="center-vertical">
                                        <ul class="center-content nav nav-justified">
                                            <li>
                                                <h4>
                                                    <i class="glyph-icon font-green opacity-80 icon-long-arrow-up"></i>+50
                                                </h4>
                                            </li>
                                            <li>
                                                <h4>
                                                    <i class="glyph-icon font-red opacity-80 icon-long-arrow-down"></i>
                                                    -20
                                                </h4>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="content-box">
                                    <div class="content-box-wrapper">
                                        <canvas id="mixed-chart" width="800" height="300"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="campaniasDash">
                            <div class="col-sm-12 col-md-6">
                                <div class="content-box">
                                    <h3 class="content-box-header bg-white">
                                        Campañas
                                        <div class="header-buttons-separator">
                                            <a href="#" class="icon-separator">
                                                <i class="glyph-icon font-green opacity-80 icon-long-arrow-up"></i>
                                            </a>
                                        </div>
                                    </h3>
                                    <div class="content-box-wrapper">
                                        <div class="scrollable-content scrollable-xs scrollable-slim ">
                                            <?php for($x = 1; $x <= 100; $x++):?>
                                            <p class="mrg15B">Salamander CPL 2020</p>
                                            <div class="divider"></div>
                                            <?php endfor?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="content-box">
                                    <h3 class="content-box-header bg-white">
                                        Campañas
                                        <div class="header-buttons-separator">
                                            <a href="#" class="icon-separator">
                                                <i class="glyph-icon font-red opacity-80 icon-long-arrow-down"></i>
                                            </a>
                                        </div>
                                    </h3>
                                    <div class="content-box-wrapper">
                                        <div class="scrollable-content scrollable-xs scrollable-slim ">
                                            <?php for($x = 1; $x <= 100; $x++):?>
                                            <p class="mrg15B">Salamander CPL 2020</p>
                                            <div class="divider"></div>
                                            <?php endfor?>
                                        </div>
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
</body>
</html>
<!-- Bootstrap Daterangepicker -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/daterangepicker/daterangepicker.css">-->
<script type="text/javascript" src="assets/widgets/daterangepicker/moment.js"></script>
<script type="text/javascript" src="assets/widgets/daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="assets/widgets/daterangepicker/daterangepicker-demo.js"></script>


<!-- New Charts -->
<script type="text/javascript" src="assets/new_charts/Chart.min.js"></script>
<script type="text/javascript" src="assets/new_charts/charts-init.js"></script>
<script type="text/javascript" src="assets/new_charts/dashboard_chart.js"></script>
<?php include_once('template/footer.php') ?>