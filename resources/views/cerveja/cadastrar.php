<br>
<div class="row">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-6">
                    <h3 class="panel-title">Cadastrar Cerveja</h3>
                </div>
                <div class="col-xs-6 text-right">
                    <a href="<?= Host::getHost() ?>cerveja/cadastrar" class="btn btn-sm btn-default">Cadastrar</a>
                </div>
            </div>
        </div>
        <div class="row">
            <br>
            <form class="form-horizontal" action="<?= Host::getHost() ?>cerveja/salvar" method="POST">
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="nome">Nome da Cerveja</label>
                        <div class="col-md-4">
                            <input id="nome" name="nome" placeholder="Ex.: Budweiser" class="form-control input-md" type="text">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="temperatura">Temperatura Ideal</label>
                        <div class="col-md-4">
                            <input id="temperatura" name="temperatura" placeholder="0-4 Cº" class="form-control input-md" type="text">

                        </div>
                    </div>

                    <!-- Appended Input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="teorAlcoolico">Teor Alcóolico</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input id="teorAlcoolico" name="teorAlcoolico" class="form-control" placeholder="4,5" type="text">
                                <span class="input-group-addon">%</span>
                            </div>

                        </div>
                    </div>
                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit"></label>
                        <div class="col-md-4">
                            <button id="submit" name="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>
