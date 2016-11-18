<?php

    class PessoasBean{
        private $id;
        private $nome;
        private $email;
        private $telefone;
        private $dataNascimento;
        private $sexo;
        private $cpf;
        private $rua;
        private $numero;
        private $bairro;
        private $complemento;
        private $cidade;
        private $estado;
        private $pais;

        //Metodos magicos para atribuir/buscar propriedades
        public function __construct() {}

        public function __set($name, $value) {
            $this->$name = $value;
        }

        public function __get($name) {
            return $this->$name;
        }
    }