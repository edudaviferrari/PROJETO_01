<div class="box-content w100">
    <h2><i class="fa-solid fa-house-flag"></i> Painel de Controle - <?php echo NOME_EMPRESA; ?></h2>
    <div class="box-metricas">
        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Usuários Online</h2>
                <p>10</p>
            </div>
        </div><!--box-metrica-single-->

        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Total de Visitas</h2>
                <p>10</p>
            </div>
        </div><!--box-metrica-single-->

        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Visitas Hoje</h2>
                <p>3</p>
            </div>
        </div><!--box-metrica-single-->
    </div><!--BOX-METRICAS-->
    <div class="clear"></div>
</div><!--box-content-->
<div class="clear"></div>
<div class="box-content w100">
    <h2><i class="fa-solid fa-user"></i> Usuários Online</h2>
    <div class="table-responsive">
        <div class="row">
            <div class="col">
                <span>IP</span>
            </div><!--coluna-->
            <div class="col">
                <span>Última Ação</span>
            </div><!--coluna-->
            <div class="clear"></div>
        </div><!--ROW-->
        <?php
            for($i = 0; $i < 1; $i++){
        ?>
        <div class="row">
            <div class="col">
                <span>192.168.254.65</span>
            </div><!--coluna-->
            <div class="col">
                <span>25/01/2023</span>
            </div><!--coluna-->
            <div class="clear"></div>
        </div><!--ROW-->
        <?php } ?>
    </div> <!--table-responsive-->
</div><!--box-content-->