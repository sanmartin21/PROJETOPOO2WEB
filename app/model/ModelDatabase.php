<?php

namespace App\Model;


class ModelDatabase { 
    
    //deixo publico os atributos, pra nao estourar erro no download do json
    public $nome; 
    public $url;
    public $porta;
    public $usuario;
    public $senha;
    public $sgbd;
   
    public $tabela;
    
    public function addTabela(\App\Model\ModelTabela $tabela){
        $this->tabela[] = $tabela;
        return $this;
    }        

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getUrl(){
        return $this->url;
    }
    public function setUrl($url){
        $this->url = $url;
        return $this;
    
    }
    public function getPorta(){
        return $this->porta;
    }
    public function setPorta($porta){
        $this->porta = $porta;
        return $this;
    }


    public function getUsuario(){
        return $this->usuario;
    }
    public function setUsuario($usuario){
        $this->usuario = $usuario;
        return $this;
    }


    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($senha){
        $this->senha = $senha;
        return $this;
    }
    

    
    public function getSgbd(){
        return $this->sgbd;
    }
    public function setSgbd($sgbd){
        $this->sgbd = $sgbd;
        return $this;
    }
    


    //o q fazer agora

   /* ajeita os 3 modelos 
        faz os get e sets
        arruma o __construct
    */


    public function downloadJson($json) {
        $filename = 'generated_json_' . date('Y-m-d H:i:s');

        // Force download .json file with JSON in it
        header("Content-type: application/vnd.ms-excel");
        header("Content-Type: application/force-download");
        header("Content-Type: application/download");
        header("Content-disposition: " . $filename . ".json");
        header("Content-disposition: filename=" . $filename . ".json");

        print $json;
        exit;
    }

}