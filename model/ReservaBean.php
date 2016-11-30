<?php

    class ReservaBean{
        private $id;
        private $quarto;
        private $pessoa;
        private $periodoInicio;
        private $periodoFim;

        //Metodos magicos para atribuir/buscar propriedades
        public function __construct() {}

        public function __set($name, $value) {
            $this->$name = $value;
        }

        public function __get($name) {
            return $this->$name;
        }

    }
