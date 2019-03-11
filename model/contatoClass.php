<?php
    /*
        Projeto: Exercicio de MVC em tela de contatos.
        Autor: Marcel Teixeira
        Data de criação: 11-03-2019 

        Conteúdo modificado:
        Data de modificação:
        Autor da modificação:

        Versão: 1.0

        Objetivo: Criar conexão com o Banco de Dados MySQL
        Alcançado? 
    
    
    */
class Contato{

    private $codigo;
    private $nome;
    private $email;
    private $telefone;
    private $celular;
    private $dt_nasc;
    private $sexo;
    private $obs;

    public function __construct(){

    }


    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

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

    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }


    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }


    public function getCelular()
    {
        return $this->celular;
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }


    public function getDt_nasc()
    {
        return $this->dt_nasc;
    }

    public function setDt_nasc($dt_nasc)
    {
        $this->dt_nasc = $dt_nasc;

        return $this;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }


    public function getObs()
    {
        return $this->obs;
    } 
    public function setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }
}

?>