<br>
<div class="row">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-6">
                    <h3 class="panel-title">Cervejas</h3>
                </div>
                <div class="col-xs-6 text-right">
                    <a href="<?= Host::getHost() ?>cerveja/cadastrar" class="btn btn-sm btn-default">Cadastrar</a>
                </div>
            </div>
        </div>
        <div class="panel-body table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Teor Alcóolico</th>
                    <th>Temperatura Ideal</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($this->view->cervejas as $cerveja): ?>
                <tr>
                    <td><?= $cerveja->getNome() ?></td>
                    <td><?= $cerveja->getTeorAlcoolico() ?></td>
                    <td><?= $cerveja->getTemperaturaIdeal() ?></td>
                    <td>
                        <a href=""></a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>