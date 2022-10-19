<?php 
 
namespace App\Model;

class ModelTabela {
    
    public $nome;

    /**
     * OneToMany (1 para muitos) Tabela
     */
    public $coluna;

    public function __construct()
    {
        $this->coluna = array(); //array de colunas 
    }

    //set co
    public function addColuna(\App\Model\ModelColuna $coluna)
    {
        $this->coluna[] = $coluna;
        return $this;
    }


}