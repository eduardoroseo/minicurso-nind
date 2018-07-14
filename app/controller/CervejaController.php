<?php
/**
 * Created by PhpStorm.
 * User: eduar
 * Date: 13/07/2018
 * Time: 22:58
 */

class CervejaController extends View
{
    public function actionListar()
    {
        $cervejaDao = new CervejaDao();
        $this->view->cervejas = $cervejaDao->listar();

        $this->render('cerveja/listar');
    }

    public function actionCadastrar()
    {
        $this->render('cerveja/cadastrar');
    }

    public function actionSalvar()
    {
        $cerveja = new CervejaModel();
        $cerveja->setNome($_POST['nome']);
        $cerveja->setTemperaturaIdeal($_POST['temperatura']);
        $cerveja->setTeorAlcoolico($_POST['teorAlcoolico']);

        (new CervejaDao)->inserir($cerveja);

        $this->redirect('cerveja/listar');
    }

    public function actionSalvarEdicao()
    {
        $cerveja = new CervejaModel();
        $cerveja->setId($_POST['id']);
        $cerveja->setNome($_POST['nome']);
        $cerveja->setTemperaturaIdeal($_POST['temperatura']);
        $cerveja->setTeorAlcoolico($_POST['teorAlcoolico']);

        (new CervejaDao)->editar($cerveja);

        $this->redirect('cerveja/listar');
    }

    public function actionEditar()
    {
        $id = $_GET['id'];

        $this->view->cerveja = (new CervejaDao)->buscar($id);

        $this->render('cerveja/editar');
    }

    public function actionExcluir()
    {
        $id = $_GET['id'];

        (new CervejaDao)->excluir($id);

        $this->redirect('cerveja/listar');
    }
}