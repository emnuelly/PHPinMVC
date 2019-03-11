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
    class ConexaoMySql{
        //atributos
        private $server;
        private $user;
        private $password;
        private $database;

        public function __construct(){
            //manipular o atributo da propria classe
            $this->server = "localhost";
            $this->user = "root";
            $this->password = "bcd127";
            $this->database = "dbcontatos";
        }

        //abre a conexao do DB
        public function connectDatabase(){
           try{
                //padrão de como passar a conexão
                $conexao = new PDO('mysql:host='.$this->server.';dbname='.$this->database, $this->user, $this->password);
                return $conexao; //retornando a conexão
           }catch(PDOException $erro){
               //mensagem padronizada que diz a linha e qual a msg que o PDO traz
               echo("erro ao tentar fazer a conexãããão com o DB! <br>
                    Linha:".$erro->getLine())."<br>
                    Mensagem".$erro->getMessage()
           };

        }

        //fecha a conexao com DB
        public function closeDatabase(){
            $conexao =  null; // zerou
            unset ($conexao); //destrói a variavel ou objeto
        }
    }
?>