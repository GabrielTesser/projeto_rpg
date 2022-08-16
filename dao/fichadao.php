<?php 

class fichaDAO
{

    private $conexao;

    function __construct() 
    {
        $dsn = "mysql:host=localhost:3307;dbname=db_rpg";

        $this->conexao = new PDO($dsn, 'root', 'etecjau');
    }

    public function insert(fichaModel $model)
    {
        $sql = "INSERT INTO ficha (nome, nome_jogador, raca, classe, forca, destreza, vigor, inteligencia, sabedoria, carisma) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->nome_jogador);
        $stmt->bindValue(3, $model->raca);
        $stmt->bindValue(4, $model->classe);
        $stmt->bindValue(5, $model->forca);
        $stmt->bindValue(6, $model->destreza);
        $stmt->bindValue(7, $model->vigor);
        $stmt->bindValue(8, $model->inteligencia);
        $stmt->bindValue(9, $model->sabedoria);
        $stmt->bindValue(10, $model->carisma);

        $stmt->execute();
    }

    public function update(fichaModel $model)
    {
        $sql = "UPDATE ficha SET nome=?, nome_jogador=?, raca=?, classe=?, forca=?, destreza=?, vigor=?, inteligencia=?, sabedoria=?, carisma=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->nome_jogador);
        $stmt->bindValue(3, $model->raca);
        $stmt->bindValue(4, $model->classe);
        $stmt->bindValue(5, $model->forca);
        $stmt->bindValue(6, $model->destreza);
        $stmt->bindValue(7, $model->vigor);
        $stmt->bindValue(8, $model->inteligencia);
        $stmt->bindValue(9, $model->sabedoria);
        $stmt->bindValue(10, $model->carisma);
        $stmt->bindValue(11, $model->id);

        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM ficha ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        include_once 'model/fichamodel.php';

        $sql = "SELECT * FROM ficha WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("fichaModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM ficha WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

}