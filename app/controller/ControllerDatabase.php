<?php

namespace App\Controller;

use App\Model\ModelDatabase;
use App\Model\ModelTabela;
use App\Model\ModelColuna;

class ControllerDatabase {

    public function teste(){

        $database = new ModelDatabase();
        $database->setNome('nomeDatabase');
        $database->setUrl('myComputer/jvsanmartin/downloads');
        $database->setUsuario('nomeDatabase');

        $tabela = new ModelTabela();
        $tabela->nome = 'alunos';

        $campo = new ModelColuna();
        $campo->nome = 'teste';
        $campo->tipo = 'int';
        $campo->isNotNull = true;

        $tabela->addColuna($campo);

        $database->addTabela($tabela);

        $json =  json_encode($database);

        $database->downloadJson($json); 

    }
}