<? 
namespace App\Model;

class ModelColuna{
    
    public $nome;
    public $tipo;
    public bool $isNotNull;


    /**
     * ManyToOne (muitos para 1) (muitas colunas para 1 tabela)
     */
    public $tabela;

    
}