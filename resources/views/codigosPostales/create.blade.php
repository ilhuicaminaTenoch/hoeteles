<form method="POST" v-on:submit.prevent="crearCodigoPostal">
    <div class="modal fade" id="create">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                    <h4>Nuevo codigo postal</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div v-bind:class="{'form-group': true, 'has-error': errors.has('id_estado')}">
                                <label class="control-label" for="id_estado">ID Estado</label>
                                <input type="text"
                                       name="id_estado"
                                       class="form-control"
                                       v-model="id_estado"
                                       v-validate="'required'">
                                <span class="help-block" v-if="errors.has('id_estado')">@{{errors.first('id_estado')}}</span>
                            </div>

                            <div v-bind:class="{'form-group': true, 'has-error': errors.has('estado')}">
                                <label class="control-label" for="estado">Estado</label>
                                <input type="text"
                                       name="estado"
                                       class="form-control"
                                       v-model="estado"
                                       v-validate="'required'">
                                <span class="help-block" v-if="errors.has('estado')">@{{errors.first('estado')}}</span>
                            </div>

                            <div v-bind:class="{'form-group': true, 'has-error': errors.has('id_municipio')}">
                                <label class="control-label" for="id_municipio">ID Municipio</label>
                                <input type="text"
                                       name="id_municipio"
                                       class="form-control"
                                       v-model="id_municipio"
                                       v-validate="'required'">
                                <span class="help-block" v-if="errors.has('id_municipio')">@{{errors.first('id_municipio')}}</span>
                            </div>




                        </div>
                        <div class="col-md-4">
                            <div v-bind:class="{'form-group': true, 'has-error': errors.has('municipio')}">
                                <label class="control-label" for="municipio">Municipio</label>
                                <input type="text"
                                       name="municipio"
                                       class="form-control"
                                       v-model="municipio"
                                       v-validate="'required'">
                                <span class="help-block" v-if="errors.has('municipio')">@{{errors.first('municipio')}}</span>
                            </div>

                            <div v-bind:class="{'form-group': true, 'has-error': errors.has('ciudad')}">
                                <label class="control-label" for="ciudad">Ciudad</label>
                                <input type="text"
                                       name="ciudad"
                                       class="form-control"
                                       v-model="ciudad"
                                       v-validate="'required'">
                                <span class="help-block" v-if="errors.has('ciudad')">@{{errors.first('ciudad')}}</span>
                            </div>

                            <div v-bind:class="{'form-group': true, 'has-error': errors.has('zona')}">
                                <label class="control-label" for="zona">Zona</label>
                                <input type="text"
                                       name="zona"
                                       class="form-control"
                                       v-model="zona"
                                       v-validate="'required'">
                                <span class="help-block" v-if="errors.has('zona')">@{{errors.first('zona')}}</span>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div v-bind:class="{'form-group': true, 'has-error': errors.has('codigo_postal')}">
                                <label class="control-label" for="codigo_postal">Codigo postal</label>
                                <input type="text"
                                       name="codigo_postal"
                                       class="form-control"
                                       v-model="codigo_postal"
                                       v-validate="'required'">
                                <span class="help-block" v-if="errors.has('codigo_postal')">@{{errors.first('codigo_postal')}}</span>
                            </div>

                            <div v-bind:class="{'form-group': true, 'has-error': errors.has('asentamiento')}">
                                <label class="control-label" for="asentamiento">Asentamiento</label>
                                <input type="text"
                                       name="asentamiento"
                                       class="form-control"
                                       v-model="asentamiento"
                                       v-validate="'required'">
                                <span class="help-block" v-if="errors.has('asentamiento')">@{{errors.first('asentamiento')}}</span>
                            </div>

                            <div v-bind:class="{'form-group': true, 'has-error': errors.has('tipo')}">
                                <label class="control-label" for="tipo">Tipo</label>
                                <input type="text"
                                       name="tipo"
                                       class="form-control"
                                       v-model="tipo"
                                       v-validate="'required'">
                                <span class="help-block" v-if="errors.has('tipo')">@{{errors.first('tipo')}}</span>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </div>
            </div>
        </div>
    </div>
</form>