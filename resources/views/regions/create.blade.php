<form method="POST" v-on:submit.prevent="crearRegiones">
    <div class="modal fade" id="createRegion">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                    <h4>Nueva region</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div v-bind:class="{'form-group': true, 'has-error': errors.has('nombre')}">
                                <label class="control-label" for="nombre">Nombre</label>
                                <input type="text"
                                       name="nombre"
                                       class="form-control"
                                       v-model="nombre"
                                       v-validate="'required'">
                                <span class="help-block" v-if="errors.has('nombre')">@{{errors.first('nombre')}}</span>
                            </div>
                        </div>
                        <div class="col-lg-12  col-md-12">
                            <div v-bind:class="{'form-group': true, 'has-error': errors.has('descripcion')}">
                                <label class="control-label" for="estado">Descripcion</label>
                                <textarea name="descripcion"
                                       class="form-control"
                                          rows="3"
                                       v-model="descripcion"
                                          v-validate="'required'">

                                </textarea>
                                <span class="help-block" v-if="errors.has('descripcion')">@{{errors.first('descripcion')}}</span>
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