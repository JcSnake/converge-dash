<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once('template/head_login.php') ?>
    <style type="text/css">
      html,body {
        height: 100%;
        overflow: hidden;
      }

      body#Penguin{
        background: #5770BB !important;
      }
  </style>
</head>
<body id="Salamander">
    <div class="center-vertical">
        <div class="center-content row">
            <div class="col-md-3 center-margin">
                <form method="post" action="">
                    <div class="content-box wow bounceInDown modal-content">
                        <div class="meta-box mrg20T">
                            <img src="assets/images/convergence_dark-8.png" alt="" width="70%">
                        </div>
                        <div class="content-box-wrapper">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cliente">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                                    <span class="input-group-addon hand">
                                        <i class="glyph-icon icon-eye"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox checkbox-info">
                                    <label class="font-size-12">
                                        <input type="checkbox" id="inlineCheckbox114" checked class="custom-checkbox">Acepto <a href="terminos_condiciones.php">Términos y Condiciones</a>
                                    </label>
                                </div>
                            </div>
                            <a href="home.php" class="btn bg_blue btn-block font-white">Iniciar sesión</a>
                            <p class="mrg10T font-gray text-center font-size-12"><a href="#!" data-toggle="modal" data-target="#forgotPass">¿Olvidaste tu contraseña?</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include_once('template/modals.php') ?>
    <?php include_once('template/footer_login.php') ?>
</body>
</html>