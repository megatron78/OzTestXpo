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
                            <option value="{{ $province->id}}">{{ $province->name}}</option>
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
                    <label style="font-size: 14px; color: ghostwhite;" for="search_tipo">Tipo: &nbsp;</label>
                    <select style="max-width: 140px" id="search_tipo" name="search_tipo" class="form-control">
                        <option value="">...</option>
                        <option value="Universidad">Universidad</option>
                        <option value="Instituto">Instituto</option>
                        <option value="Academia">Academia</option>
                    </select>
                </div>
                <div class="form-group">
                    &nbsp;&nbsp;
                    <label style="font-size: 14px; color: ghostwhite;" for="search_institution" class="control-label">Nombre: &nbsp;</label>
                    <input type="text" id="search_institution" name="search_institution" class="form-control mx-sm-2"
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
                    &nbsp;&nbsp;<label style="font-size: 14px; color: ghostwhite;" for="search_carreras" class="control-label">Carrera: &nbsp;</label>
                      <input type="text" id="search_carreras" name="search_carreras" class="form-control mx-sm-2"
                               placeholder="Carrera..." style="width: 350px">
                </div>&nbsp;&nbsp;
            </div>
        </form>
    </div>
</div>