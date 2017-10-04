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
                            <option value="{{ $province->id}}" @if(old('search_province')===17)
                                selected="selected" @endif>{{ $province->name}}</option>
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
                    <select style="min-width: 200px; max-width: 200px" id="search_sector" name="search_sector" class="form-control">
                        <option value="">Sector</option>

                    </select>
                </div>
                <div class="form-group">
                    &nbsp;&nbsp;
                    <input type="text" id="search_institution" name="search_institution" class="form-control mx-sm-2"
                           placeholder="Nombre o palabra clave..." style="min-width: 370px; max-width: 370px">
                </div>
                <button type="submit" style="width: 120px;" class="btn btn-warning">BUSCAR</button>
                <a style="font-size: 14px" data-toggle="collapse" data-parent="#accordion"
                   href="#advancedSearch">&nbsp;&nbsp;
                    <strong> Avanzada <i class="fa fa-search-plus margin-r-5"></i></strong>
                </a>

                @if( Route::currentRouteName() == 'preescolar.all')
                    <button type="button" data-path="{{ route('compare.preescolar') }}"
                @else
                    <button type="button" data-path="{{ route('compare.escuelacolegio') }}"
                @endif
                        class="btn btn-warning load-ajax-modal"
                        role="button"
                        data-toggle="modal" data-target="#compareTableModal">
                    Comparar
                </button>
            </div>
            <div id="advancedSearch" class="box-body panel-collapse collapse">
                <div class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="advsearch_chkFiscal" name="advsearch_chkFiscal"
                               value="public">
                        Fiscal
                    </label>
                </div>&nbsp;&nbsp;
                <div class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="advsearch_chkFiscomisional" name="advsearch_chkFiscomisional"
                               value="public_private">
                        Fiscomisional
                    </label>
                </div>&nbsp;&nbsp;
                <div class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="advsearch_chkParticular" name="advsearch_chkParticular"
                               value="private" checked>
                        Particular
                    </label>
                </div>&nbsp;&nbsp;
                <div style="border-left:1px solid whitesmoke;" class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="advsearch_chkLaico" name="advsearch_chkLaico"
                               value="laic">
                        Laico
                    </label>
                </div>&nbsp;&nbsp;
                <div class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="advsearch_chkReligioso" name="advsearch_chkReligioso"
                               value="religious">
                        Religioso
                    </label>
                </div>&nbsp;&nbsp;
                <div style="border-left:1px solid whitesmoke;" class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="advsearch_chkMujeres" name="advsearch_chkMujeres"
                               value="all_female">
                        Mujeres
                    </label>
                </div>&nbsp;&nbsp;
                <div class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="advsearch_chkMixto" name="advsearch_chkMixto"
                               value="male_female" checked>
                        Mixto
                    </label>
                </div>&nbsp;&nbsp;
                <div class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="advsearch_chkHombres" name="advsearch_chkHombres"
                               value="all_male">
                        Hombres
                    </label>
                </div>&nbsp;&nbsp;
                <div style="border-left:1px solid whitesmoke;" class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="advsearch_chkExtendido" name="advsearch_chkExtendido"
                               value="extended_schedule">
                        Horario Extendido
                    </label>
                </div>&nbsp;&nbsp;
                <div style="border-left:1px solid whitesmoke;" class="form-group">
                    &nbsp;&nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;"  for="advsearch_costo">Pensión Promedio: <b>$ 0</b></label>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" value="" class="slider form-control" id="advsearch_costo" name="advsearch_costo"
                           data-slider-min="0" data-slider-max="500" data-slider-step="50"
                           data-slider-value="[0,500]" data-slider-orientation="horizontal"
                           data-slider-selection="before" data-slider-tooltip="show"
                           data-slider-id="blue_price_slider"/>&nbsp;<b style="font-size: 14px; color: ghostwhite;" >$ 500+</b>
                </div>
            </div>
        </form>
    </div>
</div>