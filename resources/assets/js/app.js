/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */


Vue.use(VeeValidate);
if ($('#codigoPostal').length > 0) {
    new Vue({
        el: '#codigoPostal',
        created: function () {
            this.getCodigosPostales();
        },
        data: {
            codigosPostales: [],
            fillCodigoPostal: {
                'id_codigo_postal': '',
                'id_estado': '',
                'estado': '',
                'id_municipio': '',
                'municipio': '',
                'ciudad': '',
                'zona': '',
                'codigo_postal': '',
                'asentamiento': '',
                'tipo': ''
            },
            pagination: {
                'total': 0,
                'current_page': 0,
                'per_page': 0,
                'last_page': 0,
                'from': 0,
                'to': 0
            },
            id_estado: '',
            estado: '',
            id_municipio: '',
            municipio: '',
            ciudad: '',
            zona: '',
            codigo_postal: '',
            asentamiento: '',
            tipo: '',
            compensacion: 3
        },
        computed: {
            isActived: function () {
                return this.pagination.current_page;
            },
            pagesNumber: function () {
                if (!this.pagination.to) {
                    return [];
                }
                var from = this.pagination.current_page - this.compensacion;
                if (from < 1) {
                    from = 1;
                }
                var to = from + (this.compensacion * 2);
                if (to >= this.pagination.last_page) {
                    to = this.pagination.last_page;
                }
                var pagesArray = [];
                while (from <= to) {
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;
            }

        },
        methods: {
            getCodigosPostales: function (page) {
                var urlCodigosPostales = 'codigo-postal?page=' + page;
                axios.get(urlCodigosPostales).then(response => {
                    this.codigosPostales = response.data.codigosPostales.data,
                    this.pagination = response.data.pagination;
            })
                ;
            },
            editaCodigosPostales: function (codigoPostal) {
                this.fillCodigoPostal.id_codigo_postal = codigoPostal.id_codigo_postal;
                this.fillCodigoPostal.id_estado = codigoPostal.id_estado;
                this.fillCodigoPostal.estado = codigoPostal.estado;
                this.fillCodigoPostal.id_municipio = codigoPostal.id_municipio;
                this.fillCodigoPostal.municipio = codigoPostal.municipio;
                this.fillCodigoPostal.ciudad = codigoPostal.ciudad;
                this.fillCodigoPostal.zona = codigoPostal.zona;
                this.fillCodigoPostal.codigo_postal = codigoPostal.codigo_postal;
                this.fillCodigoPostal.asentamiento = codigoPostal.asentamiento;
                this.fillCodigoPostal.tipo = codigoPostal.tipo;
                $('#edit').modal('show');

            },
            actualizarCodigoPostal: function (idCodigoPostal) {
                var url = 'codigo-postal/' + idCodigoPostal;
                axios.put(url, this.fillCodigoPostal).then(response => {
                    this.getCodigosPostales();
                this.fillCodigoPostal = {
                    'id_codigo_postal': '',
                    'id_estado': '',
                    'estado': '',
                    'id_municipio': '',
                    'municipio': '',
                    'ciudad': '',
                    'zona': '',
                    'codigo_postal': '',
                    'asentamiento': '',
                    'tipo': ''
                };
                $('#edit').modal('hide');
                toastr.success('Codigo postal actualizado con exito');
            })
                ;


            },
            eliminaCodigoPostal: function (codigoPostal) {
                var url = 'codigo-postal/' + codigoPostal.id_codigo_postal;
                axios.delete(url).then(response => {
                    this.getCodigosPostales();
                toastr.success('Eliminado Correctamente');
            })
                ;
            },
            crearCodigoPostal: function () {
                var url = 'codigo-postal';
                this.$validator.validateAll();
                if (!this.errors.any()) {
                    axios.post(url, {
                        id_estado: this.id_estado,
                        estado: this.estado,
                        id_municipio: this.id_municipio,
                        municipio: this.municipio,
                        ciudad: this.ciudad,
                        zona: this.zona,
                        codigo_postal: this.codigo_postal,
                        asentamiento: this.asentamiento,
                        tipo: this.tipo


                    }).then(response => {
                        this.getCodigosPostales();
                    this.id_estado = '';
                    this.estado = '';
                    this.id_municipio = '';
                    this.municipio = '';
                    this.ciudad = '';
                    this.zona = '';
                    this.codigo_postal = '';
                    this.asentamiento = '';
                    this.tipo = '';
                    $('#create').modal('hide');
                    toastr.success('Nuevo codigo postal creado con éxito');
                })
                    ;
                }
            },
            cambioDePagina: function (pagina) {
                this.pagination.current_page = pagina;
                this.getCodigosPostales(pagina);
            }
        }
    });
}

if ($('#tipoHabitaciones').length > 0)
Vue.use(VeeValidate);
{
    new Vue({
    el: '#tipoHabitaciones',
    created: function () {
        this.getRoomsType();
    },
        data: {
            roomstype: [],
            pagination : {
                'total': 0,
                'current_page': 0,
                'per_page': 0,
                'last_page': 0,
                'from': 0,
                'to': 0
            },
            compensacion: 3,
            nombre: '',
            descripcion: '',
            fillRoomType:{
                'type_room_id': '',
                'type_name': '',
                'type_description' : ''
            }
        },
        computed:{
            isActived:function () {
                return this.pagination.current_page;
            },
            pagesNumber:function () {
                if (!this.pagination.to){
                    return [];
                }
                var from = this.pagination.current_page - this.compensacion;
                if (from < 1){
                    from = 1;
                }
                var to = from +(this.compensacion * 2);
                if (to >= this.pagination.last_page){
                    to = this.pagination.last_page;
                }
                var pagesArray =[];
                while (from <= to){
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;
            }

        },
        methods: {
            getRoomsType: function (page)
            {
                var urlTypeRooms = 'roomstype?page='+page;
                axios.get(urlTypeRooms).then(response =>
                {
                    this.roomstype = response.data.roomstype.data,
                    this.pagination = response.data.pagination;
                });
            },
            cambioDePagina:function (pagina) {
                this.pagination.current_page = pagina;
                this.getRoomsType(pagina);
            },
            createRoomType: function () {
                var url = 'roomstype';
                this.$validator.validateAll();
                if (!this.errors.any()) {
                    axios.post(url, {
                        type_name: this.nombre,
                        type_description: this.descripcion,
                    }).then(response => {
                        this.getRoomsType();
                    this.nombre = '';
                    this.descripcion = '';
                    $('#createRoomType').modal('hide');
                    toastr.success('Nuevo Tipo de HabitaciÃ³n creado con Ã©xito');
                });
                }
            },
            editRoomType:function (roomtype) {
                this.fillRoomType.type_room_id = roomtype.type_room_id
                this.fillRoomType.type_name = roomtype.type_name;
                this.fillRoomType.type_description = roomtype.type_description;

                $('#editRoomType').modal('show');

            },
            updateRoomType:function (room_type_id) {
                var url = 'roomstype/'+room_type_id;
                axios.put(url, this.fillRoomType).then(response => {
                    this.getRoomsType();
                this.fillRoomType = {
                    'type_room_id': '',
                    'type_name': '',
                    'type_description' : ''
                };
                $('#editRoomType').modal('hide');
                toastr.success('Tipo de HabitaciÃ³n actualizado con exito');
            });
            },
            deleteRoomType: function (roomtype) {
                var url = 'roomstype/' + roomtype.type_room_id;
                axios.delete(url).then(response => {
                    this.getRoomsType();
                toastr.success('Eliminado Correctamente');
                console.log(response);
            });
            }
        }
    });
}