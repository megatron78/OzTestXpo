<div class="row">
    <div class="box box-info">
        <form style="background-color: #2C2D2D;" class="form-inline">
            <div class="box-body">
                {{--<span style="font-size: 18px;color: ghostwhite;" class="glyphicon glyphicon glyphicon-search"></span>
                &nbsp;&nbsp;&nbsp;--}}
                <div class="form-group">
                    <select style="min-width: 200px; max-width: 200px" name="search_country" id="search_country" class="form-control">
                        {{--<option value="">País</option>--}}
                        @foreach($countries as $country)
                            @if($country->printable_name == 'Ecuador')
                                <option selected value="{{ $country->id}}">{{ $country->printable_name}}</option>
                            @else
                                <option value="{{ $country->id}}">{{ $country->printable_name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    &nbsp;&nbsp;
                    <select style="min-width: 200px; max-width: 200px" name="search_province" id="search_province" class="form-control">
                        <option value="">Provincia</option>
                        @foreach($provinces as $province)
                            @if($province->id == $province_id)
                                <option selected value="{{ $province->id}}">{{ $province->name}}</option>
                            @else
                                <option value="{{ $province->id}}">{{ $province->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    &nbsp;&nbsp;
                    @if(isset($cities))
                        <select style="min-width: 200px; max-width: 200px" id="search_city" name="search_city" class="form-control">
                            <option value="">Ciudad</option>
                            @foreach($cities as $city)
                                @if($city->id == $city_id)
                                    <option selected value="{{ $city->id}}">{{ $city->name}}</option>
                                @else
                                    <option value="{{ $city->id}}">{{ $city->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    @else
                        <select style="min-width: 200px; max-width: 200px" id="search_city" name="search_city" class="form-control">
                            <option value="">Ciudad</option>

                        </select>
                    @endif
                </div>
                <div class="form-group">
                    &nbsp;&nbsp;
                    @if(isset($palabrasClave))
                        <input type="text" id="search_keywordtopic" name="search_keywordtopic" class="form-control mx-sm-2"
                               placeholder="Clave, Tópico, Nombre, Palabra Clave..." style="min-width: 370px; max-width: 370px" value="{{ $palabrasClave }}">
                    @else
                        <input type="text" id="search_keywordtopic" name="search_keywordtopic" class="form-control mx-sm-2"
                               placeholder="Clave, Tópico, Nombre, Palabra Clave..." style="min-width: 370px; max-width: 370px">
                    @endif
                </div>
                <button type="submit" style="width: 120px;" class="btn btn-success">BUSCAR</button>
                <a style="font-size: 14px" data-toggle="collapse" data-parent="#accordion"
                   href="#advancedSearch">&nbsp;&nbsp;
                    <strong> Avanzada <i class="fa fa-search-plus margin-r-5"></i></strong>
                </a>
            </div>
            @if(isset($tipo) or isset($institucion)
                or $chkPresencial==1 or $chkSemipresencial==1 or $chkDistancia==1 or isset($carrera) or $advsearch_costo!="0,11000")
                <div id="advancedSearch" class="box-body panel-collapse">
            @else
                <div id="advancedSearch" class="box-body panel-collapse collapse">
            @endif
                <div class="form-group">
                    <select style="min-width: 200px; max-width: 200px" id="search_tipo" name="search_tipo" class="form-control">
                        <option value="">Tipo</option>
                        @if($tipo=='Masterado')
                            <option selected value="Masterado">Masterado</option>
                        @else
                            <option value="Masterado">Masterado</option>
                        @endif

                        @if($tipo=='Doctorado')
                            <option selected value="Doctorado">Doctorado</option>
                        @else
                            <option value="Doctorado">Doctorado</option>
                        @endif

                        @if($tipo=='PHD')
                            <option selected value="PHD">PHD</option>
                        @else
                            <option value="PHD">PHD</option>
                        @endif
                    </select>
                </div>&nbsp;&nbsp;
                <div style="border-left:1px solid whitesmoke;" class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        @if($chkPresencial==1)
                            <input type="checkbox" class="form-check-input" id="advsearch_chkPresencial" name="advsearch_chkPresencial"
                                   value="presencial" checked>
                            Presencial
                        @else
                            <input type="checkbox" class="form-check-input" id="advsearch_chkPresencial" name="advsearch_chkPresencial"
                                   value="presencial">
                            Presencial
                        @endif
                    </label>
                </div>&nbsp;&nbsp;
                <div class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        @if($chkSemipresencial==1)
                            <input type="checkbox" class="form-check-input" id="advsearch_chkSemipresencial" name="advsearch_chkSemipresencial"
                                   value="semipresencial" checked>
                            Semipresencial
                        @else
                            <input type="checkbox" class="form-check-input" id="advsearch_chkSemipresencial" name="advsearch_chkSemipresencial"
                                   value="semipresencial">
                            Semipresencial
                        @endif
                    </label>
                </div>&nbsp;&nbsp;
                <div class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        @if($chkDistancia==1)
                            <input type="checkbox" class="form-check-input" id="advsearch_chkDistancia" name="advsearch_chkDistancia"
                                   value="distancia" checked>
                            Distancia
                        @else
                            <input type="checkbox" class="form-check-input" id="advsearch_chkDistancia" name="advsearch_chkDistancia"
                                   value="distancia">
                            Online
                        @endif
                    </label>
                </div>
                <div style="border-left:1px solid whitesmoke;" class="form-group">
                    &nbsp;&nbsp;
                    {{--@if(isset($institucion))
                        <input type="text" id="search_institucion" name="search_institucion" class="form-control mx-sm-2"
                               placeholder="Institución..." style="min-width: 370px; max-width: 370px" value="{{ $institucion }}">
                    @else
                        <input type="text" id="search_institucion" name="search_institucion" class="form-control mx-sm-2"
                               placeholder="Institución..." style="min-width: 370px; max-width: 370px">
                    @endif--}}
                </div>&nbsp;&nbsp;
                <div style="border-left:1px solid whitesmoke;" class="form-group">
                    &nbsp;&nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;"  for="advsearch_costo">Costo: <b>$ 0</b></label>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    @if(!empty($advsearch_costo) and ($advsearch_costo!="0,11000"))
                        <input type="text" value="" class="slider form-control" id="advsearch_costo" name="advsearch_costo"
                               data-slider-min="0" data-slider-max="11000" data-slider-step="1000"
                               data-slider-value="[{{$advsearch_costo}}]" data-slider-orientation="horizontal"
                               data-slider-selection="before" data-slider-tooltip="show"
                               data-slider-id="blue_price_slider"/>&nbsp;<b style="font-size: 14px; color: ghostwhite;" >$ 11.000+</b>
                    @else
                        <input type="text" value="" class="slider form-control" id="advsearch_costo" name="advsearch_costo"
                               data-slider-min="0" data-slider-max="11000" data-slider-step="1000"
                               data-slider-value="[0,11000]" data-slider-orientation="horizontal"
                               data-slider-selection="before" data-slider-tooltip="show"
                               data-slider-id="blue_price_slider"/>&nbsp;<b style="font-size: 14px; color: ghostwhite;" >$ 11.000+</b>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>