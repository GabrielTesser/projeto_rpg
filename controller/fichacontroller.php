<?php

class fichaController
{

    public static function index()
    {
        include 'model/fichamodel.php';

        $model = new fichaModel();
        $model->getAllRows();

        include 'view/ficha/fichalista.php';
        
    }

    public static function form()
    {
        include 'model/fichamodel.php';

        $model= new fichaModel();

        if(isset($_GET['id'])) {
            $model = $model->getById( (int) $_GET['id']);
        }

        include 'view/ficha/fichaform.php';
    }

    public static function save()
    {
        include 'model/fichamodel.php';

        $model = new fichaModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->nome_jogador = $_POST['nome_jogador'];
        $model->raca = $_POST['raca'];
        $model->classe = $_POST['classe'];
        $model->forca = $_POST['forca'];
        $model->destreza = $_POST['destreza'];
        $model->vigor = $_POST['vigor'];
        $model->inteligencia = $_POST['inteligencia'];
        $model->sabedoria = $_POST['sabedoria'];
        $model->carisma = $_POST['carisma'];

        $model->save();

        header("Location: /ficha");
    }

    public static function delete()
    {
        include 'model/fichamodel.php';

        $model = new fichaModel();

        $model->delete( (int) $_GET['id']);

        header("Location: /ficha");
    }

}