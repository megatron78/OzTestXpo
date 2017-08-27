<div class="row">
    <div class="box box-info">
        <form style="background-color: #2C2D2D;" class="form-inline">
            <div class="box-body">
                {{--<span style="font-size: 18px;color: ghostwhite;" class="glyphicon glyphicon glyphicon-search"></span>
                &nbsp;&nbsp;&nbsp;--}}
                <div class="form-group">
                    <label style="font-size: 14px; color: ghostwhite;" for="search_province">Provincia: &nbsp;</label>
                    <select style="max-width: 120px" name="search_province" id="search_province" class="form-control">
                        <option value="">...</option>
                        @foreach($provinces as $province)
                            <option value="{{ $province->code}}">{{ $province->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    &nbsp;&nbsp;
                    <label style="font-size: 14px; color: ghostwhite;" for="search_city">Ciudad: &nbsp;</label>
                    <select style="max-width: 120px" id="search_city" name="search_city" class="form-control">
                        <option value="">...</option>

                    </select>
                </div>
                <div class="form-group">
                    &nbsp;&nbsp;
                    <label style="font-size: 14px; color: ghostwhite;" for="search_sector">Sector: &nbsp;</label>
                    <select style="max-width: 140px" id="search_sector" class="form-control">
                        <option value="">...</option>

                    </select>
                </div>
                <div class="form-group">
                    &nbsp;&nbsp;
                    <label style="font-size: 14px; color: ghostwhite;" for="search_institution" class="control-label">Nombre: &nbsp;</label>
                    <input type="text" id="search_institution" class="form-control mx-sm-2"
                           placeholder="Nombre o palabra clave..." style="width: 350px">
                </div>
                <button type="submit" style="width: 120px;" class="btn btn-warning">BUSCAR</button>
                <a style="font-size: 14px" data-toggle="collapse" data-parent="#accordion"
                   href="#advancedSearch">&nbsp;&nbsp;
                    <strong> Avanzada <i class="fa fa-search-plus margin-r-5"></i></strong>
                </a>
            </div>
            <div id="advancedSearch" class="box-body panel-collapse collapse">
                <div class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="advsearch_chkFiscal"
                               value="public">
                        Fiscal
                    </label>
                </div>&nbsp;&nbsp;
                <div class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="advsearch_chkFiscomisional"
                               value="public_private">
                        Fiscomisional
                    </label>
                </div>&nbsp;&nbsp;
                <div class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="advsearch_chkParticular"
                               value="private" checked>
                        Particular
                    </label>
                </div>&nbsp;&nbsp;
                <div style="border-left:1px solid whitesmoke;" class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="advsearch_chkLaico"
                               value="laic">
                        Laico
                    </label>
                </div>&nbsp;&nbsp;
                <div class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="advsearch_chkReligious"
                               value="religious">
                        Religioso
                    </label>
                </div>&nbsp;&nbsp;
                <div style="border-left:1px solid whitesmoke;" class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="advsearch_chkFemale"
                               value="all_female">
                        Mujeres
                    </label>
                </div>&nbsp;&nbsp;
                <div class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="advsearch_chkMaleFemale"
                               value="male_female" checked>
                        Mixto
                    </label>
                </div>&nbsp;&nbsp;
                <div class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="advsearch_chkMale"
                               value="all_male">
                        Hombres
                    </label>
                </div>&nbsp;&nbsp;
                <div style="border-left:1px solid whitesmoke;" class="form-group">
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="advsearch_chkExtended"
                               value="extended_schedule">
                        Horario Extendido
                    </label>
                </div>&nbsp;&nbsp;
                <div style="border-left:1px solid whitesmoke;" class="form-group">
                    &nbsp;&nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;"  for="advsearch_costo">Pensión: <b>$ 0</b></label>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" value="" class="slider form-control"
                           data-slider-min="0" data-slider-max="500" data-slider-step="50"
                           data-slider-value="[0,500]" data-slider-orientation="horizontal"
                           data-slider-selection="before" data-slider-tooltip="show"
                           data-slider-id="blue_price_slider"/>&nbsp;<b style="font-size: 14px; color: ghostwhite;" >$ 500+</b>
                </div>
            </div>
        </form>
    </div>
</div>