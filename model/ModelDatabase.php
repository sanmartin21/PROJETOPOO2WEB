<?php

namespace Model;

class ModelDatabase
{
    public $nome;
    public $url;
    public $porta;
    public $usuario;
    public $senha;
    public $sgbd;

    public $tabela;

    public function addTabela(\Model\ModelTabela $tabela)
    {
        $this->tabela[] = $tabela;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getUrl()
    {
        return $this->url;
    }
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
    public function getPorta()
    {
        return $this->porta;
    }
    public function setPorta($porta)
    {
        $this->porta = $porta;
        return $this;
    }


    public function getUsuario()
    {
        return $this->usuario;
    }
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }


    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
        return $this;
    }


    public function getSgbd()
    {
        return $this->sgbd;
    }
    public function setSgbd($sgbd)
    {
        $this->sgbd = $sgbd;
        return $this;
    }

}
