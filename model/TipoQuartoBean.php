<?php

    class TipoQuartoBean{
        private $id;
        private $nome;
        private $preco;

        //Metodos magicos para atribuir/buscar propriedades
        public function __construct() {}

        public function __set($name, $value) {
            $this->$name = $value;
        }

        public function __get($name) {
            return $this->$name;
        }

    }
