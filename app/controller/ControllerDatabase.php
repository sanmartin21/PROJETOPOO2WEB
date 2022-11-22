<?php

namespace App\Controller;

use App\Model\ModelDatabase;
use App\Model\ModelTabela;
use App\Model\ModelColuna;

class ControllerDatabase {

    public function gerarJSON()
    {
        $database = new ModelDatabase();
        $database->setNome($_POST["nome"]);
        $database->setUrl($_POST["url"]);
        $database->setPorta($_POST["porta"]);
        $database->setUsuario($_POST["usuario"]);
        $database->setSenha($_POST["senha"]);
        $database->setSgbd($_POST["sgbd"]);

        for ($i = 0; $i < $_POST["countTabelas"]; $i++) {
            $tabela = new ModelTabela();
            $tabela->nome = $_POST["nomeTabela" . $i];

            for ($j = 0; $j < $_POST["countColunas"]; $j++) {
                $coluna = new ModelColuna();
                $coluna->nome = $_POST["nomeColuna" . $j];
                $coluna->tipo = $_POST["tipoColuna" . $j];
                $coluna->isNotNull = ($_POST["notNullColuna" . $j] ??= 0)  == 'on' ? true : false;
                $coluna->isPrimaryKey = ($_POST["primaryKeyColuna" . $j] ??= 0) == 'on' ? true : false;
                $coluna->isAutoIncrement = ($_POST["autoIncrementColuna".$j] ??= 0) == 'on' ? true : false;

                $tabela->addColuna($coluna);
            }
            $database->addTabela($tabela);
        }

        $json = json_encode($database);

        $database->downloadJson($json);
    }
}
