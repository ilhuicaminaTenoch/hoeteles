<form method="POST" v-on:submit.prevent="updateRoomType(fillRoomType.type_room_id)">
    <div class="modal fade" id="editRoomType">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                    <h4>Editar Tipo de Habitación</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                                <label for="nombre" class="control-label">Tipo</label>
                                <input type="text" name="nombre" class="form-control"
                                       v-model="fillRoomType.type_name" data-rules="required">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="descripcion" class="control-label">Descripcion</label>
                                <textarea rows="3"
                                       name="descripcion"
                                       class="form-control"
                                       v-model="fillRoomType.type_description"
                                       data-rules="required">
                                </textarea>
                            </div>
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