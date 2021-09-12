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
                            <h2>Admin (20)</h2>
                        </div>
                        <!-- Contenido -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 ">
                                                <form class="form-horizontal">
                                                    <div class="form-group">
                                                        <div class="col-sm-3 offset-sm-7 col-md-3 offset-md-8 text-right">
                                                            <input type="text" class="form-control" id="" placeholder="Buscar…">
                                                        </div>
                                                        <div class="col-sm-2 col-md-1 text-right">
                                                            <a href="crear_admin.php" class="btn btn-default">
                                                                <i class="glyph-icon icon-plus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <table id="datatable-row-highlight" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>ID </th>
                                                    <th>Nombre</th>
                                                    <th>Tipo de perfil</th>
                                                    <th>Correo</th>
                                                    <th>Fecha de creación</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for($x = 1; $x <= 50; $x++):?>
                                                <tr>
                                                    <td>893864</td>
                                                    <td>Maya Martinez</td>
                                                    <td>Admin</td>
                                                    <td>correo@converge360.com</td>
                                                    <td>16/01/19</td>
                                                    <td class="text-center">
                                                        <a href="editar_admin.php" class="btn btn-default">
                                                            <i class="glyph-icon icon-pencil"></i>
                                                        </a>
                                                        <a href="#!" class="btn btn-default">
                                                            <i class="glyph-icon icon-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php endfor?>
                                            </tbody>
                                        </table>
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
<!-- Data tables -->
<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/datatable/datatable.css">-->
<script type="text/javascript" src="assets/widgets/datatable/datatable.js"></script>
<script type="text/javascript" src="assets/widgets/datatable/datatable-bootstrap.js"></script>
<script type="text/javascript" src="assets/widgets/datatable/datatable-tabletools.js"></script>

<script type="text/javascript">
    /* Datatable row highlight */
    $(document).ready(function() {
        var table = $('#datatable-row-highlight').DataTable();

        $('#datatable-row-highlight tbody').on( 'click', 'tr', function () {
            $(this).toggleClass('tr-selected');
        } );
    });

    $(document).ready(function() {
        $('.dataTables_filter input').attr("placeholder", "Buscar…");
        $('#datatable-row-highlight_wrapper .row').css("width", "100%");
        $('#datatable-row-highlight_length').css("display", "none");
        $('#datatable-row-highlight_filter').css("display", "none");
    });

</script>
<?php include_once('template/footer.php') ?>