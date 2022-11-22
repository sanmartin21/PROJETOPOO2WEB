<?php

require_once "model/ModelDatabase.php";
require_once "model/ModelTabela.php";
require_once "model/ModelColuna.php";

session_start();


$acao = isset($_POST['button']) ? $_POST['button'] : "";

if ($acao == "database") {
    getDadosDatabase();
    header('Location: TabelaForm.php');
} elseif ($acao == "onClickAdicionarTabela") {
    getDadosTabela();
    header('Location: TabelaForm.php');
} elseif ($acao == "visualizarJson") {
    getDadosTabela();
    header('Location: visualizarJson.php');
} elseif ($acao == "baixarJson") {
    getDadosTabela();
    downloadJson();
}


function getDadosDatabase() {
    $database = new \Model\ModelDatabase();
    $database->setNome($_POST["nome"]);
    $database->setUrl($_POST["url"]);
    $database->setPorta($_POST["porta"]);
    $database->setUsuario($_POST["usuario"]);
    $database->setSenha($_POST["senha"]);
    $database->setSgbd($_POST["sgbd"]);

    $_SESSION['database'] = $database;
}

function getDadosTabela() {
    $tabela = new \Model\ModelTabela();
    $tabela->nome = $_POST["nomeTabela"];

    for ($i = 0; $i < $_POST["countColunas"]; $i++) {
        $coluna = new \Model\ModelColuna();
        $coluna->nome = $_POST["nomeColuna" . $i];
        $coluna->tipo = $_POST["tipoColuna" . $i];
        $coluna->isPrimaryKey = ($_POST["primaryKeyColuna" . $i] ??= 0) == 'on' ? true : false;
        $coluna->isNotNull = ($_POST["notNullColuna" . $i] ??= 0)  == 'on' ? true : false;
        $coluna->isAutoIncrement = ($_POST["autoIncrementColuna" . $i] ??= 0) == 'on' ? true : false;

        $tabela->addColuna($coluna);
    }

    $_SESSION['database']->addTabela($tabela);

}



function downloadJson() {

    $json = json_encode($_SESSION['database']);

    $filename = 'generated_json_' . date('Y-m-d H:i:s');

    header("Content-type: application/vnd.ms-excel");
    header("Content-Type: application/force-download");
    header("Content-Type: application/download");
    header("Content-disposition: " . $filename . ".json");
    header("Content-disposition: filename=" . $filename . ".json");

    print $json;
    exit;
}
