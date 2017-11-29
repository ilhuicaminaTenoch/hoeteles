const app = new Vue({
    el:'#smallBox',
    template: `
        <div class="small-box bg-purple">
            <div class="inner">
                <h3>263</h3>
                <p>Clientes</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./?view=clients" class="small-box-footer">Ver mas <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    `,
});