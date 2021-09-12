<div class="modal fade" id="forgotPass" tabindex="-1" role="modal" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h3 class=" font-bold mrg15B">Ayuda con la contraseña</h3>
                <p class="mrg15B f-light font-size-14">Introduce el correo ligado a la cuenta para modificar la contraseña</p>
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="email" class="form-control" id="" placeholder="Correo">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 mrg15B">
                            <a class="btn btn-primary bg_blue btn-modal font-white" data-toggle="modal" data-target="#forgotPass2" data-dismiss="modal">Continuar</a>
                        </div>
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-default btn-modal bg_gris font-white" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="forgotPass2" tabindex="-1" role="modal" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h3 class=" font-bold mrg15B">Se envió un enlace para cambiar contraseña</h3>
                <p class="mrg15B f-light font-size-14">Revisa tu correo para poder cambiar tu contraseña</p>
                <a class="btn btn-primary bg_blue btn-modal font-white" data-toggle="modal" data-target="#forgotPass3" data-dismiss="modal">Continuar</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="forgotPass3" tabindex="-1" role="modal" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class=" font-bold mrg15B">Crear contraseña nueva</h3>
                <p class="mrg15B f-light font-size-14">Solicitaremos esta contraseña cada vez que inicies sesión.</p>
                <form class="form-horizontal mrg15B">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <input type="email" class="form-control" id="" placeholder="Nueva contraseña">
                                <span class="input-group-addon hand">
                                    <i class="glyph-icon icon-eye"></i>
                                </span>
                             </div>
                            <p class="text-right font-size-12">La contraseña debe contener al menos 6 caracteres.</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <input type="email" class="form-control" id="" placeholder="Vuelve a escribir la contraseña">
                                <span class="input-group-addon hand">
                                    <i class="glyph-icon icon-eye"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <div class="col-sm-12 mrg15B">
                            <a class="btn btn-primary bg_blue btn-modal font-white" data-toggle="modal" data-target="#forgotPass4" data-dismiss="modal">Guardar contraseña</a>
                        </div>
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-default btn-modal bg_gris font-white" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </form>
                <p class="font-bold mrg15B">Consejos para una contraseña segura:</p>
                <ul class="ul-pass">
                    <li>Utilizar al menos 8 caracteres, es mejor si es una combinación de cifras y letras.</li> 
                    <li>No utilices la misma contraseña que ya has utilizado con nosotros antes.</li>
                    <li>No utilice palabras del diccionario, su nombre, número de teléfono u otra información personal que puede obtener fácilmente.</li>
                    <li>No utilices la misma contraseña para varias cuentas.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="forgotPass4" tabindex="-1" role="modal" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h3 class=" font-bold mrg15B">Se cambio correctamente tu contraseña</h3>
                <p class="mrg15B f-light font-size-14">Ingresa tu nueva contraseña para tener acceso a converge 360</p>
                <a class="btn btn-primary bg_blue btn-modal font-white" data-dismiss="modal">Aceptar</a>
            </div>
        </div>
    </div>
</div>
<div class="alert alert-close alert-success float-right bg_verde font-white" style="display: none;">
    <a href="#" title="Close" class="glyph-icon alert-close-btn icon-remove"></a>
    <div class="alert-content">
        <p>¡Se ha cambiado la contraseña exitosamente!</p>
    </div>
</div>