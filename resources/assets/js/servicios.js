if( $('#crudServicios').length > 0) {
    new Vue({
        el: '#crudServicios',
        created: function () {
            this.getServicios();
        },
        data: {
            servicios: [],
            llenado: {
                'service_id': '',
                'service_name': '',
                'service_description': ''
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
            txtServicio: '',
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
            getServicios: function (page) {
                var url = 'servicio?page=' + page;
                axios.get(url).then(response => {
                    this.servicios = response.data.servicios.data,
                    this.pagination = response.data.pagination;
            })
                ;
            },
            edita: function (servicio) {
                this.llenado.service_id = servicio.service_id
                this.llenado.service_name = servicio.service_name;
                this.llenado.service_description = servicio.service_description;

                $('#editServicio').modal('show');

            },
            actualiza: function (service_id) {
                var url = 'servicio/' + service_id;
                axios.put(url, this.llenado).then(response => {
                    this.getServicios();
                this.llenado = {
                    'service_id': '',
                    'service_name': '',
                    'service_description': ''
                };
                $('#editServicio').modal('hide');
                toastr.success('Servicio actualizado con exito');
            })
                ;


            },
            elimina: function (servicio) {
                var url = 'servicio/' + servicio.service_id;
                axios.delete(url).then(response => {
                    this.getServicios();
                toastr.success('Eliminado Correctamente');
            })
                ;
            },
            crear: function () {
                var url = 'servicio';
                this.$validator.validateAll();
                if (!this.errors.any()) {
                    axios.post(url, {
                        service_name: this.nombre,
                        service_description: this.descripcion,
                    }).then(response => {
                        this.getServicios();
                    this.nombre = '';
                    this.descripcion = '';
                    $('#createServicio').modal('hide');
                    toastr.success('Nuevo servicio creada con éxito');
                })
                    ;
                }
            },
            cambioDePagina: function (pagina) {
                this.pagination.current_page = pagina;
                this.getServicios(pagina);
            },
            buscaServicios: function () {
                var url = 'servicio/buscar';
                axios.post(url, {
                    txtServicio: this.txtServicio
                }).then(response => {
                    this.servicios = response.data.servicios.data,
                    this.pagination = response.data.pagination;


            })
                ;
            }
        }
    });
}