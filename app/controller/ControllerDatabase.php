<?php

namespace App\Controller;

use App\Model\ModelDatabase;
use App\Model\ModelTabela;
use App\Model\ModelColuna;

class ControllerDatabase {

    public function teste(){

        $database = new ModelDatabase();
        $database->setNome('Database');
        $database->setUrl('myComputer/jvsanmartin/downloads');
        $database->setPorta(2131);
        $database->setUsuario('jvsanmartin');
        $database->setSenha(1213114);
        $database->setSgbd('MySql');


        $tabela = new ModelTabela();
        $tabela->nome = 'alunos';

        $campo = new ModelColuna();
        $campo->nome = 'testezinnnnn';
        $campo->tipo = 'int';
        $campo->isNotNull = true;
        $campo->isPrimaryKey = true;
        $campo->isAutoIncrement = true;

        $campo2 = new ModelColuna();
        $campo2->nome = 'teste2';
        $campo2->tipo = 'String';
        $campo2->isNotNull = false;
        $campo2->isPrimaryKey = false;
        $campo2->isAutoIncrement = false;


        $tabela->addColuna($campo);
        
        $tabela->addColuna($campo2);

        $database->addTabela($tabela);

        $json =  json_encode($database);

        $database->downloadJson($json); 

    }
}