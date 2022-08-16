<?php 

class fichaModel
{
    public $id, $nome, $nome_jogador, $raca, $classe, $forca, $destreza, $vigor, $inteligencia, $sabedoria, $carisma;

    public $rows;

    public function save()
    {
        include 'dao/fichadao.php';

        $dao = new fichaDAO();

        if (empty($this->id)) {

            $dao->insert($this);
        }else {

            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        include 'dao/fichadao.php';

        $dao = new fichaDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'dao/fichadao.php';

        $dao = new fichaDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new fichaDAO();
    }

    public function delete(int $id)
    {
        include 'dao/fichadao.php';

        $dao = new fichaDAO();

        $dao->delete($id);
    }

}