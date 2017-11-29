<form method="POST" v-on:submit.prevent="actualizarCodigoPostal(fillCodigoPostal.id_codigo_postal)">
    <div class="modal fade" id="edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                    <h4>Editar codigo postal</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">

                                <label for="id_estado" class="control-label">ID Estado</label>
                                <input type="text" name="id_estado" class="form-control"
                                       v-model="fillCodigoPostal.id_estado" data-rules="required">

                                <label for="estado">Estado</label>
                                <input type="text" name="estado" class="form-control" v-model="fillCodigoPostal.estado">

                                <label for="id_municipio">ID municipio</label>
                                <input type="text" name="id_municipio" class="form-control"
                                       v-model="fillCodigoPostal.id_municipio">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="municipio">Municipio</label>
                            <input type="text" name="municipio" class="form-control"
                                   v-model="fillCodigoPostal.municipio">


                            <label for="ciudad">Ciudad</label>
                            <input type="text" name="ciudad" class="form-control" v-model="fillCodigoPostal.ciudad">


                            <label for="zona">Zona</label>
                            <input type="text" name="zona" class="form-control" v-model="fillCodigoPostal.zona">

                        </div>
                        <div class="col-md-4">
                            <label for="codigo_postal">Codigo postal</label>
                            <input type="text" name="codigo_postal" class="form-control"
                                   v-model="fillCodigoPostal.codigo_postal">


                            <label for="asentamiento">Asentamiento</label>
                            <input type="text" name="asentamiento" class="form-control"
                                   v-model="fillCodigoPostal.asentamiento">


                            <label for="tipo">Tipo</label>
                            <input type="text" name="tipo" class="form-control" v-model="fillCodigoPostal.tipo">

                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </div>
        </div>
    </div>
</form>