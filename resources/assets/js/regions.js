if ( $('#crudRegiones').length > 0 ) {
    new Vue({
        el: '#crudRegiones',
        created: function () {
            this.getRegiones();
        },
        data: {
            regiones: [],
            aux: [],
            fillRegiones: {
                'region_id': '',
                'region_name': '',
                'region_description': ''
            },
            pagination: {
                'total': 0,
                'current_page': 0,
                'per_page': 0,
                'last_page': 0,
                'from': 0,
                'to': 0
            },
            nombre: '',
            descripcion: '',
            txtRegion: '',
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
            getRegiones: function (page) {
                var urlRegion = 'regions?page=' + page;
                axios.get(urlRegion).then(response => {
                    this.regiones = response.data.regiones.data,
                    this.pagination = response.data.pagination;
            })
                ;
            },
            editaRegiones: function (region) {
                this.fillRegiones.region_id = region.region_id
                this.fillRegiones.region_name = region.region_name;
                this.fillRegiones.region_description = region.region_description;

                $('#editRegion').modal('show');

            },
            actualizaRegiones: function (region_id) {
                var url = 'regions/' + region_id;
                axios.put(url, this.fillRegiones).then(response => {
                    this.getRegiones();
                this.fillRegiones = {
                    'region_id': '',
                    'region_name': '',
                    'region_description': ''
                };
                $('#editRegion').modal('hide');
                toastr.success('Region actualizado con exito');
            })
                ;
            },
            eliminaRegion: function (region) {
                var url = 'regions/' + region.region_id;
                axios.delete(url).then(response => {
                    this.getRegiones();
                toastr.success('Eliminado Correctamente');
                console.log(response);
            })
                ;
            },
            crearRegiones: function () {
                var url = 'regions';
                this.$validator.validateAll();
                if (!this.errors.any()) {
                    axios.post(url, {
                        region_name: this.nombre,
                        region_description: this.descripcion,
                    }).then(response => {
                        this.getRegiones();
                    this.nombre = '';
                    this.descripcion = '';
                    $('#createRegion').modal('hide');
                    toastr.success('Nuevo region creada con éxito');
                })
                    ;
                }
            },
            cambioDePagina: function (pagina) {
                this.pagination.current_page = pagina;
                this.getRegiones(pagina);
            },
            buscaRegiones: function () {
                var url = 'regions/buscar';
                axios.post(url, {
                    txtRegion: this.txtRegion
                }).then(response => {
                    this.regiones = response.data.regiones.data,
                    this.pagination = response.data.pagination;


                });
            }
        }
    });
}