<template>
    <div class="small-box bg-purple">
        <div class="inner">
            <h3>{{ datosTemporales.total }}</h3>

            <p>{{ datosTemporales.titulo }}</p>
        </div>
        <div class="icon">
            <i class="ion"></i>
        </div>
        <a href="#" class="small-box-footer">Ver mas <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                datosTemporales:{
                    total:154,
                    titulo: 'Productos',
                    imagen: 'ion-bag'
                }
            }
        }
    }
</script>