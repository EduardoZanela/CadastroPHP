<?php

    class QuartoBean{
        private $id;
        private $tipoQuarto;
        private $numero;
        private $andar;
        private $descricao;

        //Metodos magicos para atribuir/buscar propriedades
        public function __construct() {}

        public function __set($name, $value) {
            $this->$name = $value;
        }

        public function __get($name) {
            return $this->$name;
        }

    }
