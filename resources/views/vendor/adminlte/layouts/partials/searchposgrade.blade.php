<div class="row">
    <div class="box box-info">
        <form style="background-color: #2C2D2D;" class="form-inline">
            <div class="box-body">
                {{--<span style="font-size: 18px;color: ghostwhite;" class="glyphicon glyphicon glyphicon-search"></span>
                &nbsp;&nbsp;&nbsp;--}}
                <div class="form-group">
                    <select style="min-width: 200px; max-width: 200px" name="search_country" id="search_country" class="form-control">
                        <option value="">País</option>
                        @foreach($countries as $country)
                            <option value="{{ $country->id}}">{{ $country->printable_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    &nbsp;&nbsp;
                    <select style="min-width: 200px; max-width: 200px" name="search_province" id="search_province" class="form-control">
                        <option value="">Provincia</option>
                        @foreach($provinces as $province)
                            <option value="{{ $province->id}}">{{ $province->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    &nbsp;&nbsp;
                    <select style="min-width: 200px; max-width: 200px" id="search_city" name="search_city" class="form-control">
                        <option value="">Ciudad</option>

                    </select>
                </div>
                <div class="form-group">
                    &nbsp;&nbsp;
                    <input type="text" id="search_keywordtopic" name="search_keywordtopic" class="form-control mx-sm-2"
                           placeholder="Clave, Tópico, Nombre, Palabra Clave..." style="min-width: 400px; max-width: 400px">
                </div>
                <button type="submit" style="width: 120px;" class="btn btn-warning">BUSCAR</button>
                <a style="font-size: 14px" data-toggle="collapse" data-parent="#accordion"
                   href="#advancedSearch">&nbsp;&nbsp;
                    <strong> Avanzada <i class="fa fa-search-plus margin-r-5"></i></strong>
                </a>
            </div>
            <div id="advancedSearch" class="box-body panel-collapse collapse">
                <div class="form-group">
                    <select style="min-width: 200px; max-width: 200px" id="search_tipo" name="search_tipo" class="form-control">
                        <option value="">Tipo</option>
                        <option value="Masterado">Masterado</option>
                        <option value="Doctorado">Doctorado</option>
                        <option value="PHD">PHD</option>
                    </select>
                </div>&nbsp;&nbsp;
                <div style="border-left:1px solid whitesmoke;" class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="advsearch_chkPresencial" name="advsearch_chkPresencial"
                               value="presencial">
                        Presencial
                    </label>
                </div>&nbsp;&nbsp;
                <div class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="advsearch_chkSemipresencial" name="advsearch_chkSemipresencial"
                               value="semipresencial">
                        Semipresencial
                    </label>
                </div>&nbsp;&nbsp;
                <div class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="advsearch_chkDistancia" name="advsearch_chkDistancia"
                               value="distancia">
                        Distancia
                    </label>
                </div>
                <div style="border-left:1px solid whitesmoke;" class="form-group">
                    &nbsp;&nbsp;
                      <input type="text" id="search_institucion" name="search_institucion" class="form-control mx-sm-2"
                               placeholder="Institución..." style="min-width: 400px; max-width: 400px">
                </div>&nbsp;&nbsp;
                <div style="border-left:1px solid whitesmoke;" class="form-group">
                    &nbsp;&nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;"  for="advsearch_costo">Costo: <b>$ 0</b></label>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" value="" class="slider form-control" id="advsearch_costo" name="advsearch_costo"
                           data-slider-min="0" data-slider-max="11000" data-slider-step="1000"
                           data-slider-value="[0,11000]" data-slider-orientation="horizontal"
                           data-slider-selection="before" data-slider-tooltip="show"
                           data-slider-id="blue_price_slider"/>&nbsp;<b style="font-size: 14px; color: ghostwhite;" >$ 11.000+</b>
                </div>
            </div>
        </form>
    </div>
</div>