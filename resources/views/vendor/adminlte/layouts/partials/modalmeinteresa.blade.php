<!-- Modal me interesa -->
<div class="modal fad" id="meInteresa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gray-light">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">
                    <img style="padding-left: 1%; height: 70px; width: auto;"
                         src="{{ asset('/img/expoeducar_logo115x97.png') }}" alt="ExpoEducar">
                     <strong>Proporciona tus datos para obtener más información</strong></h4>
            </div>
            <div class="modal-body">
                <!-- form start -->
                {!! Form::open(['method' => 'POST', 'route' => 'send.moreinfo', 'class' => 'form-horizontal']) !!}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nombreApellido" class="col-sm-3 control-label">Nombre y Apellido *</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nombreApellido" name="nombreApellido"
                                       placeholder="Nombre y Apellido" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telefono" class="col-sm-3 control-label">Teléfono *</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="whatsapp" class="col-sm-3 control-label">Whatsapp</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Whatsapp">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Correo *</label>

                            <div class="col-sm-9">
                                <input type="hidden" id="email" name="email">
                                <input type="hidden" id="tipo" name="tipo">
                                <input type="email" class="form-control" id="inputEmail3" name="inputEmail3" placeholder="Correo electrónico" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="interes" class="col-sm-3 control-label">Interés</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="interes" name="interes" placeholder="Estoy interesado en...">
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="modal-footer bg-gray-light">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                {!! Form::close() !!}
            </div>

        </div>
    </div>
</div>