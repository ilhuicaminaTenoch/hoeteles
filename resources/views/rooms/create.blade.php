<form method="POST" v-on:submit.prevent="createRoom">
    <div class="modal fade" id="createRoom">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                    <h4>Nueva Habitación</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div v-bind:class="{'form-group': true, 'has-error': errors.has('nombre')}">
                                <label class="control-label" for="nombre">Nombre</label>
                                <input type="text"
                                       name="room_name"
                                       class="form-control"
                                       v-model="room_name"
                                       v-validate="'required'">
                                <span class="help-block" v-if="errors.has('room_name')">@{{errors.first('room_name')}}</span>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div v-bind:class="{'form-group': true, 'has-error': errors.has('nombre')}">
                                <label class="control-label" for="nombre">Nombre Corto</label>
                                <input type="text"
                                       name="room_shortname"
                                       class="form-control"
                                       v-model="room_shortname"
                                       v-validate="'required'">
                                <span class="help-block" v-if="errors.has('room_shortname')">@{{errors.first('room_shortname')}}</span>
                            </div>
                        </div>

                        <div class="col-lg-12  col-md-12">
                            <div v-bind:class="{'form-group': true, 'has-error': errors.has('room_description')}">
                                <label class="control-label" for="estado">Descripción</label>
                                <textarea name="room_description"
                                       class="form-control"
                                          rows="3"
                                       v-model="room_description"
                                          v-validate="'required'">

                                </textarea>
                                <span class="help-block" v-if="errors.has('room_description')">@{{errors.first('room_description')}}</span>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div v-bind:class="{'form-group': true, 'has-error': errors.has('nombre')}">
                                <label class="control-label" for="nombre">Ocupación Base</label>
                                <input type="number" name="quantity"
   min="1" max="100" step="10" value="1" name="ocupation_base" class="form-control" v-model="ocupation_base"
                                       v-validate="'required'">
                                <span class="help-block" v-if="errors.has('ocupation_base')">@{{errors.first('ocupation_base')}}</span>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div v-bind:class="{'form-group': true, 'has-error': errors.has('nombre')}">
                                <label class="control-label" for="nombre">Tipo de Habitación</label>
                                <select v-model="selected_game">
                                <option v-for="game in games" value="game.value">{{game.text}}</option>
                              </select>
                                
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div v-bind:class="{'form-group': true, 'has-error': errors.has('nombre')}">
                                <label class="control-label" for="nombre">Ocupación Maxima</label>
                                <input type="number" name="quantity"
   min="1" max="100" step="10" value="1" name="ocupation_max" class="form-control" v-model="ocupation_max"
                                       v-validate="'required'">
                                <span class="help-block" v-if="errors.has('ocupation_max')">@{{errors.first('ocupation_max')}}</span>
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