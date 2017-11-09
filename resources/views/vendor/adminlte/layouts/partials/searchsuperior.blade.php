<div class="row">
    <div class="box box-info">
        <form style="background-color: #2C2D2D;" class="form-inline">
            <div class="box-body">
                {{--<span style="font-size: 18px;color: ghostwhite;" class="glyphicon glyphicon glyphicon-search"></span>
                &nbsp;&nbsp;&nbsp;--}}
                <div class="form-group">
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
                    <select style="min-width: 200px; max-width: 200px" id="search_tipo" name="search_tipo" class="form-control">
                        <option value="">Tipo</option>
                        @if($tipo=='Universidad')
                            <option selected value="Universidad">Universidad</option>
                        @else
                            <option value="Universidad">Universidad</option>
                        @endif

                        @if($tipo=='Instituto')
                            <option selected value="Instituto">Instituto</option>
                        @else
                            <option value="Instituto">Instituto</option>
                        @endif

                        @if($tipo=='Academia')
                            <option selected value="Academia">Academia</option>
                        @else
                            <option value="Academia">Academia</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    &nbsp;&nbsp;
                    @if(isset($palabrasClave))
                        <input type="text" id="search_institution" name="search_institution" class="form-control mx-sm-2"
                               placeholder="Nombre o palabra clave..." style="min-width: 370px; max-width: 370px" value="{{ $palabrasClave }}">
                    @else
                        <input type="text" id="search_institution" name="search_institution" class="form-control mx-sm-2"
                               placeholder="Nombre o palabra clave..." style="min-width: 370px; max-width: 370px">
                    @endif
                </div>
                <button type="submit" style="width: 120px;" class="btn btn-success">BUSCAR</button>
                <a style="font-size: 14px" data-toggle="collapse" data-parent="#accordion"
                   href="#advancedSearch">&nbsp;&nbsp;
                    <strong> Avanzada <i class="fa fa-search-plus margin-r-5"></i></strong>
                </a>
            </div>
            @if($chkFiscal==1 or $chkFiscomisional==1 or $chkParticular==1
            or $chkPresencial==1 or $chkSemipresencial==1 or $chkDistancia==1 or isset($carrera))
                <div id="advancedSearch" class="box-body panel-collapse">
            @else
                <div id="advancedSearch" class="box-body panel-collapse collapse">
            @endif
                <div class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        @if($chkFiscal==1)
                            <input type="checkbox" class="form-check-input" id="advsearch_chkFiscal" name="advsearch_chkFiscal"
                                   value="public" checked>
                            Fiscal
                        @else
                            <input type="checkbox" class="form-check-input" id="advsearch_chkFiscal" name="advsearch_chkFiscal"
                                   value="public">
                            Fiscal
                        @endif
                    </label>
                </div>&nbsp;&nbsp;
                <div class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        @if($chkFiscomisional==1)
                            <input type="checkbox" class="form-check-input" id="advsearch_chkFiscomisional" name="advsearch_chkFiscomisional"
                                   value="public_private" checked>
                            Fiscomisional
                        @else
                            <input type="checkbox" class="form-check-input" id="advsearch_chkFiscomisional" name="advsearch_chkFiscomisional"
                                   value="public_private">
                            Fiscomisional
                        @endif
                    </label>
                </div>&nbsp;&nbsp;
                <div class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        @if($chkParticular==0)
                            <input type="checkbox" class="form-check-input" id="advsearch_chkParticular" name="advsearch_chkParticular"
                                   value="private">
                            Particular
                        @else
                            <input type="checkbox" class="form-check-input" id="advsearch_chkParticular" name="advsearch_chkParticular"
                                   value="private" checked>
                            Particular
                        @endif
                    </label>
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
                            Distancia
                        @endif
                    </label>
                </div>
                <div style="border-left:1px solid whitesmoke;" class="form-group">
                    &nbsp;&nbsp;
                    @if(isset($carrera))
                        <input type="text" id="search_carreras" name="search_carreras" class="form-control mx-sm-2"
                               placeholder="Carrera..." style="min-width: 400px; max-width: 400px" value="{{ $carrera }}">
                    @else
                        <input type="text" id="search_carreras" name="search_carreras" class="form-control mx-sm-2"
                               placeholder="Carrera..." style="min-width: 400px; max-width: 400px">
                    @endif
                </div>&nbsp;&nbsp;
            </div>
        </form>
    </div>
</div>