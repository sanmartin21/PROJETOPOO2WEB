<?php

namespace App\Controller;

use App\Model\ModelDatabase;
use App\Model\ModelTabela;
use App\Model\ModelColuna;

class ControllerDatabase
{

    public function gerarJSON()
    {
        $database = new ModelDatabase();
        $database->setNome($_POST["nome"]);
        $database->setUrl($_POST["url"]);
        $database->setPorta($_POST["porta"]);
        $database->setUsuario($_POST["usuario"]);
        $database->setSenha($_POST["senha"]);
        $database->setSgbd($_POST["sgbd"]);

        for ($j = 0; $j < $_POST["countTabelas"]; $j++) {
            $tabela = new ModelTabela();
            $tabela->nome = $_POST["nomeTabela" . $j];

            for ($i = 0; $i < $_POST["countColunas"]; $i++) {
                $coluna = new ModelColuna();
                $coluna->nome = $_POST["nomeColuna" . $i];
                $coluna->tipo = $_POST["tipoColuna" . $i];
                $coluna->isNotNull = ($_POST["notNullColuna" . $i] ??= 0)  == 'on' ? true : false;
                $coluna->isPrimaryKey = ($_POST["primaryKeyColuna" . $i] ??= 0) == 'on' ? true : false;
                $coluna->isAutoIncrement = ($_POST["autoIncrementColuna" . $i] ??= 0) == 'on' ? true : false;

                $tabela->addColuna($coluna);
            }
        }

        $database->addTabela($tabela);

        $json = json_encode($database);

        $database->downloadJson($json);
    }
}
